<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<style>
body {
    font-family: 'Times New Roman';
    font-size: 9pt;
    background: #fff;
}
.qrcode {
    display: none;
}
.fomr-row {
    clear: both;
}
.fomr-1 {
    float: left;
    width: 505px;
    position: relative;
    margin-top: 45px;
    margin-left: 25px;
}
.fomr-1-right {
    float: left;
    width: 505px;
    position: relative;
    margin-top: 45px;
    margin-left: 25px;
}
.b-header {
    position: relative;
}
.b-header img {
    /* width: 280px; */
}
.view {
    display: inherit;
}
.print {
    display: none;
}
.h-right {
    position: absolute;
    width: 150px;
    top: 10px;
    left: 300px;
    font-size: 26px;
    font-weight: normal;
    text-align: center;
}
.h-right-2 {
    position: absolute;
    width: 50px;
    top: 10px;
    right: 1px;
    font-size: 20px;
    font-weight: normal;
    text-align: center;
    border: 1px solid #000;
}
.hidden {
    display: none;
}
.h-right-2 span {
    font-size: 12px;
}
.barcode {
    font-family: 'Free 3 of 9';
    font-size: 36px;
}
.tbl-bill-1 {
    border: 2px solid #000000;
}
.tbl-bill-1 td {
    padding: 2px 10px;
}
.b-title-2 {
    background: #feb300;
    border-top: 1px solid #000;
    font-weight: bold;
    text-align: center;
    font-size: 15pt;
    border-right: 1px solid #000;
    width: 50%;
    font-style: italic;
}
.b-ct-2 {
    border-top: 1px solid #000;
    font-weight: bold;
    text-align: center;
    font-size: 46pt;
    border-right: 1px solid #000;
    padding: 9px !important;
}
.b-title {
    background: #feb300;
    border-top: 1px solid #000;
    font-weight: bold;
}
.b-ct {
    border-bottom: 1px dotted #000;
    font-weight: bold;
}
.noneB {
    border-bottom: none !important;
}
.solidB {
    border-bottom: 1px solid #000;
    padding: 7px 10px !important;
}
.b-des {
    text-align: right;
}
.tbl-child {
    border-top: 1px solid #000;
    border-right: 1px solid #000;
}
.tbl-child td {
    border-bottom: 1px solid #000;
    border-left: 1px solid #000;
    text-align: center;
    font-weight: bold;
}
.des2 {
    font-size: 20pt;
    height: 47px;
    line-height: 45pt;
}
.dot-B {
    border-bottom: 1px dotted #000;
    display: block;
    height: 2px;
    padding: 8px;
    line-height: 0pt;
}
.pcs_dim {
    height: 74px;
    width: 280px;
    overflow: hidden;
    text-align: left;
}
.dot-C {
    border-bottom: 1px dotted #000;
    padding: 0px;
    width: calc(50% - 7px);
    display: inline-block;
    line-height: 8pt;
    font-size: 8pt;
    font-weight: normal;
    padding-left: 5px;
    min-height: 12.6px;
}
.sign {
    text-align: left !important;
    font-weight: normal !important;
}
.b-date {
    margin-top: 40px;
    font-size: 8pt !important;
}
.bottom-bar {
    text-align: left;
    padding: 15px;
    font-size: 15px;
    position: relative;
    min-height: 60px;
}
.bottom-bar .lien {
    font-size: 11px;
}
.bb-right {
    position: absolute;
    right: 10px;
    width: 160px;
    top: 10px;
    text-align: center;
}
.bottom-bar .barcode {
    font-size: 40px;
}
.note {
    font-size: 11px;
}
.btnPrint {
    display: block;
    padding: 10px 15px;
    background: #feb300;
    border-radius: 5px;
    border: none;
    color: #fff;
    position: fixed;
    right: 30px;
    top: 260px;
    text-decoration: none;
    text-transform: uppercase;
    z-index: 9000;
}
.fix-img {
    max-height: 100%;
    max-width: 100%;
    margin: 0 auto;
}

@media print {
@page {
    size: A6 landscape; /* DIN A4 standard, Europe */
    margin: 0;
}
html, body {
    /* width: 210mm;
                
                height: 282mm;*/
    font-size: 11px;
    background: #FFF;
    overflow: visible;
    margin: 0;
    padding: 0;
    padding-left: 2mm;
    -webkit-print-color-adjust: exact;
}
.notebk, .fomr-row {
    page-break-after: always;
}
.view {
    display: none;
}
.print {
    display: inherit;
}
.b-title {
}
}
</style>
</head>
<body>
<body style="overflow-x: hidden;">
@for ($i = 0; $i < $count; $i++)
<form method="post" action="http://vietanexpress.com.vn/BillOnline_Print.aspx?id=346275" id="formPrint">
  <div class="notebk"></div>
  <div class="fomr-row" id="shipping_mark">
    <div class="fomr-1-right" id="shipping_mark_1">
      <table class="tbl-bill-1" width="100%" cellpadding="0" cellspacing="0">
        <tbody>
          <tr>
            <td colspan="4" class="b-header"><img src="{{asset('avatars')}}/{{$avatar_path}}" class="view" alt="logo"> <img src="{{asset('avatars')}}/{{$avatar_path}}" class="print" alt="logo">
              <div class="h-right">
                <div class="barcode" style="position:relative;right:10px;">{!! DNS1D::getBarcodeHTML($result->hwb, 'CODABAR') !!}</div>
                <div style="font-size: 15pt;">{{$result->hwb}} </div>
              </div></td>
          </tr>
          <tr>
            <td colspan="4" style="border-top: 2px solid #000;"><div style="text-align: center; font-size: 26pt; padding: 10px 10px; font-weight: bold;"> SHIPPING MARK </div></td>
          </tr>
          <tr>
            <td colspan="4" style="border-top: 1px solid #000;"><div style="text-align: center; font-size: 16pt; padding: 0px 10px; font-weight: bold;"> <i>HAWB:</i> <span style="text-align: center; font-size: 45pt; padding: 0px 20px; font-weight: bold; display: inline-block;"> {{$result->hwb}} </span> </div></td>
          </tr>
          <tr>
            <td colspan="4" class="b-title-2">DESTINATION</td>
          </tr>
          <tr>
            <td colspan="4" class="b-ct-2 CONSIGNEE_COUNTRY_CODE">{{$result->receiver_countrycode}}</td>
          </tr>
          <tr>
            <td colspan="4" style="border-top: 1px solid #000;"><div style="text-align: left; font-size: 16pt; padding: 19px 10px; font-weight: bold; position: relative;"> <span><i>Pcs no:</i></span> <span class="No_in_pkgs" style="position: absolute; left: 170px; font-size: 45pt; top: -1px;">{{$i+1}}</span> <span class="No_of_pkgs" style="position: absolute; left: 283px; font-size: 45pt; top: -1px;">{{$count}}</span> <span style="position: absolute; left: 233px; font-size: 45pt; top: -1px;">/</span> </div></td>
          </tr>
          <tr>
            <td colspan="4" class="b-title"><i style="font-size: 14pt;">Sender</i>: </td>
          </tr>
          <tr>
            <td class="b-des"><i>Company</i>:</td>
            <td class="b-ct" colspan="3">{{$result->sender_company}}</td>
          </tr>
          <tr>
            <td class="b-des"><i>Contact name</i>:</td>
            <td class="b-ct" colspan="3">{{$result->sender_email}}</td>
          </tr>
          <tr>
            <td class="b-des" width="150px"><i>Country</i>:</td>
            <td class="b-ct" colspan="3" width="120px">{{$result->sender_country}}</td>
          </tr>
          <tr>
            <td colspan="4" class="b-title"><i style="font-size: 14pt;">Consignee</i>: </td>
          </tr>
          <tr>
            <td class="b-des"><i>Company</i>:</td>
            <td class="b-ct" colspan="3">{{$result->receiver_company}}</td>
          </tr>
          <tr>
            <td class="b-des"><i>Address 1</i>:</td>
            <td class="b-ct" colspan="3">{{$result->receiver_address1}}</td>
          </tr>
          <tr>
            <td class="b-des">Address 2:</td>
            <td class="b-ct" colspan="3">{{$result->receiver_address1}}</td>
          </tr>
          <tr>
            <td class="b-des" width="150px">City:</td>
            <td class="b-ct" width="120px">{{$result->receiver_city}}</td>
            <td class="b-des" width="80px">State:</td>
            <td class="b-ct">{{$result->receiver_state}}</td>
          </tr>
          <tr>
            <td class="b-des" width="150px"><b><i>Country</i>:</b></td>
            <td class="b-ct" width="100px">{{$result->receiver_country}}</td>
            <td class="b-des" width="100px"><i>Postal code</i>:</td>
            <td class="b-ct">{{$result->receiver_zipcode}}</td>
          </tr>
          <tr>
            <td class="b-des"><i>Contact name</i>:</td>
            <td class="b-ct" colspan="3">{{$result->receiver_email}}</td>
          </tr>
        </tbody>
      </table>
      <div class="note"></div>
    </div>
  </div>
</form>
<div style="height: 150px;"></div>
@endfor
</body>
</body>
</html>
