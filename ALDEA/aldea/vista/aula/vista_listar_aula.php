<script type="text/javascript" src="../js/aula.js?rev=<?php echo time();?>"></script>

<div class="col-md-4">
    <div class="box box-warning">
        <div class="box-header with-border">
              <h3 class="box-title">REGISTRAR AULAS</h3>

            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
            </div>
              <!-- /.box-tools -->
        </div>
            <!-- /.box-header -->
            <div class="box-body">
            <div class="form-group">
                <input type="text"  id="idAula" hidden>
                 <div class="col-lg-12">
                    <label for="">Nombre</label>
                    <input type="text" class="form-control" id="aulaAula" placeholder="Ingrese nombre" onkeypress = "return (event.charCode > 64 &&   event.charCode < 91) ||
                         (event. charCode > 96 && event.charCode < 123)||
                         (event. charCode > 31 && event.charCode < 33)"><br>
                </div>
                 <div class="col-lg-12">
                    <label for="">Piso</label>
                    <input type="number" class="form-control" id="piso" placeholder="Ingresenumero"><br>
                </div>
                 <div class="col-lg-12">
                    <label for="">N&uacute;mero</label>
                    <input type="number" class="form-control" id="numero" placeholder="N°"><br>
                </div>
                 <div class="col-lg-12">
                    <label for="">Aforo (Cantidad de Sillas)</label>
                    <input type="number" class="form-control" id="aforro" placeholder="Ingrese numero"><br>
                </div>
                <!-- <div class="col-lg-12">
                    <label for="">Secci&oacute;n</label>
                    <select class="js-example-basic-single" name="state" id="seccion" style="width:100%;">
                        <option value="">--selecione secci&oacute;n--</option>
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="C">C</option>
                        <option value="D">D</option>
                        <option value="E">E</option>
                    </select><br><br>
                </div>-->
                 <div class="col-lg-12">
                    <label for="">Estado</label>
                    <select class="js-example-basic-single" name="state" id="estado" style="width:100%;">
                        <option value="">--selecione estado--</option>
                        <option value="LIBRE">LIBRE</option>
                        <option value="OCUPADO">OCUPADO</option>
                    </select><br><br>
                </div>
                <div class="modal-footer">
                <button class="btn btn-primary btn-sm" onclick="registarAula()"><i class="fa fa-check"><b>&nbsp;Registrar</b></i></button>
                <button type="button" class="btn btn-default btn-sm" onclick="linpiarregistroAula()"><i class="fa fa-close"><b>&nbsp;Cancelar</b></i></button>
            </div>
            </div>
            
            </div>
            <!-- /.box-body -->
    </div>
          <!-- /.box -->
</div>

     <style type="text/css">
          #tabla_aulas{
            border: 1px solid #d4f4f7;
            border-radius: 10px;
            background-color: #f5f7f7;
          }
        </style>


<div class="col-md-8">
    <div class="box box-warning ">
        <div class="box-header titulosclass" id="Titulo_Center">
              <h3 class="box-title">LISTA DE AULAS</h3>

            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
            </div>
              <!-- /.box-tools -->
        </div>
            <!-- /.box-header -->
            <div class="box-body">
            <div class="form-group">
                <div class="col-lg-10">
                    <div class="input-group pull-right">
                        <input type="text" class="global_filter form-control" id="global_filter" placeholder="Ingresar dato a buscar">
                        <span class="input-group-addon"><i class="fa fa-search"></i></span>
                    </div>
                </div>
            </div>
             <br><br>
            <table id="tabla_aulas" class="display responsive nowrap" style="width:100%">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nombre</th>
                        <th>Piso</th>
                        <th>N&uacute;mero</th>
                        <th>Aforo</th>
                        <th>Estado</th>
                        <th>Acci&oacute;n</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                </tfoot>
            </table>
            </div>
            <!-- /.box-body -->
    </div>
          <!-- /.box -->
</div>

<script>
$(document).ready(function() {
    $("#refres_add").hide();
    $('.js-example-basic-single').select2();
     listar_Aulas();
    
  

} );
</script>
