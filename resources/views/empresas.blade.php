@extends('layout')

@section('content')
<div class="register-box">
  <div class="register-logo">
    <img src="public/dist/img/avatar.png" >
  
  </div>
<div class="card">
    <div class="card-body register-card-body">
      <p class="login-box-msg">Registre su empresa</p>

      <form action="../../index.html" method="post">
        <div class="input-group mb-3">
          <input type="Nombre" class="form-control" placeholder="Nombre de la empresa">
          <div class="input-group-append">
            <div class="input-group-text">
              
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="Telefono" class="form-control" placeholder="Telefono">
          <div class="input-group-append">
            <div class="input-group-text">
              
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="Direccion" class="form-control" placeholder="Direccion">
          <div class="input-group-append">
            <div class="input-group-text">
             
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="agreeTerms" name="terms" value="agree">
              <label for="agreeTerms">
               Acepta los  <a href="#">terminos</a>
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-warning btn-block">Register</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
@endsection
