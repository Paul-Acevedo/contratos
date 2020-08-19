<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Registro</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>



<body class="hold-transition register-page">
<div class="register-box">
  


  <div class="card">
    <div class="card-body register-card-body">
      <p class="login-box-msg">Registrar una nueva cuenta</p>

      <form action="../../index.html" method="post">
        <!-- primer nombre-->
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="First name">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
          <!-- primer nombre-->
          <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Last name">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>

         <!-- correo-->
        <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <!-- contraseña-->
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <!-- confirmar contraseña-->
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Retype password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>

      <!--estado civil-->
        <div class="input-group mb-3"> 
          <div class="dropdown">
            <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">
             Estado Civil
             </button>
               <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Soltero</a>
                <a class="dropdown-item active" href="#">Union Libre</a>
                <a class="dropdown-item active" href="#">Casado</a>
                <a class="dropdown-item active" href="#">Viudo</a>
              </div>
         </div>  
        </div>



          <!-- sexo-->
          
         <div class="input-group mb-3"> 
          <div class="dropdown">
            <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">
             sexo
             </button>
               <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Femenino</a>
                <a class="dropdown-item active" href="#">Maculino</a>
              </div>
        </div>
        </div>


        
        <!--de acuerdo con los terminos-->
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="agreeTerms" name="terms" value="agree">
              <label for="agreeTerms">
               Acepta <a href="#">terminos</a>
              </label>
            </div>
          </div>
          <div class="col-5">
            <button type="submit" class="btn btn-warning btn-block">Register</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

    

    <a href="{{url('/')}}" class="text-center">Ya tengo una cuenta</a>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>

</body>
</html>
