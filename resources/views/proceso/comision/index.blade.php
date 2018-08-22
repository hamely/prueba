@extends('admin.layout.master')

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
                    <h2><i class="fa fa-bars"></i> LISTA DE COMISIONES <small>Por estados de comisión</small></h2>
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
                        <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Comisiones culminadas</a>
                        </li>
                      </ul>
                      <div id="myTabContent" class="tab-content">
                        <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
                            
                          <div class="row">
                          <div class="col-md-12 col-sm-12 col-xs-12">
                          <div class="x_panel">
                            <div class="x_title">
                            <a href="{{('/asignarcomision/create')}}" class="btn btn-success "><i class="fa fa-plus-circle"> Nuevo</i></a>
                             
                              
                              <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                            
                              <table id="datatable" class="table table-striped table-bordered">
                                 <h2>Comisiones<small> PENDIENTES </small></h2>
                                 <hr/>
                                <thead>
                                  <tr>
                                    <th>Cip</th>
                                    <th>Persona</th>
                                    <th>N° Comisión</th>
                                    <th>Tipo comision</th>
                                    <th>Destino</th>
                                    <th>Fecha emisión</th>
                                    <th>Fecha llegada</th>
                                    <th>Hora llegada</th>
                                    <th>Por disposición superior</th>
                                    <th>Motivo</th>
                                    <th>Fecha salida</th>
                                    <th>Hora salida</th>
                                    <th>Observación</th>
                                    
                                    <th></th>
                                  </tr>
                                </thead>
                                <tbody>
                                @foreach($comisionpersona as $item)
                                      <tr>
                                      
                                      <td>{{$item->cip }}</td>
                                      <td>{{$item->apellidopaterno}} {{$item->apellidomaterno}} {{$item->nombres}}</td>
                                      <td>{{$item->numerocomision}}</td>
                                      <td>{{$item->nombre }}</td>
                                      <td><strong>Departamento:</strong> {{$item->departamento}} <br/><strong>Provincia:</strong> {{$item->provincia}} </br> <strong>Distrito:</strong> {{$item->distrito}}</td>
                                      <td>{{$item->fechaemision }}</td>
                                      <td>{{$item->fechallegada }}</td>
                                      <td>{{$item->horallegada }}</td>
                                      <td>{{$item->disposicion}}</td>
                                      <td>{{$item->motivo}}</td>
                                      <td>{{$item->fechasalida}}</td>
                                      <td>{{$item->horasalida}}</td>
                                      <td>{{$item->observacion}}</td>
                                     
                                      <td>
                                      <a href="{{route('culminarcomision',['id' => 1])}}" class="btn btn-default btn-xs">Estado</a> 
                                      <a href="{{route('papeletacomision')}}" class="btn btn-default btn-xs btn-primary"><i class="fa fa-file-pdf-o"> Papeleta</i></a>
                                      </td>
                                      
                                      </tr>
                                @endforeach
                          
                              </tbody>
                            </table>
                           </div>
                          </div>
                         </div>
                       </div>





                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">
                          
                        <div class="row">
                          <div class="col-md-12 col-sm-12 col-xs-12">
                          <div class="x_panel">
                            <div class="x_title">
                            <a href="{{('/asignarcomision/create')}}" class="btn btn-success "><i class="fa fa-plus-circle"> Nuevo</i></a>
                             
                              
                              <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                            
                              <table id="datatable1" class="table table-striped table-bordered">
                                 <h2>Comisiones<small> CULMINADA </small></h2>
                                 <hr/>
                                <thead>
                                  <tr>
                                    <th>Cip</th>
                                    <th>Persona</th>
                                    <th>N° Comisión</th>
                                    <th>Tipo comision</th>
                                    <th>Destino</th>
                                    <th>Fecha emisión</th>
                                    <th>Fecha llegada</th>
                                    <th>Hora llegada</th>
                                    <th>Por disposición superior</th>
                                    <th>Motivo</th>
                                    <th>Fecha salida</th>
                                    <th>Hora salida</th>
                                    <th>Observación</th>
                                    
                                    <th></th>
                                  </tr>
                                </thead>
                                <tbody>
                                @foreach($comisionpersona as $item)
                                      <tr>
                                      <td>{{$item->cip }}</td>
                                      <td>{{$item->apellidopaterno}} {{$item->apellidomaterno}} {{$item->nombres}}</td>
                                      <td>{{$item->numerocomision}}</td>
                                      <td>{{$item->nombre }}</td>
                                      <td><strong>Departamento:</strong> {{$item->departamento}} <br/><strong>Provincia:</strong> {{$item->provincia}} </br> <strong>Distrito:</strong> {{$item->distrito}}</td>
                                      <td>{{$item->fechaemision }}</td>
                                      <td>{{$item->fechallegada }}</td>
                                      <td>{{$item->horallegada }}</td>
                                      <td>{{$item->disposicion}}</td>
                                      <td>{{$item->motivo}}</td>
                                      <td>{{$item->fechasalida}}</td>
                                      <td>{{$item->horasalida}}</td>
                                      <td>{{$item->observacion}}</td>
                                     
                                      <td>
                                      <a href="{{route('culminarcomision')}}" class="btn btn-default btn-xs">Estado</a>
                                      <a href="{{route('papeletacomision')}}" class="btn btn-default btn-xs btn-primary"><i class="fa fa-file-pdf-o"> Papeleta</i></a>
                                      </td>
                                      
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

@endsection


@section('script')
   <script>
    
  </script>
@endsection