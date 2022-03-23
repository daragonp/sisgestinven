<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de gestión de inventarios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        @if(auth()->user())
            <div class="row">
                <div class="col-12">
                    Bienvenido {{auth()->user()->name}}
                    <a href="/">Inicio</a>
                    <a href="user">Usuarios</a>
                    <a href="categoria/category">Categorías</a>
                    <a href="producto/products">Productos</a>          
                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Salir</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </div>
        @else
            <div class="container">
                <a class="" href="{{route('login')}}">Iniciar sesión</a>
            </div>
        @endif
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-4">
                <div class="card" style="width: 18rem;">
                    <center>
                        <i class="fa-solid fa-users fa-5x"></i>
                        <div class="card-body">
                            <h5 class="card-title">Usuarios registrados</h5>
                            <h1>{{$users}}</h1>
                            <a href="/user" class="btn btn-primary">Ver usuarios</a>
                        </div>
                    </center>
                </div>
            </div>
                <div class="col-4">
                    <div class="card" style="width: 18rem;">
                        <center>
                            <i class="fa-solid fa-list fa-5x" style="color:brown"></i>
                                <div class="card-body">
                                    <h5 class="card-title">Categorías creadas</h5>
                                    <h1>{{$categories}}</h1>
                                    <a href="/categoria/category" class="btn btn-primary">Ver Categorías</a>
                                </div>
                        </center>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card" style="width: 18rem;">
                        <center><i class="fa-solid fa-table-cells fa-5x"></i>     
                            <div class="card-body">
                                <h5 class="card-title">Productos en inventario</h5>
                                <h1>{{$products}}</h1>
                                <a href="/producto/products" class="btn btn-primary">Ver productos</a>
                            </div>
                        </center>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card" style="width: 18rem;">
                        <center><i class="fa-solid fa-table-cells fa-5x"></i>     
                            <div class="card-body">
                                <h5 class="card-title">Proveedores</h5>
                                <h1>{{$suppliers}}</h1>
                                <a href="/proveedor/suppliers" class="btn btn-primary">Ver proveedores</a>
                            </div>
                        </center>
                    </div>
                </div>
            
        </div>
    </div>
</body>
<footer>
    <div class="row">
        <div class="col">
            <center>Derechos reservados &copy; <?php echo date('Y') ?></center>
        </div>
    </div>

</footer>
</html>