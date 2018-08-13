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
                        <br/>
                        <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="number">Ingresar CIP o Nombres y Apellidos <span class="required">*</span>
                        </label>
                        <div class="col-md-2  col-sm-6 col-xs-12">
                          <input type="number" id="cip" name="cip" required="required" data-validate-minmax="10,100" placeholder="Ingrese número de CIP" class="form-control col-md-7 col-xs-12">
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                          <input id="apellidopaterno"  name="apellidopaterno" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" placeholder="Ingresar apellidos y nombres" required="required" type="text">
                        </div>
                        <div class="col-md-1 col-sm-6 col-xs-12">
                            <a href="" class="btn btn-success "><i class="fa fa-search"> Buscar</i> </a>
                        </div>
                        
                    </div>
                      <hr/>
                        
                    </div>
                    <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name"> <span class="required"></span>
                        </label>
                        <div class="col-md-2 col-sm-6 col-xs-12">
                          <input type="number" id="cip" name="cip" required="required" data-validate-minmax="10,100"  class="form-control col-md-7 col-xs-12" placeholder="CIP" readonly>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                          <input id="apellidopaterno"  name="apellidopaterno" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2"  required="required" placeholder="Nombres y Apellidos" type="text" readonly>
                        </div>
                       
                    </div>
                    <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="number">Número Comisión <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="number" id="cip" name="cip" required="required" data-validate-minmax="10,100" placeholder="Ingrese número de comisión" class="form-control col-md-7 col-xs-12">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="number">Destino<span class="required">*</span>
                        </label>
                        <div class="col-md-2 col-sm-6 col-xs-12">
                          <select class="form-control" id="estadocivil" name="estadocivil">
                            <option>Elija departamento</option>
                            <option value="Apurímac">Apurímac</option>
                            <option value="Cusco">Cusco</option>
                          </select>
                        </div>
                        <div class="col-md-2 col-sm-6 col-xs-12">
                          <select class="form-control" id="estadocivil" name="estadocivil">
                            <option>Elija provincia</option>
                            <option value="Abancay">Abancay</option>
                            <option value="Cusco">Cusco</option>
                          </select>
                        </div>
                        <div class="col-md-2 col-sm-6 col-xs-12">
                          <select class="form-control" id="estadocivil" name="estadocivil">
                            <option>Elija provincia</option>
                            <option value="Abancay">Abancay</option>
                            <option value="Cusco">Cusco</option>
                          </select>
                        </div>
                      </div>
                    <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Lugar<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="apellidopaterno"  name="apellidopaterno" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" placeholder="Ingresar lugar de comisión" required="required" type="text">
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Fecha de emision y fecha de llegada<span class="required">*</span>
                        </label>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                          <input id="fechanacimiento"  name="fechanacimiento" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2"  required="required" type="date">
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                          <input id="fechanacimiento"  name="fechanacimiento" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" required="required" type="date">
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Por disposición superior <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="apellidopaterno"  name="apellidopaterno" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" placeholder="Ingresar disposión superior" required="required" type="text">
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Motivo <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="apellidopaterno"  name="apellidopaterno" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" placeholder="Ingresar el motivo" required="required" type="text">
                        </div>
                    </div>
                    
                    <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Fecha de salida y hora<span class="required">*</span>
                        </label>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                          <input id="fechanacimiento"  name="fechanacimiento" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2"  required="required" type="date">
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                          <input id="fechanacimiento"  name="fechanacimiento" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" required="required" type="text" placeholder="Hora de salida">
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Observación <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <textarea id="message" required="required" class="form-control" name="message" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.."
                            data-parsley-validation-threshold="10" placeholder="Ingrese sus observaciones"></textarea>
                        </div>
                    </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                            <button id="send" type="submit" class="btn btn-success"><i class="fa fa-save"> Guardar</i></button>
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
    
  </script>
@endsection