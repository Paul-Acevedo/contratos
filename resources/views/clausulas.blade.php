@extends('layout')
@section('content')
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
    <div class="row">
        <div class="col-lg-2"></div>
        <div class="col-lg-8">
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
                  <form>
                      <textarea id="mytextarea">Redacte aquí su contrato</textarea>
                  </form>
                  <h3 class="text-warning" ><strong>Firma</strong></h3>
                  <canvas id='canvas' width="800" height="300" style='border: 1px solid #CCC;'>
                    <p>Tu navegador no soporta canvas</p>
                </canvas>
                <!-- creamos el form para el envio -->
                <form id='formCanvas' ENCTYPE='multipart/form-data'>
                    <button type='button' class="btn btn-warning" onclick='LimpiarTrazado()'>Borrar</button>
                    <button type='button' id="btng" class="btn btn-warning" onclick='GuardarTrazado()'>Guardar</button>
                    <input type='hidden' name='imagen' id='imagen'/>
                </form>
                  </div>
                </div>
                <!-- /.card -->
              </section>
              <!-- creamos el camvas -->
        </div>
        <div class="col-lg-2"></div>
    </div>
 <script>




/* Variables de Configuracion */
var idCanvas = 'canvas';
var idForm = 'formCanvas';
var inputImagen = 'imagen';
var estiloDelCursor = 'crosshair';
var colorDelTrazo = '#555';
var colorDeFondo = '#fff';
var grosorDelTrazo = 2;

/* Variables necesarias */
var contexto = null;
var valX = 0;
var valY = 0;
var flag = false;
var imagen = document.getElementById(inputImagen);
var anchoCanvas = document.getElementById(idCanvas).offsetWidth;
var altoCanvas = document.getElementById(idCanvas).offsetHeight;
var pizarraCanvas = document.getElementById(idCanvas);

/* Esperamos el evento load */
window.addEventListener('load', IniciarDibujo, false);

function IniciarDibujo() {
    /* Creamos la pizarra */
    pizarraCanvas.style.cursor = estiloDelCursor;
    contexto = pizarraCanvas.getContext('2d');
    contexto.fillStyle = colorDeFondo;
    contexto.fillRect(0, 0, anchoCanvas, altoCanvas);
    contexto.strokeStyle = colorDelTrazo;
    contexto.lineWidth = grosorDelTrazo;
    contexto.lineJoin = 'round';
    contexto.lineCap = 'round';
    /* Capturamos los diferentes eventos */
    pizarraCanvas.addEventListener('mousedown', MouseDown, false); // Click pc
    pizarraCanvas.addEventListener('mouseup', MouseUp, false); // fin click pc
    pizarraCanvas.addEventListener('mousemove', MouseMove, false); // arrastrar pc

    pizarraCanvas.addEventListener('touchstart', TouchStart, false); // tocar pantalla tactil
    pizarraCanvas.addEventListener('touchmove', TouchMove, false); // arrastras pantalla tactil
    pizarraCanvas.addEventListener('touchend', TouchEnd, false); // fin tocar pantalla dentro de la pizarra
    pizarraCanvas.addEventListener('touchleave', TouchEnd, false); // fin tocar pantalla fuera de la pizarra
}

function MouseDown(e) {
    flag = true;
    contexto.beginPath();
    valX = e.pageX - posicionX(pizarraCanvas);
    valY = e.pageY - posicionY(pizarraCanvas);
    contexto.moveTo(valX, valY);
}

function MouseUp(e) {
    contexto.closePath();
    flag = false;
}

function MouseMove(e) {
    if (flag) {
        contexto.beginPath();
        contexto.moveTo(valX, valY);
        valX = e.pageX - posicionX(pizarraCanvas);
        valY = e.pageY - posicionY(pizarraCanvas);
        contexto.lineTo(valX, valY);
        contexto.closePath();
        contexto.stroke();
    }
}

function TouchMove(e) {
    e.preventDefault();
    if (e.targetTouches.length == 1) {
        var touch = e.targetTouches[0];
        MouseMove(touch);
    }
}

function TouchStart(e) {
    if (e.targetTouches.length == 1) {
        var touch = e.targetTouches[0];
        MouseDown(touch);
    }
}

function TouchEnd(e) {
    if (e.targetTouches.length == 1) {
        var touch = e.targetTouches[0];
        MouseUp(touch);
    }
}

function posicionY(obj) {
    var valor = obj.offsetTop;
    if (obj.offsetParent) valor += posicionY(obj.offsetParent);
    return valor;
}

function posicionX(obj) {
    var valor = obj.offsetLeft;
    if (obj.offsetParent) valor += posicionX(obj.offsetParent);
    return valor;
}

/* Limpiar pizarra */
function LimpiarTrazado() {
    contexto = document.getElementById(idCanvas).getContext('2d');
    contexto.fillStyle = colorDeFondo;
    contexto.fillRect(0, 0, anchoCanvas, altoCanvas);
}

/* Enviar el trazado */
function GuardarTrazado() {
    imagen.value = document.getElementById(idCanvas).toDataURL('image/png');
    //document.forms[idForm].submit();
    console.log(imagen.value);

}
  
</script> 

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