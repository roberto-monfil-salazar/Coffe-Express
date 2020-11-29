<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sistema de Ventas | SI</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('css/font-awesome.css')}}">
    <!-- Theme style -->

    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('css/AdminLTE.min.css')}}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{asset('css/_all-skins.min.css')}}">
    <style>
        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            color: black;
        }
    </style>

</head>



<body class="hold-transition skin-purple sidebar-mini">
    <div class="wrapper">

        <header class="main-header">

            <!-- Logo -->
            <a href="{{url('help')}}" class="logo">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class="logo-mini"><b>SI</b>V</span>
                <!-- logo for regular state and mobile devices -->
                <span class="logo-lg"><b>Sistema de Ventas</b></span>
            </a>



            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Navegación</span>
                </a>
                <!-- Navbar Right Menu -->
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <!-- Messages: style can be found in dropdown.less-->

                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">




                            <ul class="navbar-nav ml-auto">
                                <!-- Authentication Links -->
                                @guest @if (Route::has('register')) @endif @else
                                <li class="nav-item dropdown" style="color: #000; size: 20;">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre style="color: #000;size: 20px;">
                                {{ Auth::user()->name }}
                            </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();" style="color: #000;">
                                    {{ __('Logout') }}
                                </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                                @endguest
                            </ul>


                    </ul>
                    </li>

                    </ul>
                </div>

            </nav>








        </header>
        <!-- Left side column. contains the logo and sidebar -->
        <aside class="main-sidebar">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">
                <!-- Sidebar user panel -->

                <!-- sidebar menu: : style can be found in sidebar.less -->
                <ul class="sidebar-menu">
                    <li class="header"></li>

                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-laptop"></i>
                            <span>Almacén</span>
                            <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="{{url('categorias_pro')}}"><i class="fa fa-circle-o"></i> Categorías</a></li>
                        </ul>
                    </li>

                    <!--
            <li class="treeview">
              <a href="#">
                <i class="fa fa-th"></i>
                <span>Compras</span>
                 <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="compras/ingreso"><i class="fa fa-circle-o"></i> Ingresos</a></li>
                <li><a href="compras/proveedor"><i class="fa fa-circle-o"></i> Proveedores</a></li>
              </ul>
            </li>
-->

                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-shopping-cart"></i>
                            <span>Ventas</span>
                            <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <!--<ul class="treeview-menu">
                 <li><a href="ventas/venta"><i class="fa fa-circle-o"></i> Ventas</a></li>
                <li><a href="ventas/cliente"><i class="fa fa-circle-o"></i> Clientes</a></li>
              </ul> -->
                    </li>

                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-print"></i> <span>Reportes</span>
                            <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="{{url('Datos_usua')}}"><i class="fa fa-circle-o"></i> Usuarios</a></li>
                            <li><a href="{{url('Datos_proveedor')}}"><i class="fa fa-circle-o"></i> Proveedores</a></li>
                            <li><a href="{{url('Productos_adquiridos')}}"><i class="fa fa-circle-o"></i> Productos adquiridos</a></li>
                            <li><a href="{{url('Ventas_realizada')}}"><i class="fa fa-circle-o"></i> Ventas Realizadas</a></li>

                        </ul>
                    </li>


                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-user"></i> <span>Administrador</span>
                            <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="{{url('usuarios')}}"><i class="fa fa-circle-o"></i> Usuarios</a></li>
                            <li><a href="{{url('Telefonos_usuarios')}}"><i class="fa fa-circle-o"></i> Telefonos Usuarios</a></li>
                            <li><a href="{{url('Direcciones_usuarios')}}"><i class="fa fa-circle-o"></i> Direcciones Usuarios</a></li>
                            <li><a href="{{url('proveedores')}}"><i class="fa fa-circle-o"></i> Proveedores</a></li>
                            <li><a href="{{url('Telefonos_proveedores')}}"><i class="fa fa-circle-o"></i> Telefonos Proveedores</a></li>
                            <li><a href="{{url('Productos')}}"><i class="fa fa-circle-o"></i> Productos</a></li>



                            <li><a href="{{url('Direcciones_proveedores')}}"><i class="fa fa-circle-o"></i> Direcciones Proveedores</a></li>





                            <!-- <li><a href=""><i class="fa fa-circle-o"></i> Direccion Usarios</a></li>
                            
                            <li><a href=""><i class="fa fa-circle-o"></i> Telefonos Proveedores</a></li>
                            <li><a href=""><i class="fa fa-circle-o"></i> Direccion Proveedores</a></li>
                            <li><a href=""><i class="fa fa-circle-o"></i> Productos</a></li> -->





                        </ul>
                    </li>

                    <li class="treeview">
                        <a href="{{url('help')}}">
                            <i class="fa fa-info-circle"></i>
                            <span>Ayuda</span>
                            <i class="fa fa-angle"></i>
                        </a>

                    </li>



                    <!--
             <li>
              <a href="#">
                <i class="fa fa-plus-square"></i> <span>Ayuda</span>
                <small class="label pull-right bg-red">PDF</small>
              </a>
            </li>
            <li> 
              <a href="#">
                <i class="fa fa-info-circle"></i> <span>Acerca De...</span>
                <small class="label pull-right bg-yellow">IT</small>
              </a>
            </li> -->

                </ul>
            </section>
            <!-- /.sidebar -->
        </aside>





        <!--Contenido-->
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">

            <!-- Main content -->
            <section class="content">

                <div class="row">
                    <div class="col-md-12">
                        <div class="box">

                            <!--               es para los botones de minimizar y cerrar
                <div class="box-header with-border">
                  <h3 class="box-title">Sistema de Ventas</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div>-->

                            <!-- /.box-header -->
                            <div class="box-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <!--Contenido-->
                                        @yield('contenido')
                                        <!--Fin Contenido-->
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->

    </section>
    <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <!--Fin-Contenido-->
    <footer class="main-footer">
        <div class="pull-right hidden-xs">
            <b>Version</b> 1.0.1
        </div>
        <strong>SISTEMA DE VENTAS © 202O </strong>
    </footer>


    <!-- jQuery 2.1.4 -->
    <script src="{{asset('js/jQuery-2.1.4.min.js')}}"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('js/app.min.js')}}"></script>

</body>

</html>