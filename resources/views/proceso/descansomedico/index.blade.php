@extends('admin.layout.modulos.controlpersonal.master')

@section('content')

<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>DESCANSO MÉDICO<small></small></h3>
              </div>
            </div>
            <div class="col-md-12 col-sm-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2><i class="fa fa-bars"></i> LISTA DE DESCANSO MÉDICO <small>Por estados</small></h2>
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
                            <a href="{{('/controlardescansomedico/create')}}" class="btn btn-success "><i class="fa fa-plus-circle"> Nuevo</i></a> 
                              <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                            
                              <table id="datatable" class="table table-striped table-bordered" style="color:#1A5276;">
                                <h2>Descanso médico<small></small></h2>
                                <hr/>
                                <thead>
                              
                                  <tr>
                                    <th>Cip</th>
                                    <th>Dias</th>
                                    <th>Persona</th>
                                    <th>Grado</th>
                                    <th>N° Descanso</th>
                                    <th>Expedido por</th>
                                    <th>Diagnostico</th>
                                    <th>Observación</th>
                                    <th>Controlado por</th>
                                    <th></th>
                                  </tr>
                                </thead>
                                <tbody>
                                @foreach($data as $item)
                                <tr>
                                    <td>{{$item->cip}}</td>
                                    <td style="background: #D98880;">{{$item->dia}}</td>
                                    <td>{{$item->apellidopaterno}} {{$item->apellidomaterno}} {{$item->nombres}}</td>
                                    <td></td>
                                    <td>{{$item->numerodescanso}}</td>
                                    <td>{{$item->expedido}}</td>
                                    <td>{{$item->diagnostico}}</td>
                                    <td></td>
                                    <td>{{$item->name}}</td>
                                    <td> <a href="{{route('historialpersonadescanso', $item->personaid)}}" class="btn btn-default btn-xs btn-warning"><i class="fa fa-file-pdf-o"> Historial</i></a></td>
                                </tr>
                                @endforeach                  
                              </tbody>
                            </table>
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