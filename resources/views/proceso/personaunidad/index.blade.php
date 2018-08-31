@extends('admin.layout.master')

@section('content')
<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>PERSONA-UNIDAD<small></small></h3>
              </div>
            </div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                @if(Session::has('Mensaje'))
                <div class="alert alert-success alert-dismissable">
                  <button type="button" class="close" data-dismiss="alert">&times;</button>
                   {{Session::get('Mensaje')}}
                </div>
                @endif
                <div class="x_panel">
                  <div class="x_title">
                  <!--<a href="" class="btn btn-success "><i class="fa fa-plus-circle"> Nuevo</i></a>-->
                    <h2>Lista de personas con unidad<small></small></h2>
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
                  
                  <table id="example" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th>CIP</th>
                        <th>Apellidos y Nombres </th>
                        <th>DNI</th>
                        <th>N° de Cuenta</th>
                        <th>Fecha nacimiento</th>
                        <th>Sexo</th>
                        <th>N° de celular</th>
                      
                        <th>Email</th>
                        <th>Estado civil</th>
                        <th>Codigo unidad</th>
                        <th>Unidad</th>
                        <th>Fecha asignacion</th>
                        <th>Observación</th>

                      </tr>
                    </thead>
                    <tbody>
                      @foreach($personaunidad as $item)
                          <tr>
                              <td>{{$item->cip }}</td>
                              <td>{{$item->apellidopaterno}} {{$item->apellidomaterno}} {{$item->nombres}}</td>
                              <td>{{$item->dni }}</td>
                              <td>{{$item->cuenta }}</td>
                              <td>{{$item->fechanacimiento }}</td>
                              <td>{{$item->sexo }}</td>
                  
                              <td>{{$item->celular }}</td>
                       
                              <td>{{$item->email}}                   
                              </td>
                              <td>{{$item->estadocivil }}</td>
                              <td>{{$item->codigo}}</td>
                              <td>{{$item->nivel2}}-{{$item->nivel4}}-{{$item->nivel6}}-{{$item->nivel8}}-{{$item->nivel10}}-{{$item->nivel12}}</td>
                              <td>{{$item->fechaAsignacion}}</td>
                              <td>{{$item->observacion}}</td>
                          </tr>
                      @endforeach
                    </tbody>
                  </table>
                  {{$personaunidad->links()}}
                </div>

                  
                </div>
              </div>

    
            </div>
          </div>
        </div>

@endsection


@section('script')
  <script>
    $(document).ready(function() {
    $('#example').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    } );
  } );
  </script>
@endsection