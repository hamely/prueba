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
                      </ul>
                      <div id="myTabContent" class="tab-content">
                        <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
                            
                          <div class="row">
                          <div class="col-md-12 col-sm-12 col-xs-12">
                          <div class="x_panel">
                            <div class="x_title">
                                <div class="dropdown">
                                    <button class="btn btn-primary dropdown-toggle btn-sm" type="button" data-toggle="dropdown">Reportes
                                    <span class="caret"></span></button>
                                    <ul class="dropdown-menu">
                                      
                                      <li><a  class="btn btn-sm" data-toggle="modal" data-target="#unidad">cargo
                                      </button></a></li>
                                      <li><a onclick="" class="btn btn-sm" data-toggle="modal" data-target="#unidadlaboral">unidad
                                      </button></a></li>
                                      <li><a onclick="" class="btn btn-sm" data-toggle="modal" data-target="#grado">grado
                                      </button></a></li>
                                    </ul>
                                </div>
                            <a href="{{('/asignarcomision/create')}}" class="btn btn-success "><i class="fa fa-plus-circle"> Nuevo</i></a>
                            <a href="{{route('comisionporunidad')}}" class="btn btn-primary" target="_blank">Reporte unidad</a>  
                            <a href="{{route('reporteexcelpendientescomision')}}" class="btn btn-primary" target="_blank">excel</a>  
                            <a href="{{route('reportepapeletacomisionpornumero')}}" class="btn btn-primary" target="_blank">prueba</a>  

                              <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                            
                              <table id="datatable" class="table table-striped table-bordered" style="color:#1A5276;">
                                 <h2>Comisiones<small></small></h2>
                                 
                                    <a href="{{url('asignarcomision')}}" class="btn btn-warning">Todo</a> 
                                    <a href="{{route('selectListadoComision', 'proceso')}}" class="btn btn-success">Pendiente</a> 
                                    <a href="{{route('selectListadoComision', 'culminado')}}" class="btn btn-primary"><i class="fa fa-file-pdf-o"> Controlado</i></a>
                            
                                  <hr/>
                                <thead>
                                  <tr>
                                    
                                    <th>Cip</th>
                                    <th>Dias</th>
                                    <th>Persona</th>
                                    <th>Grado</th>
                                    <th>N° Comisión</th>
                                    <th>Tipo comision</th>
                                    <th>Destino</th>
                                    <th>Lugar</th>
                                    <th>Por disposición superior</th>
                                    <th>Motivo</th>
                                    <th>Fecha salida</th>
                                    <th>Fecha llegada</th>
                                    <th>Observación</th>
                                    <th>Estado</th>
                                    <th></th>
                                  </tr>
                                </thead>
                                <tbody>
                                @foreach($comisionpersona as $item)
                                      <tr>
                                      <td>{{$item->cip }}</td>
                                      @if($item->estado=='proceso')
                                      <td style="background: #D98880;">{{$item->dia}}</td>
                                      @else
                                      <td>Terminado</td>
                                      @endif
                                      <td>{{$item->apellidopaterno}} {{$item->apellidomaterno}} {{$item->nombres}}</td>
                                      <td>{{$item->nombrecorto}}</td>
                                      <td>{{$item->numerocomision}}</td>
                                      <td>{{$item->nombre }}</td>
                                      <td><strong>Departamento:</strong> {{$item->departamento}} <br/><strong>Provincia:</strong> {{$item->provincia}} </br> <strong>Distrito:</strong> {{$item->distrito}}</td>
                                      <td>{{$item->lugarcomision}}</td>
                                      <td>{{$item->disposicion}}</td>
                                      <td>{{$item->motivo}}</td>
                                      <td>{{$item->fechasalida}}<br/> {{$item->horasalida}}</td>
                                      <td>Al termino de su cometido</td>
                                      <td>{{$item->observacion}}</td>
                                      @if($item->estado=='proceso')
                                      <td style="background: #D98880;">{{$item->estado}}</td>
                                      @else
                                     
                                      <td style="background: #73C6B6;">{{$item->estado}}</td>
                                      </td>
                                      @endif
                                      <td>
                                     @if($item->estado=='proceso')
                                      <a href="{{route('culminarcomision', $item->id_as_co)}}" class="btn btn-default btn-xs">Estado</a> 
                                      <a href="{{route('papeletacomision', $item->id_as_co)}}" class="btn btn-default btn-xs btn-primary"><i class="fa fa-file-pdf-o"> Papeleta com.</i></a>
                                      @else
                                      
                                      @endif
                                      <a href="{{route('papeletareincorporacioncomision', $item->id_as_co)}}" class="btn btn-default btn-xs btn-primary" target="_blank"><i class="fa fa-file-pdf-o"> Papeleta reinc.</i></a>
                                      <a href="{{route('historialpersonacomision', $item->personaid)}}" class="btn btn-default btn-xs btn-warning"><i class="fa fa-file-pdf-o"> Historial</i></a>
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
        </div>

@endsection


@section('script')
   <script>
    
  </script>
@endsection