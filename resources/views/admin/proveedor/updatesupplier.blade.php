<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Gestión de Inventarios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                @include('admin.menu')
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-3">
                @include('admin.sidebar')
            </div>
            <div class="col-9">
                <form action="{{url('proveedor/updatesupplier', $proveedores->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <h1 class="title" align="center">Actualizar proveedor: {{$proveedores->name}}</h1>
                    @if(session()->has('mensaje'))
                        <div class="alert alert-success">
                            <button type="button" class="close" data-dismiss="alert">x</button>
                            {{session()->get('mensaje')}}
                        </div>
                    @endif
                    <div class="input-group mb-3" style="padding: 15px;">
                        <span class="btn btn-outline-secondary" id="inputGroup-sizing-sm" style="color:yellow;">Nombre</span>
                        <input value="{{$proveedores->name}}" type="text" name="name" class="form-control" style="color:red;" required>
                    </div>
                    <div class="input-group mb-3" style="padding: 15px;">
                        <span class="btn btn-outline-secondary" id="inputGroup-sizing-sm" style="color:yellow;">Teléfono</span>
                        <input value="{{$proveedores->phone}}" type="text" name="phone" class="form-control" style="color:red;" required>
                    </div>
                    <div class="input-group mb-3" style="padding: 15px;">
                        <span class="btn btn-outline-secondary" id="inputGroup-sizing-sm" style="color:yellow;">Dirección</span>
                        <input value="{{$proveedores->address}}" type="text" name="address" class="form-control" style="color:red;" required>
                    </div>
                    <div class="input-group mb-3">
                        <input type="submit" value="Actualizar datos" style="color:yellow;" class="btn btn-outline-success ml-auto" style="padding: 15px;">
                    </div>
                </form>
                </div>
        </div>
    </div>
</body>
</html>