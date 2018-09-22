@extends('layout.master')

@section('content')
  <!-- page content --> 
<div class="right_col" role="main"> 
          <div class="">
            <div class="row">
              <div class="col-md-12">
                <div class="x_panel" style="background:#F7F7F7;">
                  <CENTER><small><MARQUEE> BIENVENIDO A CYBER MANAGEMENT </MARQUEE> </small></CENTER>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <CENTER><h2>VII MACRO REGIÓN CUSCO - APURÍMAC </h2></CENTER>
                  <CENTER><h2>SISTEMA DE ADMINISTRACIÓN DE PERSONAL "CYBER MANAGEMENT" </h2></CENTER>   
                </div>
              </div>
            </div>
        @if(auth()->check())
       
          <div class="row top_tiles">
            @if(auth()->user()->hasRoles(['admin','carnet']))
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats" style="background:#229954; box-shadow:6px 6px 0px #CCD1D1">
                <a href="{{('/moduloperdidacarnet')}}">  
                    <div class="icon"><i class="fa fa-credit-card"></i></div>
                    <div class="count">1</div>
                    <h3>Pérdida de carnet</h3>
                    <p>Ingresar</p>
                    </div>
                </a>
              </div>
              @endif
              @if(auth()->user()->hasRoles(['admin']))
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats" style="background:#3498DB;  box-shadow:6px 6px 0px #CCD1D1">
                <a href="{{('/modulodescansomedico')}}"> 
                    <div class="icon"><i class="fa fa-medkit"></i></div>
                    <div class="count">2</div>
                        <h3> Descanso médico</h3>
                        <p> Ingresar</p>
                    </div>
                </a>
              </div>            
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats" style="background:#F1C40F;  box-shadow:6px 6px 0px #CCD1D1">
                <a href="{{('/modulocambiosituacion')}}"> 
                    <div class="icon"><i class="fa fa-comments-o"></i></div>
                    <div class="count">3</div>
                    <h3>Cambio de situación</h3>
                    <p>Ingresar</p>
                    </div>
                  </a>
              </div>          
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats" style="background:#F5B041;  box-shadow:6px 6px 0px #CCD1D1">
                <a href="{{('/modulolicencia')}}"> 
                    <div class="icon"><i class="fa fa-pencil"></i></div>
                    <div class="count">4</div>
                    <h3>Licencias</h3>
                    <p>Ingresar</p>
                    </div>
                  </a>
              </div>            
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats" style="background:#28B463;  box-shadow:6px 6px 0px #CCD1D1">
                <a href="{{('/administracion')}}"> 
                    <div class="icon"><i class="fa fa-car"></i></div>
                    <div class="count">5</div>
                    <h3>Base de datos</h3>
                    <p>Ingresar</p>
                    </div>
                  </a>
              </div>            
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats" style="background:#5DADE2;  box-shadow:6px 6px 0px #CCD1D1">
                <a href="{{('/modulosancion')}}"> 
                    <div class="icon"><i class="fa fa-hand-o-down"></i></div>
                    <div class="count">6</div>
                    <h3>Sanciones</h3>
                    <p>Ingresar</p>
                    </div>
                </a>
              </div>
              @endif
              @if(auth()->user()->hasRoles(['admin','com']))
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats" style="background:#F4D03F;  box-shadow:6px 6px 0px #CCD1D1">
                <a href="{{('/modulocontrolpersonal')}}">
                <!--<a href="{{('/administracion')}}">--> 
                    <div class="icon"><i class="fa fa-pencil-square"></i></div>
                    <div class="count">7</div>
                    <h3>Control de personal</h3>
                    <p>Ingresar</p>
                    </div>
                  </a>
              </div>
              @endif
              @if(auth()->user()->hasRoles(['admin']))
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats" style="background:#EB984E;  box-shadow:6px 6px 0px #CCD1D1">
                <a href="{{('/modulomovimientopersonal')}}"> 
                    <div class="icon"><i class="fa fa-spinner"></i></div>
                    <div class="count">8</div>
                    <h3> Mov. Personal</h3>
                    <p>Ingresar</p>
                    </div>
                </a>
              </div>
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats" style="background:#17A589;  box-shadow:6px 6px 0px #CCD1D1">
                <a href="{{('/modulovacaciones')}}"> 
                    <div class="icon"><i class="fa fa-umbrella"></i></div>
                    <div class="count">9</div>
                    <h3>Vacaciones y Permisos</h3>
                    <p>Ingresar</p>
                    </div>
                  </a>
              </div>            
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats" style="background:#2874A6;  box-shadow:6px 6px 0px #CCD1D1">
                <a href="{{('/administracion')}}"> 
                
                    <div class="icon"><i class="fa fa-institution"></i></div>
                    <div class="count">10</div>
                    <h3>Incorporaciones</h3>
                    <p>Ingresar</p>
                    </div>
                  </a>
              </div>            
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats" style="background:#B7950B;  box-shadow:6px 6px 0px #CCD1D1">
                <a href="{{('/administracion')}}"> 
                    <div class="icon"><i class="fa fa-file-pdf-o"></i></div>
                    <div class="count">11</div>
                      <h3>Reportes</h3>
                      <p>Ingresar</p>
                    </div>
                </a>
              </div>
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats" style="background:#E67E22;  box-shadow:6px 6px 0px #CCD1D1">
                  <a href="{{('/modulomantenimientoyusuarios')}}"> 
                    <div class="icon"><i class="fa fa-user"></i></div>
                    <div class="count">12</div>
                    <h3>Mant. y Usuarios</h3>
                    <p>Ingresar</p>
                  </div>
                  </a>
              </div>
              @endif
            </div>
          </div>
        </div>
        @endif  
        <!-- /page content -->
        @endsection
@section('script')
  <script>
          
  </script>
@endsection