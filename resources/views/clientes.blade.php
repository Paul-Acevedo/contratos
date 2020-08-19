@extends('layout')
@section('content')
<div class="container-fluid pb-3">
  <h2>Clientes</h2>
<button type="button" class="btn btn-info btn-lg pull-left" data-toggle="modal" data-target="#myModal">Crear Cliente</button>
<br>
<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
  <div class="modal-dialog modal-lg">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Cliente</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
    <div class="container text-center">
      <div class="row">
          <div class="col-lg-3"></div>
        <div class="col-md-12 col-lg-6 col-xl-6">
            <form action="" method="post" id="validarpass" autocomplete="off">

                <select id="codcliente" class="form-control" title="codcliente" name="codcliente">
                	<option value="N">cod_cliente</option>
              	</select>
		<br>
	       	<select id="codempresa" class="form-control" title="codempresa" name="codempresa">
                	<option value="N">cod_empresa</option>
              	</select>
		<br>
		<select id="codcontratocomp" class="form-control" title="codcontratocomp" name="codcontratocomp">
                	<option value="N">cod_contrato</option>
              	</select>

              <br>
              <select id="tipocliente" class="form-control" title="tipocliente" name="tipocliente">
                <option value="N">Natural</option>
                <option value="J">Juridica</option>
              </select>
              <br>
      </div>
      <div class="col-lg-3"></div>
    </div>
    </div>
      <div class="modal-footer">
      <input type="submit" value="Registrar cliente" name="registro" class="btn btn-primary btn-block">
      </div>
    </div>
    </form>
    </div>
  </div>
</div>
<br>
  <input class="form-control" id="myInput" type="text" placeholder="Search.."> 
  <br>
  <table class="table table-responsive table-bordered table-striped">
    <thead>
      <tr>
          <th>cod_cliente </th>
          <th>cod_empresa</th>
	      <th>cod_contrato_compartido</th>
          <th>typcliente</th>
          <th>usr_registro</th>
          <th>date_registro</th>
          <th>Accion</th>
      </tr>
    </thead>
    <tbody id="myTable">
        <tr>
          <td>1</td>
          <td>1</td>
          <td>1</td>
          <td>1</td>
          <td>Moises</td>
          <td>22/junio/2020</td>
        <td>
        <a href="" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-marker"></i></a>
        <a href="" class="btn btn-danger"><i class="far fa-trash-alt"></i></a>
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
                              	<select id="tipocliente" class="form-control" title="tipocliente" name="tipocliente">
                			<option value="N">Natural</option>
                			<option value="J">Juridica</option>
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