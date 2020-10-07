<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <?php $result=DB::table('companies')->first(); ?> 
  <title>{{$result->company_name}}</title>
   <link rel="icon" href="{{asset($result->company_image)}}" type="image/gif" >
    <!-- GLOBAL MAINLY STYLES-->
    <link href="{{asset('public/admin/assets/vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{asset('public/admin/assets/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" />
    <link href="{{asset('public/admin/assets/vendors/themify-icons/css/themify-icons.css')}}" rel="stylesheet" />
    <!-- PLUGINS STYLES-->
      <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

     <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
        <link href="{{asset('public/admin/assets/vendors/DataTables/datatables.min.css')}}" rel="stylesheet" />
    <link href="{{asset('public/admin/assets/vendors/jvectormap/jquery-jvectormap-2.0.3.css')}}" rel="stylesheet" />
    {{-- <link href="{{asset('public/admin/assets/css/bercodeform.css')}}" rel="stylesheet" /> --}}
    <!-- THEME STYLES-->
    <link href="{{asset('public/admin/assets/css/main.min.css')}}" rel="stylesheet" />
    <link href="{{asset('public/admin/assets/css/mystyle.css')}}" rel="stylesheet" />



    <!-- PAGE LEVEL STYLES-->

    <!-- Latest compiled and minified JavaScript -->
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.2/js/bootstrap-select.min.js"></script> --}}

    <!-- (Optional) Latest compiled and minified JavaScript translation files -->
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.2/js/i18n/defaults-*.min.js"></script> --}}
     <!-- CORE PLUGINS-->
    <script src="{{asset('public/admin/assets/vendors/jquery/dist/jquery.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('public/admin/assets/vendors/popper.js/dist/umd/popper.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('public/admin/assets/vendors/bootstrap/dist/js/bootstrap.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('public/admin/assets/vendors/metisMenu/dist/metisMenu.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('public/admin/assets/vendors/jquery-slimscroll/jquery.slimscroll.min.js')}}" type="text/javascript"></script>
      <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>


    <!-- PAGE LEVEL PLUGINS-->

     <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script src="{{asset('public/admin/assets/vendors/chart.js/dist/Chart.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('public/admin/assets/vendors/jvectormap/jquery-jvectormap-2.0.3.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('public/admin/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js')}}" type="text/javascript"></script>
    <script src="{{asset('public/admin/assets/vendors/jvectormap/jquery-jvectormap-us-aea-en.js')}}" type="text/javascript"></script>
    <!-- CORE SCRIPTS-->
    <script src="{{asset('public/admin/assets/vendors/DataTables/datatables.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('public/admin/assets/js/app.min.js')}}" type="text/javascript"></script>

    
</head>

<body class="fixed-navbar">
    <div class="page-wrapper">
        <!-- START HEADER-->
          @include('admin.includes.header')



        <!-- END HEADER-->
        <!-- START SIDEBAR-->
          @include('admin.includes.slidebar')
       

        <!-- END SIDEBAR-->
        <div class="content-wrapper">
            <!-- START PAGE CONTENT-->
         @yield('content')


            <!-- END PAGE CONTENT-->
          @include('admin.includes.footer')
      </div>
    </div>
    <!-- BEGIN THEME CONFIG PANEL-->

    <!-- CORE PLUGINS-->
    {{-- <script src="{{asset('public/admin/asset/vendors/jquery/dist/jquery.min.js')}}" type="text/javascript"></script> --}}
    <script src="{{asset('public/admin/assets/vendors/popper.js/dist/umd/popper.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('public/admin/assets/vendors/bootstrap/dist/js/bootstrap.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('public/admin/assets/vendors/metisMenu/dist/metisMenu.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('public/admin/assets/vendors/jquery-slimscroll/jquery.slimscroll.min.js')}}" type="text/javascript"></script>
    <!-- PAGE LEVEL PLUGINS-->
    <script src="{{asset('public/admin/assets/vendors/chart.js/dist/Chart.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('public/admin/assets/vendors/jvectormap/jquery-jvectormap-2.0.3.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('public/admin/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js')}}" type="text/javascript"></script>
    <script src="{{asset('public/admin/assets/vendors/jvectormap/jquery-jvectormap-us-aea-en.js')}}" type="text/javascript"></script>
    <!-- CORE SCRIPTS-->
    {{-- <script src="{{asset('public/admin/assets/js/app.min.js')}}" type="text/javascript"></script> --}}
    <!-- PAGE LEVEL SCRIPTS-->
    {{-- <script src="{{asset('public/admin/assets/js/scripts/dashboard_1_demo.js')}}" type="text/javascript"></script> --}}
</body>

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
</html>