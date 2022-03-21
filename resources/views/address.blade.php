<!DOCTYPE html>
<html lang="zxx" class="js">
<head>
<meta charset="utf-8">
<meta name="author" content="Softnio">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
<!-- Fav Icon  -->
<link rel="shortcut icon" href="{{asset('./images/favicon.png')}}">
<!-- Page Title  -->
<title>WG Management - Booking List |  Admin Template</title>
<!-- StyleSheets  -->
<link rel="stylesheet" href="{{asset('./assets/css/dashlite.css?ver=2.9.0')}}">
<link id="skin-default" rel="stylesheet" href="{{asset('./assets/css/theme.css?ver=2.9.0')}}">
</head>

<body class="nk-body bg-lighter npc-general has-sidebar ">
      <div class="nk-content ">
        <div class="container-fluid">
          <div class="nk-content-inner">
            <div class="nk-content-body">
              <div class="nk-block-head nk-block-head-sm">
                <div class="nk-block-between">
                  <div class="nk-block-head-content">
                    <h3 class="nk-block-title page-title">{{$type}} address list</h3>
                  </div>
                  <!-- .nk-block-head-content -->
                  <div class="nk-block-head-content">
                    <div class="toggle-wrap nk-block-tools-toggle"> <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="pageMenu"><em class="icon ni ni-menu-alt-r"></em></a>
                      <div class="toggle-expand-content" data-content="pageMenu">
                        <ul class="nk-block-tools g-3">
                          <!-- <li class="nk-block-tools-opt"> <a href="html/hotel/shipment-add.html" class="dropdown-toggle btn btn-icon btn-primary" data-toggle="dropdown"><em class="icon ni ni-plus"></em></a> </li> -->
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
                    <div class="card-inner">
                          <table class="datatable-init nowrap table">
                              <thead>
                                  <tr>
                                      <th>Action</th>
                                      <th>Company</th>
                                      <th>VAT</th>
                                      <th>Country</th>
                                      <th>Address 1</th>
                                      <th>Address 2</th>
                                      <th>City</th>
                                      <th>State</th>
                                      <th>Post code</th>
                                      <th>Phone</th>
                                  </tr>
                              </thead>
                              <tbody>
                                @foreach ($results as $result)
                                  <tr>
                                      <td><a href="{{url('/shipment/createwithaddress/')}}/<?php echo $result->id; ?>" class="btn btn-sm btn-primary">Select</a></td>
                                      <th>{{$result->company_name}}</th>
                                      <th>{{$result->country_code}}</th>
                                      <th>{{$result->address_1}}</th>
                                      <th>{{$result->address_2}}</th>
                                      <th>{{$result->city}}</th>
                                      <th>{{$result->state}}</th>
                                      <th>{{$result->zipcode}}</th>
                                      <th>{{$result->phone_number}}</th>
                                      <th>Phone</th>
                                  </tr>
                                @endforeach
                              </tbody>
                          </table>
                    </div>
                  </div>
                          <!-- .card --> 
                </div>
                <!-- .nk-block --> 
              </div>
            </div>
        </div>
      </div>
      
<!-- JavaScript --> 
<script src="{{asset('./assets/js/bundle.js?ver=2.9.0')}}"></script> 
<script src="{{asset('./assets/js/scripts.js?ver=2.9.0')}}"></script>
</body>
</html>