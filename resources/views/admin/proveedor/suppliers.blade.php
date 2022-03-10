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
            <a href="{{url('proveedor/newsupplier')}}" class="btn btn-primary btn-outline btn-lg active" role="button" aria-pressed="true">Agregar proveedor</a>
                <div class="table-responsive">
                    @if(session()->has('mensaje'))
                        <div class="alert alert-success">
                            <button type="button" class="close" data-dismiss="alert">X</button>
                            {{session()->get('mensaje')}}
                        </div>
                    @endif
                <table class="table table-stripped">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Teléfono</th>
                            <th>Dirección</th>
                            <th>Fecha de creación</th>
                            <th>Fecha de actualización</th>
                            <th>Editar</th>
                            <th>Eliminar</th>
                        </tr>
                    </thead>
                    @foreach($proveedores as $proveedor)
                        <tbody>
                            <tr>
                                <td>{{$proveedor->name}}</td>
                                <td>{{$proveedor->phone}}</td>
                                <td>{{$proveedor->address}}</td>
                                <td>{{$proveedor->created_at}}</td>
                                <td>{{$proveedor->updated_at}}</td>
                                <td><a href="{{url('proveedor/update-supplier', $proveedor->id)}}" class="btn btn-warning"><i class="far fa-edit"></i></td>
                                <td><a href="{{url('proveedor/delete-supplier', $proveedor->id)}}" class="btn btn-danger"><i class="far fa-trash-alt"></i></td>
                            </tr>
                        </tbody>
                    @endforeach
                </table>

                </div>
            </div>
        </div>
    </div>
</body>
</html>