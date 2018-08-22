@extends('admin.layout.master')

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
                    {!! Form::open(['route' => ['asignarcomision.store'] , 'method' => 'POST', 'class' => 'form-horizontal','enctype' => 'multipart/form-data' ]) !!}
                    <div class="item form-group">
                        
                        <div class="item form-group">
                        
	                        <div class="col-md-2"><br/>
	                             <label class="control-label" for="number">BUSCAR <span class="required">*</span>
	                            </label> 
	                        </div>
	                        <div class="col-md-2">
	                            <div class="form-group">
	                                    <label for="tag_list">CIP</label>
	                                    <input type="number" id="cip" name="cip" required="required" data-validate-minmax="10,100" placeholder="Ingrese número de CIP" class="form-control col-md-7 col-xs-12">
	                            </div>

	                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                            </br>
                                <a href="" id="buscarPersona" class="btn btn-success "><i class="fa fa-search"> Buscar</i> </a>
                            </div>

                        </div>
                        <div class="col-md-4"> 
                                <div class="form-group">
                                    <label for="tag_list">Nombre y apellido</label>
                                    <select class="itemName form-control" style="width:350px;" id="idPersona" name="itemName"></select>
                                </div>
                        </div>
                      
                    </div>
                    
                    <hr/>
                    
                    </div>
                    <div class="item form-group">
	                    <div class="col-md-2">
	                        <div class="form-group">
	                        	 <label for="tag_list">CIP</label>
	                          <input type="number" id="cippersona" name="cippersona" required="required" data-validate-minmax="10,100"  class="form-control col-md-7 col-xs-12" placeholder="CIP" readonly>
	                        </div>
	                    </div>
	                     <div class="col-md-2">
	                        <div  class="form-group">
	                          <label for="tag_list">Nombre Completo</label>
	                          <input id="nombrecompletopersona"  name="nombrecompletopersona" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2"  required="required" placeholder="Nombres y Apellidos" type="text" readonly>
	                        </div>
	                     </div>
	                    
	                    <div class="col-md-4">
	                        <div  class="form-group">
	                           <label for="tag_list">Número Comisión</label>
	                           <input type="number" id="numerocomision" name="numerocomision" required="required" data-validate-minmax="10,100" placeholder="Número de comisión" class="form-control col-md-4">
	                        </div>
	                       
	                    </div>
	                    <div class="col-md-3">
	                        <div class="form-group">
	                          <label for="usr"> Tipo de comisión</label>
	                          <select class='selectpicker' id='Combocomision' name="Combocomision" data-live-search='true'>
	                              @foreach($comision as $item)
	                                <option value="{{ $item->id}}">
	                                {{ $item->nombre}}
	                                </option>
	                              @endforeach
	                          </select>
	                        
	                        </div>
                        </div>
	                    <br><br>
                    <hr/>
                    <div class="item form-group">
                       <div class="col-md-3">
	                        <div class="form-group">
	                          <label for="usr"> Departamento</label>
	                          <select class='selectpicker' id='Combodepartamento' name="Combodepartamento" data-live-search='true'>
	                              @foreach($ubigeo as $item)
	                                <option value="{{ $item->departamento}}">
	                                {{ $item->departamento}}
	                                </option>
	                              @endforeach
	                          </select>
	                        
	                        </div>
                        </div>

                        <div class="col-md-4">
							<div class="form-group">
								<label for="usr">Provincias</label>
		                          <select class="form-control" id="ComboProvincia" name="ComboProvincia">
		                           
		                          </select>
							 </div>
                        </div>
                        <div class="col-md-4">
							<div class="form-group">
								<label for="usr">Distrito</label>
		                          <select class="form-control" id="ComboDistrito" name="ComboDistrito">
		                            
		                          </select>
		                    </div>
                        </div>
                        
                      </div><br><br>
                    <div class="item form-group">
                        <div class="col-md-4">
	                        <label class="control-label" for="name">Lugar<span class="required">*</span>
	                        </label>
	                        <div class="col-md-12">
	                          <input id="lugarcomision"  name="lugarcomision" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" placeholder="Ingresar lugar de comisión" required="required" type="text">
	                        </div>
                        </div>
                    
                   		<div class="col-md-4">
		                        <label class="control-label" for="name">Fecha de emision<span class="required">*</span>
		                        </label>
		                        <div class="col-md-12">
		                          <input id="fechaemision"  name="fechaemision" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2"  required="required" type="date">
		                        </div>       
		                  </div>
                      <div class="item form-group">
                        <div class="col-md-8">
	                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Motivo <span class="required">*</span>
	                        </label>
	                        <div class="col-md-12">
	                          <input id="motivo"  name="motivo" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" placeholder="Ingresar el motivo" required="required" type="text">
	                        </div>
                        </div>
                        <div class="col-md-4">
	                        <label class="control-label" for="name">Por disposición<span class="required">*</span>
	                        </label>
	                        <div class="col-md-12">
	                          <input id="disposicion"  name="disposicion" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" placeholder="Ingresar disposión" required="required" type="text">
	                        </div>
                        </div>
                         
                   		</div>
		                
                
                    </div>
                    
                    <div class="item form-group">
                    	<div class="col-md-4">
	                    	<label class="control-label" for="name">Fecha de salida <span class="required">*</span>
	                        </label>
	                        <div class="col-md-12">
	                          <input id="fechasalida"  name="fechasalida" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2"  required="required" type="date">
	                        </div>
	                    </div>
	                    <div class="col-md-3">
	                    	<label class="control-label" for="name">Hora de salida<span class="required">*</span>
	                        </label>
	                        <div class="col-md-12">
	                          <input id="horasalida"  name="horasalida" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" required="required" type="text" placeholder="Hora de salida">
	                        </div>
						          </div>
						        </div>

                     <div class="item form-group">
                    	<div class="col-md-4">
	                    	<label class="control-label" for="name">Fecha de llegada<span class="required">*</span>
	                        </label>
	                        <div class="col-md-12">
	                          <input id="fechallegada"  name="fechallegada" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2"  required="required" type="date">
	                        </div>
	                    </div>
	                    <div class="col-md-3">
	                    	<label class="control-label" for="name">Hora de llegada<span class="required">*</span>
	                        </label>
	                        <div class="col-md-12">
	                          <input id="horallegada"  name="horallegada" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" required="required" type="text" placeholder="Hora de salida">
	                        </div>
						          </div>
                    </div>
                    <div class="item form-group">
                    	<div class="col-md-4">
	                    	<label class="control-label" for="name">Fecha de retorno<span class="required">*</span>
	                        </label>
	                        <div class="col-md-12">
	                          <input id="fecharetorno"  name="fecharetorno" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2"  required="required" type="date">
	                        </div>
	                    </div>
	                    <div class="col-md-3">
	                    	<label class="control-label" for="name">Hora de retorno<span class="required">*</span>
	                        </label>
	                        <div class="col-md-12">
	                          <input id="horaretorno"  name="horaretorno" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" required="required" type="text" placeholder="Hora de salida">
	                        </div>
						          </div>
                      <div class="col-md-5">
	                        <label class="control-label" for="name">Observación <span class="required">*</span>
	                        </label>
	                      <div class="col-md-12">
	                        <textarea id="observacion" name="observacion" required="required" class="form-control" name="message" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.."
	                            data-parsley-validation-threshold="10" placeholder="Ingrese sus observaciones"></textarea>
	                      </div>
						          </div>
                    </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                            <button id="enviarComision" type="button" class="btn btn-success"><i class="fa fa-save"> Guardar</i></button>
                             <a href="{{('/asignarcomision/create')}}" class="btn btn-primary "><i class="fa fa-plus-circle"> Limpiar</i></a>
                            <button type="submit" class="btn btn-danger"><i class="fa fa-times-circle"> Cancelar</i></button>

                        </div>
                      </div>
                      {!! Form::close() !!}
                  </div>
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
        var Idpersona=$("#idPersona").val();
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
                    var ape=dato.apellidomaterno;
                    var apm=dato.apellidomaterno;
                    var nombre=dato.nombres;
                    $("#cippersona").val(cip);
                    $("#nombrecompletopersona").val(nombre+' '+ape+' '+apm);

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
                    var dato=respuesta.data;
                    
                    var cip=dato.cip;
                    var ape=dato.apellidomaterno;
                    var apm=dato.apellidomaterno;
                    var nombre=dato.nombres;
                    $("#cippersona").val(cip);
                    $("#nombrecompletopersona").val(nombre+' '+ape+' '+apm);

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
            
             return {
              results: data
            };
          },
          cache: true
        }
      });
  </script>
@endsection