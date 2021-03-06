@extends('admin.layout.modulos.controlpersonal.master')

@section('content')
<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Asignar nueva comisión</h3>
              </div>

            </div>
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Registrar comisión <small></small></h2>
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
                  <div class="alert alert-danger print-error-msg" style="display:none">
                      <ul></ul>
                  </div>
                    
                    <div class="panel panel-default">
                      <div class="panel-heading">BUSCADOR</div>
                      <div class="panel-body">
                     <!-- @if(count($errors) > 0)
                        <div class="errors">
                          <ul>
                          @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                          @endforeach
                          </ul>
                        </div>
                      @endif-->
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
                                  <label for="email">Número comision</label>
                                  <input type="number" class="form-control" id="numerocomision" name="numerocomision" value="{{ old('numerocomision') }}" placeholder="N° de comisión">
                                  <p style="color:red;">{{ $errors->first('numerocomision') }}</p>
                              </div>
                            </div> 
                            <div class="col-sm-6">
                              <div class="form-group">
                                  <label for="email">Tipo comisión</label>
                                  <select class='selectpicker form-control input-sm' id='Combocomision' name="Combocomision" data-live-search='true'>
                                      @foreach($comision as $item)
                                        <option value="{{ $item->id}}">
                                        {{ $item->nombre}}
                                        </option>
                                      @endforeach
                                  </select>
                              </div>
                            </div> 
                                 
                              <div class="col-sm-12">
                                <div class="col-xs-4">
                                      <div class="form-group">
                                          <label for="usr"> Departamento</label>
                                          <select class='selectpicker form-control' data-size="100" id='Combodepartamento' name="Combodepartamento" data-live-search='true'>
                                              @foreach($ubigeo as $item)
                                                <option value="{{ $item->departamento}}">
                                                {{ $item->departamento}}
                                                </option>
                                              @endforeach
                                          </select>
                                        
                                    </div>
                                </div>
                                <div class="col-xs-4">
                                    <div class="form-group">
                                            <label for="usr">Provincias</label>
                                              <select class="form-control" id="ComboProvincia" name="ComboProvincia">
                                              
                                              </select>
                                    </div>
                                </div>
                                <div class="col-xs-4">
                                    <div class="form-group">
                                            <label for="usr">Distrito</label>
                                          <select class="form-control" id="ComboDistrito" name="ComboDistrito">
                                            
                                          </select>
                                    </div>
                                </div>   
                              </div> 
                              <div class="col-sm-12">
                                  <div class="form-group">
                                      <label for="email">Lugar:</label>
                                        <input id="lugarcomision"  name="lugarcomision" value="{{ old('lugarcomision') }}" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" placeholder="Ingresar lugar de comisión" required="required" type="text">
                                        <p style="color:red;">{{ $errors->first('lugarcomision') }}</p>
                                    </div>
                              </div>
                              <div class="col-sm-12">
                                <div class="form-group">
                                  <label for="email">Motivo:</label>
                                  <input id="motivo"  name="motivo" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" placeholder="Ingresar el motivo" required="required" type="text">
                                </div>
                              </div> 
                        </div>

                        <div class="col-sm-6">
                          <div class="col-sm-12">
                            <div class="form-group">
                              <label for="email">Por disposición:</label>
                              <input id="disposicion"  name="disposicion" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" placeholder="Ingresar disposión" required="required" type="text">
                            </div>
                          </div> 
                          <div class="col-sm-6">
                              <div class="form-group">
                                  <label for="email">Fecha de salida</label>
                                  <input type="date" class="form-control" id="fechasalida" name="fechasalida">
                              </div>
                          </div> 
                          <div class="col-sm-6">
                              <div class="form-group">
                                  <label for="email">Hora de salida</label>
                                  <input type="time" class="form-control" id="horasalida" name="horasalida">
                              </div>
                          </div> 
                        <!-- <div class="col-sm-2">
                            <div class="form-group">
                                  <label for="email">Fecha de llegada</label>
                                  <input id="fechallegada"  name="fechallegada" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2"  required="required" type="date">

                                </div>
                          </div> 

                          <div class="col-sm-4">
                            <div class="form-group">
                                  <label for="email">Hora de llegada</label>
                                <div>
                                <input id="horallegada"  name="horallegada" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" required="required" type="time" placeholder="Hora de salida">  
                                </div>
                                </div>
                          </div> -->
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="email">Fecha de retorno</label>
                                <input type="date" class="form-control" id="fecharetorno" name="fecharetorno" readonly>
                            </div>
                        </div> 
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="email">Hora de retorno</label>
                                <input type="time" class="form-control" id="horaretorno" name="horaretorno" readonly>
                            </div>
                        </div> 
                          <div class="col-md-12">
                            <label class="control-label" for="name">Observación <span class="required">*</span>
                            </label>
                            <div class="col-md-12">
                              <textarea id="observacion" name="observacion" class="form-control" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.."
                              data-parsley-validation-threshold="10" placeholder="Ingrese sus observaciones" readonly></textarea>
                            </div>
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
                   <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                            <button id="enviarComision" type="button" class="btn btn-success"><i class="fa fa-save"> Guardar</i></button>
                              <a href="{{route('papeletacomision')}}" class="btn btn-primary"><i class="fa fa-file-pdf-o"> Imprimir papeleta</i></a>  
                              <a href="{{('/asignarcomision/create')}}" class="btn btn-default  "><i class="fa fa-eraser"> Limpiar</i></a>
                              <a href="{{('/asignarcomision/')}}" class="btn btn-info"><i class="fa fa-mail-reply"> Retroceder</i></a>
                              <button type="submit" class="btn btn-danger"><i class="fa fa-times-circle"> Cancelar</i></button>

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
                 error: function(e) {
                  //  console.log(e.responseJSON.errors);
                  $(".print-error-msg").find("ul").html('');
		            	$(".print-error-msg").css('display','block');
                   var data =e.responseJSON.errors;
                   
                   $.each( data, function( key, value ) {
                       $(".print-error-msg").find("ul").append('<li>'+value+'</li>');
                    });
                 },
                  success: function(respuesta) {
                      toastr.success("SE REGISTRO CORRECTAMENTE LA COMISIÓN");
                  }
              });
        

      });

    	listarProvincia();
   		function listarProvincia()
   		{
   		var departamento=$("#Combodepartamento").val();
        $("#ComboProvincia").html('');
        var html;
        $.ajax({
                 url:'{{ route('listProvincia') }}',
                 type: 'POST',
                 data:{
                        "_token": "{{ csrf_token() }}",
                        "departamento":departamento
                    },
                 dataType: 'JSON',
                 beforeSend: function() {
                 },
                 error: function() {
                 },
                  success: function(respuesta) {
                    $.each(respuesta.data, function(index, val) {
                    	 html=html+' <option value="'+val.provincia+' ">'+val.provincia+'</option>';
                    });
                    $("#ComboProvincia").append(html);
                  }
              });
         var provincia=$("#ComboProvincia").val();
        
   		}

   	$("#Combodepartamento").change(function( event ) {
        event.preventDefault();
        
        var departamento=$("#Combodepartamento").val();
        $("#ComboProvincia").html('');
        var html;
        $.ajax({
                 url:'{{ route('listProvincia') }}',
                 type: 'POST',
                 data:{
                        "_token": "{{ csrf_token() }}",
                        "departamento":departamento
                    },
                 dataType: 'JSON',
                 beforeSend: function() {
                 },
                 error: function() {
                 },
                  success: function(respuesta) {
                    $.each(respuesta.data, function(index, val) {
                    	 html=html+' <option value="'+val.provincia+' ">'+val.provincia+'</option>';
                    });
                    $("#ComboProvincia").append(html);
                  }
              });
         var provincia=$("#ComboProvincia").val();
        

      });

     listarDistrito();
    function listarDistrito()
    {
    	
    	var provincia='Chachapoyas';
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
    }

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
                    var nuevoNumero=respuesta.nuevoNumeroComision;
                    var dato=respuesta.data;

                    $('#numerocomision').val(nuevoNumero);
                    $("#cippersona").val(cip);
                    $("#nombrecompletopersona").html(nombre+' '+ape+' '+apm);
                    $("#gradopersona").val(grado);
                    $("#grado").html(grado);
                    $("#cipP").html(cip);
                    $("#fechasalida").val(respuesta.date);

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
                    var nuevoNumero=respuesta.nuevoNumeroComision;
                    $('#numerocomision').val(nuevoNumero);
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
                    $("#fechasalida").val(respuesta.date);
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