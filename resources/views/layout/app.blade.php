<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    <title>Inventory System</title>
    <!-- GLOBAL MAINLY STYLES-->
    <link rel="icon" href="{{asset('upload')}}/icon.png" type="image/x-icon"/>
    <link href="{{asset('asset')}}/assets/vendors/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="{{asset('asset')}}/assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <link href="{{asset('asset')}}/assets/vendors/DataTables/datatables.min.css" rel="stylesheet" />
    <link href="{{asset('asset')}}/assets/vendors/themify-icons/css/themify-icons.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet"/>
    <!-- THEME STYLES-->
    <link href="{{asset('asset')}}/assets/css/main.min.css" rel="stylesheet" />
    <style>
        .bgView{
            background-color: #5f27cd;
            color: #fff;
        }
        .cardP{
            border-top: 5px solid #1abc9c;
        }
        .cardB{
            border-bottom: 4px solid #1abc9c;
        }
        .cardL{
            border-top: 5px solid #2ecc71;
        }
        .cardR{
            border-top: 5px solid #3498db;
        }
        label{
        font-weight:bold;
        }
        .form-group input::-webkit-input-placeholder {
            color:#ced6e0;
            font-size:15px;
        }
        .form-group select{
            font-size:15px;
            color:#ced6e0;
        }
        .shadow{
            box-shadow: 0 .15rem 1.75rem 0 rgba(58,59,69,.15)!important;
        }
    </style>
</head>

<body class="fixed-navbar">
    <div class="page-wrapper">
        <!-- START HEADER-->
        @include('partial.navbar')
        <!-- END HEADER-->
        <!-- START SIDEBAR-->
        @include('partial.sidebar')
        <!-- END SIDEBAR-->
        <div class="content-wrapper">
            <!-- START PAGE CONTENT-->
            @yield('content')
            <!-- END PAGE CONTENT-->
            @include('partial.footer')
        </div>
    </div>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header bg-danger text-white">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close text-white" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
            </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-danger" href="{{route('logout')}}">Logout</a>
        </div>
        </div>
    </div>
    </div>

    <script src="{{asset('asset')}}/assets/vendors/jquery/dist/jquery.min.js" type="text/javascript"></script>
    <script src="{{asset('asset')}}/assets/vendors/popper.js/dist/umd/popper.min.js" type="text/javascript"></script>
    <script src="{{asset('asset')}}/assets/vendors/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="{{asset('asset')}}/assets/vendors/metisMenu/dist/metisMenu.min.js" type="text/javascript"></script>
    <script src="{{asset('asset')}}/assets/vendors/DataTables/datatables.min.js" type="text/javascript"></script>
    <script src="{{asset('asset')}}/assets/vendors/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- PAGE LEVEL PLUGINS-->
    <script src="{{asset('asset')}}/assets/vendors/chart.js/dist/Chart.min.js" type="text/javascript"></script>
    <script src="{{asset('asset')}}/assets/vendors/jvectormap/jquery-jvectormap-2.0.3.min.js" type="text/javascript"></script>
    <script src="{{asset('asset')}}/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
    <script src="{{asset('asset')}}/assets/vendors/jvectormap/jquery-jvectormap-us-aea-en.js" type="text/javascript"></script>
    <!-- CORE SCRIPTS-->
    <script src="{{asset('asset')}}/assets/js/app.min.js" type="text/javascript"></script>
    <!-- PAGE LEVEL SCRIPTS-->
    <script src="{{asset('asset')}}/assets/js/scripts/dashboard_1_demo.js" type="text/javascript"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
    <script type="text/javascript">
        $(function() {
            $('#example-table').DataTable({
                pageLength: 10,
                //"ajax": './assets/demo/data/table_data.json',
                /*"columns": [
                    { "data": "name" },
                    { "data": "office" },
                    { "data": "extn" },
                    { "data": "start_date" },
                    { "data": "salary" }
                ]*/
            });
        })
    </script>
    <script type="text/javascript">
        @if(Session::has('message'))
            var type ="{{Session::get('alert-type', 'info')}}"
            switch(type){
            case 'info':
            toastr.info("{{Session::get('message')}}");
            break;
            case 'success':
            toastr.success("{{Session::get('message')}}");
            break;
            case 'warning':
            toastr.warning("{{Session::get('message')}}");
            break;
            case 'error':
            toastr.error("{{Session::get('message')}}");
            break;
            }
        @endif
    </script>
</body>
</html>