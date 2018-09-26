@extends('admin.layout.modulos.controlpersonal.master')

@section('content')

<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>COMISIONES<small></small></h3>
              </div>
            </div>
            <div class="col-md-12 col-sm-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2><i class="fa fa-bars"></i> REPORTES DE COMISIÓN <small></small></h2>
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


                    <div class="" role="tabpanel" data-example-id="togglable-tabs">
                      <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Inicio</a>
                        </li>
                      </ul>
                      <div id="myTabContent" class="tab-content">
                        <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
                            
                          <div class="row">
                          <div class="col-md-12 col-sm-12 col-xs-12">
                          <div class="x_panel">
                            <div class="x_title">
                            <a href="{{route('comisionporunidad')}}" class="btn btn-primary" target="_blank">REPORTE UNIDAD</a>  
                            <a href="{{route('reporteexcelpendientescomision')}}" class="btn btn-success" target="_blank">PERSONAL PENDIENTE</a>   
                            <hr/>
                            <h5><strong>Papeletas por número de comisión</strong></h5>
                            <br/>
                            {!! Form::open(['route' => ['reportepapeletacomisionpornumero'] , 'method' => 'POST', 'class' => 'form-horizontal','enctype' => 'multipart/form-data' ]) !!}
                                <div class="col-sm-6">
                                    <div class="col-sm-5">
                                        <div class="form-group">
                                        <label for="email">Ingresar Número comision inicial</label>
                                        <input type="number" class="form-control" id="numinicial" name="numinicial"  placeholder="N° de comisión inicial">
                                        </div>
                                    </div>
                                    <div class="col-sm-5">
                                        <div class="form-group">
                                        <label for="email">Ingresar Número comision final</label>
                                        <input type="number" class="form-control" id="numfinal" name="numfinal"  placeholder="N° de comisión final">
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                        <label for="email">*</label>
                                        <button type="submit" class="btn btn-success" target="_blank">PAPELETA</button>
                                        </div>
                                    </div>
                                </div> 
                               
                                <!--<input type="number" class="form-control" id="numinicial" name="numinicial" placeholder="N° de comisión inicial">
                                <input type="number" class="form-control" id="numfinal" name="numfinal" placeholder="N° de final">
                                <button type="submit" class="btn btn-success" target="_blank">prueba</button>-->
                            {!! Form::close() !!}                   
                            </div>
                          </div>
                         </div>
                       </div>





                        </div>
                        
                        

                      </div>
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