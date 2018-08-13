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
                  <a href="{{('/persona/create')}}" class="btn btn-success "><i class="fa fa-plus-circle"> Nuevo</i></a>
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
                                        <li>
                                          <button type="button" onclick="listarCargos(1)" class="btn btn-ling" data-toggle="modal" data-target="#unidad">cargo
                                          </button>
                                          <button type="button" onclick="listarGrados(1)" class="btn btn-ling" data-toggle="modal" data-target="#grado">grado
                                          </button>
                                       </li>
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



    <div class="modal fade" id="unidad" role="dialog">
        <div class="modal-dialog">
        
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Asignar cargo,unidad y grado</h4>
            </div>
            <div class="modal-body">
                <input type="hidden" name="idPersona" id="idPersona">
                <label> Cargo</label>
                 <div class="divCargo">
                     <select class='selectpicker' id='cargo' data-live-search='true'>
                    </select>
                 </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </div>
          
        </div>
    </div>


    <div class="modal fade" id="grado" role="dialog">
        <div class="modal-dialog">
        
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Asignar grado</h4>
            </div>
            <div class="modal-body">
                <input type="text" name="idPersona" id="idPersona">
                <label> Grado</label>
                 <div class="divGrado">
                     <select class='selectpicker' id='grado' data-live-search='true'>
                    </select>
                 </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </div>
          
        </div>
    </div>

@endsection


@section('script')
   <script>

    function listarCargos(idPersona)
    {
       $("#idPersona").val(idPersona);

       $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
          }
      });
       jQuery.ajax({
          url: "{{('cargo')}}",
          method: 'GET',
          success: function(result){

            var html="";
              $.each(result.data, function(cargo, item) {
                    html= html+ "<option data-tokens='"+item.nombre+"'>"+item.nombre+"</option>";
                });
              $("#cargo").append(html);
              $('.selectpicker').selectpicker('refresh');
          }});
    }

    function listarGrados(idPersona)
    {
       $("#idPersona").val(idPersona);

       $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
          }
      });
       jQuery.ajax({
          url: "{{('grado')}}",
          method: 'GET',
          success: function(result){  
            var html="";
              $.each(result.data, function(grado, item) {
                    html= html+ "<option data-tokens='"+item.nombre+"'>"+item.nombre+"</option>";
                });
              $("#grado").append(html);
              $('.selectpicker').selectpicker('refresh');
          }});
    }

    
  </script>
@endsection