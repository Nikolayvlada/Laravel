<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\ShipMentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('login', [CustomAuthController::class, 'login'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom'); 
Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom'); 
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');

Route::middleware(['auth'])->group(function() {
    //routes for default
    Route::get('/', function () {
        return view('login');
    });
    
    Route::get('shipment/index', [ShipMentController::class, 'index'])->name('ship.index');
    Route::post('shipment/paginate', [ShipMentController::class, 'paginate'])->name('ship.paginate');
    Route::get('shipment/create', [ShipMentController::class, 'create'])->name('ship.create'); 
    Route::get('shipment/createwithaddress/{id}', [ShipMentController::class, 'createWithAddress'])->name('ship.createwithaddress'); 
    Route::get('shipment/editwithaddress/{id}/{uid}', [ShipMentController::class, 'editWithAddress'])->name('ship.editwithaddress'); 
    Route::get('shipment/edit/{id}/{uid}', [ShipMentController::class, 'edit'])->name('ship.edit'); 
    Route::get('shipment/delete/{id}', [ShipMentController::class, 'delete'])->name('ship.delete'); 
    Route::get('shipment/deleteall/{ids}', [ShipMentController::class, 'deleteAll'])->name('ship.delete'); 

    Route::get('shipment/saddress', [ShipMentController::class, 'saddressList'])->name('ship.saddress'); 
    Route::get('shipment/raddress', [ShipMentController::class, 'raddressList'])->name('ship.raddress');
    Route::get('shipment/saddress_e', [ShipMentController::class, 'saddressListE'])->name('ship.saddress_e'); 
    Route::get('shipment/raddress_e', [ShipMentController::class, 'raddressListE'])->name('ship.raddress_e');
    
    Route::post('shipment/add/sbooks', [ShipMentController::class, 'addSBooks'])->name('ship.add.sbooks'); 
    Route::post('shipment/add/rbooks', [ShipMentController::class, 'addRBooks'])->name('ship.add.rbooks'); 
    Route::post('shipment/add/all', [ShipMentController::class, 'addAll'])->name('ship.add.all'); 
    Route::post('shipment/productInfo/add', [ShipMentController::class, 'productAdd'])->name('ship.product.add'); 
    Route::post('shipment/packageInfo/add', [ShipMentController::class, 'packageAdd'])->name('ship.package.add');
    Route::get('file-export', [ShipMentController::class, 'fileExport'])->name('file-export');
    Route::get('shipment/print/{id}/{uid}', [ShipMentController::class, 'printHwb'])->name('ship.hwbprint'); 
    // Route::get('shipment/invoice/{id}', [ShipMentController::class, 'printInvoice'])->name('ship.invoiceprint'); 
});
