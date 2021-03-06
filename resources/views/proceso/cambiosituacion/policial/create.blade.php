@extends('admin.layout.modulos.movimientopersonal.master')

@section('content')
<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Cambio de situación policial</h3>
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
                    
                   {!! Form::open(['route' => ['cambiosituacionpolicial.store'] , 'method' => 'POST', 'class' => 'form-horizontal','enctype' => 'multipart/form-data' ]) !!}
                    
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
                    GRADO: <br/>
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
                              <select class='selectpicker form-control input-sm' id='Combodocumento' name="Combodocumento" data-live-search='true'>
                                @foreach($documento as $item)
                                    <option value="{{$item->id}}">{{$item->nombre}}
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
                                <input type="text" class="form-control" id="sigla" name="sigla" placeholder="SIGLAS">
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
                                <label for="email">Fecha de situación policial</label>
                                <input type="date" class="form-control" id="fechainclusion" name="fechainclusion" placeholder="SIGLAS">
                            </div>
                          </div> 
                  
                          <div class="col-sm-6">
                            <div class="form-group">
                                <label for="email">Situación policial</label>
                                <select class='selectpicker form-control input-sm' id='Combomovimiento' name="Combomovimiento" data-live-search='true'>
                                    
                                        <option value="1">DISPONIBILIDAD
                                        </option>
                                        <option value="1">RETIRO
                                        </option>
                                    
                                </select>
                            </div>
                          </div>

                        </div>

                        <div class="col-sm-6">

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

                   
                  </div>
                   <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                            <button id="enviarComision" type="button" class="btn btn-success"><i class="fa fa-save"> Guardar</i></button>
                              <a href="{{('/asignarcomision/create')}}" class="btn btn-default  "><i class="fa fa-eraser"> Limpiar</i></a>
                              <a href="{{('/movimientoincluir/')}}" class="btn btn-info"><i class="fa fa-mail-reply"> Retroceder</i></a>

                        </div>
                      </div><br>
                      {!! Form::close() !!}
                </div>
              </div>
            </div>
          </div>
        </div>

@endsection


@section('script')
   <script>

   	$("#enviarComision").click(function( event ) {
        event.preventDefault();
        if($("#idpersonaBuscador").val()===''){
          var Idpersona=$("#idPersona").val();
        }
        else
        {
          var Idpersona=$("#idpersonaBuscador").val();
        }
       
        var Numerocomision=$("#numerocomision").val();
        var Combocomision=$("#Combocomision").val();
        var ComboDistrito=$("#ComboDistrito").val();
        var Lugarcomision=$("#lugarcomision").val();
        var Fechaemision=$("#fechaemision").val();
        var Motivo=$("#motivo").val();
        var Disposicion=$("#disposicion").val();
        var Fechasalida=$("#fechasalida").val();
        var Horasalida=$("#horasalida").val();
        var Fechallegada=$("#fechallegada").val();
        var Horallegada=$("#horallegada").val();
        var Fecharetorno=$("#fecharetorno").val();
        var Horaretorno=$("#horaretorno").val();
        var Observacion=$("#observacion").val();

        $.ajax({
                 url:'{{ route('insertComision') }}',
                 type: 'POST',
                 data:{
                        "_token": "{{ csrf_token() }}",
                        "idPersona":Idpersona,
                        "numeroComision":Numerocomision,
                        'comboComision':Combocomision,
                        "comboDistrito":ComboDistrito,
                        "lugarComision":Lugarcomision,
                        "fechaEmision":Fechaemision,
                        "motivo":Motivo,
                        "disposicion":Disposicion,
                        "fechaSalida":Fechasalida,
                        "horaSalida":Horasalida,
                        "fechaLlegada":Fechallegada,
                        "horaLlegada":Horallegada,
                        "fechaRetorno":Fecharetorno,
                        "horaRetorno":Horaretorno,
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

    	
   	

   

   	$("#ComboProvincia").change(function( event ) {
        event.preventDefault();
        
        var provincia=$("#ComboProvincia").val();
        $("#ComboDistrito").html('');
        var html;
        $.ajax({
                 url:'{{ route('listDistrito') }}',
                 type: 'POST',
                 data:{
                        "_token": "{{ csrf_token() }}",
                        "provincia":provincia
                    },
                 dataType: 'JSON',
                 beforeSend: function() {
                 },
                 error: function() {
                 },
                  success: function(respuesta) {
                    $.each(respuesta.data, function(index, val) {
                    	 html=html+' <option value="'+val.id+' ">'+val.distrito+'</option>';
                    });
                    $("#ComboDistrito").append(html);
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