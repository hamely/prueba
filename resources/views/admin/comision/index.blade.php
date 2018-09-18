@extends('admin.layout.modulos.mantenimientoyusuarios.master')

@section('content')
<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Tipos de comisiones <small></small></h3>
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
                @if(Session::has('MensajeEliminar'))
                    <div class="alert alert-danger alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                  {{Session::get('MensajeEliminar')}}
                    </div>
                @endif
                @if(Session::has('MensajeActualizar'))
                  <div class="alert alert-warning alert-dismissable">
                  <button type="button" class="close" data-dismiss="alert">&times;</button>
                  {{Session::get('MensajeActualizar')}}
                  </div>
                @endif
                 
                <div class="x_panel">
                  <div class="x_title">
                  <a href="{{('/comision/create')}}" class="btn btn-success "><i class="fa fa-plus-circle"> Nuevo</i></a>
                    <h2>Lista de tipos de comisiones <small></small></h2>
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
                          <th>Código</th>
                          <th>Tipo de sanción</th>
                          <th>Acciones</th>
                   
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($comision as $item)
                            <tr>
                            <td>{{$item->codigo }}</td>
                            <td>{{$item->nombre }}</td>
                            <td><a style= "color:blue" href="{{route('comision.edit',$item->id)}}" >editar<a/>
                            
                            {!! Form::open(['route' => ['comision.destroy',$item->id] , 'method' => 'DELETE', 'class' => 'form-horizontal','enctype' => 'multipart/form-data' ]) !!}
                            {{ Form::button('<i class="fa fa-trash"></i>',['type' =>'submit','class'=>'btn btn-danger btn-sm'])}}
                           
                            {!! Form::close() !!}
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