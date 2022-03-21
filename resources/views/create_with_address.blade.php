<!DOCTYPE html>
<html lang="zxx" class="js">
<head>
<meta charset="utf-8">
<meta name="author" content="Softnio">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
<!-- Fav Icon  -->
<link rel="shortcut icon" href="{{ asset('./images/favicon.png') }}">
<!-- Page Title  -->
<title>WG Management | DashLite Admin Template</title>
<!-- StyleSheets  -->
<link rel="stylesheet" href="{{asset('./assets/css/dashlite.css?ver=2.9.0')}}">
<link id="skin-default" rel="stylesheet" href="{{ asset('./assets/css/theme.css?ver=2.9.0') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script type="text/javascript">
    function displayResult()
    {
        document.getElementById("tableitem").insertRow(-1).innerHTML = '<td><input type="text" class="form-control item-name" placeholder="item name"></td><td><input type="text" class="form-control item-hscode" placeholder="HS CODE"></td><td><input type="number" class="form-control item-quantily" placeholder="quantily"></td><td><select class="form-control item-type"><option value="PCS">PCS</option><option value="BOX">BOX</option></select></td><td><input type="number" class="form-control item-price"></td><td><input type="text" class="form-control item-subtotal"  readonly></td><td><em class="icon ni ni-trash-fill"></em></td>';
    }
	
		function displaypkg()
    {
        document.getElementById("tablepkg").insertRow(-1).innerHTML = '<tr> <td><select class="form-control qtypkg" id="qtypkg"><option value="0">0</option> <option value="1">1</option> <option value="2">2</option> <option value="3">3</option> <option value="4">4</option> <option value="5">5</option> <option value="6">6</option> <option value="7">7</option> <option value="8">8</option> <option value="9">9</option> <option value="10">10</option> </select></td><td><select class="form-control pkg-type" id="item-type"> <option value="BOX">BOX</option> <option value="BAG">BAG</option> <option value="PALLET">PALLET</option> </select></td><td><input type="number" class="form-control pkglength" id="pkglength" value="" placeholder="length (cm)"></td><td><input type="number" class="form-control pkgwidth" id="pkgwidth" value="" placeholder="width (cm)"></td><td><input type="number" class="form-control pkgheight" id="pkgheight" value="" placeholder="height (cm)"></td><td><input type="number" class="form-control pkgweight" id="pkgweight" value="" placeholder="weight (kg)"></td><td><span id="subweight" class="form-control subweight"></span></td><td><span id="subvolume" class="form-control subvolume"></span></td><td><span id="subcharge" class="form-control subcharge"></span></td><td><button type="button" class="btn btn-primary addpkgbtn" onclick="displaypkg()">+ Add</button>&nbsp;&nbsp;&nbsp;&nbsp;<button type="button" class="pkgGroupBtn btn btn-danger">- Remove</button></td> </tr>';
    }
	
</script> 
<script src="http://codeorigin.jquery.com/jquery-1.10.2.min.js"></script> 
<script>

    function senderAddressBook() {
      var base_url = "{{url('/')}}";
      location.href = base_url + "/shipment/saddress";
    }

    function receiverAddressBook() {
      var base_url = "{{url('/')}}";
      location.href = base_url + "/shipment/raddress";
    }
</script>
<style>
  .ni-trash-fill {
    cursor: pointer;
  }
</style>
</head>

<body class="nk-body bg-lighter npc-general has-sidebar ">
<div class="nk-app-root"> 
  <!-- main @s -->
  <div class="nk-main "> 
    <!-- sidebar @s -->
    <div class="nk-sidebar nk-sidebar-fixed is-dark " data-content="sidebarMenu">
      <div class="nk-sidebar-element nk-sidebar-head">
        <div class="nk-menu-trigger"> <a href="#" class="nk-nav-toggle nk-quick-nav-icon d-xl-none" data-target="sidebarMenu"><em class="icon ni ni-arrow-left"></em></a> <a href="#" class="nk-nav-compact nk-quick-nav-icon d-none d-xl-inline-flex" data-target="sidebarMenu"><em class="icon ni ni-menu"></em></a> </div>
        <div class="nk-sidebar-brand">
          <h4 style="cursor:pointer;" onclick="location.href='{{url('')}}/shipment/index'">WG EX</h4>
        </div>
      </div>
      <!-- .nk-sidebar-element -->
      <div class="nk-sidebar-element nk-sidebar-body">
        <div class="nk-sidebar-content">
          <div class="nk-sidebar-menu" data-simplebar>
            <ul class="nk-menu">
              <li class="nk-menu-item has-sub"> <a href="#" class="nk-menu-link nk-menu-toggle"> <span class="nk-menu-icon"><em class="icon ni ni-calendar-booking-fill"></em></span> <span class="nk-menu-text">Shipment</span> </a>
                <ul class="nk-menu-sub">
                  <li class="nk-menu-item"> <a href="{{ route('ship.index') }}" class="nk-menu-link"><span class="nk-menu-text">All shipment</span></a> </li>
                  <li class="nk-menu-item"> <a href="{{ route('ship.create') }}" class="nk-menu-link"><span class="nk-menu-text">Add shipment</span></a> </li>
                </ul>
              </li>
              <!-- .nk-menu-item -->
            </ul>
            <!-- .nk-menu --> 
          </div>
          <!-- .nk-sidebar-menu --> 
        </div>
        <!-- .nk-sidebar-content --> 
      </div>
      <!-- .nk-sidebar-element --> 
    </div>
    <!-- sidebar @e --> 
    <!-- wrap @s -->
    <div class="nk-wrap "> 
      <!-- main header @s -->
      <div class="nk-header nk-header-fixed is-light">
        <div class="container-fluid">
          <div class="nk-header-wrap">
            <div class="nk-menu-trigger d-xl-none ml-n1"> <a href="#" class="nk-nav-toggle nk-quick-nav-icon" data-target="sidebarMenu"><em class="icon ni ni-menu"></em></a> </div>
            <!-- <div class="nk-header-brand d-xl-none"> <a href="html/index.html" class="logo-link"> <img class="logo-light logo-img" src="{{asset('./images/logo.png')}}" srcset="{{ asset('images/logo2x.png 2x')}}" alt="logo"> <img class="logo-dark logo-img" src="{{ asset('./images/logo-dark.png') }}" srcset="{{ asset('./images/logo-dark2x.png 2x') }}" alt="logo-dark"> </a> </div> -->
            <!-- .nk-header-brand -->
            <div class="nk-header-news d-none d-xl-block"> </div>
            <!-- .nk-header-news -->
            <div class="nk-header-tools">
              <ul class="nk-quick-nav">
                <li class="dropdown user-dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <div class="user-toggle">
                    <div class="user-info d-none d-md-block">
                      <div class="user-name dropdown-indicator">{{Auth::user()->name}}</div>
                    </div>
                  </div>
                  </a>
                  <div class="dropdown-menu dropdown-menu-md dropdown-menu-right dropdown-menu-s1">
                    <div class="dropdown-inner">
                      <ul class="link-list">
                        <li><a href="{{route('signout')}}"><em class="icon ni ni-signout"></em><span>Sign out</span></a></li>
                      </ul>
                    </div>
                  </div>
                </li>
                <!-- .dropdown -->
              </ul>
              <!-- .nk-quick-nav --> 
            </div>
            <!-- .nk-header-tools --> 
          </div>
          <!-- .nk-header-wrap --> 
        </div>
        <!-- .container-fliud --> 
      </div>
      <!-- main header @e --> 
      <!-- content @s -->
      <div class="nk-content ">
        <div class="container-fluid">
          <div class="nk-content-inner">
            <div class="nk-content-body">
              <div class="nk-block-head nk-block-head-sm">
                <div class="nk-block-between">
                  <div class="nk-block-head-content">
                    <h3 class="nk-block-title page-title">Add Shipment</h3>
                  </div>
                  <!-- .nk-block-head-content --> 
                </div>
                <!-- .nk-block-between --> 
              </div>
              <!-- .nk-block-head -->
              <div class="row g-gs"> 
                <!-- .nk-block-content -->
                <div class="col-lg-6">
                  <div class="card h-100">
                    <div class="card-inner">
                      <div class="card-head">
                        <h6 class="card-title" style="margin-bottom: 0px;">Sender Information</h6>
                          <a href="javascript:;senderAddressBook()" class="btn btn-round btn-primary"><em class="icon ni ni-contact"></em><span>Address books</span> </a> </div>
                          @if(!is_null($sender) )
                            <form action="javascript:;void(0)" _lpchecked="1">
                              <div class="row g-4">
                                <div class="col-lg-5">
                                  <div class="form-group">
                                    <div class="form-control-wrap">
                                      <input type="text" class="form-control" id="scompany_name" placeholder="Company" value="{{$sender->company_name}}">
                                    </div>
                                  </div>
                                </div>
                                <div class="col-lg-2">
                                  <div class="form-group">
                                    <div class="form-control-wrap">
                                      <input type="text" class="form-control" id="scountry_code" placeholder="VAT/Tax ID" value="{{$sender->country_code}}">
                                    </div>
                                  </div>
                                </div>	
                                <div class="col-lg-5">
                                  <div class="form-group">
                                    <div class="form-control-wrap">
                                      <input type="text" class="form-control" id="sfull_name" placeholder="Full name" value="{{$sender->full_name}}">
                                    </div>
                                  </div>
                                </div>
                                <div class="col-lg-12">
                                  <div class="form-group">
                                    <div class="form-control-wrap">
                                      <select id="scountry_name" class="form-select select2-hidden-accessible" data-search="on" data-select2-id="3" tabindex="-1" aria-hidden="true">
                                        <option value="" data-select2-id="5">Select country</option>
                                        @foreach ($countries as $country)
                                          <option value="{{ $country->country_name }}">{{ $country->country_name }}</option>
                                        @endforeach
                                      </select>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-lg-12">
                                  <div class="form-group">
                                    <div class="form-control-wrap">
                                      <input type="text" class="form-control" id="saddress1" placeholder="Address 1" value="{{$sender->address_1}}">
                                    </div>
                                  </div>
                                </div>
                                <div class="col-lg-12">
                                  <div class="form-group">
                                    <div class="form-control-wrap">
                                      <input type="text" class="form-control" id="saddress2" placeholder="Address 2" value="{{$sender->address_2}}">
                                    </div>
                                  </div>
                                </div>
                                <div class="col-lg-4">
                                  <div class="form-group">
                                    <div class="form-control-wrap">
                                      <input type="text" class="form-control" id="szipcode" placeholder="Zipcode" value="{{$sender->zipcode}}">
                                    </div>
                                  </div>
                                </div>
                                <div class="col-lg-4">
                                  <div class="form-group">
                                    <div class="form-control-wrap">
                                      <input type="text" class="form-control" id="scity" placeholder="City" value="{{$sender->city}}">
                                    </div>
                                  </div>
                                </div>
                                <div class="col-lg-4">
                                  <div class="form-group">
                                    <div class="form-control-wrap">
                                      <input type="text" class="form-control" id="sstate" placeholder="State" value="{{$sender->state}}">
                                    </div>
                                  </div>
                                </div>
                                <div class="col-lg-6">
                                  <div class="form-group">
                                    <div class="form-control-wrap">
                                      <input type="text" class="form-control" id="sphone_number" placeholder="Phone number" value="{{$sender->phone_number}}">
                                    </div>
                                  </div>
                                </div>
                                <div class="col-lg-6">
                                  <div class="form-group">
                                    <div class="form-control-wrap">
                                      <input type="text" class="form-control" id="semail" placeholder="Email" value="{{$sender->email}}">
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </form>
                          @else
                            <form action="javascript:;void(0)" _lpchecked="1">
                              <div class="row g-4">
                                <div class="col-lg-5">
                                  <div class="form-group">
                                    <div class="form-control-wrap">
                                      <input type="text" class="form-control" id="scompany_name" placeholder="Company">
                                    </div>
                                  </div>
                                </div>
                                <div class="col-lg-2">
                                  <div class="form-group">
                                    <div class="form-control-wrap">
                                      <input type="text" class="form-control" id="scountry_code" placeholder="VAT/Tax ID">
                                    </div>
                                  </div>
                                </div>	
                                <div class="col-lg-5">
                                  <div class="form-group">
                                    <div class="form-control-wrap">
                                      <input type="text" class="form-control" id="sfull_name" placeholder="Full name">
                                    </div>
                                  </div>
                                </div>
                                <div class="col-lg-12">
                                  <div class="form-group">
                                    <div class="form-control-wrap">
                                      <select id="scountry_name" class="form-select select2-hidden-accessible" data-search="on" data-select2-id="3" tabindex="-1" aria-hidden="true">
                                        <option value="" data-select2-id="5">Select country</option>
                                        @foreach ($countries as $country)
                                          <option value="{{ $country->country_name }}" >{{ $country->country_name }}</option>
                                        @endforeach
                                      </select>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-lg-12">
                                  <div class="form-group">
                                    <div class="form-control-wrap">
                                      <input type="text" class="form-control" id="saddress1" placeholder="Address 1">
                                    </div>
                                  </div>
                                </div>
                                <div class="col-lg-12">
                                  <div class="form-group">
                                    <div class="form-control-wrap">
                                      <input type="text" class="form-control" id="saddress2" placeholder="Address 2">
                                    </div>
                                  </div>
                                </div>
                                <div class="col-lg-4">
                                  <div class="form-group">
                                    <div class="form-control-wrap">
                                      <input type="text" class="form-control" id="szipcode" placeholder="Zipcode">
                                    </div>
                                  </div>
                                </div>
                                <div class="col-lg-4">
                                  <div class="form-group">
                                    <div class="form-control-wrap">
                                      <input type="text" class="form-control" id="scity" placeholder="City">
                                    </div>
                                  </div>
                                </div>
                                <div class="col-lg-4">
                                  <div class="form-group">
                                    <div class="form-control-wrap">
                                      <input type="text" class="form-control" id="sstate" placeholder="State">
                                    </div>
                                  </div>
                                </div>
                                <div class="col-lg-6">
                                  <div class="form-group">
                                    <div class="form-control-wrap">
                                      <input type="text" class="form-control" id="sphone_number" placeholder="Phone number">
                                    </div>
                                  </div>
                                </div>
                                <div class="col-lg-6">
                                  <div class="form-group">
                                    <div class="form-control-wrap">
                                      <input type="text" class="form-control" id="semail" placeholder="Email">
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </form>
                          @endif
                    </div>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="card h-100">
                    <div class="card-inner">
                      <div class="card-head">
                        <h6 class="card-title" style="margin-bottom: 0px;">Receiver Information</h6>
                        <a href="javascript:;receiverAddressBook()" class="btn btn-round btn-primary"><em class="icon ni ni-contact"></em><span>Address books</span> </a> </div>
                        <!-- </div> -->
                        @if(!is_null($receiver))
                          <form action="javascript:;void(0)" _lpchecked="1">
                            <div class="row g-4">
                              <div class="col-lg-5">
                                <div class="form-group">
                                  <div class="form-control-wrap">
                                    <input type="text" class="form-control" id="rcompany_name" placeholder="Company" value="{{$receiver->company_name}}">
                                  </div>
                                </div>
                              </div>
                              <div class="col-lg-2">
                                <div class="form-group">
                                  <div class="form-control-wrap">
                                    <input type="text" class="form-control" id="rcountry_code" placeholder="VAT/ TAX ID" value="{{$receiver->country_code}}">
                                  </div>
                                </div>
                              </div>	
                              <div class="col-lg-5">
                                <div class="form-group">
                                  <div class="form-control-wrap">
                                    <input type="text" class="form-control" id="rfull_name" placeholder="Full name" value="{{$receiver->full_name}}">
                                  </div>
                                </div>
                              </div>
                              <div class="col-lg-12">
                                <div class="form-group">
                                  <div class="form-control-wrap">
                                    <select id="rcountry_name" class="form-select select2-hidden-accessible" data-search="on" data-select2-id="6" tabindex="-2" aria-hidden="true">
                                      <option value="" data-select2-id="8">Select country </option>
                                      @foreach ($countries as $country)
                                        <option value="{{ $country->country_name }}" >{{ $country->country_name }}</option>
                                      @endforeach
                                    </select>
                                  </div>
                                </div>
                              </div>
                              <div class="col-lg-12">
                                <div class="form-group">
                                  <div class="form-control-wrap">
                                    <input type="text" class="form-control" id="raddress1" placeholder="Address 1" value="{{$receiver->address_1}}">
                                  </div>
                                </div>
                              </div>
                              <div class="col-lg-12">
                                <div class="form-group">
                                  <div class="form-control-wrap">
                                    <input type="text" class="form-control" id="raddress2" placeholder="Address 2" value="{{$receiver->address_2}}">
                                  </div>
                                </div>
                              </div>
                              <div class="col-lg-4">
                                <div class="form-group">
                                  <div class="form-control-wrap">
                                    <input type="text" class="form-control" id="rzipcode" placeholder="Zipcode"value="{{$receiver->zipcode}}">
                                  </div>
                                </div>
                              </div>
                              <div class="col-lg-4">
                                <div class="form-group">
                                  <div class="form-control-wrap">
                                    <input type="text" class="form-control" id="rcity" placeholder="City" value="{{$receiver->city}}">
                                  </div>
                                </div>
                              </div>
                              <div class="col-lg-4">
                                <div class="form-group">
                                  <div class="form-control-wrap">
                                    <input type="text" class="form-control" id="rstate" placeholder="State" value="{{$receiver->state}}">
                                  </div>
                                </div>
                              </div>
                              <div class="col-lg-6">
                                <div class="form-group">
                                  <div class="form-control-wrap">
                                    <input type="text" class="form-control" id="rphone_number" placeholder="Phone number" value="{{$receiver->phone_number}}">
                                  </div>
                                </div>
                              </div>
                              <div class="col-lg-6">
                                <div class="form-group">
                                  <div class="form-control-wrap">
                                    <input type="text" class="form-control" id="remail" placeholder="Email" value="{{$receiver->email}}">
                                  </div>
                                </div>
                              </div>
                            </div>
                          </form>
                        @else
                          <form action="javascript:;void(0)" _lpchecked="1">
                            <div class="row g-4">
                              <div class="col-lg-5">
                                <div class="form-group">
                                  <div class="form-control-wrap">
                                    <input type="text" class="form-control" id="rcompany_name" placeholder="Company">
                                  </div>
                                </div>
                              </div>
                              <div class="col-lg-2">
                                <div class="form-group">
                                  <div class="form-control-wrap">
                                    <input type="text" class="form-control" id="rcountry_code" placeholder="VAT/ TAX ID">
                                  </div>
                                </div>
                              </div>	
                              <div class="col-lg-5">
                                <div class="form-group">
                                  <div class="form-control-wrap">
                                    <input type="text" class="form-control" id="rfull_name" placeholder="Full name">
                                  </div>
                                </div>
                              </div>
                              <div class="col-lg-12">
                                <div class="form-group">
                                  <div class="form-control-wrap">
                                    <select id="rcountry_name" class="form-select select2-hidden-accessible" data-search="on" data-select2-id="6" tabindex="-2" aria-hidden="true">
                                      <option value="" data-select2-id="8">Select country </option>
                                      @foreach ($countries as $country)
                                        <option value="{{ $country->country_name }}" >{{ $country->country_name }}</option>
                                      @endforeach
                                    </select>
                                  </div>
                                </div>
                              </div>
                              <div class="col-lg-12">
                                <div class="form-group">
                                  <div class="form-control-wrap">
                                    <input type="text" class="form-control" id="raddress1" placeholder="Address 1">
                                  </div>
                                </div>
                              </div>
                              <div class="col-lg-12">
                                <div class="form-group">
                                  <div class="form-control-wrap">
                                    <input type="text" class="form-control" id="raddress2" placeholder="Address 2">
                                  </div>
                                </div>
                              </div>
                              <div class="col-lg-4">
                                <div class="form-group">
                                  <div class="form-control-wrap">
                                    <input type="text" class="form-control" id="rzipcode" placeholder="Zipcode">
                                  </div>
                                </div>
                              </div>
                              <div class="col-lg-4">
                                <div class="form-group">
                                  <div class="form-control-wrap">
                                    <input type="text" class="form-control" id="rcity" placeholder="City">
                                  </div>
                                </div>
                              </div>
                              <div class="col-lg-4">
                                <div class="form-group">
                                  <div class="form-control-wrap">
                                    <input type="text" class="form-control" id="rstate" placeholder="State">
                                  </div>
                                </div>
                              </div>
                              <div class="col-lg-6">
                                <div class="form-group">
                                  <div class="form-control-wrap">
                                    <input type="text" class="form-control" id="rphone_number" placeholder="Phone number">
                                  </div>
                                </div>
                              </div>
                              <div class="col-lg-6">
                                <div class="form-group">
                                  <div class="form-control-wrap">
                                    <input type="text" class="form-control" id="remail" placeholder="Email">
                                  </div>
                                </div>
                              </div>
                            </div>
                          </form>
                        @endif
                    </div>
                  </div>
                </div>
                <!-- Star Shipment type -->
                <div class="col-lg-12">
                  <div class="card h-100">
                    <div class="card-inner">
                      <div class="row g-4">
                        @if (Auth::user()->role == 2)
                          <div class="col-lg-3">
                            <label class="form-label">Shipment type</label>
                            <div class="form-control-wrap ">
                              <div class="form-control-select">
                                <select class="form-control" id="shipment_type">
                                  <option value="">Select type</option>
                                  <option value="DOC">DOC</option>
                                  <option value="WPX">WPX</option>
                                </select>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-3">
                            <label class="form-label">Services</label>
                            <div class="form-control-wrap ">
                              <div class="form-control-select">
                                <select class="form-control" id="shipment_service">
                                  <option value="">Select service</option>
                                  <option value="DHL SG">DHL SG</option>
                                  <option value="UPS SG">UPS SG</option>
                                  <option value="CT KOREA">CT KOREA</option>
                                </select>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-3">
                            <label class="form-label">Reason export</label>
                            <div class="form-control-wrap ">
                              <div class="form-control-select">
                                <select class="form-control" id="shipment_reason">
                                  <option value="">Select reason export</option>
                                  <option value="Gift">Gift</option>
                                  <option value="Sample">Sample</option>
                                  <option value="Other">Other</option>
                                </select>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-3">
                            <label class="form-label">User</label>
                            <div class="form-control-wrap ">
                              <div class="form-control-select">
                                <select class="form-control" id="uid">
                                  <option value="{{Auth::user()->id}}">Select user</option>
                                  @foreach ($user_group as $user)
                                    <option value="{{$user->id}}">{{$user->name}}</option>
                                  @endforeach
                                </select>
                              </div>
                            </div>
                          </div>
                        @else
                          <div class="col-lg-4">
                            <label class="form-label">Shipment type</label>
                            <div class="form-control-wrap ">
                              <div class="form-control-select">
                                <select class="form-control" id="shipment_type">
                                  <option value="">Select type</option>
                                  <option value="DOC">DOC</option>
                                  <option value="WPX">WPX</option>
                                </select>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-4">
                            <label class="form-label">Services</label>
                            <div class="form-control-wrap ">
                              <div class="form-control-select">
                                <select class="form-control" id="shipment_service">
                                  <option value="">Select service</option>
                                  <option value="DHL SG">DHL SG</option>
                                  <option value="UPS SG">UPS SG</option>
                                  <option value="CT KOREA">CT KOREA</option>
                                </select>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-4">
                            <label class="form-label">Reason export</label>
                            <div class="form-control-wrap ">
                              <div class="form-control-select">
                                <select class="form-control" id="shipment_reason">
                                  <option value="">Select reason export</option>
                                  <option value="Gift">Gift</option>
                                  <option value="Sample">Sample</option>
                                  <option value="Other">Other</option>
                                </select>
                              </div>
                            </div>
                          </div>
                        @endif
                      </div>
                    </div>
                  </div>
                </div>
                <!-- End shipment type --> 
                <!-- Start Product info -->
                <div class="col-lg-12">
                  <div class="card h-100">
                    <div class="card-inner">
                      <div class="row g-4">
                        <div class="col-lg-12">
                          <label class="form-label">Product Information</label>
                          <table class="table" id="tableitem">
                            <thead>
                              <tr>
                                <th>Full Description of Goods </th>
                                <th>HS Code</th>
                                <th>Quantily </th>
                                <th>Type</th>
                                <th>Unit Price</th>
                                <th>Subtotal</th>
                                <th>Remove</th>
                              </tr>
                            </thead>
                            <tbody id="product_table" >
                              <tr>
                                <td><input type="text" class="form-control item-name"  placeholder="item name"></td>
                                <td><input type="text" class="form-control item-hscode"  placeholder="HS CODE" ></td>
                                <td><input type="number" class="form-control item-quantily"  placeholder="quantily"></td>
                                <td><select class="form-control item-type">
                                    <option value="PCS">PCS</option>
                                    <option value="BOX">BOX</option>
                                  </select></td>
                                <td><input type="number" class="form-control item-price"></td>
                                <td><input type="text" class="form-control item-subtotal" readonly></td>
                                <td><em class="icon ni ni-trash-fill"></em></td>
                              </tr>
                            </tbody>
                          </table>
                          <button type="button" class="btn btn-primary" onclick="displayResult()">+ Add product</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- End Product info --> 
                <!-- Start package info -->
                <div class="col-lg-12">
                  <div class="card h-100">
                    <div class="card-inner">
                      <div class="row g-4">
                        <div class="col-lg-12">
                          <div class="d-flex justify-content-between">
                            <div class="form-label">Package Information</div>
                            <div class="d-flex justify-content-end">
                              <div class="form-control-wrap">
                                <div class="input-group input-group-sm">
                                  <div class="input-group-prepend"> <span class="input-group-text" id="inputGroup-sizing-sm">Total package</span> </div>
									<span id="totalpkg" class="form-control"></span></div>
                              </div>
							                              <div>&nbsp;&nbsp;&nbsp;&nbsp;</div>
	
							<div class="form-control-wrap">
                                <div class="input-group input-group-sm">
                                  <div class="input-group-prepend"> <span class="input-group-text" id="inputGroup-sizing-sm">Total weight</span> </div>
									<span id="totalweight" class="form-control"></span></div>
                              </div>	
                              <div>&nbsp;&nbsp;&nbsp;&nbsp;</div>
                              <div class="form-control-wrap">
                                <div class="input-group input-group-sm">
                                  <div class="input-group-prepend"> <span class="input-group-text" id="inputGroup-sizing-sm">Total charge</span> </div>
									<span id="totalcharge" class="form-control"></span></div>
                              </div>
                            </div>
                          </div>
                          <table class="table" id="tablepkg">
                            <thead>
                              <tr>
                                <th>Qty</th>
                                <th>Type pkg</th>
                                <th>Length (cm) </th>
                                <th>Width(cm)</th>
                                <th>Height (cm)</th>
                                <th>Weight (kg)</th>
                                <th>Sub weight</th>
								                <th>Sub volume</th>
                                <th>Sub Charge</th>
                                <th>Action</th>
                              </tr>
                            </thead>
                            <tbody id="package_table">
                              <tr>
                                <td><select class="form-control qtypkg" id="qtypkg">
                                    <option value="0">0</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                  </select></td>
                                <td><select class="form-control pkg-type" id="item-type">
                                    <option value="BOX">BOX</option>
                                    <option value="BAG">BAG</option>
                                    <option value="PALLET">PALLET</option>
                                  </select></td>
                                <td><input type="number" class="form-control pkglength" id="pkglength" value="" placeholder="length (cm)"></td>
                                <td><input type="number" class="form-control pkgwidth" id="pkgwidth" value="" placeholder="width (cm)"></td>
                                <td><input type="number" class="form-control pkgheight" id="pkgheight" value="" placeholder="height (cm)"></td>
                                <td><input type="number" class="form-control pkgweight" id="pkgweight" value="" placeholder="weight (kg)"></td>
                                <td><span id="subweight" class="form-control subweight"></span></td>
								                <td><span id="subvolume" class="form-control subvolume"></span></td>  
                                <td><span id="subcharge" class="form-control subcharge"></span></td>
                                <td><button type="button" class="btn btn-primary addpkgbtn" onclick="displaypkg()">+ Add</button>&nbsp;&nbsp;&nbsp;&nbsp;<button id="removePackInfo" type="button" class="btn btn-danger">- Remove</button></td>
                              </tr>
                            </tbody>
                          </table>
                          <div>
                            <button id="submitForm" type="button" class="btn btn-success">Submit shipment</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- End package info --> 
              </div>
            </div>
            <!-- .nk-block-content --> 
          </div>
        </div>
      </div>
    </div>
    <!-- content @e --> 
    <!-- footer @s -->
    <div class="nk-footer">
      <div class="container-fluid">
        <div class="nk-footer-wrap">
          <div class="nk-footer-copyright"> &copy; 2021 DashLite. Template by <a href="https://softnio.com" target="_blank">Softnio</a> </div>
          <div class="nk-footer-links">
            <ul class="nav nav-sm">
              <li class="nav-item dropup"> <a herf="#" class="dropdown-toggle dropdown-indicator has-indicator nav-link" data-toggle="dropdown" data-offset="0,10"><span>English</span></a>
                <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                  <ul class="language-list">
                    <li> <a href="#" class="language-item"> <span class="language-name">English</span> </a> </li>
                    <li> <a href="#" class="language-item"> <span class="language-name">Español</span> </a> </li>
                    <li> <a href="#" class="language-item"> <span class="language-name">Français</span> </a> </li>
                    <li> <a href="#" class="language-item"> <span class="language-name">Türkçe</span> </a> </li>
                  </ul>
                </div>
              </li>
              <li class="nav-item"> <a href="#" data-toggle="modal" data-target="#region" class="nav-link"><em class="icon ni ni-globe"></em><span class="ml-1">Select region</span></a> </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- footer @e --> 
  </div>
  <!-- wrap @e --> 
</div>
<!-- main @e --> 
<!-- app-root @e --> 
<!-- select region modal -->
<div class="modal fade" tabindex="-1" role="dialog" id="region">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content"> <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
      <div class="modal-body modal-body-md">
        <h5 class="title mb-4">Select Your Country</h5>
        <div class="nk-country-region">
          <ul class="country-list text-center gy-2">
            <li> <a href="#" class="country-item"> <img src="{{ asset('images/flags/arg.png')}}" alt="" class="country-flag"> <span class="country-name">Argentina</span> </a> </li>
            <li> <a href="#" class="country-item"> <img src="{{ asset('images/flags/aus.png')}}" alt="" class="country-flag"> <span class="country-name">Australia</span> </a> </li>
            <li> <a href="#" class="country-item"> <img src="{{ asset('images/flags/bangladesh.png')}}" alt="" class="country-flag"> <span class="country-name">Bangladesh</span> </a> </li>
            <li> <a href="#" class="country-item"> <img src="{{ asset('images/flags/canada.png')}}" alt="" class="country-flag"> <span class="country-name">Canada <small>(English)</small></span> </a> </li>
            <li> <a href="#" class="country-item"> <img src="{{ asset('images/flags/china.png')}}" alt="" class="country-flag"> <span class="country-name">Centrafricaine</span> </a> </li>
            <li> <a href="#" class="country-item"> <img src="{{ asset('images/flags/china.png')}}" alt="" class="country-flag"> <span class="country-name">China</span> </a> </li>
            <li> <a href="#" class="country-item"> <img src="{{ asset('images/flags/french.png')}}" alt="" class="country-flag"> <span class="country-name">France</span> </a> </li>
            <li> <a href="#" class="country-item"> <img src="{{ asset('images/flags/germany.png')}}" alt="" class="country-flag"> <span class="country-name">Germany</span> </a> </li>
            <li> <a href="#" class="country-item"> <img src="{{ asset('images/flags/iran.png')}}" alt="" class="country-flag"> <span class="country-name">Iran</span> </a> </li>
            <li> <a href="#" class="country-item"> <img src="{{ asset('images/flags/italy.png')}}" alt="" class="country-flag"> <span class="country-name">Italy</span> </a> </li>
            <li> <a href="#" class="country-item"> <img src="{{ asset('images/flags/mexico.png')}}" alt="" class="country-flag"> <span class="country-name">México</span> </a> </li>
            <li> <a href="#" class="country-item"> <img src="{{ asset('images/flags/philipine.png')}}" alt="" class="country-flag"> <span class="country-name">Philippines</span> </a> </li>
            <li> <a href="#" class="country-item"> <img src="{{ asset('images/flags/portugal.png')}}" alt="" class="country-flag"> <span class="country-name">Portugal</span> </a> </li>
            <li> <a href="#" class="country-item"> <img src="{{ asset('images/flags/s-africa.png')}}" alt="" class="country-flag"> <span class="country-name">South Africa</span> </a> </li>
            <li> <a href="#" class="country-item"> <img src="{{ asset('images/flags/spanish.png')}}" alt="" class="country-flag"> <span class="country-name">Spain</span> </a> </li>
            <li> <a href="#" class="country-item"> <img src="{{ asset('images/flags/switzerland.png')}}" alt="" class="country-flag"> <span class="country-name">Switzerland</span> </a> </li>
            <li> <a href="#" class="country-item"> <img src="{{ asset('images/flags/uk.png')}}" alt="" class="country-flag"> <span class="country-name">United Kingdom</span> </a> </li>
            <li> <a href="#" class="country-item"> <img src="{{ asset('images/flags/english.png')}}" alt="" class="country-flag"> <span class="country-name">United State</span> </a> </li>
          </ul>
        </div>
      </div>
    </div>
    <!-- .modal-content --> 
  </div>
  <!-- .modla-dialog --> 
</div>
<!-- .modal --> 
<!-- JavaScript --> 
<script src="{{ asset('./assets/js/bundle.js?ver=2.9.0') }}"></script> 
<script src="{{ asset('./assets/js/scripts.js?ver=2.9.0') }}"></script>
<script>
  $().ready(function() {
    @if(!is_null($sender))
      var val= "{{$sender->country_name}}";
      $('#scountry_name').val(val);
      $('#scountry_name').trigger("change");
    @endif
    @if(!is_null($receiver))
      var val= "{{$receiver->country_name}}";
      $('#rcountry_name').val(val);
      $('#rcountry_name').trigger("change");
    @endif
  });

  $(document).on('click', '.ni-trash-fill', function() {
    $(this).parent().parent().remove();
  });
</script>
<script>
  $(document).on('click', '.pkgGroupBtn', function() {
    var total_package = parseInt($('#totalpkg').text());
    var total_weight = parseInt($('#totalweight').text());
    var total_charge = parseInt($('#totalcharge').text());

    var weight = parseInt($(this).parent().parent().children().eq(5).children().val());
    var qty = parseInt($(this).parent().parent().children().eq(0).children().val());
    total_package -= qty;

    var length = parseInt($(this).parent().parent().children().eq(2).children().val());
    if (!length)
      length = 0;
    
    var width = parseInt($(this).parent().parent().children().eq(3).children().val());
    if (!width)
      width = 0;

    var height = parseInt($(this).parent().parent().children().eq(4).children().val());
    if (!height)
      height = 0;
    
    var subweight = qty * weight;
    total_weight -= subweight;
    $(this).parent().parent().children().eq(6).children().text(subweight);

    var subvolume = qty * length * width * height / 1000000;
    $(this).parent().parent().children().eq(7).children().text(subvolume);

    if (subvolume > subweight)
      var subcharge = subvolume;
    else
      var subcharge = subweight;
    $(this).parent().parent().children().eq(8).children().text(subcharge);
    total_charge -= subcharge;

    $('#totalpkg').text(total_package);
    $('#totalweight').text(total_weight);
    $('#totalcharge').text(total_charge);

    $(this).parent().parent().remove();
  });


  $('#submitForm').click(function() {
    var validate = validateForm();
    if (validate != 0) {
      var token = "{{ csrf_token() }}";
      var uid = "{{ Auth::user()->id }}";
      @if (Auth::user()->role == 2)
        uid = $('#uid').val();
      @endif
      
      var base_url = "{{url('/')}}";
      var url = base_url + "/shipment/add/rbooks"

      //automatic company name
      var rcompany_name = $('#rcompany_name').val();
      var rfull_name = $('#rfull_name').val();
      if (rcompany_name == '') {
        $('#rcompany_name').val(rfull_name);
        rcompany_name = rfull_name;
      }

      var scompany_name = $('#scompany_name').val();
      var sfull_name = $('#sfull_name').val();
      if (scompany_name == '') {
        $('#scompany_name').val(sfull_name);
        scompany_name = sfull_name;
      }

      var data = {
        _token: token,
        uid: uid,
        type: 1,
        company_name: rcompany_name,
        full_name: rfull_name,
        country_code: $('#rcountry_code').val(),
        address_1: $('#raddress1').val(),
        address_2: $('#raddress2').val(),
        zipcode: $('#rzipcode').val(),
        city: $('#rcity').val(),
        state: $('#rstate').val(),
        phone_number: $('#rphone_number').val(),
        email: $('#remail').val(),
        country_name: $('#rcountry_name').val()
      }
      $.post(url, data, function(res) {
        if (res.result == 'success') {
          console.log("Sender Address book successfully added!");
        }
      });

      var url = base_url + "/shipment/add/sbooks"

      var data = {
        _token: token,
        uid: uid,
        type: 0,
        company_name: scompany_name,
        full_name: sfull_name,
        country_code: $('#scountry_code').val(),
        address_1: $('#saddress1').val(),
        address_2: $('#saddress2').val(),
        zipcode: $('#szipcode').val(),
        city: $('#scity').val(),
        state: $('#sstate').val(),
        phone_number: $('#sphone_number').val(),
        email: $('#semail').val(),
        country_name: $('#scountry_name').val()
      }
      $.post(url, data, function(res) {
        if (res.result == 'success') {
          console.log("Sender Address book successfully added!");
        }
      });

      var url = base_url + "/shipment/add/all";
      var hwb = getHwb();
      
      var subtotals=$('.item-subtotal');
      var total_value=0;
      for(i=0;i<subtotals.length;i++){
        total_value+=parseFloat(subtotals[i].value);
      }
      console.log(total_value);

      var data = {
        mode: 'add',
        _token: token,
        uid: uid,
        hwb: hwb,
        total_pkg: $('#totalpkg').text(),
        total_weight: $('#totalweight').text(),
        total_charge: $('#totalcharge').text(),
        total_volume: 300,
        total_value: total_value,
        shipment_type: $('#shipment_type').val(),
        shipment_service: $('#shipment_service').val(),
        shipment_reason: $('#shipment_reason').val(),
        sender_company: scompany_name,
        sender_fullname: sfull_name,
        sender_country: $('#scountry_name').val(),
        sender_countrycode: $('#scountry_code').val(),
        sender_address1: $('#saddress1').val(),
        sender_address2: $('#saddress2').val(),
        sender_zipcode: $('#szipcode').val(),
        sender_city: $('#scity').val(),
        sender_state: $('#sstate').val(),
        sender_phone: $('#sphone_number').val(),
        sender_email: $('#semail').val(),
        receiver_country: $('#rcountry_name').val(),
        receiver_countrycode: $('#rcountry_code').val(),
        receiver_company: rcompany_name,
        receiver_fullname: rfull_name,
        receiver_address1: $('#raddress1').val(),
        receiver_address2: $('#raddress2').val(),
        receiver_zipcode: $('#rzipcode').val(),
        receiver_city: $('#rcity').val(),
        receiver_state: $('#rstate').val(),
        receiver_phone: $('#rphone_number').val(),
        receiver_email: $('#remail').val()
      }

      $.post(url,data,function(res){
        if (res.result == 'success') {
          var shipment_id = res.shipment_id;
          console.log('--------------shipment id-------------------',shipment_id);
          var records = [];
          var record = {};
          var item_names = document.getElementsByClassName('item-name');
          var hs_codes = document.getElementsByClassName('item-hscode');
          var qtys = document.getElementsByClassName('item-quantily');
          var types = document.getElementsByClassName('item-type');
          var unit_prices = document.getElementsByClassName('item-price');
          var subtotals = document.getElementsByClassName('item-subtotal');
          len = item_names.length;
          
          for (i =0; i < len; i++) {
            record.shipment_id = shipment_id;
            record.item_name = $(item_names[i]).val();
            record.hs_code = $(hs_codes[i]).val();
            record.qty = $(qtys[i]).val();
            record.type = $(types[i]).val();
            record.unit_price = $(unit_prices[i]).val();
            record.subtotal = subtotals[i].value;
            records.push(record);
            record ={};
          }
      
          var url = base_url + "/shipment/productInfo/add";
          var data = {
            mode: 'add',
            _token: token,
            records: records,
            uid: uid
          }
          
          $.post(url, data, function(res) {
            if (res.result == 'success') {
              console.log("product information added successfully.")
            }
          });
      
          var records = [];
          var record = {};
          var qty_pkgs = document.getElementsByClassName('qtypkg');
          var type_pkgs = document.getElementsByClassName('pkg-type');
          var length_pkgs = document.getElementsByClassName('pkglength');
          var width_pkgs = document.getElementsByClassName('pkgwidth');
          var height_pkgs = document.getElementsByClassName('pkgheight');
          var weight_pkgs = document.getElementsByClassName('pkgweight');
          var volume_pkgs = document.getElementsByClassName('subvolume');
          var charge_pkgs = document.getElementsByClassName('subcharge');
          var total_weights = document.getElementsByClassName('subweight');
          len = qty_pkgs.length;
          
          for (i =0; i < len; i++) {
            record.shipment_id = shipment_id;
            record.qty_pkg = $(qty_pkgs[i]).val();
            record.type_pkg = $(type_pkgs[i]).val();
            record.lenght_pkg = $(length_pkgs[i]).val();
            record.width_pkg = $(width_pkgs[i]).val();
            record.height_pkg = $(height_pkgs[i]).val();
            record.weight_pkg = $(weight_pkgs[i]).val();
            record.volume_pkg = volume_pkgs[i].innerHTML;
            record.charge_pkg = charge_pkgs[i].innerHTML;
            record.total_weight = total_weights[i].innerHTML;
            records.push(record);
            record ={};
          }
      
          var url = base_url + "/shipment/packageInfo/add";
          var data = {
            mode: 'add',
            _token: token,
            records: records,
            uid: uid
          }
          
          $.post(url, data, function(res) {
            if (res.result == 'success') {
              alert("Succesfully added!");
              location.href = base_url + '/shipment/index';
            }
          });
        }
      });

    }

  });

  function getHwb() {
    today = new Date();
    var month = parseInt(today.getMonth()) + 1;
    if (month < 10) {
      month = "0" + month;
    } else {
      month = month.toString();
    }
    var day = parseInt(today.getDate());
    if (day < 10) {
      day = "0" + day;
    } else {
      day = day.toString();
    }

    var random = Math.floor(Math.random() * 9999);
    if (random < 10)
      random = "000" + random;
    else if (random < 100)
      random = "00" + random;
    else if (random < 1000)
      random = "0" + random;
    else
      random = random.toString();

    var hwb = month + day + random;
    return hwb;
  }

  function validateForm() {
    // shipment global
    if ($('#shipment_type').val() == '') {
      alert('select shipment type!');
      return 0;
    }
    if ($('#shipment_service').val() == '') {
      alert('select shipment service!');
      return 0;
    }
    if ($('#shipment_reason').val() == '') {
      alert('select shipment reason!');
      return 0;
    }
    //sender
    if ($('#sfull_name').val() == '') {
      alert('select sender fullname!');
      return 0;
    }
    if ($('#saddress1').val() == '') {
      alert('select sender address1!');
      return 0;
    }
    if ($('#szipcode').val() == '') {
      alert('select sender zipcode!');
      return 0;
    }
    if ($('#sstate').val() == '') {
      alert('select sender state!');
      return 0;
    }
    if ($('#scity').val() == '') {
      alert('select sender city!');
      return 0;
    }
    if ($('#sphone_number').val() == '') {
      alert('select sender phonenumber!');
      return 0;
    }

    //receiver
    if ($('#rfull_name').val() == '') {
      alert('select receiver fullname!');
      return 0;
    }
    if ($('#raddress1').val() == '') {
      alert('select receiver address1!');
      return 0;
    }
    if ($('#rzipcode').val() == '') {
      alert('select receiver zipcode!');
      return 0;
    }
    if ($('#rstate').val() == '') {
      alert('select receiver state!');
      return 0;
    }
    if ($('#rcity').val() == '') {
      alert('select receiver city!');
      return 0;
    }
    if ($('#rphone_number').val() == '') {
      alert('select receiver phonenumber!');
      return 0;
    }
    //product info
    // if(document.getElementById('product_table').children.length < 1) {
    //   alert("type product information!");
    //   return 0;
    // }
    // //package nfo
    // if(document.getElementById('package_table').children.length < 1) {
    //   alert("add package information!");
    //   return 0;
    // }
    return 1;
  }

  $(document).on('change', '.item-price',function() {
    this.value=parseFloat(this.value).toFixed(2);
    var price = parseFloat($(this).val());
    var quantily = parseInt($(this).parent().parent().children().eq(2).children().val());
    if (!quantily)
      quantily = 0;
    var subtotal = price * quantily
    $(this).parent().parent().children().eq(5).children().val(subtotal.toFixed(2));
  });

  $(document).on('change', '.item-quantily',function() {
    this.value=parseInt(this.value).toFixed(0);
    var quantily = parseInt($(this).val());
    var price = parseFloat($(this).parent().parent().children().eq(4).children().val());
    if (!price)
      price = 0;
    var subtotal = price * quantily;
    $(this).parent().parent().children().eq(5).children().val(subtotal.toFixed(2));
  });


  $(document).on('change', '.pkgweight',function() {

    var weight = parseInt($(this).val());
    var qty = parseInt($(this).parent().parent().children().eq(0).children().val());

    var length = parseInt($(this).parent().parent().children().eq(2).children().val());
    if (!length)
      length = 0;
    
    var width = parseInt($(this).parent().parent().children().eq(3).children().val());
    if (!width)
      width = 0;

    var height = parseInt($(this).parent().parent().children().eq(4).children().val());
    if (!height)
      height = 0;
    
    var subweight = qty * weight;
    $(this).parent().parent().children().eq(6).children().text(subweight);

    var total_weight = 0;
    var weights = $('.subweight');
    for (i =0; i < weights.length;i++) {
      total_weight += parseInt(weights[i].innerHTML);
    }

    var subvolume = qty * length * width * height / 5000;
    $(this).parent().parent().children().eq(7).children().text(subvolume);

    if (subvolume > subweight)
      var subcharge = subvolume;
    else
      var subcharge = subweight;
    $(this).parent().parent().children().eq(8).children().text(subcharge);

    var total_charge = 0;
    var charges = $('.subcharge');
    for (i =0; i < charges.length;i++) {
      total_charge += parseInt(charges[i].innerHTML);
    }

    $('#totalweight').text(total_weight);
    $('#totalcharge').text(total_charge);

  });

  $(document).on('change', '.pkgheight',function() {
    
    var weight = parseInt($(this).parent().parent().children().eq(5).children().val());
    var qty = parseInt($(this).parent().parent().children().eq(0).children().val());

    var length = parseInt($(this).parent().parent().children().eq(2).children().val());
    if (!length)
      length = 0;

    var width = parseInt($(this).parent().parent().children().eq(3).children().val());
    if (!width)
      width = 0;

    var height = parseInt($(this).val());
    if (!weight)
      weight = 0;

    var subweight = qty * weight;
    $(this).parent().parent().children().eq(6).children().text(subweight);

    var subvolume = qty * length * width * height / 5000;
    $(this).parent().parent().children().eq(7).children().text(subvolume);

    if (subvolume > subweight)
      var subcharge = subvolume;
    else
      var subcharge = subweight;
    $(this).parent().parent().children().eq(8).children().text(subcharge);

    var total_charge = 0;
    var charges = $('.subcharge');
    for (i =0; i < charges.length;i++) {
      total_charge += parseInt(charges[i].innerHTML);
    }

    $('#totalcharge').text(total_charge);

  });

  $(document).on('change', '.pkgwidth',function() {
    
    var weight = parseInt($(this).parent().parent().children().eq(5).children().val());
    var qty = parseInt($(this).parent().parent().children().eq(0).children().val());

    var length = parseInt($(this).parent().parent().children().eq(2).children().val());
    if (!length)
      length = 0;

    var width = parseInt($(this).val());
    if (!weight)
      weight = 0;

    var height = parseInt($(this).parent().parent().children().eq(4).children().val());
    if (!height)
      height = 0;

    var subweight = qty * weight;
    $(this).parent().parent().children().eq(6).children().text(subweight);

    var subvolume = qty * length * width * height / 5000;
    $(this).parent().parent().children().eq(7).children().text(subvolume);

    if (subvolume > subweight)
      var subcharge = subvolume;
    else
      var subcharge = subweight;

    $(this).parent().parent().children().eq(8).children().text(subcharge);
    var total_charge = 0;
    var charges = $('.subcharge');
    for (i =0; i < charges.length;i++) {
      total_charge += parseInt(charges[i].innerHTML);
    }

    $('#totalcharge').text(total_charge);

  });

  $(document).on('change', '.pkglength',function() {
    
    var weight = parseInt($(this).parent().parent().children().eq(5).children().val());
    var qty = parseInt($(this).parent().parent().children().eq(0).children().val());

    var length = parseInt($(this).val());
    if (!weight)
      weight = 0;

    var width = parseInt($(this).parent().parent().children().eq(3).children().val());
    if (!width)
      width = 0;

    var height = parseInt($(this).parent().parent().children().eq(4).children().val());
    if (!height)
      height = 0;

    var subweight = qty * weight;
    $(this).parent().parent().children().eq(6).children().text(subweight);

    var subvolume = qty * length * width * height / 5000;
    $(this).parent().parent().children().eq(7).children().text(subvolume);

    if (subvolume > subweight)
      var subcharge = subvolume;
    else
      var subcharge = subweight;

    $(this).parent().parent().children().eq(8).children().text(subcharge);
    var total_charge = 0;
    var charges = $('.subcharge');
    for (i =0; i < charges.length;i++) {
      total_charge += parseInt(charges[i].innerHTML);
    }

    $('#totalcharge').text(total_charge);

  });

  $(document).on('change', '.qtypkg',function() {

    var weight = parseInt($(this).parent().parent().children().eq(5).children().val());
    if (!weight)
      weight = 0;
    var qty = parseInt($(this).val());
    var total_package = 0;
    var qtys = $('.qtypkg');
    for (i =0; i < qtys.length;i++) {
      total_package += parseInt(qtys[i].value);
    }

    var length = parseInt($(this).parent().parent().children().eq(2).children().val());
    if (!length)
      length = 0;

    var width = parseInt($(this).parent().parent().children().eq(3).children().val());
    if (!width)
      width = 0;

    var height = parseInt($(this).parent().parent().children().eq(4).children().val());
    if (!height)
      height = 0;

    var subweight = qty * weight;
    $(this).parent().parent().children().eq(6).children().text(subweight);

    var total_weight = 0;
    var weights = $('.subweight');
    for (i =0; i < weights.length;i++) {
      total_weight += parseInt(weights[i].innerHTML);
    }

    var subvolume = qty * length * width * height / 5000;
    $(this).parent().parent().children().eq(7).children().text(subvolume);

    if (subvolume > subweight)
      var subcharge = subvolume;
    else
      var subcharge = subweight;
    $(this).parent().parent().children().eq(8).children().text(subcharge);
    var total_charge = 0;
    var charges = $('.subcharge');
    for (i =0; i < charges.length;i++) {
      total_charge += parseInt(charges[i].innerHTML);
    }

    $('#totalpkg').text(total_package);
    $('#totalweight').text(total_weight);
    $('#totalcharge').text(total_charge);

  });
</script>
</body>
</html>
