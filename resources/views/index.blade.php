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
<title>WG Management - Booking List |  Admin Template</title>
<!-- StyleSheets  -->
<link rel="stylesheet" href="{{ asset('./assets/css/dashlite.css?ver=2.9.0') }}">
<link id="skin-default" rel="stylesheet" href="{{ asset('./assets/css/theme.css?ver=2.9.0') }}">


<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
</head>
<style>
  
  .modal-confirm {		
	color: #636363;
	width: 400px;
}
.modal-confirm .modal-content {
	padding: 20px;
	border-radius: 5px;
	border: none;
	text-align: center;
	font-size: 14px;
}
.modal-confirm .modal-header {
	border-bottom: none;   
	position: relative;
}
.modal-confirm h4 {
	text-align: center;
	font-size: 26px;
	margin: 30px 0 -10px;
}
.modal-confirm .close {
	position: absolute;
	top: -5px;
	right: -2px;
}
.modal-confirm .modal-body {
	color: #999;
}
.modal-confirm .modal-footer {
	border: none;
	text-align: center;		
	border-radius: 5px;
	font-size: 13px;
	padding: 10px 15px 25px;
}
.modal-confirm .modal-footer a {
	color: #999;
}		
.modal-confirm .icon-box {
	width: 80px;
	height: 80px;
	margin: 0 auto;
	border-radius: 50%;
	z-index: 9;
	text-align: center;
	border: 3px solid #f15e5e;
}
.modal-confirm .icon-box i {
	color: #f15e5e;
	font-size: 46px;
	display: inline-block;
	margin-top: 13px;
}
.modal-confirm .btn, .modal-confirm .btn:active {
	color: #fff;
	border-radius: 4px;
	background: #60c7c1;
	text-decoration: none;
	transition: all 0.4s;
	line-height: normal;
	min-width: 120px;
	border: none;
	min-height: 40px;
	border-radius: 3px;
	margin: 0 5px;
}
.modal-confirm .btn-secondary {
	background: #c1c1c1;
}
.modal-confirm .btn-secondary:hover, .modal-confirm .btn-secondary:focus {
	background: #a8a8a8;
}
.modal-confirm .btn-danger {
	background: #f15e5e;
}
.modal-confirm .btn-danger:hover, .modal-confirm .btn-danger:focus {
	background: #ee3535;
}
.trigger-btn {
	display: inline-block;
	margin: 100px auto;
}
</style>

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
            <!-- <div class="nk-header-brand d-xl-none"> <a href="html/index.html" class="logo-link"> <img class="logo-light logo-img" src="./images/logo.png" srcset="./images/logo2x.png 2x" alt="logo"> <img class="logo-dark logo-img" src="./images/logo-dark.png" srcset="./images/logo-dark2x.png 2x" alt="logo-dark"> </a> </div> -->
            <!-- .nk-header-brand -->
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
                        <li><a href="{{route ('signout')}}"><em class="icon ni ni-signout"></em><span>Sign out</span></a></li>
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
                    <h3 class="nk-block-title page-title">All shipment</h3>
                  </div>
                  <!-- .nk-block-head-content -->
                  <div class="nk-block-head-content">
                    <div class="toggle-wrap nk-block-tools-toggle"> <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="pageMenu"><em class="icon ni ni-menu-alt-r"></em></a>
                      <div class="toggle-expand-content" data-content="pageMenu">
                        <ul class="nk-block-tools g-3">
                          <li><a id="export" href="javascript:;void(0)" class="btn btn-white btn-outline-light"><em class="icon ni ni-download-cloud"></em><span>Export</span></a></li>
                          <!-- <li class="nk-block-tools-opt"> <a href="{{route('ship.create')}}" class="dropdown-toggle btn btn-icon btn-primary" data-toggle="dropdown"><em class="icon ni ni-plus"></em></a> </li> -->
                          <li class="nk-block-tools-opt"> <a href="{{route('ship.create')}}" class="dropdown-toggle btn btn-icon btn-primary" data-toggle=""><em class="icon ni ni-plus"></em></a> </li>
                        </ul>
                      </div>
                    </div>
                    <!-- .toggle-wrap --> 
                  </div>
                  <!-- .nk-block-head-content --> 
                </div>
                <!-- .nk-block-between --> 
              </div>
              <!-- .nk-block-head -->
              <div class="nk-block">
                <div class="card card-bordered card-stretch">
                  <div class="card-inner-group">
                    <div class="card-inner position-relative card-tools-toggle">
                      <div class="card-title-group">
                        <div class="card-tools">
                          <div class="form-inline flex-nowrap gx-3">
                            <div class="form-wrap w-150px">
                              <select id="multipleSelect" class="form-select form-select-sm" data-search="off" data-placeholder="Bulk Action">
                                <option value="">Bulk Action</option>
                                <!-- <option value="email">Export manifest</option> -->
                                <option value="deleteAll">Delete all</option>
                              </select>
                            </div>
                            <div class="btn-wrap"> <span class="d-none d-md-block">
                              <button id="applyBtn" class="btn btn-dim btn-outline-light">Apply</button>
                              </span> <span class="d-md-none">
                              <button class="btn btn-dim btn-outline-light btn-icon disabled"><em class="icon ni ni-arrow-right"></em></button>
                              </span> </div>
                          </div>
                          <!-- .form-inline --> 
                        </div>
                        <!-- .card-tools -->
                        <div class="card-tools mr-n1">
                          <ul class="btn-toolbar gx-1">
                            <!-- <li> <a href="#" class="btn btn-icon search-toggle toggle-search" data-target="search"><em class="icon ni ni-search"></em></a> </li> -->
                            <!-- li -->
                            <li class="btn-toolbar-sep"></li>
                            <!-- li -->
                            <li>
                              <div class="toggle-wrap"> <a href="#" class="btn btn-icon btn-trigger toggle" data-target="cardTools"><em class="icon ni ni-menu-right"></em></a>
                                <div class="toggle-content" data-content="cardTools">
                                  <ul class="btn-toolbar gx-1">
                                    <li class="toggle-close"> <a href="#" class="btn btn-icon btn-trigger toggle" data-target="cardTools"><em class="icon ni ni-arrow-left"></em></a> </li>
                                    <!-- li -->
                                    <li>
                                      <!-- <div class="dropdown"> <a href="#" class="btn btn-trigger btn-icon dropdown-toggle" data-toggle="dropdown"> -->
                                        <!-- <div class="dot dot-primary"></div>
                                        <em class="icon ni ni-filter-alt"></em> </a>
                                        <div class="filter-wg dropdown-menu dropdown-menu-xl dropdown-menu-right">
                                          <div class="dropdown-head"> <span class="sub-title dropdown-title">Filter Shipment</span>
                                            <div class="dropdown"> <a href="#" class="btn btn-sm btn-icon"> <em class="icon ni ni-more-h"></em> </a> </div>
                                          </div>
                                          <div class="dropdown-body dropdown-body-rg">
                                            <div class="row gx-6 gy-3">
                                              <div class="col-6">
                                                <div class="form-group">
                                                  <label class="overline-title overline-title-alt">Status</label>
                                                  <select class="form-select form-select-sm">
                                                    <option value="any">Any Status</option>
                                                    <option value="paid">Pending</option>
                                                    <option value="due">Cancel</option>
                                                  </select>
                                                </div>
                                              </div>
                                              <div class="col-6">
                                                <div class="form-group">
                                                  <label class="overline-title overline-title-alt">Payment Status</label>
                                                  <select class="form-select form-select-sm">
                                                    <option value="any">Any Type</option>
                                                    <option value="single">Paid</option>
                                                  </select>
                                                </div>
                                              </div>
                                              <div class="col-12">
                                                <div class="form-group">
                                                  <button type="button" class="btn btn-secondary">Filter</button>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="dropdown-foot between"> <a class="clickable" href="#">Reset Filter</a> <a href="#">Save Filter</a> </div>
                                        </div> -->
                                        <!-- .filter-wg --> 
                                      <!-- </div> -->
                                      <!-- .dropdown --> 
                                    </li>
                                    <!-- li -->
                                    <li>
                                      <!-- <div class="dropdown"> <a href="#" class="btn btn-trigger btn-icon dropdown-toggle" data-toggle="dropdown"> <em class="icon ni ni-setting"></em> </a>
                                        <div class="dropdown-menu dropdown-menu-xs dropdown-menu-right">
                                          <ul class="link-check">
                                            <li><span>Show</span></li>
                                            <li id="li10" class=""><a href="javascript:;">10</a></li>
                                            <li id="li20" class=""><a href="javascript:;">20</a></li>
                                            <li id="li50" class=""><a href="javascript:;">50</a></li>
                                          </ul>
                                          <ul class="link-check">
                                            <li><span>Order</span></li>
                                            <li class="active"><a href="#">DESC</a></li>
                                            <li><a href="#">ASC</a></li>
                                          </ul>
                                        </div>
                                      </div> -->
                                      <!-- .dropdown --> 
                                    </li>
                                    <!-- li -->
                                  </ul>
                                  <!-- .btn-toolbar --> 
                                </div>
                                <!-- .toggle-content --> 
                              </div>
                              <!-- .toggle-wrap --> 
                            </li>
                            <!-- li -->
                          </ul>
                          <!-- .btn-toolbar --> 
                        </div>
                        <!-- .card-tools --> 
                      </div>
                      <!-- .card-title-group -->
                      <div class="card-search search-wrap" data-search="search">
                        <div class="card-body">
                          <div class="search-content"> <a href="#" class="search-back btn btn-icon toggle-search" data-target="search"><em class="icon ni ni-arrow-left"></em></a>
                            <input type="text" class="form-control border-transparent form-focus-none" placeholder="Search by user or email">
                            <button class="search-submit btn btn-icon"><em class="icon ni ni-search"></em></button>
                          </div>
                        </div>
                      </div>
                      <!-- .card-search --> 
                    </div>
                    <!-- .card-inner -->
                    <div class="card-inner p-0">
                      <div class="nk-tb-list nk-tb-ulist">
                        <div class="nk-tb-item nk-tb-head">
                          <div class="nk-tb-col nk-tb-col-check">
                            <div class="custom-control custom-control-sm custom-checkbox notext">
                              <input id="checkAll" type="checkbox" class="custom-control-input">
                              <label class="custom-control-label" for="checkAll"></label>
                            </div>
                          </div>
                          <div class="nk-tb-col"><span class="sub-text">HWB</span></div>
                          <div class="nk-tb-col tb-col-mb"><span class="sub-text">Sender</span></div>
                          <div class="nk-tb-col tb-col-mb"><span class="sub-text">Type</span></div>
                          <div class="nk-tb-col tb-col-mb"><span class="sub-text">Receiver</span></div>
                          <div class="nk-tb-col tb-col-mb"><span class="sub-text">Destination</span></div>
                          <div class="nk-tb-col tb-col-md"><span class="sub-text">Status</span></div>
                          <div class="nk-tb-col tb-col-mb"><span class="sub-text">Create on</span></div>
                          <div class="nk-tb-col tb-col-mb"><span class="sub-text text-right">Action</span></div>
                        </div>
                        <!-- .nk-tb-item -->
                        @foreach ($results as $result)
                          <div class="nk-tb-item record" id="row{{$result->id}}">
                            <div class="nk-tb-col nk-tb-col-check">
                              <div class="custom-control custom-control-sm custom-checkbox notext">
                                <input type="checkbox" class="custom-control-input" id="{{$result->id}}">
                                <label class="custom-control-label" for="{{$result->id}}"></label>
                              </div>
                            </div>
                            <div class="nk-tb-col"> <a href="{{url('/')}}/shipment/edit/<?php echo $result->id; ?>/<?php echo $result->uid; ?>"><span class="text-primary">{{$result->hwb}}</span></a> </div>
                            <div class="nk-tb-col tb-col-md">
                              <div class="user-card">
                                <div class="user-info"> <span class="tb-lead">{{$result->sender_fullname}}<span class="dot dot-warning d-md-none ml-1"></span></span> </div>
                              </div>
                            </div>
                            <div class="nk-tb-col tb-col-mb"> <span>{{$result->shipment_type}} </span> </div>
                            <div class="nk-tb-col tb-col-md"> <span>{{$result->receiver_fullname}}</span> </div>
                            <div class="nk-tb-col tb-col-lg"><span>{{$result->sender_country}}</span> </div>
                            <div class="nk-tb-col tb-col-md"> <span class="tb-status text-pending">Pending</span> </div>
                            <!-- <div class="nk-tb-col tb-col-lg"> <span>07 Feb 2021</span> </div> -->
                            <div class="nk-tb-col tb-col-lg"> <span>{{$result->created_at}}</span> </div>
                            <div class="nk-tb-col nk-tb-col-tools">
                              <ul class="nk-tb-actions gx-1">
                                <li>
                                  <div class="drodown"> <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-download"></em></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                      <ul class="link-list-opt no-bdr">
                                        <li><a href="{{url('/')}}/shipment/print/<?php echo $result->id; ?>/<?php echo $result->uid; ?>"><em class="icon ni ni-printer-fill"></em><span>Print HAWB</span></a></li>
                                        <!-- <li><a href="#"><em class="icon ni ni-printer-fill"></em><span>Print Mark</span></a></li>
                                        <li><a href="#"><em class="icon ni ni-book-fill"></em><span>Print Invoice</span></a></li>
                                        <li><a href="#"><em class="icon ni ni-blank-alt"></em><span>Print CVCK</span></a></li> -->
                                      </ul>
                                    </div>
                                  </div>
                                </li>
                                <li>
                                  <div class="drodown"> <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                      <ul class="link-list-opt no-bdr">
                                        <li><a href="{{url('/')}}/shipment/edit/<?php echo $result->id; ?>/<?php echo $result->uid; ?>"><em class="icon ni ni-edit-fill"></em><span>Edit shipment</span></a></li>
                                        <li><a href="javascript:;delModalShow({{$result->id}})"><em class="icon ni ni-cross"></em><span>Cancel shipment</span></a></li>
                                      </ul>
                                    </div>
                                  </div>
                                </li>
                              </ul>
                            </div>
                          </div>
                        @endforeach
                        <!-- .nk-tb-item -->
                      </div>
                      <!-- .nk-tb-list --> 
                    </div>
                    <!-- .card-inner -->
                    <form id="pageForm" action="{{route('ship.paginate')}}" method="POST" style="display:none;">
                      @csrf
                      <input type="text" name="page_num">
                      <input type="text" name="show_num" value="10">
                      <input type="text" name="order" value="desc">
                    </form>
                    <div class="card-inner">
                      <div class="nk-block-between-md g-3">
                        <div class="g">
                          <ul id="pagination" class="pagination justify-content-center justify-content-md-start">
                            <li class="page-item"><a id="prev" class="page-link" href="javascript:;">Prev</a></li>
                            <!-- <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><span class="page-link"><em class="icon ni ni-more-h"></em></span></li>
                            <li class="page-item"><a class="page-link" href="#">6</a></li>
                            <li class="page-item"><a class="page-link" href="#">7</a></li> -->
                            <li class="page-item"><a id="next" class="page-link" href="javascript:;">Next</a></li>
                          </ul>
                          <!-- .pagination --> 
                        </div>
                        <div class="g">
                          <div class="pagination-goto d-flex justify-content-center justify-content-md-start">
                            <div  id="totalrows">Total: {{$total_rows}}&nbsp; Records</div>
                          </div>
                        </div>
                        <div class="g">
                          <div class="pagination-goto d-flex justify-content-center justify-content-md-start gx-3">
                            <div>Page</div>
                            <div>
                              <select id="page_select" class="form-select form-select-sm" data-search="on" data-dropdown="xs center">
                              </select>
                            </div>
                            <div>OF {{$total_page}}</div>
                          </div>
                        </div>
                        <!-- .pagination-goto --> 
                      </div>
                      <!-- .nk-block-between --> 
                    </div>
                    <!-- .card-inner --> 
                  </div>
                  <!-- .card-inner-group --> 
                </div>
                <!-- .card --> 
              </div>
              <!-- .nk-block --> 
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
                <li class="nav-item"> <a href="#" data-toggle="modal" data-target="#region" class="nav-link"><em class="icon ni ni-globe"></em><span class="ml-1">Select Region</span></a> </li>
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
</div>
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

<!-- Modal HTML -->
<div id="delModal" class="modal fade">
	<div class="modal-dialog modal-confirm">
		<div class="modal-content">
			<div class="modal-header flex-column">
				<div class="icon-box">
					<i class="material-icons">&#xE5CD;</i>
				</div>						
				<h4 class="modal-title w-100">Are you sure?</h4>	
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
			<div class="modal-body">
				<p>Do you really want to delete these records? This process cannot be undone.</p>
			</div>
			<div class="modal-footer justify-content-center">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
				<button id="delYes" type="button" class="btn btn-danger">Delete</button>
			</div>
		</div>
	</div>
</div>     
<!-- JavaScript --> 
<script src="{{ asset('./assets/js/bundle.js?ver=2.9.0') }}"></script> 
<script src="{{ asset('./assets/js/scripts.js?ver=2.9.0') }}"></script>
<script>
  $().ready(function() {

    //for export
    $('#export').click(function(){
      checkbox = $('input[type=checkbox]');
      ids = [];
      for (i = 1; i < checkbox.length; i++) {
        if (checkbox[i].checked)
          ids.push($(checkbox[i]).attr('id'));
      }
      if(ids.length)
        var url="{{url('')}}"+"/file-export?ids="+ids;
      else
      var url="{{url('')}}"+"/file-export?ids=0";
      this.href=url;
        
    });





    var total_page = "{{$total_page}}";
    var cur_page = "{{$cur_page}}";
    cur_page = parseInt(cur_page);

    //page display
    for(i=0;i<total_page;i++){
      var data = {
        id: i+1,
        text: i+1
      };
    
      var newOption = new Option(data.text, data.id, false, false);
      $('#page_select').append(newOption).trigger('change');
    }

    $('#page_select').val(cur_page);
    $('#page_select').trigger("change");

    $(document).on('change','#page_select',function(){
      cur_page = this.value;
      $('input[name=page_num]').val(cur_page);
      $('#pageForm').submit();
    });

    $('#prev').click(function() {
      cur_page -= 1;
      if (cur_page < 1) {
        cur_page = 1;
        return;
      } else {
        $('input[name=page_num]').val(cur_page);
        $('#pageForm').submit();
      }
    });

    $('#next').click(function() {
      cur_page += 1;
      if (cur_page > total_page) {
        cur_page = total_page;
        return;
      } else {
        $('input[name=page_num]').val(cur_page);
        $('#pageForm').submit();
      }
    });

    $('#li10').click(function() {
      $('input[name=show_num]').val(10);
      $('#pageForm').submit();
    });

    $('#li20').click(function() {
      $('input[name=show_num]').val(20);
      $('#pageForm').submit();
    });

    $('#li50').click(function() {
      $('input[name=show_num]').val(50);
      $('#pageForm').submit();
    });
  });
</script>
<script>
  var total_rows = parseInt("{{$total_rows}}");
  var del_id = -1;
  del_ids = [];
  var del_mode = "none";
  function delModalShow(id) {
    del_id = id;
    del_mode = 'single';
    $('#delModal').modal('show');
    $('.modal-body>p').text('Do you really want to delete this record? This process cannot be undone.');
  }

  $('#delYes').click(function(){
    $('#delModal').modal('hide');
    if (del_mode == 'single') {
      var url = "{{url('')}}" + "/shipment/delete/" + del_id;
      var token = "{{csrf_token()}}";
      $.get(url,{_token: token, id: del_id}, function(res){
        if(res.result=='success') {
          alert('Deleted successfully!');
          total_rows -= 1;
          if (total_rows < 0)
            total_rows = 0;
          console.log(document.getElementById('#totalrows'))
          $('#row'+del_id).remove();
          document.getElementById('totalrows').innerHTML = `total: ${total_rows} &nbsp;records`;
        }
      });
    } else {

      var url = "{{url('')}}" + "/shipment/deleteall/" + del_ids;
      var token = "{{csrf_token()}}";
      $.get(url,{_token: token, id: del_ids}, function(res){
        if(res.result=='success') {
          for(i =0; i < del_ids.length;i++) {
            $('#row'+del_ids[i]).remove();
            total_rows --;
            if (total_rows < 0)
              total_rows = 0;
            document.getElementById('totalrows').innerHTML = `total: ${total_rows} &nbsp;records`;
          }
          alert('Deleted successfully!');
        }
      });

      // del_ids = [];
    }
  });

  $('#applyBtn').click(function(){
    if($('#multipleSelect').val() == 'deleteAll') {

      checkbox = $('input[type=checkbox]');
      del_ids = [];
      for (i = 1; i < checkbox.length; i++) {
        // console.log(checkbox[i]);
        if (checkbox[i].checked)
          del_ids.push($(checkbox[i]).attr('id'));
      }

      if (del_ids.length == 0) {
        alert("select shipments to apply!");
      } else {
        del_model = "multiple";
        $('#delModal').modal('show');
      }
    } else{
      alert('select bulk action!');
    }
  });

  var check_flag = false;
  $('#checkAll').click(function() {
    var checkboxes = $('input[type=checkbox]');
    if (check_flag) {
      for (i = 0; i < checkboxes.length; i++) {
        checkboxes[i].checked = false;
      }
      check_flag = false;
    } else {
      for (i = 0; i < checkboxes.length; i++) {
        checkboxes[i].checked = true;
      }
      check_flag = true;
    }
  });
</script>
</body>
</html>