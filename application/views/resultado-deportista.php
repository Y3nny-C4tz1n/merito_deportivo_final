<?php include('common/header2.php');?>
<style type="text/css">
.ui-jqgrid .ui-jqgrid-htable .ui-th-div {
  height: 50px !important;
}
.ui-jqgrid .form-control {
  width: 100% !important;
}
.ui-jqgrid tr.jqgrow td {
  white-space: normal !important;
  font-size: 24pt !important;
  text-align: center !important;

}


.ui-jqgrid tr th {
    background-color: #f5f5f6 !important;
    font-size: 24pt !important;
    text-align: center;
    border: 2px solid #e7e7e7 !important;
}
.chosen-container .chosen-results li.highlighted {
  background-color: #073c77;
  background-image: -webkit-gradient(linear, 50% 0%, 50% 100%, color-stop(20%, #073c77), color-stop(90%, #073c77));
  background-image: -webkit-linear-gradient(#073c77 20%, #073c77 90%);
  background-image: -moz-linear-gradient(#073c77 20%, #073c77 90%);
  background-image: -o-linear-gradient(#073c77 20%, #073c77 90%);
  background-image: linear-gradient(#073c77 20%, #073c77 90%);
  color: #fff;
}
</style>
<main class="col-md-12 ms-sm-auto col-lg-12 px-md-12">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Resultados Categoria Deportista</h1>
  </div>
  <div style="clear:both;"></div>
  <div class="table-responsive">
    <table class="table" id="grid"></table>
    <div id="jqGridPager"></div>
  </div>
</main>
<?php include('common/footer.php');?>
<style>
.btnOragen {
  background-color: orange;
  color: #fff;
}
</style>
<script type="text/javascript">
$("#grid").jqGrid({
  url:'ajax/listadoRdeportista',
  postData: {csrf_directorio_token : function(){ return ($('#token').val() != "") ? $('#token').val() : "";},
    modalidad : function(){ return ($.trim($('#modalidadf').val()) != "") ? $.trim($('#modalidadf').val()) : "";},
  },
  datatype: 'json',mtype: 'POST',height:'450px', styleUI : 'Bootstrap5',iconSet:  'Bootstrap5',
  colNames:['Nominado','Asociación','Total'],
  colModel:[
  {name:'nominado',index:'nominado',width:'650px',resizable:false,sortable:true,align:'left',title:false},
  {name:'asociacion',index:'asociacion',width:'650px',resizable:false,sortable:true,align:'left',title:false},
  {name:'total',index:'total',width:'200px',resizable:false,sortable:true,align:'left',title:false},
  ],
  loadComplete: function(data) {
    try {
      if(data.error){
        swal({
          title:"",
          text:data.msg,
          type:"error",
          confirmButtonColor: "#45BFEB",
          confirmButtonText: 'Aceptar'
        });
      }
    }catch(e) {
      swal({
        title:"",
        text:data.msg,
        type:"error",
        
      });
    }
  },
  width: 1500,
  shrinkToFit: false,
  loadtext: 'Cargando...',
  rowNum:50,
  altRows:false,
  rowList:[50,100,500,1000],
  viewrecords: true,
  multiselect: false
}).navGrid('#jqGridPager', { view: false, del: false, add: false, edit: false, refresh:true,search:false});

</script>