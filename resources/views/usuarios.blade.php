@extends('layout')

@section('content')
 


<div class="container-fluid pb-3">
  <h2>Usuarios</h2>
<button type="button" class="btn btn-info btn-lg pull-left" data-toggle="modal" data-target="#myModal">Crear Usuario</button>
<br>
<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
  <div class="modal-dialog modal-lg">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Usuario</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
    <div class="container text-center">
      </div>
      <div class="row">
        <div class="col-md-12 col-lg-6 col-xl-6">
        
            <form action="" method="post" id="validarpass" autocomplete="off">
	           <br>
              <input type="text" name="Nombre"  class="form-control" placeholder="Nombre" required="true"> <!--Nombre de usuario-->
              <br>
           <select id="Rol" class="form-control" title="Roles" name="roles">
           </select>
           <br>
           <input type="text" name="nom_usuario" id="nom_usuario" class="form-control" require="true" placeholder="Nombre Usuario"> <!--nombre de usuario-->
             <br>
              <input type="Contraseña" name="passwor" id="passwor" maxlength="10" require="true" class="form-control" placeholder="Contraseña"> <!--contraseña de usuario-->
             <br>
    </div>
    </div>
    </div>

      <div class="modal-footer">
      <input type="submit" value="Registrar cuenta" name="registro" class="btn btn-primary btn-block">
      </div>
    </div>
    </form>
  </div>
</div>
<br>
  <input class="form-control" id="myInput" type="text" placeholder="Search.."> 
  <br>
  <table class="table table-responsive table-bordered table-striped">
    <thead>
      <tr>
          <th>COD_PERSONA </th>
          <th>COD_ROL</th>
          <th>NOM_USUARIO</th>
          <th>CONTRASEÑA_USUARIO</th>
          <th>USR_REGISTRO</th>
          <th>DATE_REGISTRO</th>
      </tr>
    </thead>
    <tbody id="myTable">
      
    
        <tr>
          <td><?php// echo $producto['cod_usuario']?></td>
          <td><?php// echo $producto['COD_PERSONA']?></td>
          <td><?php// echo $producto['COD_ROL']?></td>
          <td><?php// echo $producto['NOM_USUARIO']?></td>
          <td><?php// echo $producto['CONTRASEÑA_USUARIO']?></td>
        <td>
        <a href="update.php?id=<?php// echo $producto['cod_persona']?>" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-marker"></i></a>
        <a href="delete.php?id=<?php //echo $producto['cod_persona']?>" class="btn btn-danger"><i class="far fa-trash-alt"></i></a>
        </td>
        </tr>
      
    </tbody>
  </table>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
                         <form action="update.php" method="post">
                            
                            <input type="text" name="nombre" id="nombre" class="form-control" value="<?php //echo $nombre; ?>">
                            <br>      
                  </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>

@endsection