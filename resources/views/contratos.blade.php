@extends('layout')

@section('content')
 


<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>SecureContractOnline | Starter</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">


  <!-- Editor de texto en linea -->
  <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

  <script>
      tinymce.init({
        selector: '#mytextarea'
      });
  </script>
  <!-- Fin editor de texto-->  


</head>
<body class="hold-transition sidebar-mini pace-primary">




    <div class="row pt-3">
        <div class="col-lg-2"></div>
        <div class="col-lg-8">
            <br><br><br>
            <section class="content">

                <!-- Default box -->
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">Contrato</h3>
          
                    <div class="card-tools">
                      <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                        <i class="fas fa-minus"></i></button>
                      <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                        <i class="fas fa-times"></i></button>
                    </div>
                  </div>
                  <div class="card-body">
                   
                  <!-- cuadro donde se abre las funciones del editor-->
                  <h1>Redacte su Contrato</h1>
                  <form method="post">
                      <textarea id="mytextarea">Redacte aquí su contrato</textarea>
                  </form>
          
                  </div>
                </div>
                <!-- /.card -->
          
              </section>
        </div>
        <div class="col-lg-2"></div>
    </div>


<script src="gestioncontratos/public/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="gestioncontratos/public/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- pace-progress -->
<script src="gestioncontratos/public/plugins/pace-progress/pace.min.js"></script>
<!-- AdminLTE App -->
<script src="gestioncontratos/public/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="gestioncontratos/public/dist/js/demo.js"></script>


@endsection