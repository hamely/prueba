@extends('admin.layout.modulos.movimientopersonal.master')

@section('content')
<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>INCLUIR PERSONA<small></small></h3>
              </div>
            </div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
           
                <div class="x_panel">
                  <div class="x_title">
                  <!--<a href="" class="btn btn-success "><i class="fa fa-plus-circle"> Nuevo</i></a>-->
                  <a href="" class="btn btn-success "><i class="fa fa-plus-circle"> Nuevo</i></a>
                    <h2>Lista de personas incluidas<small></small></h2>
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
                        <th> CIP</th>
                        <th>DNI</th>
                        <th>Apellidos y Nombres </th>
                        <th>Fecha nacimiento</th>
                        <th>Sexo</th>
                        <th>N° de celular</th>
                        <th>Email</th>
                        <th>Estado civil</th>
                        <th>Unidad incluida</th>
              
                        <th>Fecha asignacion</th>
                        <th>Observación</th>
                        <th></th>

                      </tr>
                    </thead>
                    <tbody>
         
                          <tr>
            
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td>                        
                              </td>
                          </tr>
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