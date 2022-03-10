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
                <form action="{{url('producto/updateproduct', $producto->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <h1 class="title" align="center">Actualizar producto: {{$producto->name}}</h1>
                    @if(session()->has('mensaje'))
                        <div class="alert alert-success">
                            <button type="button" class="close" data-dismiss="alert">x</button>
                            {{session()->get('mensaje')}}
                        </div>
                    @endif
                    <div class="input-group mb-3" style="padding: 15px;">
                        <span class="btn btn-outline-secondary" id="inputGroup-sizing-sm" style="color:yellow;">Nombre</span>
                        <input value="{{$producto->name}}" type="text" name="name" class="form-control" style="color:red;" required>
                    </div>
                    <div class="input-group mb-3" style="padding: 15px;">
                        <span class="btn btn-outline-secondary" id="inputGroup-sizing-sm" style="color:yellow;">Cantidad</span>
                        <input value="{{$producto->qty}}" type="number" name="qty" class="form-control" style="color:red;" required>
                    </div>
                    <div class="input-group mb-3" style="padding: 15px;">
                        <span class="btn btn-outline-secondary" id="inputGroup-sizing-sm" style="color:yellow;">Precio de compra</span>
                        <input value="{{$producto->buyingprice}}" type="number" name="buyingprice" class="form-control" style="color:red;" required>
                    </div>
                    <div class="input-group mb-3" style="padding: 15px;">
                        <span class="btn btn-outline-secondary" id="inputGroup-sizing-sm" style="color:yellow;">Precio de venta</span>
                        <input value="{{$producto->sellingprice}}" type="number" name="sellingprice" class="form-control" style="color:red;" required>
                    </div>
                    <div class="input-group mb-3" style="padding: 15px;">
                        <span class="btn btn-outline-secondary" id="inputGroup-sizing-sm" style="color:yellow;">Fecha de vencimiento</span>
                        <input value="{{$producto->expiration}}" type="date" name="expiration" class="form-control" style="color:red;" required>
                    </div>
                    <div class="input-group mb-3" style="padding: 15px;">
                        <span class="btn btn-outline-success" id="inputGroup-sizing-sm" style="color: greenyellow;">Seleccionar categoría</span>
                        <select name="category">
                            @foreach($categories as $category)                        
                                <option value="{{$category->id}}"@if(old($producto->id) === $category->id) 'selected' @endif>{{$category->name}}</option>
                            @endforeach                            
                        </select>
                    </div>
                    <div class="input-group mb-3" style="padding: 15px;">
                        <span class="btn btn-outline-success" id="inputGroup-sizing-sm" style="color: greenyellow;">Seleccionar proveedor</span>
                        <select name="supplier">
                            @foreach($suppliers as $supplier)                        
                                <option value="{{$supplier->id}}">{{$supplier->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="input-group mb-3" style="padding: 15px;">
                        <span class="btn btn-outline-success" id="inputGroup-sizing-sm" style="color: greenyellow;">Imagen</span>
                        <input type="file" name="image" class="form-control">
                    </div>
                    <img src="/storage/images/{{$producto->image}}" alt="" width="100px;">                 
                    <div class="input-group mb-3">
                        <input type="submit" value="Actualizar datos" style="color:yellow;" class="btn btn-outline-success ml-auto" style="padding: 15px;">
                    </div>
                </form>
                </div>
        </div>
    </div>
</body>
</html>