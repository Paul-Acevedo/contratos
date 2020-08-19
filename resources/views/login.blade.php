<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Login</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="/ejemplo.php"><b>Secure Contract Online </b></a> <!--aqui es donde va direccionar a la paginas que seran pegadas en public  -->
 
    <!--logo/imagen-->
   <div class="container">          
    <img src="dist/img/SCO_Png_.png" class="mx-auto d-block" style="width:25%"> 
  </div>


  <div class="row">
    <div class="col-lg-4"></div>
    <div class="col-lg-4">
      <div class="card">
    
   
        <div class="card-body login-card-body">
          <p class="login-box-msg">Ingresa para comenzar tu sesion</p>
    
          <form action="../../index3.html" method="post"> <!-- -->
            <div class="input-group mb-3">
              <input type="email" class="form-control" placeholder="Email">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-envelope"></span>
                </div>
              </div>
            </div>
            <div class="input-group mb-3">
              <input type="password" class="form-control" placeholder="Password">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-lock"></span>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-8">
                <div class="icheck-primary">
                  <input type="checkbox" id="remember">
                  <label for="remember">
                    Remember Me
                  </label>
                </div>
              </div>
              <!-- /.col -->
              <div class="col-4">
              <a href="{{url('/welcome') }}" class="btn btn-primary btn-block"> Ingresar</a>
          
              </div>
            
            </div>
          </form>
    
          <!-- /.social-auth-links -->
    
          <p class="mb-1">
            <a href="/olvidar.php">Olvide mi contraseña</a>
          </p>
          <p class="mb-0">
            <a href="{{url('/registro')}}" class="text-center">Registrar una nueva cuenta</a>
          </p>
        </div>
        <!-- /.login-card-body -->
      </div>
    </div>
    <div class="col-lg-4"></div>
  </div>

  </div>
  <!--/.login-logo -->
 
</div>
<!-- /.login-box -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>
</html>
