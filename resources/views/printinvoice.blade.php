<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link rel="stylesheet" href="{{ asset('./assets/main.css') }}">
<link rel="stylesheet" href="{{ asset('./assets/reset.css') }}">

</head>

<body>
<div class="fomr-row">
  <table cellspacing="0" id="FormView1" style="border-collapse:collapse;">
    <tbody>
      <tr>
        <td colspan="2"><div class="C pd10">
            <h1>INVOICE</h1>
          </div>
          <div style="clear: both; width: 670px; margin-bottom: 25px;">
            <div style="float: left; width: 470px;">
              <table class="tbl-1" style="width: 470px;">
                <tbody>
                  <tr>
                    <td colspan="4"><h3><b>SHIPPER</b></h3></td>
                  </tr>
                  <tr>
                    <td>Company Name:</td>
                    <td class="td2"><span id="cust_name">{{$shipment->sender_company}}</span></td>
                  </tr>
                  <tr>
                    <td>Address 1:</td>
                    <td class="td2">{{$shipment->sender_address1}}</td>
                  </tr>
				<tr>
                    <td>Address 2:</td>
                    <td class="td2">{{$shipment->sender_address2}}</td>
                  </tr>	
                  <tr>
                    <td>City/ State</td>
                    <td class="td2">{{$shipment->sender_state}}</td>
                  </tr>
					<tr>
                    <td>Country:</td>
                    <td class="td2">{{$shipment->sender_country}}</td>
                  </tr>
                  <tr>
                    <td>Contact Name:</td>
                    <td class="td2">{{$shipment->sender_fullname}}</td>
                  </tr>
                  <tr>
                    <td>Phone/Fax No.:</td>
                    <td class="td2">{{$shipment->sender_phone}}</td>
                  </tr>
                </tbody>
              </table>
              <br>
             <table class="tbl-1" style="width: 470px;">
                <tbody>
                  <tr>
                    <td colspan="4"><h3><b>CONSIGNEE</b></h3></td>
                  </tr>
                  <tr>
                    <td>Company Name:</td>
                    <td class="td2"><span id="cust_name">{{$shipment->receiver_company}}</span></td>
                  </tr>
                  <tr>
                    <td>Address 1:</td>
                    <td class="td2">{{$shipment->receiver_address1}}</td>
                  </tr>
				<tr>
                    <td>Address 2:</td>
                    <td class="td2">{{$shipment->receiver_address2}}</td>
                  </tr>	
                  <tr>
                    <td>City/ State</td>
                    <td class="td2">{{$shipment->receiver_state}}</td>
                  </tr>
					<tr>
                    <td>Country:</td>
                    <td class="td2">{{$shipment->receiver_country}}</td>
                  </tr>
                  <tr>
                    <td>Contact Name:</td>
                    <td class="td2">{{$shipment->receiver_fullname}}</td>
                  </tr>
                  <tr>
                    <td>Phone/Fax No.:</td>
                    <td class="td2">{{$shipment->receiver_phone}}</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div style="float: right; width: 180px;">
              <table class="tbl-2 tblR" style="width: 180px;">
                <tbody>
                  <tr>
                    <td>Date:</td>
                    <td class="td2">{{$shipment->created_at}}</td>
                  </tr>
                  <tr>
                    <td>Air waybill No.:</td>
                    <td class="td2">{{$shipment->hwb}}</td>
                  </tr>
                  <tr>
                    <td>No. of pkgs :</td>
                    <td class="td2">{{$shipment->total_pkg}}</td>
                  </tr>
                  <tr>
                    <td>Weight:</td>
                    <td class="td2">{{$shipment->total_weight}}</td>
                  </tr>
                  <tr>
                    <td>Dimensions:</td>
                    <td class="td2"></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div style="clear: both; padding-bottom: 20px;"></div>
          <div style="padding-left: 7px;">
            <table width="100%" class="tbl-2" border="1">
              <tbody>
                <tr>
                  <th>Full Description of  Goods</th>
                  <th>HS Code </th>
                  <th colspan="2">Quantily</th>
                  <th>Unit Price</th>
                  <th>Subtotal</th>
                </tr>
                @foreach($product_info as $product)
                <tr>
                  <td>{{ $product->item_name}}</td>
                  <td>{{$product->hs_code}}</td>
                  <td>{{$product->qty}}</td>
                  <td>{{$product->type}}</td>
                  <td>{{$product->unit_price}}</td>
                  <td>{{$product->subtotal}}</td>
                </tr>
                @endforeach
                <tr>
                  <th>Total Value (in USD)</th>
                  <th colspan="5" style="text-align:right"> {{ $product_info->sum('subtotal') }}  USD </th>
                </tr>
              </tbody>
            </table>
            <div style="padding-top: 25px; padding: 5px;">
              <p> Reason for Export: <b>GIFT</b> </p>
              <p> I declare that the information is true and correct to the best of my knowledge <br>
                and that the goods are of Viet Nam origin. </p>
              <p> I (name) &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; certify that the particulars and <br>
                quantity of goods specified in this document are goods which are submitted for <br>
                clearance for export out of Viet Nam. </p>
            </div>
            <div style="padding-right: 55px; text-align: right;"> Signature/Title/Stamp </div>
          </div></td>
      </tr>
    </tbody>
  </table>
</div>
</body>
</html>
