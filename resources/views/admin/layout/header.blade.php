<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
              <ul class="nav side-menu"><li><a><i class="fa fa-home"></i> Inicio</a></ul>  
              <h3>General</h3>
                
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-file-o"></i>Pérdida de carnet<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="form.html">Registro</a></li>
                      <li><a href="form_advanced.html">Reporte</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-stethoscope"></i>Descanso médico<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="form.html">Registro</a></li>
                      <li><a href="form_advanced.html">Reporte</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-frown-o"></i>Retiro o disponibilidad<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="form.html">Registro</a></li>
                      <li><a href="form_advanced.html">Reporte</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-edit"></i>Licencias<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="form.html">Registro</a></li>
                      <li><a href="form_advanced.html">Reporte</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-pencil-square"></i>Permisos<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="form.html">Registro</a></li>
                      <li><a href="form_advanced.html">Reporte</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-hand-o-down"></i>Sanciones<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="form.html">Registro</a></li>
                      <li><a href="form_advanced.html">Reporte</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-automobile"></i>Comisiones<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ url('asignarcomision') }}">Registro</a></li>
                      <li><a href="form_advanced.html">Reporte</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-spinner"></i>Movimiento de personal<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="form.html">Incluir</a></li>
                      <li><a href="form_advanced.html">Excluir</a></li>
                      <li><a href="form_advanced.html">Cambio de personal</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-umbrella"></i>Vacaciones<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="form.html">Registro</a></li>
                      <li><a href="form_advanced.html">Reporte</a></li>
                    </ul>
                  </li>
                  
                  <li><a><i class="fa fa-institution"></i>Incorporaciones<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="form.html">Registro</a></li>
                      <li><a href="form_advanced.html">Reporte</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
              <div class="menu_section">
                <h3>REPORTES</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-area-chart"></i> Reportes generales <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ url('personagrado') }}">Grados asignados</a></li>
                      <li><a href="{{ url('personacargo') }}">Cargos asignados</a></li>
                      <li><a href="{{ url('personaunidad') }}">Unidades asignadas</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
              <div class="menu_section">
                <h3>MANTENIMIENT0S</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-child"></i>Personal<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ url('persona') }}">Datos personales PNP</a></li>
                    </ul>
                  </li> 
                  <li><a><i class="fa fa-toggle-down"></i>Cargo<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ url('cargo') }}">Tipos de cargo</a></li>
                    </ul>
                  </li> 
                  <li><a><i class="fa fa-toggle-down"></i>Grado<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ url('grado') }}">Tipos de grado</a></li>
                    </ul>
                  </li> 
                  <li><a><i class="fa fa-toggle-down"></i>Sanciones<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ url('sancion') }}">Tipos de sanciones</a></li>
                    </ul>
                  </li> 
                  <li><a><i class="fa fa-toggle-down"></i>Comisión<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ url('comision') }}">Tipos de comisiones</a></li>
                    </ul>
                  </li> 
                  <li><a><i class="fa fa-toggle-down"></i>Unidad<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ url('unidad') }}">Tipos de unidades</a></li>
                    </ul>
                  </li> 
                  <li><a><i class="fa fa-toggle-down"></i>Licencias<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ url('licencia') }}">Tipos de licencias</a></li>
                    </ul>
                  </li> 
                  <li><a><i class="fa fa-user"></i>Usuarios<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="s.html">Registro</a></li>
                    </ul>
                  </li>                             
                 
                </ul>
              </div>
       

            </div>

            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="images/img.jpg" alt="">{{ auth()->user()->name}}
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;"> Profile</a></li>
                    <li>
                      <a href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a>
                    </li>
                    <li><a href="javascript:;">Help</a></li>
                    <li><a href="/logout"><i class="fa fa-sign-out pull-right"></i>Cerrar sesión</a></li>
                  </ul>
                </li>

                <li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-green">6</span>
                  </a>
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <div class="text-center">
                        <a>
                          <strong>See All Alerts</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->
