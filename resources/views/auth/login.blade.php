<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    <title>Inventory &amp; POS System</title>
    <!-- GLOBAL MAINLY STYLES-->
    <link rel="icon" href="{{asset('upload')}}/icon.png" type="image/x-icon"/>
    <link href="{{asset('asset')}}/assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" />
    <!-- THEME STYLES-->
    <link href="{{asset('asset')}}/assets/css/main.css" rel="stylesheet" />
        <!-- PAGE LEVEL STYLES-->
    <link href="{{asset('asset')}}/assets/css/pages/auth-light.css" rel="stylesheet" />
    <style>
        .back{
            background-image: url({{asset('upload/back1.jpg')}});
        }
        .h2S{
            font-weight: bold;
            padding-bottom:20px;
            font-size: 40px;
            color: #fff;
        }
        .shadow{
        box-shadow: 0 .15rem 1.75rem 0 rgba(17, 1, 10, 0.9)!important;
    }
    .form-control{
        padding: 1rem 1rem;
    }
    .lineB{
            border-bottom: 2px solid #00a8ff;
            padding-bottom: 10px;
            font-weight: 600;
        }
    </style>
</head>

<body class="back">
    <div class="pt-5 mt-5">
        <h2 class="text-center h2S" >Welcome To  POS & Inventory Management System </h2>
    </div>
    <div class="content shadow">
    <form id="login-form" action="{{route('login')}}" method="post">
        @csrf
            <h2 class="login-title lineB">Log in</h2>
            <div class="mb-3 text-center">
                @if (session()->has('error'))
                <span class="text-red-800 bg-red-100 rounded py-2 px-4">{{session('error')}}</span>
                    @endif
            </div>
            <div class="form-group">
                <div class="input-group-icon right">
                    <div class="input-icon"><i class="fa fa-envelope"></i></div>
                    <input class="form-control" type="email" name="email" placeholder="Email" autocomplete="off">
                </div>
            </div>
            <div class="form-group">
                <div class="input-group-icon right">
                    <div class="input-icon"><i class="fa fa-lock font-16"></i></div>
                    <input class="form-control" type="password" name="password" placeholder="Password">
                </div>
            </div>
            <div class="form-group d-flex justify-content-between">
                <label class="ui-checkbox ui-checkbox-info">
                    <input type="checkbox">
                    <span class="input-span"></span>Remember me</label>
            </div>
            <div class="form-group">
                <button class="btn btn-info btn-block" type="submit">Login</button>
            </div>
            <div class="text-center">
                <a href="forgot_password.html">Forgot password?</a>
            </div>
        </form>
    </div>
    <!-- BEGIN PAGA BACKDROPS-->
    {{-- <div class="sidenav-backdrop backdrop"></div>
    <div class="preloader-backdrop">
        <div class="page-preloader">Loading</div>
    </div> --}}
    <!-- END PAGA BACKDROPS-->
    <!-- CORE PLUGINS -->
    <script src="{{asset('asset')}}/assets/vendors/jquery/dist/jquery.min.js" type="text/javascript"></script>
    <script src="{{asset('asset')}}/assets/vendors/popper.js/dist/umd/popper.min.js" type="text/javascript"></script>
    <script src="{{asset('asset')}}/assets/vendors/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- PAGE LEVEL PLUGINS -->
    <script src="{{asset('asset')}}/assets/vendors/jquery-validation/dist/jquery.validate.min.js" type="text/javascript"></script>
    <!-- CORE SCRIPTS-->
    <script src="{{asset('asset')}}/assets/js/app.js" type="text/javascript"></script>
    <!-- PAGE LEVEL SCRIPTS-->
    <script type="text/javascript">
        $(function() {
            $('#login-form').validate({
                errorClass: "help-block",
                rules: {
                    email: {
                        required: true,
                        email: true
                    },
                    password: {
                        required: true
                    }
                },
                highlight: function(e) {
                    $(e).closest(".form-group").addClass("has-error")
                },
                unhighlight: function(e) {
                    $(e).closest(".form-group").removeClass("has-error")
                },
            });
        });
    </script>
</body>

</html>