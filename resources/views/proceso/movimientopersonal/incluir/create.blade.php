@extends('admin.layout.modulos.movimientopersonal.master')

@section('content')
<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Incluir personal</h3>
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
                    GRADO:  <br/>
                    CIP: <br/>
                    APELLIDOS Y NOMBRES: <br/>
                    </div>
                    <br/>


                    <div class="panel panel-default">
                      <div class="panel-body">

                        <div class="col-sm-6">
                          
                          <div class="col-sm-6">
                            <div class="form-group">
                              <label for="email">Tipo documento</label>
                              <select class='selectpicker form-control input-sm' id='comboDocumento' name="comboDocumento" data-live-search='true'>
                                @foreach($documento as $item)
                                  <option value="{{ $item->id }}">{{$item->nombre}}
                                  </option>
                                @endforeach
                              </select>
                            </div>
                          </div> 
                          <div class="col-sm-6">
                            <div class="form-group">
                                <label for="email">Número documento</label>
                                <input type="number" class="form-control" id="numerodocumento" name="numerodocumento" placeholder="N° DOC.">
                            </div>
                          </div> 
                          <div class="col-sm-6">
                            <div class="form-group">
                                <label for="email">Siglas documento</label>
                                <input type="text" class="form-control" id="sigladocumento" name="sigladocumento" placeholder="SIGLAS">
                            </div>
                          </div> 
                          <div class="col-sm-6">
                            <div class="form-group">
                                <label for="email">Fecha de documento</label>
                                <input type="date" class="form-control" id="fechadocumento" name="fechadocumento" placeholder="SIGLAS">
                            </div>
                          </div> 
                          <div class="col-sm-6">
                            <div class="form-group">
                                <label for="email">Fecha de inclusion</label>
                                <input type="date" class="form-control" id="fechainclusion" name="fechainclusion" placeholder="SIGLAS">
                            </div>
                          </div> 
                          <div class="col-sm-6">
                            <div class="form-group">
                                <label for="email">Días</label>
                                <input type="number" class="form-control" id="tiempo" name="tiempo" placeholder="Días">
                            </div>
                          </div> 
                          <div class="col-sm-6">
                            <div class="form-group">
                                <label for="email">Tipo de movimiento</label>
                                <select class='selectpicker form-control input-sm' id='comboMovimiento' name="comboMovimiento" data-live-search='true'>
                                @foreach($movimiento as $item)
                                      <option value="{{$item->id}}">{{$item->nombre}}
                                      </option>
                                @endforeach
                                </select>
                            </div>
                          </div>
                          <div class="col-sm-6">
                            <div class="form-group">
                                <label for="email">Unidad</label>
                                <select class='selectpicker form-control input-sm' id='comboUnidad' name="comboUnidad" data-live-search='true'>
                                @foreach($unidad as $item)
                                  <option value="{{$item->id}}">{{$item->codigo}} : {{$item->nivel2}} {{$item->nivel4}} {{$item->nivel6}} {{$item->nivel8}} {{$item->nivel8}} {{$item->nivel10}} {{$item->nivel12}} {{$item->nivel14}}
                                  </option>
                                @endforeach
                                </select>
                            </div>
                          </div> 
                          
                          
                        </div>


                        <div class="col-sm-6">

                                                
                          <div class="col-sm-6">
                            <div class="form-group">
                                <label for="email">Cargo</label>
                                <select class='selectpicker form-control input-sm' id='comboCargo' name="comboCargo" data-live-search='true'>
                                @foreach($cargo as $item)
                                  <option value="{{$item->id}}"> {{$item->codigo}} : {{$item->nombrecorto}}
                                  </option>
                                @endforeach
                                </select>
                            </div>
                          </div> 
                          <div class="col-sm-6">
                            <div class="form-group">
                                <label for="email">Estado de cip</label>
                                <select class='selectpicker form-control input-sm' id='comboCip' name="comboCip" data-live-search='true'>
                                @foreach($cip as $item)
                                  <option value="{{$item->id}}"> {{$item->codigo}} : {{$item->nombre}}
                                  </option>
                                @endforeach
                                </select>
                            </div>
                          </div> 
                          <div class="col-sm-6">
                            <div class="form-group">
                                <label for="email">Función policial y modalidad de horario</label>
                                <select class='selectpicker form-control input-sm' id='comboHorario' name="comboHorario" data-live-search='true'>
                                @foreach($horario as $item)
                                  <option value="{{$item->id}}"> {{$item->codigo}} : {{$item->nombre}}
                                  </option>
                                @endforeach
                                </select>
                            </div>
                          </div> 
                          <div class="col-md-12">
                            <label class="control-label" for="name">Observación <span class="required">*</span>
                            </label>
                            <div class="col-md-12">
                              <textarea id="observacion" name="observacion" class="form-control" name="message" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.."
                              data-parsley-validation-threshold="10" placeholder="Ingrese sus observaciones"></textarea>
                            </div>
                          </div>

                    </div>


                      </div>
                    </div>

                     <div class="col-sm-6">
                      
                      <div class="col-sm-6">
                        <div class="form-group">
                            <label for="email">CIP</label>
                            <input type="hidden" id="idpersonaBuscador" name="idpersonaBuscador">
                            <input type="number" class="form-control" id="cippersona" name="cippersona" placeholder="CIP" readonly>
                        </div>
                      </div> 

                      <div class="col-sm-6">
                        <div class="form-group">
                            <label for="email">Grado</label>
                            <input type="text" class="form-control" id="gradopersona"  name="gradopersona" placeholder="Grado" readonly>
                          
                        </div>
                      </div> 
                      <div class="col-sm-12">
                        <div class="form-group">
                            <label for="email">Nombres y apellidos</label>
                            <input type="text" class="form-control" id="nombrecompletopersona"  name="nombrecompletopersona" placeholder="Nombres y Apellidos" readonly>
                          
                        </div>
                      </div> 

                    </div> 

                   
                  </div>
                   <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                            <button id="enviarMovimientoPersonalIncluir" type="button" class="btn btn-success"><i class="fa fa-save"> Guardar</i></button>
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

   	$("#enviarMovimientoPersonalIncluir").click(function( event ) {
        event.preventDefault();
        if($("#idpersonaBuscador").val()===''){
          var Idpersona=$("#idPersona").val();
        }
        else
        {
          var Idpersona=$("#idpersonaBuscador").val();
        }
        
        var Combodocumento=$("#comboDocumento").val();
        var Numerodocumento=$('#numerodocumento').val();
        var Sigladocumento=$('#sigladocumento').val();
        var Fechadocumento=$('#fechadocumento').val();
        var Fechainclusion=$('#fechainclusion').val();
        var Combomovimiento=$('#comboMovimiento').val();
        var Tiempo=$('#tiempo').val();
        var Combounidad=$('#comboUnidad').val();
        var Combocargo=$('#comboCargo').val();
        var Combocip=$('#comboCip').val();
        var Combohorario=$('#comboHorario').val();
        var Observacion=$('#observacion').val();

        $.ajax({
                 url:'{{ route('insertMovimientoIncluir') }}',
                 type: 'POST',
                 data:{
                        "_token": "{{ csrf_token() }}",
                        "idPersona":Idpersona,
                        'comboDocumento':Combodocumento,
                        "numerodocumento":Numerodocumento,
                        "sigladocumento":Sigladocumento,
                        "fechadocumento":Fechadocumento,
                        "fechainclusion":Fechainclusion,
                        "comboMovimiento":Combomovimiento,
                        "tiempo":Tiempo,
                        "comboUnidad":Combounidad,
                        "comboCargo":Combocargo,
                        "comboCip":Combocip,
                        "comboHorario":Combohorario,
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
                    $("#nombrecompletopersona").val(nombre+' '+ape+' '+apm);
                    $("#gradopersona").val(grado);

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
                    $("#nombrecompletopersona").val(nombre+' '+ape+' '+apm);
                    $("#gradopersona").val(grado);
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