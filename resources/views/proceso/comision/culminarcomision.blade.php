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
                    
                   {!! Form::open(['route' => ['terminarcomision'] , 'method' => 'POST', 'class' => 'form-horizontal','enctype' => 'multipart/form-data' ]) !!}
                    @foreach($culminarcomision as $culminarcomision)
                     <div class="col-sm-6">
         
                      <div class="col-sm-6">
                        <div class="form-group">
                            <label for="email">CIP</label>
                            <input type="hidden" id="id" name="id" value="{!! $culminarcomision->id !!}" placeholder="CIP" readonly>
                            <input type="number" class="form-control" id="cippersona" name="cippersona" value="{!! $culminarcomision->cip !!}" placeholder="CIP" readonly>
                        </div>
                      </div> 
                    
                      <div class="col-sm-6">
                        <div class="form-group">
                            <label for="email">Nombres y apellidos</label>
                            <input type="text" class="form-control" id="nombrecompletopersona" value="{!! $culminarcomision->nombres !!} {!! $culminarcomision->apellidopaterno !!} {!! $culminarcomision->apellidomaterno !!}" name="nombrecompletopersona" placeholder="Nombres y Apellidos" readonly>
                          
                        </div>
                      </div> 
                      <div class="col-sm-6">
                        <div class="form-group">
                            <label for="email">Número comision</label>
                            <input type="number" class="form-control" id="numerocomision" name="numerocomision" value="{!! $culminarcomision->numerocomision !!}" placeholder="N° de comisión" readonly>                            
                        </div>
                      </div> 

                      <div class="col-sm-6">
                        <div class="form-group">
                            <label for="email">Tipo comisión</label>
                            <input type="text" class="form-control" id="tipocomision" name="tipocomision" value="{!! $culminarcomision->nombre!!}" placeholder="tipo de comision" readonly>
                          
                        </div>
                      </div> 
                     
                      <div class="col-sm-12">
                      
                        <div class="form-group">
                          <label for="email">Ubigeo (Departamento, provincia, distrito)</label>
                            <input id="ubigeo"  name="ubigeo" value="{!! $culminarcomision->departamento!!} - {!! $culminarcomision->provincia!!} - {!! $culminarcomision->provincia!!}"  class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" placeholder="Ingresar lugar de comisión"  type="text" readonly>
                        </div>

                       </div> 
                       <div class="col-sm-12">
                      
                            <div class="form-group">
                                <label for="email">Lugar:</label>
                                  <input id="lugarcomision"  name="lugarcomision" value="{!! $culminarcomision->lugarcomision !!}" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" placeholder="Ingresar lugar de comisión"  type="text" readonly>
                              </div>

                        </div> 
                        <div class="col-sm-12">
                      
                            <div class="form-group">
                                <label for="email">Motivo:</label>
                                   <input id="motivo"  name="motivo" value="{!! $culminarcomision->motivo !!}" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" placeholder="Ingresar el motivo" type="text" readonly>
                              </div>
                        </div> 
                        <div class="col-sm-12">
                      
                            <div class="form-group">
                                <label for="email">Por disposición:</label>
                                  <input id="disposicion"  name="disposicion" value="{!! $culminarcomision->disposicion !!}"class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" placeholder="Ingresar disposión" required="required" type="text" readonly>
                              </div>

                        </div> 

                    </div> 

                   
                    <div class="col-sm-2">
                      <div class="form-group">
                            <label for="email">Fecha de salida</label>
                            <input id="fechasalida"  name="fechasalida" value="{!!$culminarcomision->fechasalida !!}" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2"  required="required" type="date" readonly>

                          </div>
                    </div> 

                    <div class="col-sm-4">
                      <div class="form-group">
                            <label for="email">Hora de salida</label>
                          <div>
                           <input id="horasalida"  name="horasalida" class="form-control col-md-7 col-xs-12" value="{!!$culminarcomision->horasalida !!}" data-validate-length-range="6" data-validate-words="2" required="required" type="text" placeholder="Hora de salida" readonly>   
                          </div>
                          </div>
                    </div> 

                    <div class="col-sm-2">
                      <div class="form-group">
                            <label for="email">Fecha de llegada</label>
                            <input id="fechallegada"  name="fechallegada" value="{!!$culminarcomision->fechallegada !!}" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2"  required="required" type="date" readonly>

                          </div>
                    </div> 

                    <div class="col-sm-4">
                      <div class="form-group">
                            <label for="email">Hora de llegada</label>
                          <div>
                           <input id="horallegada"  name="horallegada" value="{!!$culminarcomision->horallegada !!}" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" required="required" type="text" placeholder="Hora de salida" readonly>  
                          </div>
                          </div>
                    </div>
                    <div class="col-sm-2">
                      <div class="form-group">
                            <label for="email">Fecha de retorno</label>
                            <input id="fecharetorno"  name="fecharetorno" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2"   type="date">

                          </div>
                    </div> 

                    <div class="col-sm-4">
                      <div class="form-group">
                            <label for="email">Hora de retorno</label>
                          <div>
                            <input id="horaretorno"  name="horaretorno" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" type="time" placeholder="Hora de retorno">  
                          </div>
                          </div>
                    </div> 
                   <!-- <div class="col-sm-6">
                        <div class="form-group">
                            <label for="email">Retorno</label>
                            <input type="text" class="form-control" id="retorno"  name="retorno" placeholder="retorno" >
                          
                        </div>
                      </div> -->
                    <div class="col-md-6">
                            <label class="control-label" for="name">Observación <span class="required">*</span>
                            </label>
                          <div class="col-md-12">
                            <textarea id="observacion" name="observacion" class="form-control" name="message" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.."
                                data-parsley-validation-threshold="10" placeholder="Ingrese sus observaciones"></textarea>
                          </div>
                     </div>
                     @endforeach
                  </div>
                   <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                              <button id="send" type="submit" class="btn btn-success"><i class="fa fa-save"> Guardar</i></button>
                              <a href="{{route('papeletacomision')}}" class="btn btn-primary"><i class="fa fa-file-pdf-o"> Imprimir papeleta</i></a>  
                              <a href="{{('/asignarcomision/')}}" class="btn btn-info"><i class="fa fa-mail-reply"> Retroceder</i></a>
                              <button type="submit" class="btn btn-danger"><i class="fa fa-times-circle"> Cancelar</i></button>
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

   	
  
  </script>
@endsection