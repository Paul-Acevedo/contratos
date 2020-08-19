<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Sistema Contratos </title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
      <a href="{{url('/welcome')}}" class="nav-link">Inicio</a>
      </li>
    </ul>


    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge"></span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">

          <a href="#" class="dropdown-item">
              <a href="{{url('/')}}"><strong><h3>Salir</h3></strong></a>
          </a>
        </div>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-skin-green elevation-1">
    <!-- Brand Logo -->
    <a href="{{url('/welcome')}}" class="brand-link">
      <img src="dist/img/logo.png" class="brand-image img-circle elevation-5"
           style="opacity: .8">
      <span class="brand-text font-weight-light"><strong>Sistema de contratos</strong></span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
    <hr class="text-primary">
 <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon  fas fa-users"></i>
              <p>
                Personas
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">6</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
              <a href="{{url('/personas')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Personas</p>
                </a>
              </li>
              <li class="nav-item">
              <a href="{{url('/usuarios')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Usuarios</p>
                </a>
              </li>
              <li class="nav-item">
              <a href="{{url('/empresas')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Empresas</p>
                </a>
              </li>
              <li class="nav-item">
              <a href="{{url('/clientes')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Clientes</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-file-alt"></i>
              <p>
                 Contratos
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
              <a href="{{url('clausulas')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Clausulas</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-pen-alt"></i>
              <p>
                Firmas
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('/firmas')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Firmas</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
    </div>
    <!-- /.sidebar -->
  </aside> 

  {{-- <ul class="navbar-nav  sidebar sidebar-dark accordion" > --}}



  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    
<div class="container-fluid">
  <br>
   <!-- Main content -->
   @yield('content')
   <!-- /.content -->
</div>
   
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2020 <a href="https://adminlte.io">SECURE CONTRACT</a>.</strong> CONTRATOS A TU DISPOSICIÓN.
  </footer>
</div> 
<!-- ./wrapper 

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->

<script src="dist/js/adminlte.min.js"></script>
</body>
</html>