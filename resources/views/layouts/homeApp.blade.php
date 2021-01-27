<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Licence</title>

<!-- fontawesome icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"
      integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog=="
      crossorigin="anonymous" />
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
   
</head>
<body>
<div class="d-flex" id="wrapper">

<!-- Sidebar -->
<div class="bg-white border-right" id="sidebar-wrapper">
  <div class="sidebar-heading border-bottom">TNMCIS</div>
  <div class="list-group">
    <a href="{{ url('/') }}" class="list-group-item list-group-item-action bg-light border-0"><i class="fa fa-home pr-3"></i>Home</a>
    <a href="{{ url('personal') }}" class="list-group-item list-group-item-action bg-light border-0"><i class="fa fa-user pr-3"></i> Personal Details</a>
    <a href="{{ url('contact') }}" class="list-group-item list-group-item-action bg-light border-0"><i class="fa fa-address-book pr-3"></i>Contact Details</a>
    <a href="{{ url('basic') }}" class="list-group-item list-group-item-action bg-light border-0"><i class="fa fa-book pr-3"></i>Basic Education</a>
    <a href="{{ url('profetional') }}" class="list-group-item list-group-item-action bg-light border-0"><i class="fa fa-graduation-cap pr-3"></i>Professional Education</a>
    <a href="{{ url('documents') }}" class="list-group-item list-group-item-action bg-light border-0"><i class="fa fa-file-pdf pr-3"></i>Documents</a>
    <a href="{{ url('declaration') }}" class="list-group-item list-group-item-action bg-light border-0"><i class="fa fa-briefcase pr-3"></i>Declaration</a>
    <a href="{{ url('apply') }}" class="list-group-item list-group-item-action bg-light border-0"><i class="fa fa-file pr-3"></i>Apply</a>
    <a href="application" class="list-group-item list-group-item-action bg-light border-0"><i class="fa fa-bookmark pr-3"></i>My Application</a>
    <a href="status" class="list-group-item list-group-item-action bg-light border-0"><i class="fa fa-globe pr-3"></i>License Status</a>
  </div>
</div>
<!-- /#sidebar-wrapper -->

<!-- Page Content -->
<div id="page-content-wrapper">

  <nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom">

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
      <li class="nav-item dropdown">
          <a class="nav-link pr-3" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-bell"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Notifications</a>
          
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fa fa-user pr-1"></i>  Anordy Patrick
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
            <a class="dropdown-item text-center border-bottom">Settings</a>
            <a class="dropdown-item" href="#"><i class="fa fa-unlock pr-3"></i> Change Password</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#"><i class="fa fa-lock pr-3"></i>Sign Out</a>
          </div>
        </li>
      </ul>
    </div>
  </nav>

  <div class="container-fluid">
    @yield('content')
  </div>

</div>
<!-- /#page-content-wrapper -->

</div>
<!-- /#wrapper -->

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Menu Toggle Script -->
<script>
   // $("#menu-toggle").click(function(e) {
   //   e.preventDefault();
   //   $("#wrapper").toggleClass("toggled");
   // });
</script>
</body>
</html>
