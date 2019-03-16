<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Star Dashboard </title>
  <!-- plugins:css -->
  <link rel="stylesheet" type="text/css" href="{{url('/')}}/css/app.css">
  <!-- <link rel="stylesheet" type="text/css" href="{{url('/')}}/css/materialdesignicons.min.css"> -->
  <link rel="stylesheet" type="text/css" href="{{url('/')}}/css/vendor.bundle.base.css">
  <link rel="stylesheet" type="text/css" href="{{url('/')}}/css/vendor.bundle.addons.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{'/'}}css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
</head>

<body>
  <div id="app">
    

        <div class="container-scroller">
          <!-- partial:partials/_navbar.html -->
          @include('navTop')
          <!-- partial -->
          <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_sidebar.html -->
           @include('navSide')
            <!-- partial -->
          @include('main-panel')
            <!-- main-panel ends -->
          </div>
          <!-- page-body-wrapper ends -->
        </div>
  </div>
  <!-- container-scroller -->



  <!-- plugins:js -->
  <script src="{{url('/')}}/js/vendor.bundle.base.js"></script>
  <script src="{{url('/')}}/js/vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="{{url('/')}}/js/off-canvas.js"></script>
  <script src="{{url('/')}}/js/misc.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="{{url('/')}}/js/dashboard.js"></script>
  <script src="{{url('/')}}/js/app.js"></script>
  <!-- End custom js for this page-->
</body>

</html>