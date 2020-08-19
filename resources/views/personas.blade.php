@extends('layout')

@section('content')
 


<div class="container-fluid pb-3">
  <h2>Personas</h2>
<button type="button" class="btn btn-info btn-lg pull-left" data-toggle="modal" data-target="#myModal">Crear Persona</button>
<br>
<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
  <div class="modal-dialog modal-lg">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Informacion</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
    <div class="container text-center">
      </div>
      <div class="row">
        <div class="col-lg-3"></div>
        <div class="col-md-12 col-lg-6 col-xl-6">
            <form action="../../Back-end/InsertDatos.php" method="post" id="validarpass" autocomplete="off">
              <h3 class="text-center text-primary">Datos personales</h3>
              <input type="text" name="nombre"  class="form-control" placeholder="Nombre" required="true">
              <br>
              <input type="text" name="apellido"  class="form-control" placeholder="Apellido" required="true">
              <br>
              <select id="sexo" class="form-control" title="sexo" name="sexo">
                <option value="M">SELECCIONE SEXO</option>
                <option value="M">Hombre</option>
                <option value="F">Hujer</option>
              </select>
              <br>
              <input type="number" name="edad"  class="form-control" placeholder="Edad" required="true">
              <br>
              <select id="estado" class="form-control" title="estado civil" name="estado">
                <option value="Casado">Casado</option>
                <option value="Soltero">Soltero</option>
                <option value="Union Libre">Union Libre</option>
              </select>
          <br>
           <select id="Rol" class="form-control" title="Roles" name="roles">
            <option value="M">SELECCIONE UN ROL</option>
            <option value="M">Usuario</option>
            <option value="F">Administrador</option>
                </select>
           <br>
           <input type="text" name="nom_usuario" id="nom_usuario" class="form-control" require="true" placeholder="Nombre Usuario">
              <br>
              <input type="email" name="correos" id="correos" class="form-control" require="true" placeholder="Correo Ejem: Example@gmai.com">
              <br>
              <input type="password" name="passwor" id="passwor" maxlength="10" require="true" class="form-control" placeholder="Password">
             <br>
             <input type="password" name="confirm_passwor" id="confirm_passwor" require="true" maxlength="10" class="form-control" placeholder="Password">
    </div>
    <div class="col-lg-3"></div>
    </div>
    </div>

      <div class="modal-footer">
      <input type="submit" value="Registrar Personas" name="registro" class="btn btn-primary btn-block">
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
          <th>Cod_persona </th>
          <th>Nombre</th>
          <th>Apellido</th>
          <th>Sexo</th>
          <th>Estado Civil</th>
          <th>Edad</th>
          <th>Fecha_Registro</th>
          <th>Registro_usurio</th>
          <th>Accion</th>
      </tr>
    </thead>
    <tbody id="myTable">
      
    
        <tr>
          <td><?php// echo $producto['cod_persona']?></td>
          <td><?php// echo $producto['nom_persona']?></td>
          <td><?php// echo $producto['Apellido']?></td>
          <td><?php// echo $producto['sexo']?></td>
          <td><?php// echo $producto['ind_civil']?></td>
          <td><?php// echo $producto['Edad']?></td>
          <td><?php// echo $producto['Usr_registro']?></td>
          <td><?php// echo $producto['fec_registro']?></td>
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
                            <input type="text" name="apellido" id="apellido" class="form-control"
                                placeholder="Apellido">
                            <br>
                           <select id="sexo" class="form-control" title="sexo" name="sexo">
                          <option value="Hombre">Hombre</option>
                          <option value="Mujer">Mujer</option>
                         </select>
                         <br>
                         <input type="number" name="edad"   class="form-control" placeholder="Edad" required="true">
                          <br>
                         <select id="estado" class="form-control" title="estado civil" name="estado">
                          <option value="casado">Casado</option>
                          <option value="soltero">Soltero</option>
                         <option value="union libre">Union Libre</option>
                         </select>
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

// fetch('url')
// .then(Response => Response.json())
// .then(data =>{
//   console.log(data);
// });
 
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