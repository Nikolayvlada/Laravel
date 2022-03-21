<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;
use App\Models\Address_Books;
use App\Models\Shipment_Order;
use App\Models\Shipment_Info;
use App\Models\Shipment_Pkg;
use App\Models\User;
use Auth;
use Session;
use DB;

use Maatwebsite\Excel\Facades\Excel;
use App\Exports\ShipmentExport;

class ShipMentController extends Controller
{
    // var $address_lists = ['sender'=>'0','receiver'=>"0"];
    
    // public function __construct() {
    //     $this->address_lists['sender'] = 0;
    //     $this->address_lists['receiver'] = 0;
    // }

    public function index(Request $request) {
        $user_id = Auth::user()->id;
        $user_role = Auth::user()->role; 

        $total_rows = Shipment_Order::where('uid', $user_id)->count();
        $results = Shipment_Order::where('uid', $user_id)->offset(0)->limit(10)->orderBy('updated_at', 'desc')->get();
        if ($user_role == 2) {
            $total_rows = Shipment_Order::all()->count();
            $results = Shipment_Order::offset(0)->limit(10)->orderBy('updated_at', 'desc')->get();
            // dd($results);
        }
        $total_page = ceil($total_rows/10);

        return view('index', ['results'=>$results, 'total_page'=>$total_page, 'cur_page'=>1, 'total_rows'=>$total_rows]);
    }

    public function fileExport(Request $request) 
    {
        $user_id = Auth::user()->id;
        $user_role = Auth::user()->role; 

        $ids=$request->input('ids');

        if($ids=="0"){
            $shipments = Shipment_Order::where('uid', $user_id)->get();
            if ($user_role == 2) {
                $shipments = Shipment_Order::all()->get();
            }
        } else{
            $ids=explode(',',$ids);

            $shipments=[];
            foreach($ids as $id){
                // $shipment=Shipment_Order::where('uid', $user_id)->where('id',$id)->get();
                $shipment=Shipment_Order::find($id)->get();
                $shipments[]=$shipment;
            }
        }
        $date = date("Y-m-d H:i:s");
        $file_name="shipments_".$date.".xlsx";

        return Excel::download(new ShipmentExport($shipments), $file_name);
    }    

    public function paginate(Request $request) {
        $user_id = Auth::user()->id;
        $user_role = Auth::user()->role;
        $page_num = $request->input('page_num');

        $total_rows = Shipment_Order::where('uid', $user_id)->count();
        $results = Shipment_Order::where('uid', $user_id)->offset(($page_num-1)*10)->limit(10)->orderBy('updated_at', 'desc')->get();
        if ($user_role == 2) {
            $total_rows = Shipment_Order::all()->count();
            $results = Shipment_Order::offset(($page_num-1)*10)->limit(10)->orderBy('updated_at', 'desc')->get();

        }
        $total_page = ceil($total_rows/10);
        

        return view('index', ['results'=>$results, 'total_page'=>$total_page, 'cur_page'=>$page_num, 'total_rows'=>$total_rows]);
    }
 
    public function create(Request $request) {
        $user_group = User::where('role', '!=', 2)->get();
        $request->session('sender')->forget(['sender','receiver']);

        $countries = Country::all();
        return view('create', array('countries'=>$countries, 'user_group'=>$user_group));
    }

    public function createWithAddress($id) {
        $user_group = User::where('role', '!=', 2)->get();
        $type = Address_Books::find($id)->type;
    
        if($type == '0')
            session(['sender'=>$id]);
        else
            session(['receiver'=>$id]);

        $sender = Address_Books::find(session('sender'));
        $receiver = Address_Books::find(session('receiver'));

        $countries = Country::all();
        return view('create_with_address', array('countries'=>$countries, 'sender'=>$sender, 'receiver'=>$receiver, 'user_group'=>$user_group));
    }

    public function editWithAddress(Request $request, $address_id, $uid) {
        $user_group = User::where('role', '!=', 2)->get();
        $type = Address_Books::find($address_id)->type;
    
        if($type == '0')
            session(['sender'=>$address_id]);
        else
            session(['receiver'=>$address_id]);

        $sender = Address_Books::find(session('sender'));
        $receiver = Address_Books::find(session('receiver'));

        $user_id = $uid;
        // $user_id = Auth::user()->id;
        $countries = Country::all();
        $id = $request->session()->get('edit_id');
        $shipment = Shipment_Order::find($id);
        // dd($user_id);

        $product_info = Shipment_Info::where('shipment_id',$id)->where('uid',$user_id)->get();
        $package_info = Shipment_Pkg::where('shipment_id',$id)->where('uid', $user_id)->get();

        return view('edit_with_address', ['user_group'=>$user_group, 'shipment'=>$shipment, 'countries'=>$countries, 'product_info'=>$product_info, 'package_info'=>$package_info, 'sender'=>$sender,'receiver'=>$receiver]);
    }

    public function edit(Request $request,$id, $uid) {
        $user_group = User::where('role', '!=', 2)->get();
        $request->session('sender')->forget(['sender','receiver']);

        // $user_id = Auth::user()->id;
        $user_id = $uid;
        $countries = Country::all();
        $shipment = Shipment_Order::find($id);
        $request->session()->put('edit_id',$id);
        $request->session()->put('edit_user_id',$uid);

        $product_info = Shipment_Info::where('shipment_id',$id)->where('uid',$user_id)->get();
        $package_info = Shipment_Pkg::where('shipment_id',$id)->where('uid', $user_id)->get();
        return view('edit', ['user_group'=>$user_group, 'shipment'=>$shipment, 'countries'=>$countries, 'product_info'=>$product_info, 'package_info'=>$package_info]);
    }

    public function delete($id) {
        $user_id = Auth::user()->id;
        Shipment_Order::find($id)->delete();
        Shipment_Pkg::where('shipment_id', $id)->where('uid',$user_id)->delete();
        Shipment_Info::where('shipment_id', $id)->where('uid',$user_id)->delete();
        return response()->json(['result'=>'success']);
    }

    public function deleteAll($ids) {
        $user_id = Auth::user()->id;
        $ids = explode(',', $ids);
        Shipment_Order::destroy($ids);

        foreach($ids as $id) {
            Shipment_Pkg::where('shipment_id', $id)->where('uid',$user_id)->delete();
            Shipment_Info::where('shipment_id', $id)->where('uid',$user_id)->delete();
        }
        return response()->json(['result'=>'success']);
    }

    public function saddressList() {
        $user_id = Auth::user()->id;
        $user_role = Auth::user()->role;

        $results = Address_Books::where("uid", $user_id)->where('type', 0)->get();
        if ($user_role == 2)
            $results = Address_Books::where('type', 0)->get();

        $type = "Sender";
        return view("address", ['results'=>$results, 'type'=>$type]);
    }

    public function raddressList() {
        $user_id = Auth::user()->id;
        $user_role = Auth::user()->role;

        $results = Address_Books::where("uid", $user_id)->where('type', 1)->get();
        if ($user_role == 2)
            $results = Address_Books::where('type', 1)->get();

        $type = "Receiver";
        return view("address", ['results'=>$results, 'type'=>$type]);
    }

    public function saddressListE(Request $request) {
        $user_id = Auth::user()->id;
        $user_role = Auth::user()->role;
        $edit_user_id = $request->session()->get('edit_user_id');

        $results = Address_Books::where("uid", $user_id)->where('type', 0)->get();
        if ($user_role == 2)
            $results = Address_Books::where('type', 0)->get();

        $type = "Sender";
        return view("address_e", ['results'=>$results, 'type'=>$type, 'edit_user_id'=>$edit_user_id]);
    }

    public function raddressListE(Request $request) {
        $user_id = Auth::user()->id;
        $user_role = Auth::user()->role;
        $edit_user_id = $request->session()->get('edit_user_id');

        $results = Address_Books::where("uid", $user_id)->where('type', 1)->get();
        if ($user_role == 2)
            $results = Address_Books::where('type', 1)->get();

        $type = "Receiver";
        return view("address_e", ['results'=>$results, 'type'=>$type, 'edit_user_id'=>$edit_user_id]);
    }

    public function addSBooks(Request $request) {
        // $user_id = Auth::user()->id;
        $user_id = $request->input('uid');
        // $user_role = Auth::user()->role;
        $phone_number = $request->input('phone_number');
        if(!Address_Books::where('type', 0)->where('uid', $user_id)->where('phone_number', $phone_number)->exists()) {
            $newModel = new Address_Books;
            $newModel->uid = $request->input('uid');
            $newModel->type = $request->input('type');
            $newModel->company_name = $request->input('company_name');
            $newModel->full_name = $request->input('full_name');
            $newModel->country_code = $request->input('country_code');
            $newModel->address_1 = $request->input('address_1');
            $newModel->address_2 = $request->input('address_2');
            $newModel->zipcode = $request->input('zipcode');
            $newModel->city = $request->input('city');
            $newModel->state = $request->input('state');
            $newModel->phone_number = $request->input('phone_number');
            $newModel->email = $request->input('email');
            $newModel->country_name = $request->input('country_name');
    
            $newModel->save();
        }


        return response()->json(['result'=>'success']);
    }

    public function addRBooks(Request $request) {
        // $user_id = Auth::user()->id;
        $user_id = $request->input('uid');
        // $user_role = Auth::user()->role;
        $phone_number = $request->input('phone_number');
        if(!Address_Books::where('type', 1)->where('uid', $user_id)->where('phone_number', $phone_number)->exists()) {
            $newModel = new Address_Books;
            $newModel->uid = $request->input('uid');
            $newModel->type = $request->input('type');
            $newModel->company_name = $request->input('company_name');
            $newModel->full_name = $request->input('full_name');
            $newModel->country_code = $request->input('country_code');
            $newModel->address_1 = $request->input('address_1');
            $newModel->address_2 = $request->input('address_2');
            $newModel->zipcode = $request->input('zipcode');
            $newModel->city = $request->input('city');
            $newModel->state = $request->input('state');
            $newModel->phone_number = $request->input('phone_number');
            $newModel->email = $request->input('email');
            $newModel->country_name = $request->input('country_name');
    
            $newModel->save();
        }

        return response()->json(['result'=>'success']);
    }

    public function addAll(Request $request) {

        $mode = $request->input('mode');

        if ($mode == 'add') {
            $newModel = new Shipment_Order;
            $newModel->uid = $request->input('uid');
            $newModel->hwb = $request->input('hwb');
            $newModel->total_pkg = $request->input('total_pkg');
            $newModel->total_volume = $request->input('total_volume');
            $newModel->total_charge = $request->input('total_charge');
            $newModel->total_value = $request->input('total_value');
            $newModel->total_weight = $request->input('total_weight');
            $newModel->shipment_type = $request->input('shipment_type');
            $newModel->shipment_service = $request->input('shipment_service');
            $newModel->shipment_reason = $request->input('shipment_reason');
            $newModel->sender_company = $request->input('sender_company');
            $newModel->sender_fullname = $request->input('sender_fullname');
            $newModel->sender_country = $request->input('sender_country');
            $newModel->sender_countrycode = $request->input('sender_countrycode');
            $newModel->sender_address1 = $request->input('sender_address1');
            $newModel->sender_address2 = $request->input('sender_address2');
            $newModel->sender_zipcode = $request->input('sender_zipcode');
            $newModel->sender_city = $request->input('sender_city');
            $newModel->sender_state = $request->input('sender_state');
            $newModel->sender_phone = $request->input('sender_phone');
            $newModel->sender_email = $request->input('sender_email');
            $newModel->receiver_company = $request->input('receiver_company');
            $newModel->receiver_fullname = $request->input('receiver_fullname');
            $newModel->receiver_country = $request->input('receiver_country');
            $newModel->receiver_countrycode = $request->input('receiver_countrycode');
            $newModel->receiver_address1 = $request->input('receiver_address1');
            $newModel->receiver_address2 = $request->input('receiver_address2');
            $newModel->receiver_zipcode = $request->input('receiver_zipcode');
            $newModel->receiver_city = $request->input('receiver_city');
            $newModel->receiver_state = $request->input('receiver_state');
            $newModel->receiver_phone = $request->input('receiver_phone');
            $newModel->receiver_email = $request->input('receiver_email');
    
            $newModel->save();
            return response()->json(['result'=>'success', 'shipment_id'=>$newModel->id]);
        } else {
            $newModel = Shipment_Order::find($request->input('id'));
            $newModel->uid = $request->input('uid');
            // $newModel->hwb = $request->input('hwb');
            $newModel->total_pkg = $request->input('total_pkg');
            $newModel->total_volume = $request->input('total_volume');
            $newModel->total_charge = $request->input('total_charge');
            $newModel->total_value = $request->input('total_value');
            $newModel->total_weight = $request->input('total_weight');
            $newModel->shipment_type = $request->input('shipment_type');
            $newModel->shipment_service = $request->input('shipment_service');
            $newModel->shipment_reason = $request->input('shipment_reason');
            $newModel->sender_company = $request->input('sender_company');
            $newModel->sender_fullname = $request->input('sender_fullname');
            $newModel->sender_country = $request->input('sender_country');
            $newModel->sender_countrycode = $request->input('sender_countrycode');
            $newModel->sender_address1 = $request->input('sender_address1');
            $newModel->sender_address2 = $request->input('sender_address2');
            $newModel->sender_zipcode = $request->input('sender_zipcode');
            $newModel->sender_city = $request->input('sender_city');
            $newModel->sender_state = $request->input('sender_state');
            $newModel->sender_phone = $request->input('sender_phone');
            $newModel->sender_email = $request->input('sender_email');
            $newModel->receiver_company = $request->input('receiver_company');
            $newModel->receiver_fullname = $request->input('receiver_fullname');
            $newModel->receiver_country = $request->input('receiver_country');
            $newModel->receiver_countrycode = $request->input('receiver_countrycode');
            $newModel->receiver_address1 = $request->input('receiver_address1');
            $newModel->receiver_address2 = $request->input('receiver_address2');
            $newModel->receiver_zipcode = $request->input('receiver_zipcode');
            $newModel->receiver_city = $request->input('receiver_city');
            $newModel->receiver_state = $request->input('receiver_state');
            $newModel->receiver_phone = $request->input('receiver_phone');
            $newModel->receiver_email = $request->input('receiver_email');
    
            $newModel->save();
            return response()->json(['result'=>'success', 'shipment_id'=>$newModel->id]);
        }
        
    }

    public function productAdd(Request $request) {

        $mode = $request->input('mode');
        $records = $request->input('records');
        $user_id = $request->input('uid');

        if ($mode == 'add') {
            foreach ($records as $record) {
                $newModel = new Shipment_Info;
                $newModel->uid = $user_id;
                $newModel->shipment_id = $record['shipment_id'];
                $newModel->item_name = $record['item_name'];
                $newModel->hs_code = $record['hs_code'];
                $newModel->qty = $record['qty'];
                $newModel->type = $record['type'];
                $newModel->unit_price = $record['unit_price'];
                $newModel->subtotal = $record['subtotal'];
                $newModel->save();
            }
        } else {
            $origin_uid = $request->input('origin_uid');
            Shipment_Info::where('shipment_id', $records[0]['shipment_id'])->where('uid',$origin_uid)->delete();
            foreach ($records as $record) {
                $newModel = new Shipment_Info;
                $newModel->uid = $user_id;
                $newModel->shipment_id = $record['shipment_id'];
                $newModel->item_name = $record['item_name'];
                $newModel->hs_code = $record['hs_code'];
                $newModel->qty = $record['qty'];
                $newModel->type = $record['type'];
                $newModel->unit_price = $record['unit_price'];
                $newModel->subtotal = $record['subtotal'];
                $newModel->save();
            }
        }

        return response()->json(['result'=>'success']);
    }

    public function packageAdd(Request $request) {

        $mode = $request->input('mode');
        $user_id = $request->input('uid');

        $records = $request->input('records');
        if ($mode == 'add') {
            foreach ($records as $record) {
                $newModel = new Shipment_Pkg;
                $newModel->uid=$user_id;
                $newModel->shipment_id = $record['shipment_id'];
                $newModel->qty_pkg = $record['qty_pkg'];
                $newModel->type_pkg = $record['type_pkg'];
                $newModel->lenght_pkg = $record['lenght_pkg'];
                $newModel->width_pkg = $record['width_pkg'];
                $newModel->height_pkg = $record['height_pkg'];
                $newModel->weight_pkg = $record['weight_pkg'];
                $newModel->volume_pkg = $record['volume_pkg'];
                $newModel->charge_pkg = $record['charge_pkg'];
                $newModel->total_weight = $record['total_weight'];
                $newModel->uid = $user_id;
                $newModel->save();
            }
        } else {
            $origin_uid = $request->input('origin_uid');
            Shipment_Pkg::where('shipment_id', $records[0]['shipment_id'])->where('uid',$origin_uid)->delete();
            foreach ($records as $record) {
                $newModel = new Shipment_Pkg;
                $newModel->uid=$user_id;
                $newModel->shipment_id = $record['shipment_id'];
                $newModel->qty_pkg = $record['qty_pkg'];
                $newModel->type_pkg = $record['type_pkg'];
                $newModel->lenght_pkg = $record['lenght_pkg'];
                $newModel->width_pkg = $record['width_pkg'];
                $newModel->height_pkg = $record['height_pkg'];
                $newModel->weight_pkg = $record['weight_pkg'];
                $newModel->volume_pkg = $record['volume_pkg'];
                $newModel->charge_pkg = $record['charge_pkg'];
                $newModel->total_weight = $record['total_weight'];
                $newModel->uid = $user_id;
                $newModel->save();
            }
        }

        return response()->json(['result'=>'success']);
    }

    public function printHwb($id, $uid) {
        $result = Shipment_Order::find($id);
        // $user_id = Auth::user()->id;
        // $user_role = Auth::user()->role();

        $shipment_pkgs = Shipment_Pkg::where('uid', $uid)->where('shipment_id', $id)->get();
        // $avatar_path = Auth::user()->avatar_path;
        $avatar_path = User::find($uid)->avatar_path;

        $count = 0;
        foreach($shipment_pkgs as $elem) {
            $count += $elem->qty_pkg;
        }
        // $hwb = $result->hwb;
        return view('print1', ['result'=>$result, 'count'=>$count, 'avatar_path'=>$avatar_path]);
    }

}
