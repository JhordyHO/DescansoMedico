<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>SysMarket</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <!--    select-->
    <link rel="stylesheet" href="{{asset('css/bootstrap-select.min.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('css/font-awesome.css')}}">

    <link rel="shortcut icon" href="{{asset('img/favicon.ico')}}">
    <link rel="stylesheet" href="{{asset('css/vendor.css')}}">
    <link rel="stylesheet" href="{{asset('css/jvectormap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/datatables.min.css')}}">

    <link rel="stylesheet" href="{{asset('css/dashcore.css')}}">
</head>
<body>
<header class="main-header">
    <nav class="navbar navbar-expand-md bg-3">
        <div class="navbar-logo p-3 py-md-0">
            <a class="navbar-brand" href="#">
                <img src="{{asset('img/logo-light.png')}}" alt="" class="logo">
            </a>
            <button type="button" class="navbar-toggler">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="navbar-options px-3 px-md-4">
            <form class="form search-form mr-auto" action="#" method="GET" id="header-search">
                <div class="form-group mb-0 d-flex position-relative">
                    <input type="text" class="form-control pl-5" placeholder="Buscar Por ...." name="searchText">
                    <button type="submit" class="btn btn-link pl-0 pt-2"><i class="pe pe-7s-search pe-2x"></i></button>
                </div>
            </form>

            <ul class="nav">
                <li style="display: none" class="nav-item tasks dropdown" data-rel="tasks">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                        <i class="pe pe-7s-menu"></i> <span class="badge badge-pill badge-info">6</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <div class="dropdown-heading d-flex align-items-center justify-content-between">
                            <h6 class="m-0 text-uppercase bold">Tasks</h6>
                            <small class="text-muted"><span class="bold number">6</span> pending</small>
                        </div>
                        <div class="dropdown-body list list-group list-group-flush load-content">
                            <div class="loader-container">
                                <div class="loader-8">Loading...</div>
                            </div>
                        </div>
                        <div class="dropdown-footer text-center">
                            <a href="#" title=""><i class="fas fa-ellipsis-h"></i></a>
                        </div>
                    </div>
                </li>
                <li style="display: none" class="nav-item notifications dropdown" data-rel="notifications">
                    <a href="#" class="nav-link dropdown-toggle pl-4" data-toggle="dropdown">
                        <i class="pe pe-7s-bell"></i> <span class="badge badge-pill badge-info">11</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <div class="dropdown-heading d-flex align-items-center justify-content-between">
                            <h6 class="m-0 text-uppercase bold">Notifications</h6>
                            <small class="text-muted"><span class="bold number">7</span> new</small>
                        </div>
                        <div class="list list-unstyled list-hover list-bordered dropdown-body load-content">
                            <div class="loader-container">
                                <div class="loader-8">Loading...</div>
                            </div>
                        </div>
                        <div class="dropdown-footer text-center">
                            <a href="#" title=""><i class="fas fa-ellipsis-h"></i></a>
                        </div>
                    </div>
                </li>
                <li style="display: none" class="nav-item messages dropdown" data-rel="messages">
                    <a href="#" class="nav-link dropdown-toggle pl-4" data-toggle="dropdown">
                        <i class="pe pe-7s-mail"></i> <span class="badge badge-pill badge-info">9</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <div class="dropdown-heading d-flex align-items-center justify-content-between">
                            <h6 class="m-0 text-uppercase bold">Messages</h6>
                            <small class="text-muted"><span class="bold number">9</span> unread</small>
                        </div>
                        <div class="list list-hover dropdown-body load-content">
                            <div class="loader-container">
                                <div class="loader-8">Loading...</div>
                            </div>
                        </div>
                        <div class="dropdown-footer text-center">
                            <a href="#" title=""><i class="fas fa-ellipsis-h"></i></a>
                        </div>
                    </div>
                </li>

                <li class="nav-item account dropdown">
                    <a href="#" class="nav-link dropdown-toggle pl-4" data-toggle="dropdown">
                        <img src="https://picsum.photos/300/300/?random&gravity=east"
                             class="avatar user-avatar rounded-circle" alt="...">
                        <i class="fas fa-angle-down"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right col-md-1">
                        <div class="dropdown-heading rounded-top bg-3 arrow top color-1">
                            <div class="content py-1">
                                <div class="media align-items-center">
                                    <img src="https://picsum.photos/300/300/?random&gravity=east"
                                         class="user-avatar shadow mr-2 rounded-circle" alt="" width="65">
                                    <div class="media-body">
                                        <span class="bold color-1 user-name text-overflow text-capitalize">{{ Auth::user()->name }} </span>
                                        <p class="small user-info text-overflow capitalize-first mb-0 op-5">{{ Auth::user()->email }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <ul class="dropdown-body list list-group list-group-flush">
                            <li class="list-group-item list-group-item-action">
                                <a href="{{(url('seguridad/usuario/'.auth()->user()->id.'/edit'))}}"><i class="mr-3 fas fa-user"></i>Perfil</a>
                            </li>
                            <li class="list-group-item list-group-item-action">
                                <a href="{{(url('seguridad/usuario/'.auth()->user()->id.'/edit'))}}"><i class="mr-3 fas fa-cogs"></i>Configuración</a>
                            </li>
                            <li class="list-group-item list-group-item-action">
                                <a href="https://wa.me/51931846696"><i class="mr-3 fas fa-life-ring"></i>Ayuda</a>
                            </li>
                        </ul>
                        <div class="dropdown-footer bg-1 d-flex justify-content-between align-items-center">
                            <a href="javascript:void(0)"  class="btn btn-rounded btn-3" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                <i class="mr-3 fas fa-sign-out-alt"></i>Salir
                            </a>
                            <a href="javascript:void(0)" class="text-danger" onclick="event.preventDefault();
                                                     document.getElementById('block_user').submit();">
                                <i class="mr-3 fas fa-lock"></i>
                            </a>
                        </div>
                    </div>
                </li>
                @role('admin')
                <li class="aside-toggler" data-behavior="absolute">
                    <a href="#"><i class="pe pe-7s-keypad"></i></a>
                </li>
                @endrole
            </ul>
        </div>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
        </form>
    </nav>
</header>
<div class="main-body">
    <nav class="side-nav side-nav overlay gradient gradient-53 alpha-9 image-background cover center-bottom" style="background-image:url(https://picsum.photos/350/200/?random&amp;gravity=west)" >
        <div class="side-wrapper content">
            <div class="nav-wrapper">
                <ul class="nav flex-column">
                    <!-- USER INFO-->
                    <li class="nav-item user-sidebar nav-dropdown">
                        <a href="javascript:void(0)" class="nav-link">
                            <div class="media align-items-center justify-content-center">
                                <div class="position-relative">
                                    <img src="https://picsum.photos/300/300/?random&gravity=east"
                                         class="user-avatar rounded-circle mr-2" alt="" width="200" height="50">
                                    <span class="status status-right online"></span>
                                </div>
                                <div class="media-body title">
                                    <span class="media-heading bold user-name text-truncate text-capitalize">{{ Auth::user()->name }}</span>
                                    <div class="small user-info text-truncate capitalize-first text-muted">
                                        {{ Auth::user()->email }}
                                    </div>
                                </div>
                            </div>
                        </a>
                        <div class="nav-dropdown-items">
                            <div style="display: none" class="stat"><p class="small task d-flex justify-content-between mb-1">
                                    <span class="text-muted">Espacio Utilizado este mes</span>
                                    <span class="bold percent text-danger">94%</span></p>
                                <div class="progress progress-xs mb-4">
                                    <div class="progress-bar bg-danger" style="width: 94%;"></div>
                                </div>
                            </div>
                            <nav class="nav justify-content-between">
                                <a style="display: none" href="javascript:void(0)" class="nav-link py-3">
                                    <i class="mr-1 fas fa-inbox">

                                    </i>
                                    <span class="small">Stock</span>
                                    <small class="badge badge-primary">7</small>
                                </a>
                                <a href="javascript:void(0)" class="nav-link py-3" onclick="event.preventDefault();
                                                     document.getElementById('block_user').submit();">
                                    <i class="mr-1 fas fa-lock"></i>
                                    <span class="small">Bloquear</span>
                                </a>
                                <form id="block_user" action="{{ route('login.block') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                                <a href="javascript:void(0)" class="nav-link py-3" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    <i class="mr-1 fas fa-sign-out-alt"></i>
                                    <span class="small">Salir</span>
                                </a>
                            </nav>
                        </div>
                    </li>
                    <!-- MAIN MENU -->
                    <li class="nav-header pt-4"><span>Main</span></li>
                    <li class="nav-item">
                        <a href="/home" class="nav-link"><i class="icon pe pe-7s-display1"></i>
                            <span class="title">Dashboard</span>
                        </a>
                    </li>

                    <li class="nav-header"><span class="title">Apps</span></li>

                    <li class="nav-item nav-dropdown">
                        <a href="javascript:void(0)" class="nav-link">
                            <i class="icon pe pe-7s-note2"></i>
                            <span class="title">Almacén</span>
                        </a>
                        <ul class="nav-dropdown-items">
                            <li><a href="{{url('almacen/articulo')}}" class="nav-link">
                                    <b class="icon extra-bold">P</b>
                                    <span class="title">Producto</span></a>
                            </li>
                            <li><a href="{{url('almacen/categoria')}}" class="nav-link">
                                    <b class="icon extra-bold">C</b>
                                    <span class="title">Categorías</span></a>
                            </li>
                            <li><a href="{{url('kardex/index')}}" class="nav-link">
                                    <b class="icon extra-bold">K</b>
                                    <span class="title">Kardex</span></a>
                            </li>


                        </ul>
                    </li>

                    <li class="nav-item nav-dropdown">
                        <a href="javascript:void(0)" class="nav-link">
                            <i class="icon pe pe-7s-shopbag"></i>
                            <span class="title">Compras</span>
                        </a>
                        <ul class="nav-dropdown-items">
                            <li><a href="{{url('compras/ingreso')}}" class="nav-link">
                                    <b class="icon extra-bold">I</b>
                                    <span class="title">Ingresos</span></a>
                            </li>
                            <li><a href="{{url('compras/proveedor')}}" class="nav-link">
                                    <b class="icon extra-bold">P</b>
                                    <span class="title">Proveedores</span></a>
                            </li>

                        </ul>
                    </li>

                    <li class="nav-item nav-dropdown">
                        <a href="javascript:void(0)" class="nav-link">
                            <i class="icon pe pe-7s-cart"></i>
                            <span class="title">Ventas</span>
                        </a>
                        <ul class="nav-dropdown-items">
                            <li><a href="{{url('ventas/venta')}}" class="nav-link">
                                    <b class="icon extra-bold">V</b>
                                    <span class="title">Ventas</span></a>
                            </li>
                            <li><a href="{{url('ventas/cliente')}}" class="nav-link">
                                    <b class="icon extra-bold">C</b>
                                    <span class="title">Clientes</span></a>
                            </li>

                        </ul>
                    </li>
                    @role('admin')
                    <li class="nav-item nav-dropdown">
                        <a href="javascript:void(0)" class="nav-link">
                            <i class="icon pe pe-7s-id"></i>
                            <span class="title">Acceso</span>
                        </a>
                        <ul class="nav-dropdown-items">
                            <li><a href="{{url('seguridad/usuario')}}" class="nav-link">
                                    <b class="icon extra-bold">U</b>
                                    <span class="title">Usuarios</span></a>
                            </li>
                        </ul>

                    </li>
                    <li class="nav-item nav-dropdown">
                        <a href="javascript:void(0)" class="nav-link">
                            <i class="icon pe pe-7s-file"></i>
                            <span class="title">Facturación</span>
                        </a>
                        <ul class="nav-dropdown-items">
                            <li><a href="{{url('factura-electronica')}}" class="nav-link">
                                    <b class="icon extra-bold">E</b>
                                    <span class="title">Enviados</span></a>
                            </li>
                        </ul>

                    </li>
                    @endrole
                    <li class="nav-header pt-4"><span></span></li>
                    <li class="nav-item">
                        <a href="{{url('ventas/cliente')}}" class="nav-link"><i class="icon pe pe-7s-users"></i>
                            <span class="title">Clientes</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{url('compras/proveedor')}}" class="nav-link"><i class="icon pe pe-7s-box2"></i>
                            <span class="title">Proveedores</span>
                        </a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
    <main class="overflow-hidden bg-6">
      @yield('contenido')
        <div style="min-height: 300px;">

        </div>
    </main>
    <!-- Menu Resumen -->
    <aside class="quick-view">
        <div class="side-wrapper">
            <nav class="nav nav-tabs nav-fill tabs-clean slide">
                <a class="nav-item nav-link active" data-toggle="tab" href="#aside-profile">
                    <i class="far fa-id-card icon"></i>
                </a>
                <a style="display: none" class="nav-item nav-link" data-toggle="tab" href="#aside-todo" data-rel="todos">
                    <i class="fas fa-list-ul icon"></i>
                </a>
                <a style="display: none" class="nav-item nav-link" data-toggle="tab" href="#aside-users" data-rel="users">
                    <i class="fas fa-users icon"></i>
                </a>
                <a class="nav-item nav-link" data-toggle="tab" href="#aside-settings">
                    <i class="fas fa-cog icon"></i>
                </a>
            </nav>
            @role('admin')
            <div class="tab-content">
                <div class="tab-pane active" id="aside-profile">
                    <ul class="list-unstyled d-flex justify-content-between text-left pt-3">
                        <li><p class="mb-0 small text-uppercase color-2">Ventas de Hoy</p><h4>{{today_sales()}}</h4></li>
                        <li><p class="mb-0 small text-uppercase color-2">Venta de Este Mes</p><h4>{{m_sales()}}</h4></li>
                        <li><p class="mb-0 small text-uppercase color-2">Clientes</p><h4>{{customers()}}</h4></li>
                    </ul>
                    <hr class="my-3">
                    <p class="regular text-uppercase">Acceso rapido</p>
                    <div class="row gap-y">
                        <div class="col-6">
                            <a class="btn btn-5 d-flex flex-column align-items-center py-4" href="{{url('/ventas/venta/create')}}">
                                <i class="w-50">
                                    <img src="{{asset('img/svg/shopping-cart.svg')}}" class="img-responsive" alt="">
                                </i>
                                <p class="mb-0">Nueva Venta</p>
                            </a>
                        </div>
                        <div class="col-6">
                            <a class="btn btn-4 d-flex flex-column align-items-center py-4" href="{{url('/almacen/articulo#new_producto')}}">
                                <i class="w-50"><img src="{{asset('img/svg/pallet.svg')}}" class="img-responsive"
                                                     alt=""></i>
                                <p class="mb-0">Nuevo Producto</p>
                            </a>
                        </div>
                        <div class="col-6">
                            <a class="btn btn-3 d-flex flex-column align-items-center py-4" href="{{url('compras/ingreso/create')}}">
                                <i class="w-50"><img src="{{asset('img/svg/delivery-truck.svg')}}" class="img-responsive"
                                                     alt=""></i>
                                <p class="mb-0"> Nueva Compra</p>
                            </a>
                        </div>
                        <div class="col-6">
                            <a class="btn btn-danger d-flex flex-column align-items-center py-4" href="{{url('factura-electronica')}}">
                                <i class="w-50"><img src="{{asset('img/receipt.png')}}" class="img-responsive" alt=""></i>
                                <p class="mb-0">Factura electrónica</p>
                            </a>
                        </div>
                    </div>
                    <hr class="my-3">
                    <p style="display: none" class="regular text-uppercase">Quick overview</p>
                    <ul style="display: none" class="list-unstyled">
                        <li class="stat"><p class="small d-flex justify-content-between mb-1"><span class="text-muted">Profile almost complete</span>
                                <span class="bold text-success">75%</span></p>
                            <div class="progress progress-xs mb-4">
                                <div class="progress-bar bg-success" style="width: 75%;"></div>
                            </div>
                        </li>
                        <li><p class="small d-flex justify-content-between mb-1"><span
                                        class="text-muted">Tasks done</span> <span class="bold text-info">50%</span></p>
                            <div class="progress progress-xs mb-4">
                                <div class="progress-bar bg-info" style="width: 50%;"></div>
                            </div>
                        </li>
                        <li><p class="small d-flex justify-content-between mb-1"><span class="text-muted">You're running out of space</span>
                                <span class="bold text-danger">94%</span></p>
                            <div class="progress progress-xs mb-4">
                                <div class="progress-bar bg-danger" style="width: 94%;"></div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="tab-pane" id="aside-todo">
                    <ul class="list-group list-group-flush load-content aside--todo-list">
                        <li class="loader-container">
                            <div class="loader-8">Loading...</div>
                        </li>
                    </ul>
                </div>
                <div class="tab-pane" id="aside-users">
                    <form class="form">
                        <div class="input-group clean-group mb-3"><input type="text" class="form-control"
                                                                         placeholder="Search user ..." name="q">
                            <div class="input-group-append">
                                <button class="btn btn-1" type="button"><i class="fas fa-search"></i></button>
                            </div>
                        </div>
                    </form>
                    <div class="list-group list-group-flush load-content aside--users-list">
                        <div class="loader-container">
                            <div class="loader-8">Loading...</div>
                        </div>
                    </div>
                </div>
                <!-- Config Tab Panel -->
                <div class="tab-pane" id="aside-settings">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item px-0"><h4 class="small bold mb-4">Facturacion configuracion</h4>
                            <div class="mb-3 d-flex justify-content-between align-items-center">
                                <div class="mr-3"><p class="regular mb-0 color-5">Envio automatico Sunat</p>
                                    <p class="color-2 mb-0 small">Enviar la facturacion a la "Sunat despues de realizar la venta automaticamente"</p>
                                </div>
                                <div class="form-group mb-0">
                                    <input class="tgl tgl-light" id="tgl-2" type="checkbox" disabled>
                                    <label class="tgl-btn tgl-btn-4" for="tgl-2"></label>
                                </div>
                            </div>
                            <div class="mb-3 d-flex justify-content-between align-items-center">
                                <div class="mr-3"><p class="regular mb-0 color-5">Envio Programado</p>
                                    <p class="color-2 mb-0 small">Enviar la facturacion a la "Sunat despues de realizar multiples ventas"</p>
                                </div>
                                <div class="form-group mb-0">
                                    <input class="tgl tgl-light" id="tgl-3" type="checkbox" disabled>
                                    <label class="tgl-btn tgl-btn-4" for="tgl-3"></label>
                                </div>
                            </div>
                            <div class="mb-3 d-flex justify-content-between align-items-center">
                                <div class="mr-3"><p class="regular mb-0 color-5">Envio Manual</p>
                                    <p class="color-2 mb-0 small">Se firmaran los documentos para el posterior envio a la sunat. "<a href="/factura-electronica"> ver facturas </a> </p>
                                </div>
                                <div class="form-group mb-0">
                                    <input class="tgl tgl-light" id="tgl-4" type="checkbox" checked="checked" disabled>
                                    <label class="tgl-btn tgl-btn-4" for="tgl-4"></label>
                                </div>
                            </div>


                        </li>
                        <li class="list-group-item px-0"><h4 class="small bold mb-4">Personalizar</h4>
                            <p class="color-2 mb-0 small">- Subir certificado (.pem) de la empresa."</p>
                            <p class="color-2 mb-0 small">- Subir Logo para los comprovantes de pago"</p>
                            <p class="color-2 mb-0 small">- Email para enviar los comprovantes de pago a los clientes , etc"</p>
                            <div class="mb-3 d-flex justify-content-between align-items-center">
                                <p class="regular mb-0 color-5 mr-3">configurar :</p>
                                <div class="form-group mb-0">
                                    <input class="tgl tgl-light" id="tgl-6" type="checkbox" checked="checked" disabled>
                                    <label class="tgl-btn tgl-btn-4" for="tgl-6"></label>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            @endrole
        </div>
    </aside>

</div>

<footer class="main-footer">
    <div class="container-fluid d-flex justify-content-between small"><span>&copy; 2018. <a href="/">SysMarket</a> by <a
                    href="https://wa.me/51931846696">codsit.com</a></span> <span class="color-2">v1.0</span>
    </div>
</footer>

<!-- jQuery 2.1.4 -->


<script src="{{asset('js/lib.min.js')}}"></script>
<script src="{{asset('js/dashcore.min.js')}}"></script>
<script src="{{asset('js/dashboard.min.js')}}"></script>

<script src="{{asset('js/jQuery-2.1.4.min.js')}}"></script>


<script src="{{asset('js/datatables.min.js')}}"></script>
<script src="{{asset('js/toast.js')}}"></script>
<script type="application/javascript">
    var configDT ={
            "language": {
                "sProcessing": "Procesando...",
                "sLengthMenu": "Mostrar _MENU_ registros",
                "sZeroRecords": "No se encontraron resultados",
                "sEmptyTable": "Ningún dato disponible en esta tabla",
                "sInfo": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                "sInfoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
                "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
                "sInfoPostFix": "",
                "sSearch": "Buscar:",
                "sUrl": "",
                "sInfoThousands": ",",
                "sLoadingRecords": "Cargando...",
                "oPaginate": {
                    "sFirst": "Primero",
                    "sLast": "Último",
                    "sNext": "<i class=\"fas fa-angle-right\"></i>",
                    "sPrevious": "<i class=\"fas fa-angle-left\"></i>"
                },
                "oAria": {
                    "sSortAscending": ": Activar para ordenar la columna de manera ascendente",
                    "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                }
            },
            "order": [[ 0, 'desc' ]],
        };
    var table;
    $(document).ready( function () {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        table = $('.dt').DataTable(configDT);
    } );
</script>
@stack('scripts')

</body>
</html>
