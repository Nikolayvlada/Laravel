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
<title>Register |  Admin Template</title>
<!-- StyleSheets  -->
<link rel="stylesheet" href="{{ asset('./assets/css/dashlite.css?ver=2.9.0') }}">
<link id="skin-default" rel="stylesheet" href="{{ asset('./assets/css/theme.css?ver=2.9.0') }}">
</head>

<body class="nk-body bg-white npc-general pg-auth">
<div class="nk-app-root"> 
  <!-- main @s -->
  <div class="nk-main "> 
    <!-- wrap @s -->
    <div class="nk-wrap nk-wrap-nosidebar"> 
      <!-- content @s -->
      <div class="nk-content ">
        <div class="nk-block nk-block-middle nk-auth-body wide-xs">
          <div class="brand-logo pb-4 text-center"> </div>
          <div class="card card-bordered">
            <div class="card-inner card-inner-lg">
              <div class="nk-block-head">
                <div class="nk-block-head-content">
                  <h4 class="nk-block-title">Register</h4>
                </div>
              </div>
              <form action="{{ route('register.custom') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                  <label class="form-label" for="name">Username&nbsp;</label>
                  <div class="form-control-wrap">
                    <input type="text" class="form-control form-control-lg" id="name" name="name" placeholder="Enter your name">
                    @if ($errors->has('name'))
                        <span class="text-danger">{{ $errors->first('name') }}</span>
                    @endif
                  </div>
                </div>
                <div class="form-group">
                  <label class="form-label" for="email">Email</label>
                  <div class="form-control-wrap">
                    <input type="text" class="form-control form-control-lg" id="email" name="email" placeholder="Enter your email address or username">
                    @if ($errors->has('email'))
                        <span class="text-danger">{{ $errors->first('email') }}</span>
                    @endif
                  </div>
                </div>
                <div class="form-group">
                  <label class="form-label" for="password">Password</label>
                  <div class="form-control-wrap"> <a href="#" class="form-icon form-icon-right passcode-switch lg" data-target="password"> <em class="passcode-icon icon-show icon ni ni-eye"></em> <em class="passcode-icon icon-hide icon ni ni-eye-off"></em> </a>
                    <input type="password" class="form-control form-control-lg" id="password" name="password" placeholder="Enter your passcode">
                    @if ($errors->has('password'))
                        <span class="text-danger">{{ $errors->first('password') }}</span>
                    @endif
                  </div>
                </div>
                <div class="form-group">
                  <label class="form-label" for="customFileLabel">Logo</label>
                  <div class="form-control-wrap">
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="customFile" name="customFile">
                      <label class="custom-file-label" for="customFile">Choose file</label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="custom-control custom-control-xs custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="checkbox">
                    <label class="custom-control-label" for="checkbox">I agree to Dashlite <a href="#">Privacy Policy</a> &amp; <a href="#"> Terms.</a></label>
                  </div>
                </div>
                <div class="form-group">
                  <button class="btn btn-lg btn-primary btn-block">Register</button>
                </div>
              </form>
              <div class="form-note-s2 text-center pt-4"> Already have an account? <a href="{{ route('signout') }}"><strong>Sign in</strong></a> </div>
            </div>
          </div>
        </div>
        <div class="nk-footer nk-auth-footer-full">
          <div class="container wide-lg">
            <div class="row g-3">
              <div class="col-lg-6">
                <div class="nk-block-content text-center text-lg-left">
                  <p class="text-soft">&copy; 2021 All Rights Reserved.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- wrap @e --> 
    </div>
    <!-- content @e --> 
  </div>
  <!-- main @e --> 
</div>
<!-- app-root @e --> 
<!-- JavaScript --> 
<script src="{{ asset('./assets/js/bundle.js?ver=2.9.0') }}"></script> 
<script src="{{ asset('./assets/js/scripts.js?ver=2.9.0') }}"></script> 
<!-- .modal -->

</html>