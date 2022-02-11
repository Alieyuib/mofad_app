<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
  @section('head')
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google.">
    <meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template, eCommerce dashboard, analytic dashboard">
    <meta name="author" content="ThemeSelect">
    <title>MOFAD</title>

    <link rel="apple-touch-icon" href="{{asset('/app-assets/images/favicon/apple-touch-icon-152x152.png')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('/app-assets/images/favicon/favicon-32x32.png')}}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- BEGIN: VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('/app-assets/vendors/vendors.min.css')}}">
    <!-- END: VENDOR CSS-->
    <!-- BEGIN: Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('/app-assets/css/themes/vertical-gradient-menu-template/materialize.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/app-assets/css/themes/vertical-gradient-menu-template/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/app-assets/css/pages/login.css')}}">
    <!-- END: Page Level CSS-->
    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('/app-assets/css/custom/custom.css')}}">
    <!-- END: Custom CSS-->
    @show()
</head>
<!-- END: Head-->
@section('content')
      <body class="vertical-layout page-header-light vertical-menu-collapsible vertical-gradient-menu preload-transitions 1-column login-bg   blank-page blank-page" data-open="click" data-menu="vertical-gradient-menu" data-col="1-column">
        <div class="row">


          <div class="col s12">
            <div class="container">
                <div id="login-page" class="row">
                    <div class="col s12 m6 l4 z-depth-4 card-panel border-radius-6 login-card bg-opacity-8">
                        <form method="POST" action="{{ route('login') }}" class="login-form">
                        {{csrf_field()}}
                            <div class="row">
                                <div class="input-field col s12">
                                    <h5 class="ml-4 center-align ">Mofad Login</h5>
                                </div>
                            </div>
                            <div class="row margin">
                                <div class="input-field col s12">
                                    <i class="material-icons prefix pt-2">person_outline</i>
                                    <input id="email" type="email" class=" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus >
                                    <label for="email" class="center-align">Email</label>
                                    @error('email')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row margin">
                                <div class="input-field col s12">
                                    <i class="material-icons prefix pt-2">lock_outline</i>
                                    <input id="password" type="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                    <label for="password">Password</label>
                                </div>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="row">
                                <div class="col s12 m12 l12 ml-2 mt-1">
                                    <p>
                                        <label>
                                            <input type="checkbox"  class="form-check-input" checked="checked"  name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}/>
                                            <span>Remember Me</span>
                                        </label>
                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <button  class="btn waves-effect waves-light border-round gradient-45deg-purple-deep-orange col s12">Login</button>
                                </div>
                            </div>
                            <!-- register and forgot password links -->
                            <div class="row">
                                <!-- <div class="input-field col s6 m6 l6">
                                    <p class="margin medium-small"><a href="user-register.html">Register Now!</a></p>
                                </div>-->
                                <div class="input-field col s6 m6 l6">
                                    <p class="margin right-align medium-small"><a href="{{ route('password.request') }}">Forgot password ?</a></p>
                                </div>
                            </div> 
                        </form>
                    </div>
                </div>
            </div>
            <div class="content-overlay"></div>
        </div>
        </div>

      
        <!-- BEGIN VENDOR JS-->
      
      @show
      @section('footer_scripts')      
        <script src="{{asset('/app-assets/js/vendors.min.js')}}"></script>
      <!-- BEGIN VENDOR JS-->
      <!-- BEGIN PAGE VENDOR JS-->
      <!-- END PAGE VENDOR JS-->
      <!-- BEGIN THEME  JS-->
      <script src="{{asset('/app-assets/js/plugins.js')}}"></script>
      <script src="{{asset('/app-assets/js/search.js')}}"></script>
      <script src="{{asset('/app-assets/js/custom/custom-script.js')}}"></script>
      <!-- END THEME  JS-->
      <!-- BEGIN PAGE LEVEL JS-->
      <!-- END PAGE LEVEL JS-->
      @show
      </body>

      </html>
