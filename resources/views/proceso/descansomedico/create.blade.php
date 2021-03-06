@extends('admin.layout.modulos.controlpersonal.master')

@section('content')
<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Descanso médico</h3>
              </div>

            </div>
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Registrar <small></small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <div class="panel panel-default">
                      <div class="panel-heading">BUSCADOR</div>
                      <div class="panel-body">
                        
                    <div class="col-sm-12">

                        <div class="col-sm-3">
                            <div class="form-group">
                                <label for="email">CIP</label>
                                <input type="number" id="cip" name="cip" class="form-control" placeholder="Ingrese número de CIP">
                                
                            </div>
                        </div> 
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label for="email" style="color: white">*</label>
                                <div>
                                <a href="" id="buscarPersona" class="btn btn-success"><i class="fa fa-search"> Buscar</i> </a>
                            </div>
                            </div>
                        </div> 
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="email">Nombres y Apellidos</label>
                                <div>
                                <select class="itemName form-control" style="width:350px;" id="idPersona" name="itemName"></select>
                                </div>
                            </div>
                        </div> 
                    </div> 
                      </div>
                    </div>

                    <div align="center">
                    GRADO:<label id="grado"> </label> <br/>
                    CIP: <label id="cipP"> </label> <br/>
                    APELLIDOS Y NOMBRES: <label id="nombrecompletopersona"></label> <br/>
                    </div>
                    <br/>

                    <div class="panel panel-default">
                      <div class="panel-body">

                        <div class="col-sm-6">
                            <div class="col-sm-5">
                                <div class="form-group">
                                    <label for="email">N° de descanso</label>
                                    <input type="number" class="form-control" id="numerodescanso" name="numerodescanso" placeholder="N° de descanso médico">
                                </div>
                            </div> 
                            <div class="col-sm-7">
                                <div class="form-group">
                                    <label for="email">Expedido por</label>
                                    <input type="text" class="form-control" id="expedido" name="expedido" placeholder="Expedido por">
                                </div>
                            </div> 
                            <div class="col-sm-12">
                            <div class="form-group">
                              <label for="email">Tipo Diagnóstico</label>
                              <select class='selectpicker form-control input-sm' id='comboDiagnostico' name="comboDiagnostico" data-live-search='true'>
                                @foreach($descanso as $item)
                                  <option value="{{$item->id}}">{{$item->codigo}} {{$item->nombre}}
                                  </option>
                                @endforeach
                              </select>
                            </div>
                          </div> 
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="email">Fecha de emision</label>
                                    <input type="date" class="form-control" id="fechaemision" name="fechaemision">
                                </div>
                        </div> 
                            
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="email">Fecha de término</label>
                                <input type="date" class="form-control" id="fechatermino" name="fechatermino">
                            </div>
                        </div> 
                          
                        </div>

                        <div class="col-sm-6">

                        
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="email">Número de días</label>
                                <input type="text" class="form-control" id="dia" name="dia" placeholder="Número de días">
                            </div>
                        </div> 
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="email">Año</label>
                                <input type="text" class="form-control" id="anio" name="anio" placeholder="Año">
                            </div>
                        </div> 
                          <div class="col-md-12">
                            <label class="control-label" for="name">Observación <span class="required">*</span>
                            </label>
                            <div class="col-md-12">
                              <textarea id="observacion" name="observacion" class="form-control" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.."
                              data-parsley-validation-threshold="10" placeholder="Ingrese sus observaciones"></textarea>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                     <div class="col-sm-6">
                      
                      <div class="col-sm-6">
                        <div class="form-group">
                            <input type="hidden" id="idpersonaBuscador" name="idpersonaBuscador">
                        </div>
                      </div> 
                    </div> 

                  </div>
                   <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                            <button id="enviarDescansoMedico" type="button" class="btn btn-success"><i class="fa fa-save"> Guardar</i></button>
                              <a href="{{('/asignarcomision/create')}}" class="btn btn-default  "><i class="fa fa-eraser"> Limpiar</i></a>
                              <a href="{{('/movimientoincluir/')}}" class="btn btn-info"><i class="fa fa-mail-reply"> Retroceder</i></a>
                        </div>
                     </div><br>
                    
                </div>
              </div>
            </div>
          </div>
        </div>

@endsection


@section('script')
   <script>
   	$("#enviarDescansoMedico").click(function( event ) {
        event.preventDefault();
        if($("#idpersonaBuscador").val()===''){
          var Idpersona=$("#idPersona").val();
        }
        else
        {
          var Idpersona=$("#idpersonaBuscador").val();
        }
        
        var Combodiagnostico=$("#comboDiagnostico").val();
        var Numerodescanso=$('#numerodescanso').val();
        var Expedido=$('#expedido').val();
        var Fechaemision=$('#fechaemision').val();
        var Fechatermino=$('#fechatermino').val();
        var Dia=$('#dia').val();
        var Anio=$('#anio').val();
        var Observacion=$('#observacion').val();

        $.ajax({
                 url:'{{ route('insertAsignarDescansoMedico') }}',
                 type: 'POST',
                 data:{
                        "_token": "{{ csrf_token() }}",
                        "idPersona":Idpersona,
                        'comboDiagnostico':Combodiagnostico,
                        "numerodescanso":Numerodescanso,
                        "expedido":Expedido,
                        "fechaemision":Fechaemision,
                        "fechatermino":Fechatermino,
                        "dia":Dia,
                        "anio":Anio,
                        "observacion":Observacion,
                    },
                 dataType: 'JSON',
                 beforeSend: function() {
                 },
                 error: function() {
                 },
                  success: function(respuesta) {
                   console.log(respuesta);
                  }
              });
      });
   	
      $("#idPersona").change(function( event ) {
        event.preventDefault();
        
        var idPersona=$("#idPersona").val();

        $.ajax({
                 url:'{{ route('searchPersona') }}',
                 type: 'POST',
                 data:{
                        "_token": "{{ csrf_token() }}",
                        "idPersona":idPersona
                    },
                 dataType: 'JSON',
                 beforeSend: function() {
                 },
                 error: function() {
                 },
                  success: function(respuesta) {
                    var dato=respuesta.data;
                    
                    var cip=dato.cip;
                    var ape=dato.apellidopaterno;
                    var apm=dato.apellidomaterno;
                    var nombre=dato.nombres;
                    var grado=dato.nombrecorto;
                    $("#cippersona").val(cip);
                    $("#nombrecompletopersona").html(nombre+' '+ape+' '+apm);
                    $("#gradopersona").val(grado);
                    $("#grado").html(grado);
                    $("#cipP").html(cip);

                  }
              });
        

      });

      $("#buscarPersona").click(function( event ) {
        event.preventDefault();
        
        var cip=$("#cip").val();

        $.ajax({
                 url:'{{ route('searchPersonaCip') }}',
                 type: 'POST',
                 data:{
                        "_token": "{{ csrf_token() }}",
                        "cip":cip
                    },
                 dataType: 'JSON',
                 beforeSend: function() {
                 },
                 error: function() {
                 },
                  success: function(respuesta) {
                    console.log(respuesta);
                    var dato=respuesta.data;
                    
                    var cip=dato.cip;
                    var ape=dato.apellidopaterno;
                    var apm=dato.apellidomaterno;
                    var nombre=dato.nombres;
                    var id=dato.id;
                    var grado=dato.nombrecorto;
                    $("#cippersona").val(cip);
                    $("#idpersonaBuscador").val(id);
                    $("#nombrecompletopersona").html(nombre+' '+ape+' '+apm);
                    $("#gradopersona").val(grado);
                    $("#grado").html(grado);
                    $("#cipP").html(cip);
                  }
              });
      });
    
    

        $('.itemName').select2({
        placeholder: 'Seleccione personal',
        ajax: {
          url: '/tags',
          dataType: 'json',
          delay: 500,
          processResults: function (data) {
            $('#idpersonaBuscador').val('');
             return {
              results: data
            };
          },
          cache: true
        }
      });
  </script>
@endsection