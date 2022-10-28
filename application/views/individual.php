<?php include('common/header.php');?>
<style type="text/css">
.ui-jqgrid .ui-jqgrid-htable .ui-th-div {
  height: 30px !important;
}
.ui-jqgrid .form-control {
  width: 100% !important;
}
.ui-jqgrid tr.jqgrow td {
  white-space: normal !important;
}

.container{
  padding: 50px;
  display: flex;
  justify-content: center;

}

.btn-d{
  color:black;
  font-size:24px;
  background-color:#6495ED;
  border:15px;
  margin-right: 20px; 
  width:250px;
  height:100px;

}

.btn-e{
  color:black;
  width:250px;
  height:100px;
  font-size:24px;
  background-color:#6495ED;
  border:15px;
 margin-right: 20px; 
}

.btn-f{
  color:black;
  width:250px;
  height:100px;
  font-size:24px;
  background-color:#6495ED;
  border:15px;
}


</style>
<main class="col-md-12 ms-sm-auto col-lg-12 px-md-12">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">VOTACIÓN MERITO DEPORTIVO <?php echo date('Y');?> </h1>
  </div>

  <div class="container">


    <button type="button" class="btn btn-e"  id="btnDajedrez" data-bs-toggle="modal" data-bs-target="#modalDajedrez" data-id="0">
    <span class="btn-label"><i class=""></i></span>&nbsp;&nbsp;AJEDREZ</button>

    <button type="button" class="btn btn-e"  id="btnDatletismo" data-bs-toggle="modal" data-bs-target="#modalDatletismo" data-id="0">
    <span class="btn-label"><i class=""></i></span>&nbsp;&nbsp;ATLETISMO</button>

    <button type="button" class="btn btn-e"  id="btnDboliche" data-bs-toggle="modal" data-bs-target="#modalDboliche" data-id="0">
    <span class="btn-label"><i class=""></i></span>&nbsp;&nbsp;BOLICHE</button>

     <button type="button" class="btn btn-e"  id="btnDesgrima" data-bs-toggle="modal" data-bs-target="#modalDesgrima" data-id="0">
    <span class="btn-label"><i class=""></i></span>&nbsp;&nbsp;ESGRIMA</button>

    
    </div>

    <div class="container">


    <button type="button" class="btn btn-e"  id="btnDfisico" data-bs-toggle="modal" data-bs-target="#modalDfisico" data-id="0">
    <span class="btn-label"><i class=""></i></span>&nbsp;&nbsp;FISICO</button>

    <button type="button" class="btn btn-e"  id="btnDgimnasia" data-bs-toggle="modal" data-bs-target="#modalDgimnasia" data-id="0">
    <span class="btn-label"><i class=""></i></span>&nbsp;&nbsp;GIMNASIA</button>

    <button type="button" class="btn btn-e"  id="btnDjudo" data-bs-toggle="modal" data-bs-target="#modalDjudo" data-id="0">
    <span class="btn-label"><i class=""></i></span>&nbsp;&nbsp;JUDO</button>

     <button type="button" class="btn btn-e"  id="btnDkarate" data-bs-toggle="modal" data-bs-target="#modalDkarate" data-id="0">
    <span class="btn-label"><i class=""></i></span>&nbsp;&nbsp;KARATE DO</button>

    
    </div>

    <div class="container">


    <button type="button" class="btn btn-e"  id="btnDpesas" data-bs-toggle="modal" data-bs-target="#modalDpesas" data-id="0">
    <span class="btn-label"><i class=""></i></span>&nbsp;&nbsp;PESAS</button>

    <button type="button" class="btn btn-e"  id="btnDpatines" data-bs-toggle="modal" data-bs-target="#modalDpatines" data-id="0">
    <span class="btn-label"><i class=""></i></span>&nbsp;&nbsp;PATINES</button>

    <button type="button" class="btn btn-e"  id="btnDremo" data-bs-toggle="modal" data-bs-target="#modalDremo" data-id="0">
    <span class="btn-label"><i class=""></i></span>&nbsp;&nbsp;REMO</button>

     <button type="button" class="btn btn-e"  id="btnDtriatlon" data-bs-toggle="modal" data-bs-target="#modalDtriatlon" data-id="0">
    <span class="btn-label"><i class=""></i></span>&nbsp;&nbsp;TRIATLÓN</button>

    
    </div>
  </div>
  <br>


    <!-- ajedrez -->
  <div class="modal fade" id="modalDajedrez" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="dajedrezModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="dajedrezModal"></h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" onclick="cerrarModal()"></button>
        </div>
        <div class="modal-body" id="HTMLMM"></div>
        <div class="modal-footer">
          <button type="button" class="btn btnOragen"  data-bs-dismiss="modal" id="bntFormClose" onclick="cerrarModal()">
            <span class="btn-label"><i class="bi bi-box-arrow-left"></i></span>&nbsp;&nbsp;Cerrar</button>
          <button type="button" class="btn btn-primary"  onclick="enviarDA()">
            <span class="btn-label"><i class="bi bi-save"></i></span>&nbsp;&nbsp;Guardar</button>
        </div>
      </div>
    </div>
  </div>

   <!-- atletismo -->
  <div class="modal fade" id="modalDatletismo" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="datletismoModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="datletismoModal"></h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" onclick="cerrarModal()"></button>
        </div>
        <div class="modal-body" id="HTMLMMA"></div>
        <div class="modal-footer">
          <button type="button" class="btn btnOragen"  data-bs-dismiss="modal" id="bntFormClose" onclick="cerrarModal()">
            <span class="btn-label"><i class="bi bi-box-arrow-left"></i></span>&nbsp;&nbsp;Cerrar</button>
          <button type="button" class="btn btn-primary"  onclick="enviarDAA()">
            <span class="btn-label"><i class="bi bi-save"></i></span>&nbsp;&nbsp;Guardar</button>
        </div>
      </div>
    </div>
  </div>

    <!-- boliche -->
  <div class="modal fade" id="modalDboliche" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="dbolicheModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="dbolicheModal"></h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" onclick="cerrarModal()"></button>
        </div>
        <div class="modal-body" id="HTMLMMB"></div>
        <div class="modal-footer">
          <button type="button" class="btn btnOragen"  data-bs-dismiss="modal" id="bntFormClose" onclick="cerrarModal()">
            <span class="btn-label"><i class="bi bi-box-arrow-left"></i></span>&nbsp;&nbsp;Cerrar</button>
          <button type="button" class="btn btn-primary"  onclick="enviarDB()">
            <span class="btn-label"><i class="bi bi-save"></i></span>&nbsp;&nbsp;Guardar</button>
        </div>
      </div>
    </div>
  </div>

  <!-- esgrima -->
  <div class="modal fade" id="modalDesgrima" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="desgrimaModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="desgrimaModal"></h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" onclick="cerrarModal()"></button>
        </div>
        <div class="modal-body" id="HTMLMME"></div>
        <div class="modal-footer">
          <button type="button" class="btn btnOragen"  data-bs-dismiss="modal" id="bntFormClose" onclick="cerrarModal()">
            <span class="btn-label"><i class="bi bi-box-arrow-left"></i></span>&nbsp;&nbsp;Cerrar</button>
          <button type="button" class="btn btn-primary"  onclick="enviarDE()">
            <span class="btn-label"><i class="bi bi-save"></i></span>&nbsp;&nbsp;Guardar</button>
        </div>
      </div>
    </div>
  </div>

  <!---------------------------------------------------------------------------------------------------->
   <!-- fisico -->
  <div class="modal fade" id="modalDfisico" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="dfisicoModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="dfisicoModal"></h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" onclick="cerrarModal()"></button>
        </div>
        <div class="modal-body" id="HTMLMMF"></div>
        <div class="modal-footer">
          <button type="button" class="btn btnOragen"  data-bs-dismiss="modal" id="bntFormClose" onclick="cerrarModal()">
            <span class="btn-label"><i class="bi bi-box-arrow-left"></i></span>&nbsp;&nbsp;Cerrar</button>
          <button type="button" class="btn btn-primary"  onclick="enviarDF()">
            <span class="btn-label"><i class="bi bi-save"></i></span>&nbsp;&nbsp;Guardar</button>
        </div>
      </div>
    </div>
  </div>

   <!-- gimnasia -->
  <div class="modal fade" id="modalDgimnasia" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="dgimnasiaModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="dgimnasiaModal"></h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" onclick="cerrarModal()"></button>
        </div>
        <div class="modal-body" id="HTMLMMG"></div>
        <div class="modal-footer">
          <button type="button" class="btn btnOragen"  data-bs-dismiss="modal" id="bntFormClose" onclick="cerrarModal()">
            <span class="btn-label"><i class="bi bi-box-arrow-left"></i></span>&nbsp;&nbsp;Cerrar</button>
          <button type="button" class="btn btn-primary"  onclick="enviarDG()">
            <span class="btn-label"><i class="bi bi-save"></i></span>&nbsp;&nbsp;Guardar</button>
        </div>
      </div>
    </div>
  </div>

    <!-- judo -->
  <div class="modal fade" id="modalDjudo" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="djudoModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="djudoModal"></h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" onclick="cerrarModal()"></button>
        </div>
        <div class="modal-body" id="HTMLMMJ"></div>
        <div class="modal-footer">
          <button type="button" class="btn btnOragen"  data-bs-dismiss="modal" id="bntFormClose" onclick="cerrarModal()">
            <span class="btn-label"><i class="bi bi-box-arrow-left"></i></span>&nbsp;&nbsp;Cerrar</button>
          <button type="button" class="btn btn-primary"  onclick="enviarDJ()">
            <span class="btn-label"><i class="bi bi-save"></i></span>&nbsp;&nbsp;Guardar</button>
        </div>
      </div>
    </div>
  </div>

  <!-- karate -->
  <div class="modal fade" id="modalDkarate" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="dkarateModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="dkarateModal"></h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" onclick="cerrarModal()"></button>
        </div>
        <div class="modal-body" id="HTMLMMK"></div>
        <div class="modal-footer">
          <button type="button" class="btn btnOragen"  data-bs-dismiss="modal" id="bntFormClose" onclick="cerrarModal()">
            <span class="btn-label"><i class="bi bi-box-arrow-left"></i></span>&nbsp;&nbsp;Cerrar</button>
          <button type="button" class="btn btn-primary"  onclick="enviarDK()">
            <span class="btn-label"><i class="bi bi-save"></i></span>&nbsp;&nbsp;Guardar</button>
        </div>
      </div>
    </div>
  </div>

  <!---------------------------------------------------------------------------------------------------->
   <!-- pesas -->
  <div class="modal fade" id="modalDpesas" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="dpesasModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="dpesasModal"></h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" onclick="cerrarModal()"></button>
        </div>
        <div class="modal-body" id="HTMLMMP"></div>
        <div class="modal-footer">
          <button type="button" class="btn btnOragen"  data-bs-dismiss="modal" id="bntFormClose" onclick="cerrarModal()">
            <span class="btn-label"><i class="bi bi-box-arrow-left"></i></span>&nbsp;&nbsp;Cerrar</button>
          <button type="button" class="btn btn-primary"  onclick="enviarDP()">
            <span class="btn-label"><i class="bi bi-save"></i></span>&nbsp;&nbsp;Guardar</button>
        </div>
      </div>
    </div>
  </div>

   <!-- patines -->
  <div class="modal fade" id="modalDpatines" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="dpatinesModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="dpatinesModal"></h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" onclick="cerrarModal()"></button>
        </div>
        <div class="modal-body" id="HTMLPP"></div>
        <div class="modal-footer">
          <button type="button" class="btn btnOragen"  data-bs-dismiss="modal" id="bntFormClose" onclick="cerrarModal()">
            <span class="btn-label"><i class="bi bi-box-arrow-left"></i></span>&nbsp;&nbsp;Cerrar</button>
          <button type="button" class="btn btn-primary"  onclick="enviarDPP()">
            <span class="btn-label"><i class="bi bi-save"></i></span>&nbsp;&nbsp;Guardar</button>
        </div>
      </div>
    </div>
  </div>

    <!-- remo -->
  <div class="modal fade" id="modalDremo" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="dremoModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="dremoModal"></h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" onclick="cerrarModal()"></button>
        </div>
        <div class="modal-body" id="HTMLMMR"></div>
        <div class="modal-footer">
          <button type="button" class="btn btnOragen"  data-bs-dismiss="modal" id="bntFormClose" onclick="cerrarModal()">
            <span class="btn-label"><i class="bi bi-box-arrow-left"></i></span>&nbsp;&nbsp;Cerrar</button>
          <button type="button" class="btn btn-primary"  onclick="enviarDR()">
            <span class="btn-label"><i class="bi bi-save"></i></span>&nbsp;&nbsp;Guardar</button>
        </div>
      </div>
    </div>
  </div>

  <!-- triatlon -->
  <div class="modal fade" id="modalDtriatlon" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="dtriatlonModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="dtriatlonModal"></h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" onclick="cerrarModal()"></button>
        </div>
        <div class="modal-body" id="HTMLMMT"></div>
        <div class="modal-footer">
          <button type="button" class="btn btnOragen"  data-bs-dismiss="modal" id="bntFormClose" onclick="cerrarModal()">
            <span class="btn-label"><i class="bi bi-box-arrow-left"></i></span>&nbsp;&nbsp;Cerrar</button>
          <button type="button" class="btn btn-primary"  onclick="enviarDT()">
            <span class="btn-label"><i class="bi bi-save"></i></span>&nbsp;&nbsp;Guardar</button>
        </div>
      </div>
    </div>
  </div>



 </main>
<?php include('common/footer.php');?>
<style type="text/css">
.btnOragen{
  background-color: orange;
  color: #fff;
}
</style>
<script type="text/javascript">
function cerrarModal(){
  $('#form')[0].reset();
}

function recargar(){
  window.location.reload()
}
function enviarDA(){
  let nominado = $.trim($("#modalDajedrez").find("#fk_nominado option:selected").text());
  if(nominado == ""){
    $.toast({
      heading: 'Error',
      text: "Debe seleccionar una un nominado",
      allowToastClose: true,
      position: 'mid-center',
      loader: true,
      icon: 'error'
    });
    return false;
  }
  const fd = new FormData(document.getElementById("form"));
  fd.append("csrf_directorio_token", $("#token").val());
  Swal.fire({
    title: '¿Está seguro?',
    html: "Asignara el voto a: <h4>"+nominado+"</h4> será guardado, y no podra revertir la selección, ¿desea continuar?.",
    icon: 'info',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    cancelButtonText: 'Cancelar',
    confirmButtonText: 'Si, realizar voto'
  }).then((result) => {
    if (result.isConfirmed) {
      $.ajax({
        type: "POST",
        dataType: "json",
        cache: false,
        contentType: false,
        processData:false,
        url: "ajax/guardarVoto",
        data: fd,
        beforeSend: function(){
          $.blockUI({ css: {
            border: 'none',
            padding: '15px',
            backgroundColor: '#000',
            '-webkit-border-radius': '10px',
            '-moz-border-radius': '10px',
            opacity: .5,
            color: '#fff' }, message: '<h1>Espera un momento...</h1>', baseZ: 2000
          });
        },
        success: function(data){
          $.unblockUI();
          if(data.error){
            $.toast({
              heading: 'Error',
              text: data.msg,
              allowToastClose: true,
              position: 'mid-center',
              loader: true,
              icon: 'error'
            });
            return false;
          }
          $('#grid').trigger( 'reloadGrid' );
          $('#bntFormClose').click();
          Swal.fire({
            title: 'Guardado!',
            html: 'El voto fue realizado con éxito',
            icon: 'success',
            confirmButtonText: 'Aceptar'
          }).then((result) => {
  if (result.isConfirmed) {
    recargar();
  }
})
        },
        error: function(){
          $.unblockUI();
        }
      });
    }
  })
}

function enviarDAA(){
  let nominado = $.trim($("#modalDatletismo").find("#fk_nominado option:selected").text());
  if(nominado == ""){
    $.toast({
      heading: 'Error',
      text: "Debe seleccionar una un nominado",
      allowToastClose: true,
      position: 'mid-center',
      loader: true,
      icon: 'error'
    });
    return false;
  }
  const fd = new FormData(document.getElementById("form"));
  fd.append("csrf_directorio_token", $("#token").val());
  Swal.fire({
    title: '¿Está seguro?',
    html: "Asignara el voto a: <h4>"+nominado+"</h4> será guardado, y no podra revertir la selección, ¿desea continuar?.",
    icon: 'info',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    cancelButtonText: 'Cancelar',
    confirmButtonText: 'Si, realizar voto'
  }).then((result) => {
    if (result.isConfirmed) {
      $.ajax({
        type: "POST",
        dataType: "json",
        cache: false,
        contentType: false,
        processData:false,
        url: "ajax/guardarVoto",
        data: fd,
        beforeSend: function(){
          $.blockUI({ css: {
            border: 'none',
            padding: '15px',
            backgroundColor: '#000',
            '-webkit-border-radius': '10px',
            '-moz-border-radius': '10px',
            opacity: .5,
            color: '#fff' }, message: '<h1>Espera un momento...</h1>', baseZ: 2000
          });
        },
        success: function(data){
          $.unblockUI();
          if(data.error){
            $.toast({
              heading: 'Error',
              text: data.msg,
              allowToastClose: true,
              position: 'mid-center',
              loader: true,
              icon: 'error'
            });
            return false;
          }
          $('#grid').trigger( 'reloadGrid' );
          $('#bntFormClose').click();
          Swal.fire({
            title: 'Guardado!',
            html: 'El voto fue realizado con éxito',
            icon: 'success',
            confirmButtonText: 'Aceptar'
          }).then((result) => {
  if (result.isConfirmed) {
    recargar();
  }
})
        },
        error: function(){
          $.unblockUI();
        }
      });
    }
  })
}

function enviarDB(){
  let nominado = $.trim($("#modalDboliche").find("#fk_nominado option:selected").text());
  if(nominado == ""){
    $.toast({
      heading: 'Error',
      text: "Debe seleccionar una un nominado",
      allowToastClose: true,
      position: 'mid-center',
      loader: true,
      icon: 'error'
    });
    return false;
  }
  const fd = new FormData(document.getElementById("form"));
  fd.append("csrf_directorio_token", $("#token").val());
  Swal.fire({
    title: '¿Está seguro?',
    html: "Asignara el voto a: <h4>"+nominado+"</h4> será guardado, y no podra revertir la selección, ¿desea continuar?.",
    icon: 'info',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    cancelButtonText: 'Cancelar',
    confirmButtonText: 'Si, realizar voto'
  }).then((result) => {
    if (result.isConfirmed) {
      $.ajax({
        type: "POST",
        dataType: "json",
        cache: false,
        contentType: false,
        processData:false,
        url: "ajax/guardarVoto",
        data: fd,
        beforeSend: function(){
          $.blockUI({ css: {
            border: 'none',
            padding: '15px',
            backgroundColor: '#000',
            '-webkit-border-radius': '10px',
            '-moz-border-radius': '10px',
            opacity: .5,
            color: '#fff' }, message: '<h1>Espera un momento...</h1>', baseZ: 2000
          });
        },
        success: function(data){
          $.unblockUI();
          if(data.error){
            $.toast({
              heading: 'Error',
              text: data.msg,
              allowToastClose: true,
              position: 'mid-center',
              loader: true,
              icon: 'error'
            });
            return false;
          }
          $('#grid').trigger( 'reloadGrid' );
          $('#bntFormClose').click();
          Swal.fire({
            title: 'Guardado!',
            html: 'El voto fue realizado con éxito',
            icon: 'success',
            confirmButtonText: 'Aceptar'
          }).then((result) => {
  if (result.isConfirmed) {
    recargar();
  }
})
        },
        error: function(){
          $.unblockUI();
        }
      });
    }
  })
}

function enviarDE(){
  let nominado = $.trim($("#modalDesgrima").find("#fk_nominado option:selected").text());
  if(nominado == ""){
    $.toast({
      heading: 'Error',
      text: "Debe seleccionar una un nominado",
      allowToastClose: true,
      position: 'mid-center',
      loader: true,
      icon: 'error'
    });
    return false;
  }
  const fd = new FormData(document.getElementById("form"));
  fd.append("csrf_directorio_token", $("#token").val());
  Swal.fire({
    title: '¿Está seguro?',
    html: "Asignara el voto a: <h4>"+nominado+"</h4> será guardado, y no podra revertir la selección, ¿desea continuar?.",
    icon: 'info',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    cancelButtonText: 'Cancelar',
    confirmButtonText: 'Si, realizar voto'
  }).then((result) => {
    if (result.isConfirmed) {
      $.ajax({
        type: "POST",
        dataType: "json",
        cache: false,
        contentType: false,
        processData:false,
        url: "ajax/guardarVoto",
        data: fd,
        beforeSend: function(){
          $.blockUI({ css: {
            border: 'none',
            padding: '15px',
            backgroundColor: '#000',
            '-webkit-border-radius': '10px',
            '-moz-border-radius': '10px',
            opacity: .5,
            color: '#fff' }, message: '<h1>Espera un momento...</h1>', baseZ: 2000
          });
        },
        success: function(data){
          $.unblockUI();
          if(data.error){
            $.toast({
              heading: 'Error',
              text: data.msg,
              allowToastClose: true,
              position: 'mid-center',
              loader: true,
              icon: 'error'
            });
            return false;
          }
          $('#grid').trigger( 'reloadGrid' );
          $('#bntFormClose').click();
          Swal.fire({
            title: 'Guardado!',
            html: 'El voto fue realizado con éxito',
            icon: 'success',
            confirmButtonText: 'Aceptar'
          }).then((result) => {
  if (result.isConfirmed) {
    recargar();
  }
})
        },
        error: function(){
          $.unblockUI();
        }
      });
    }
  })
}

/*---------------------------------------------------------------*/
function enviarDF(){
  let nominado = $.trim($("#modalDfisico").find("#fk_nominado option:selected").text());
  if(nominado == ""){
    $.toast({
      heading: 'Error',
      text: "Debe seleccionar una un nominado",
      allowToastClose: true,
      position: 'mid-center',
      loader: true,
      icon: 'error'
    });
    return false;
  }
  const fd = new FormData(document.getElementById("form"));
  fd.append("csrf_directorio_token", $("#token").val());
  Swal.fire({
    title: '¿Está seguro?',
    html: "Asignara el voto a: <h4>"+nominado+"</h4> será guardado, y no podra revertir la selección, ¿desea continuar?.",
    icon: 'info',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    cancelButtonText: 'Cancelar',
    confirmButtonText: 'Si, realizar voto'
  }).then((result) => {
    if (result.isConfirmed) {
      $.ajax({
        type: "POST",
        dataType: "json",
        cache: false,
        contentType: false,
        processData:false,
        url: "ajax/guardarVoto",
        data: fd,
        beforeSend: function(){
          $.blockUI({ css: {
            border: 'none',
            padding: '15px',
            backgroundColor: '#000',
            '-webkit-border-radius': '10px',
            '-moz-border-radius': '10px',
            opacity: .5,
            color: '#fff' }, message: '<h1>Espera un momento...</h1>', baseZ: 2000
          });
        },
        success: function(data){
          $.unblockUI();
          if(data.error){
            $.toast({
              heading: 'Error',
              text: data.msg,
              allowToastClose: true,
              position: 'mid-center',
              loader: true,
              icon: 'error'
            });
            return false;
          }
          $('#grid').trigger( 'reloadGrid' );
          $('#bntFormClose').click();
          Swal.fire({
            title: 'Guardado!',
            html: 'El voto fue realizado con éxito',
            icon: 'success',
            confirmButtonText: 'Aceptar'
          }).then((result) => {
  if (result.isConfirmed) {
    recargar();
  }
})
        },
        error: function(){
          $.unblockUI();
        }
      });
    }
  })
}

function enviarDG(){
  let nominado = $.trim($("#modalDgimnasia").find("#fk_nominado option:selected").text());
  if(nominado == ""){
    $.toast({
      heading: 'Error',
      text: "Debe seleccionar una un nominado",
      allowToastClose: true,
      position: 'mid-center',
      loader: true,
      icon: 'error'
    });
    return false;
  }
  const fd = new FormData(document.getElementById("form"));
  fd.append("csrf_directorio_token", $("#token").val());
  Swal.fire({
    title: '¿Está seguro?',
    html: "Asignara el voto a: <h4>"+nominado+"</h4> será guardado, y no podra revertir la selección, ¿desea continuar?.",
    icon: 'info',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    cancelButtonText: 'Cancelar',
    confirmButtonText: 'Si, realizar voto'
  }).then((result) => {
    if (result.isConfirmed) {
      $.ajax({
        type: "POST",
        dataType: "json",
        cache: false,
        contentType: false,
        processData:false,
        url: "ajax/guardarVoto",
        data: fd,
        beforeSend: function(){
          $.blockUI({ css: {
            border: 'none',
            padding: '15px',
            backgroundColor: '#000',
            '-webkit-border-radius': '10px',
            '-moz-border-radius': '10px',
            opacity: .5,
            color: '#fff' }, message: '<h1>Espera un momento...</h1>', baseZ: 2000
          });
        },
        success: function(data){
          $.unblockUI();
          if(data.error){
            $.toast({
              heading: 'Error',
              text: data.msg,
              allowToastClose: true,
              position: 'mid-center',
              loader: true,
              icon: 'error'
            });
            return false;
          }
          $('#grid').trigger( 'reloadGrid' );
          $('#bntFormClose').click();
          Swal.fire({
            title: 'Guardado!',
            html: 'El voto fue realizado con éxito',
            icon: 'success',
            confirmButtonText: 'Aceptar'
          }).then((result) => {
  if (result.isConfirmed) {
    recargar();
  }
})
        },
        error: function(){
          $.unblockUI();
        }
      });
    }
  })
}

function enviarDJ(){
  let nominado = $.trim($("#modalDjudo").find("#fk_nominado option:selected").text());
  if(nominado == ""){
    $.toast({
      heading: 'Error',
      text: "Debe seleccionar una un nominado",
      allowToastClose: true,
      position: 'mid-center',
      loader: true,
      icon: 'error'
    });
    return false;
  }
  const fd = new FormData(document.getElementById("form"));
  fd.append("csrf_directorio_token", $("#token").val());
  Swal.fire({
    title: '¿Está seguro?',
    html: "Asignara el voto a: <h4>"+nominado+"</h4> será guardado, y no podra revertir la selección, ¿desea continuar?.",
    icon: 'info',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    cancelButtonText: 'Cancelar',
    confirmButtonText: 'Si, realizar voto'
  }).then((result) => {
    if (result.isConfirmed) {
      $.ajax({
        type: "POST",
        dataType: "json",
        cache: false,
        contentType: false,
        processData:false,
        url: "ajax/guardarVoto",
        data: fd,
        beforeSend: function(){
          $.blockUI({ css: {
            border: 'none',
            padding: '15px',
            backgroundColor: '#000',
            '-webkit-border-radius': '10px',
            '-moz-border-radius': '10px',
            opacity: .5,
            color: '#fff' }, message: '<h1>Espera un momento...</h1>', baseZ: 2000
          });
        },
        success: function(data){
          $.unblockUI();
          if(data.error){
            $.toast({
              heading: 'Error',
              text: data.msg,
              allowToastClose: true,
              position: 'mid-center',
              loader: true,
              icon: 'error'
            });
            return false;
          }
          $('#grid').trigger( 'reloadGrid' );
          $('#bntFormClose').click();
          Swal.fire({
            title: 'Guardado!',
            html: 'El voto fue realizado con éxito',
            icon: 'success',
            confirmButtonText: 'Aceptar'
          }).then((result) => {
  if (result.isConfirmed) {
    recargar();
  }
})
        },
        error: function(){
          $.unblockUI();
        }
      });
    }
  })
}

function enviarDK(){
  let nominado = $.trim($("#modalDkarate").find("#fk_nominado option:selected").text());
  if(nominado == ""){
    $.toast({
      heading: 'Error',
      text: "Debe seleccionar una un nominado",
      allowToastClose: true,
      position: 'mid-center',
      loader: true,
      icon: 'error'
    });
    return false;
  }
  const fd = new FormData(document.getElementById("form"));
  fd.append("csrf_directorio_token", $("#token").val());
  Swal.fire({
    title: '¿Está seguro?',
    html: "Asignara el voto a: <h4>"+nominado+"</h4> será guardado, y no podra revertir la selección, ¿desea continuar?.",
    icon: 'info',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    cancelButtonText: 'Cancelar',
    confirmButtonText: 'Si, realizar voto'
  }).then((result) => {
    if (result.isConfirmed) {
      $.ajax({
        type: "POST",
        dataType: "json",
        cache: false,
        contentType: false,
        processData:false,
        url: "ajax/guardarVoto",
        data: fd,
        beforeSend: function(){
          $.blockUI({ css: {
            border: 'none',
            padding: '15px',
            backgroundColor: '#000',
            '-webkit-border-radius': '10px',
            '-moz-border-radius': '10px',
            opacity: .5,
            color: '#fff' }, message: '<h1>Espera un momento...</h1>', baseZ: 2000
          });
        },
        success: function(data){
          $.unblockUI();
          if(data.error){
            $.toast({
              heading: 'Error',
              text: data.msg,
              allowToastClose: true,
              position: 'mid-center',
              loader: true,
              icon: 'error'
            });
            return false;
          }
          $('#grid').trigger( 'reloadGrid' );
          $('#bntFormClose').click();
          Swal.fire({
            title: 'Guardado!',
            html: 'El voto fue realizado con éxito',
            icon: 'success',
            confirmButtonText: 'Aceptar'
          }).then((result) => {
  if (result.isConfirmed) {
    recargar();
  }
})
        },
        error: function(){
          $.unblockUI();
        }
      });
    }
  })
}
/*-------------------------------------------------------------*/
/*---------------------------------------------------------------*/
function enviarDP(){
  let nominado = $.trim($("#modalDpesas").find("#fk_nominado option:selected").text());
  if(nominado == ""){
    $.toast({
      heading: 'Error',
      text: "Debe seleccionar una un nominado",
      allowToastClose: true,
      position: 'mid-center',
      loader: true,
      icon: 'error'
    });
    return false;
  }
  const fd = new FormData(document.getElementById("form"));
  fd.append("csrf_directorio_token", $("#token").val());
  Swal.fire({
    title: '¿Está seguro?',
    html: "Asignara el voto a: <h4>"+nominado+"</h4> será guardado, y no podra revertir la selección, ¿desea continuar?.",
    icon: 'info',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    cancelButtonText: 'Cancelar',
    confirmButtonText: 'Si, realizar voto'
  }).then((result) => {
    if (result.isConfirmed) {
      $.ajax({
        type: "POST",
        dataType: "json",
        cache: false,
        contentType: false,
        processData:false,
        url: "ajax/guardarVoto",
        data: fd,
        beforeSend: function(){
          $.blockUI({ css: {
            border: 'none',
            padding: '15px',
            backgroundColor: '#000',
            '-webkit-border-radius': '10px',
            '-moz-border-radius': '10px',
            opacity: .5,
            color: '#fff' }, message: '<h1>Espera un momento...</h1>', baseZ: 2000
          });
        },
        success: function(data){
          $.unblockUI();
          if(data.error){
            $.toast({
              heading: 'Error',
              text: data.msg,
              allowToastClose: true,
              position: 'mid-center',
              loader: true,
              icon: 'error'
            });
            return false;
          }
          $('#grid').trigger( 'reloadGrid' );
          $('#bntFormClose').click();
          Swal.fire({
            title: 'Guardado!',
            html: 'El voto fue realizado con éxito',
            icon: 'success',
            confirmButtonText: 'Aceptar'
          }).then((result) => {
  if (result.isConfirmed) {
    recargar();
  }
})
        },
        error: function(){
          $.unblockUI();
        }
      });
    }
  })
}

function enviarDPP(){
  let nominado = $.trim($("#modalDpatines").find("#fk_nominado option:selected").text());
  if(nominado == ""){
    $.toast({
      heading: 'Error',
      text: "Debe seleccionar una un nominado",
      allowToastClose: true,
      position: 'mid-center',
      loader: true,
      icon: 'error'
    });
    return false;
  }
  const fd = new FormData(document.getElementById("form"));
  fd.append("csrf_directorio_token", $("#token").val());
  Swal.fire({
    title: '¿Está seguro?',
    html: "Asignara el voto a: <h4>"+nominado+"</h4> será guardado, y no podra revertir la selección, ¿desea continuar?.",
    icon: 'info',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    cancelButtonText: 'Cancelar',
    confirmButtonText: 'Si, realizar voto'
  }).then((result) => {
    if (result.isConfirmed) {
      $.ajax({
        type: "POST",
        dataType: "json",
        cache: false,
        contentType: false,
        processData:false,
        url: "ajax/guardarVoto",
        data: fd,
        beforeSend: function(){
          $.blockUI({ css: {
            border: 'none',
            padding: '15px',
            backgroundColor: '#000',
            '-webkit-border-radius': '10px',
            '-moz-border-radius': '10px',
            opacity: .5,
            color: '#fff' }, message: '<h1>Espera un momento...</h1>', baseZ: 2000
          });
        },
        success: function(data){
          $.unblockUI();
          if(data.error){
            $.toast({
              heading: 'Error',
              text: data.msg,
              allowToastClose: true,
              position: 'mid-center',
              loader: true,
              icon: 'error'
            });
            return false;
          }
          $('#grid').trigger( 'reloadGrid' );
          $('#bntFormClose').click();
          Swal.fire({
            title: 'Guardado!',
            html: 'El voto fue realizado con éxito',
            icon: 'success',
            confirmButtonText: 'Aceptar'
          }).then((result) => {
  if (result.isConfirmed) {
    recargar();
  }
})
        },
        error: function(){
          $.unblockUI();
        }
      });
    }
  })
}

function enviarDR(){
  let nominado = $.trim($("#modalDremo").find("#fk_nominado option:selected").text());
  if(nominado == ""){
    $.toast({
      heading: 'Error',
      text: "Debe seleccionar una un nominado",
      allowToastClose: true,
      position: 'mid-center',
      loader: true,
      icon: 'error'
    });
    return false;
  }
  const fd = new FormData(document.getElementById("form"));
  fd.append("csrf_directorio_token", $("#token").val());
  Swal.fire({
    title: '¿Está seguro?',
    html: "Asignara el voto a: <h4>"+nominado+"</h4> será guardado, y no podra revertir la selección, ¿desea continuar?.",
    icon: 'info',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    cancelButtonText: 'Cancelar',
    confirmButtonText: 'Si, realizar voto'
  }).then((result) => {
    if (result.isConfirmed) {
      $.ajax({
        type: "POST",
        dataType: "json",
        cache: false,
        contentType: false,
        processData:false,
        url: "ajax/guardarVoto",
        data: fd,
        beforeSend: function(){
          $.blockUI({ css: {
            border: 'none',
            padding: '15px',
            backgroundColor: '#000',
            '-webkit-border-radius': '10px',
            '-moz-border-radius': '10px',
            opacity: .5,
            color: '#fff' }, message: '<h1>Espera un momento...</h1>', baseZ: 2000
          });
        },
        success: function(data){
          $.unblockUI();
          if(data.error){
            $.toast({
              heading: 'Error',
              text: data.msg,
              allowToastClose: true,
              position: 'mid-center',
              loader: true,
              icon: 'error'
            });
            return false;
          }
          $('#grid').trigger( 'reloadGrid' );
          $('#bntFormClose').click();
          Swal.fire({
            title: 'Guardado!',
            html: 'El voto fue realizado con éxito',
            icon: 'success',
            confirmButtonText: 'Aceptar'
          }).then((result) => {
  if (result.isConfirmed) {
    recargar();
  }
})
        },
        error: function(){
          $.unblockUI();
        }
      });
    }
  })
}

function enviarDT(){
  let nominado = $.trim($("#modalDtriatlon").find("#fk_nominado option:selected").text());
  if(nominado == ""){
    $.toast({
      heading: 'Error',
      text: "Debe seleccionar una un nominado",
      allowToastClose: true,
      position: 'mid-center',
      loader: true,
      icon: 'error'
    });
    return false;
  }
  const fd = new FormData(document.getElementById("form"));
  fd.append("csrf_directorio_token", $("#token").val());
  Swal.fire({
    title: '¿Está seguro?',
    html: "Asignara el voto a: <h4>"+nominado+"</h4> será guardado, y no podra revertir la selección, ¿desea continuar?.",
    icon: 'info',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    cancelButtonText: 'Cancelar',
    confirmButtonText: 'Si, realizar voto'
  }).then((result) => {
    if (result.isConfirmed) {
      $.ajax({
        type: "POST",
        dataType: "json",
        cache: false,
        contentType: false,
        processData:false,
        url: "ajax/guardarVoto",
        data: fd,
        beforeSend: function(){
          $.blockUI({ css: {
            border: 'none',
            padding: '15px',
            backgroundColor: '#000',
            '-webkit-border-radius': '10px',
            '-moz-border-radius': '10px',
            opacity: .5,
            color: '#fff' }, message: '<h1>Espera un momento...</h1>', baseZ: 2000
          });
        },
        success: function(data){
          $.unblockUI();
          if(data.error){
            $.toast({
              heading: 'Error',
              text: data.msg,
              allowToastClose: true,
              position: 'mid-center',
              loader: true,
              icon: 'error'
            });
            return false;
          }
          $('#grid').trigger( 'reloadGrid' );
          $('#bntFormClose').click();
          Swal.fire({
            title: 'Guardado!',
            html: 'El voto fue realizado con éxito',
            icon: 'success',
            confirmButtonText: 'Aceptar'
          }).then((result) => {
  if (result.isConfirmed) {
    recargar();
  }
})
        },
        error: function(){
          $.unblockUI();
        }
      });
    }
  })
}
/*-------------------------------------------------------------*/



function cargarFormDA(id){
  $.ajax({
    type: "POST",
    dataType: "json",
    url: "ajax/cargarFormularioDajedrez",
    data:{csrf_directorio_token:$('#token').val(),pk_voto: id},
    beforeSend: function(){
      $("#HTMLMM").html('<div class="text-center"><div class="spinner-grow text-primary" role="status"><span class="visually-hidden">Cargando...</span></div><div class="spinner-grow text-primary" role="status"><span class="visually-hidden">Cargando...</span></div><div class="spinner-grow text-primary" role="status"><span class="visually-hidden">Cargando...</span></div>Cargando...</div>');
      $.blockUI({ css: {
        border: 'none',
        padding: '15px',
        backgroundColor: '#000',
        '-webkit-border-radius': '10px',
        '-moz-border-radius': '10px',
        opacity: .5,
        color: '#fff' }, message: '<h1>Espera un momento...</h1>', baseZ: 2000
      });
    },
    success: function(data){
      $.unblockUI();
      if(data.error){
        $.toast({
          heading: 'Error',
          text: data.msg,
          allowToastClose: true,
          position: 'mid-center',
          loader: true,
          icon: 'error'
        });
        return false;
      }
      $("#HTMLMM").html(data.HTML);
    },
    error: function(){
      $.unblockUI();
    }
  });
}

function cargarFormDAA(id){
  $.ajax({
    type: "POST",
    dataType: "json",
    url: "ajax/cargarFormularioDatletismo",
    data:{csrf_directorio_token:$('#token').val(),pk_voto: id},
    beforeSend: function(){
      $("#HTMLMMA").html('<div class="text-center"><div class="spinner-grow text-primary" role="status"><span class="visually-hidden">Cargando...</span></div><div class="spinner-grow text-primary" role="status"><span class="visually-hidden">Cargando...</span></div><div class="spinner-grow text-primary" role="status"><span class="visually-hidden">Cargando...</span></div>Cargando...</div>');
      $.blockUI({ css: {
        border: 'none',
        padding: '15px',
        backgroundColor: '#000',
        '-webkit-border-radius': '10px',
        '-moz-border-radius': '10px',
        opacity: .5,
        color: '#fff' }, message: '<h1>Espera un momento...</h1>', baseZ: 2000
      });
    },
    success: function(data){
      $.unblockUI();
      if(data.error){
        $.toast({
          heading: 'Error',
          text: data.msg,
          allowToastClose: true,
          position: 'mid-center',
          loader: true,
          icon: 'error'
        });
        return false;
      }
      $("#HTMLMMA").html(data.HTML);
    },
    error: function(){
      $.unblockUI();
    }
  });
}

function cargarFormDB(id){
  $.ajax({
    type: "POST",
    dataType: "json",
    url: "ajax/cargarFormularioDboliche",
    data:{csrf_directorio_token:$('#token').val(),pk_voto: id},
    beforeSend: function(){
      $("#HTMLMMB").html('<div class="text-center"><div class="spinner-grow text-primary" role="status"><span class="visually-hidden">Cargando...</span></div><div class="spinner-grow text-primary" role="status"><span class="visually-hidden">Cargando...</span></div><div class="spinner-grow text-primary" role="status"><span class="visually-hidden">Cargando...</span></div>Cargando...</div>');
      $.blockUI({ css: {
        border: 'none',
        padding: '15px',
        backgroundColor: '#000',
        '-webkit-border-radius': '10px',
        '-moz-border-radius': '10px',
        opacity: .5,
        color: '#fff' }, message: '<h1>Espera un momento...</h1>', baseZ: 2000
      });
    },
    success: function(data){
      $.unblockUI();
      if(data.error){
        $.toast({
          heading: 'Error',
          text: data.msg,
          allowToastClose: true,
          position: 'mid-center',
          loader: true,
          icon: 'error'
        });
        return false;
      }
      $("#HTMLMMB").html(data.HTML);
    },
    error: function(){
      $.unblockUI();
    }
  });
}
function cargarFormDE(id){
  $.ajax({
    type: "POST",
    dataType: "json",
    url: "ajax/cargarFormularioDesgrima",
    data:{csrf_directorio_token:$('#token').val(),pk_voto: id},
    beforeSend: function(){
      $("#HTMLMMB").html('<div class="text-center"><div class="spinner-grow text-primary" role="status"><span class="visually-hidden">Cargando...</span></div><div class="spinner-grow text-primary" role="status"><span class="visually-hidden">Cargando...</span></div><div class="spinner-grow text-primary" role="status"><span class="visually-hidden">Cargando...</span></div>Cargando...</div>');
      $.blockUI({ css: {
        border: 'none',
        padding: '15px',
        backgroundColor: '#000',
        '-webkit-border-radius': '10px',
        '-moz-border-radius': '10px',
        opacity: .5,
        color: '#fff' }, message: '<h1>Espera un momento...</h1>', baseZ: 2000
      });
    },
    success: function(data){
      $.unblockUI();
      if(data.error){
        $.toast({
          heading: 'Error',
          text: data.msg,
          allowToastClose: true,
          position: 'mid-center',
          loader: true,
          icon: 'error'
        });
        return false;
      }
      $("#HTMLMME").html(data.HTML);
    },
    error: function(){
      $.unblockUI();
    }
  });
}

/*--------------------------------------------------------*/
function cargarFormDF(id){
  $.ajax({
    type: "POST",
    dataType: "json",
    url: "ajax/cargarFormularioDfisico",
    data:{csrf_directorio_token:$('#token').val(),pk_voto: id},
    beforeSend: function(){
      $("#HTMLMMF").html('<div class="text-center"><div class="spinner-grow text-primary" role="status"><span class="visually-hidden">Cargando...</span></div><div class="spinner-grow text-primary" role="status"><span class="visually-hidden">Cargando...</span></div><div class="spinner-grow text-primary" role="status"><span class="visually-hidden">Cargando...</span></div>Cargando...</div>');
      $.blockUI({ css: {
        border: 'none',
        padding: '15px',
        backgroundColor: '#000',
        '-webkit-border-radius': '10px',
        '-moz-border-radius': '10px',
        opacity: .5,
        color: '#fff' }, message: '<h1>Espera un momento...</h1>', baseZ: 2000
      });
    },
    success: function(data){
      $.unblockUI();
      if(data.error){
        $.toast({
          heading: 'Error',
          text: data.msg,
          allowToastClose: true,
          position: 'mid-center',
          loader: true,
          icon: 'error'
        });
        return false;
      }
      $("#HTMLMMF").html(data.HTML);
    },
    error: function(){
      $.unblockUI();
    }
  });
}

function cargarFormDG(id){
  $.ajax({
    type: "POST",
    dataType: "json",
    url: "ajax/cargarFormularioDgimnasia",
    data:{csrf_directorio_token:$('#token').val(),pk_voto: id},
    beforeSend: function(){
      $("#HTMLMMG").html('<div class="text-center"><div class="spinner-grow text-primary" role="status"><span class="visually-hidden">Cargando...</span></div><div class="spinner-grow text-primary" role="status"><span class="visually-hidden">Cargando...</span></div><div class="spinner-grow text-primary" role="status"><span class="visually-hidden">Cargando...</span></div>Cargando...</div>');
      $.blockUI({ css: {
        border: 'none',
        padding: '15px',
        backgroundColor: '#000',
        '-webkit-border-radius': '10px',
        '-moz-border-radius': '10px',
        opacity: .5,
        color: '#fff' }, message: '<h1>Espera un momento...</h1>', baseZ: 2000
      });
    },
    success: function(data){
      $.unblockUI();
      if(data.error){
        $.toast({
          heading: 'Error',
          text: data.msg,
          allowToastClose: true,
          position: 'mid-center',
          loader: true,
          icon: 'error'
        });
        return false;
      }
      $("#HTMLMMG").html(data.HTML);
    },
    error: function(){
      $.unblockUI();
    }
  });
}

function cargarFormDJ(id){
  $.ajax({
    type: "POST",
    dataType: "json",
    url: "ajax/cargarFormularioDjudo",
    data:{csrf_directorio_token:$('#token').val(),pk_voto: id},
    beforeSend: function(){
      $("#HTMLMMJ").html('<div class="text-center"><div class="spinner-grow text-primary" role="status"><span class="visually-hidden">Cargando...</span></div><div class="spinner-grow text-primary" role="status"><span class="visually-hidden">Cargando...</span></div><div class="spinner-grow text-primary" role="status"><span class="visually-hidden">Cargando...</span></div>Cargando...</div>');
      $.blockUI({ css: {
        border: 'none',
        padding: '15px',
        backgroundColor: '#000',
        '-webkit-border-radius': '10px',
        '-moz-border-radius': '10px',
        opacity: .5,
        color: '#fff' }, message: '<h1>Espera un momento...</h1>', baseZ: 2000
      });
    },
    success: function(data){
      $.unblockUI();
      if(data.error){
        $.toast({
          heading: 'Error',
          text: data.msg,
          allowToastClose: true,
          position: 'mid-center',
          loader: true,
          icon: 'error'
        });
        return false;
      }
      $("#HTMLMMJ").html(data.HTML);
    },
    error: function(){
      $.unblockUI();
    }
  });
}
function cargarFormDK(id){
  $.ajax({
    type: "POST",
    dataType: "json",
    url: "ajax/cargarFormularioDkarate",
    data:{csrf_directorio_token:$('#token').val(),pk_voto: id},
    beforeSend: function(){
      $("#HTMLMMK").html('<div class="text-center"><div class="spinner-grow text-primary" role="status"><span class="visually-hidden">Cargando...</span></div><div class="spinner-grow text-primary" role="status"><span class="visually-hidden">Cargando...</span></div><div class="spinner-grow text-primary" role="status"><span class="visually-hidden">Cargando...</span></div>Cargando...</div>');
      $.blockUI({ css: {
        border: 'none',
        padding: '15px',
        backgroundColor: '#000',
        '-webkit-border-radius': '10px',
        '-moz-border-radius': '10px',
        opacity: .5,
        color: '#fff' }, message: '<h1>Espera un momento...</h1>', baseZ: 2000
      });
    },
    success: function(data){
      $.unblockUI();
      if(data.error){
        $.toast({
          heading: 'Error',
          text: data.msg,
          allowToastClose: true,
          position: 'mid-center',
          loader: true,
          icon: 'error'
        });
        return false;
      }
      $("#HTMLMMK").html(data.HTML);
    },
    error: function(){
      $.unblockUI();
    }
  });
}
/*--------------------------------------------------------*/
/*--------------------------------------------------------*/
function cargarFormDP(id){
  $.ajax({
    type: "POST",
    dataType: "json",
    url: "ajax/cargarFormularioDpesas",
    data:{csrf_directorio_token:$('#token').val(),pk_voto: id},
    beforeSend: function(){
      $("#HTMLMMP").html('<div class="text-center"><div class="spinner-grow text-primary" role="status"><span class="visually-hidden">Cargando...</span></div><div class="spinner-grow text-primary" role="status"><span class="visually-hidden">Cargando...</span></div><div class="spinner-grow text-primary" role="status"><span class="visually-hidden">Cargando...</span></div>Cargando...</div>');
      $.blockUI({ css: {
        border: 'none',
        padding: '15px',
        backgroundColor: '#000',
        '-webkit-border-radius': '10px',
        '-moz-border-radius': '10px',
        opacity: .5,
        color: '#fff' }, message: '<h1>Espera un momento...</h1>', baseZ: 2000
      });
    },
    success: function(data){
      $.unblockUI();
      if(data.error){
        $.toast({
          heading: 'Error',
          text: data.msg,
          allowToastClose: true,
          position: 'mid-center',
          loader: true,
          icon: 'error'
        });
        return false;
      }
      $("#HTMLMMP").html(data.HTML);
    },
    error: function(){
      $.unblockUI();
    }
  });
}

function cargarFormDPP(id){
  $.ajax({
    type: "POST",
    dataType: "json",
    url: "ajax/cargarFormularioDpatines",
    data:{csrf_directorio_token:$('#token').val(),pk_voto: id},
    beforeSend: function(){
      $("#HTMLPP").html('<div class="text-center"><div class="spinner-grow text-primary" role="status"><span class="visually-hidden">Cargando...</span></div><div class="spinner-grow text-primary" role="status"><span class="visually-hidden">Cargando...</span></div><div class="spinner-grow text-primary" role="status"><span class="visually-hidden">Cargando...</span></div>Cargando...</div>');
      $.blockUI({ css: {
        border: 'none',
        padding: '15px',
        backgroundColor: '#000',
        '-webkit-border-radius': '10px',
        '-moz-border-radius': '10px',
        opacity: .5,
        color: '#fff' }, message: '<h1>Espera un momento...</h1>', baseZ: 2000
      });
    },
    success: function(data){
      $.unblockUI();
      if(data.error){
        $.toast({
          heading: 'Error',
          text: data.msg,
          allowToastClose: true,
          position: 'mid-center',
          loader: true,
          icon: 'error'
        });
        return false;
      }
      $("#HTMLPP").html(data.HTML);
    },
    error: function(){
      $.unblockUI();
    }
  });
}

function cargarFormDR(id){
  $.ajax({
    type: "POST",
    dataType: "json",
    url: "ajax/cargarFormularioDremo",
    data:{csrf_directorio_token:$('#token').val(),pk_voto: id},
    beforeSend: function(){
      $("#HTMLMMR").html('<div class="text-center"><div class="spinner-grow text-primary" role="status"><span class="visually-hidden">Cargando...</span></div><div class="spinner-grow text-primary" role="status"><span class="visually-hidden">Cargando...</span></div><div class="spinner-grow text-primary" role="status"><span class="visually-hidden">Cargando...</span></div>Cargando...</div>');
      $.blockUI({ css: {
        border: 'none',
        padding: '15px',
        backgroundColor: '#000',
        '-webkit-border-radius': '10px',
        '-moz-border-radius': '10px',
        opacity: .5,
        color: '#fff' }, message: '<h1>Espera un momento...</h1>', baseZ: 2000
      });
    },
    success: function(data){
      $.unblockUI();
      if(data.error){
        $.toast({
          heading: 'Error',
          text: data.msg,
          allowToastClose: true,
          position: 'mid-center',
          loader: true,
          icon: 'error'
        });
        return false;
      }
      $("#HTMLMMR").html(data.HTML);
    },
    error: function(){
      $.unblockUI();
    }
  });
}
function cargarFormDT(id){
  $.ajax({
    type: "POST",
    dataType: "json",
    url: "ajax/cargarFormularioDtriatlon",
    data:{csrf_directorio_token:$('#token').val(),pk_voto: id},
    beforeSend: function(){
      $("#HTMLMMT").html('<div class="text-center"><div class="spinner-grow text-primary" role="status"><span class="visually-hidden">Cargando...</span></div><div class="spinner-grow text-primary" role="status"><span class="visually-hidden">Cargando...</span></div><div class="spinner-grow text-primary" role="status"><span class="visually-hidden">Cargando...</span></div>Cargando...</div>');
      $.blockUI({ css: {
        border: 'none',
        padding: '15px',
        backgroundColor: '#000',
        '-webkit-border-radius': '10px',
        '-moz-border-radius': '10px',
        opacity: .5,
        color: '#fff' }, message: '<h1>Espera un momento...</h1>', baseZ: 2000
      });
    },
    success: function(data){
      $.unblockUI();
      if(data.error){
        $.toast({
          heading: 'Error',
          text: data.msg,
          allowToastClose: true,
          position: 'mid-center',
          loader: true,
          icon: 'error'
        });
        return false;
      }
      $("#HTMLMMT").html(data.HTML);
    },
    error: function(){
      $.unblockUI();
    }
  });
}
/*--------------------------------------------------------*/
$(document).ready(function() {

  $("#btnDajedrez").click( function(){
    const id = $(this).data("id");
    $("#dajedrezModal").html("Votar asociación ajedrez");
    cargarFormDA(id);
  });
  $("#btnDatletismo").click( function(){
    const id = $(this).data("id");
    $("#datletismoModal").html("Votar asociación atletismo");
    cargarFormDAA(id);
  });
  $("#btnDboliche").click( function(){
    const id = $(this).data("id");
    $("#dbolicheModal").html("Votar asociación boliche");
    cargarFormDB(id);
  });
  $("#btnDesgrima").click( function(){
    const id = $(this).data("id");
    $("#desgrimaModal").html("Votar asociación esgrima");
    cargarFormDE(id);
  });

  /*----------------------------------------*/
$("#btnDfisico").click( function(){
    const id = $(this).data("id");
    $("#dfisicoModal").html("Votar asociación fisico");
    cargarFormDF(id);
  });
  $("#btnDgimnasia").click( function(){
    const id = $(this).data("id");
    $("#dgimnasiaModal").html("Votar asociación gimnasia");
    cargarFormDG(id);
  });
  $("#btnDjudo").click( function(){
    const id = $(this).data("id");
    $("#djudoModal").html("Votar asociación judo");
    cargarFormDJ(id);
  });
  $("#btnDkarate").click( function(){
    const id = $(this).data("id");
    $("#dkarateModal").html("Votar asociación karate");
    cargarFormDK(id);
  });
  /*-----------------------------------------*/
    /*----------------------------------------*/
$("#btnDpesas").click( function(){
    const id = $(this).data("id");
    $("#dpesasModal").html("Votar asociación pesas");
    cargarFormDP(id);
  });
  $("#btnDpatines").click( function(){
    const id = $(this).data("id");
    $("#dpatinesModal").html("Votar asociación patines");
    cargarFormDPP(id);
  });
  $("#btnDremo").click( function(){
    const id = $(this).data("id");
    $("#dremoModal").html("Votar asociación remo");
    cargarFormDR(id);
  });
  $("#btnDtriatlon").click( function(){
    const id = $(this).data("id");
    $("#dtriatlonModal").html("Votar asociación triatlon");
    cargarFormDT(id);
  });
  /*-----------------------------------------*/

  $('#enviarDA').click(function() {
    guardarVoto();
  });
  $('#enviarDAA').click(function() {
    guardarVoto();
  });
  $('#enviarDB').click(function() {
    guardarVoto();
  });
  $('#enviarDE').click(function() {
    guardarVoto();
  });

    $('#enviarDF').click(function() {
    guardarVoto();
  });
  $('#enviarDG').click(function() {
    guardarVoto();
  });
  $('#enviarDJ').click(function() {
    guardarVoto();
  });
  $('#enviarDK').click(function() {
    guardarVoto();
  });

     $('#enviarDP').click(function() {
    guardarVoto();
  });
  $('#enviarDPP').click(function() {
    guardarVoto();
  });
  $('#enviarDR').click(function() {
    guardarVoto();
  });
  $('#enviarDT').click(function() {
    guardarVoto();
  });



});
</script>