@extends('admin.layout.master')

@section('content')
<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Personal de la PNP <small></small></h3>
              </div>
            </div>


            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                  <a href="{{('/persona/create')}}" class="btn btn-success ">Nuevo persona</a>
                    <h2>Lista de personas de la PNP <small></small></h2>
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
                  
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th> CIP</th>
                          <th>DNI</th>
                          <th>N° de Cuenta</th>
                          <th>Fecha nacimiento</th>
                          <th>Sexo</th>
                          <th>Apellidos y Nombres </th>
                          <th>N° de celular</th>
                          <th>Grupo sanguineo</th>
                          <th>Email</th>
                          <th>Estado civil</th>
                          <th></th>

                        </tr>
                      </thead>
                      <tbody>
                        @foreach($persona as $item)
                            <tr>
                                <td>{{$item->cip }}</td>
                                <td>{{$item->dni }}</td>
                                <td>{{$item->cuenta }}</td>
                                <td>{{$item->fechanacimiento }}</td>
                                <td>{{$item->sexo }}</td>
                                <td>{{$item->apellidopaterno}} {{$item->apellidomaterno}} {{$item->nombres}}</td>
                                <td>{{$item->celular }}</td>
                                <td>{{$item->gruposanguineo }}</td>
                                <td>
                               <strong> Personal:</strong><br>{{$item->emailpersonal }}<br>
                               <strong>Institucional:</strong><br>{{$item->emailinstitucional }}
                                </td>
                                <td>{{$item->estadocivil }}</td>
                                <td>
                                  <div class="dropdown">
                                      <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"> Proceso
                                      <span class="caret"></span></button>
                                      <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a href="#">Unidad</a></li>
                                        <li><a href="#">Cargo</a></li>
                                      </ul>
                                  </div>
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

@endsection


@section('script')
   <script>
    
  </script>
@endsection