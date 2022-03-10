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
                <form class="form-inline" action="{{url('producto/addproduct')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @if(session()->has('mensaje'))
                        <div class="alert alert-success">
                            <button type="button" class="close" data-dismiss="alert">X</button>
                            {{session()->get('mensaje')}}
                        </div>
                    @endif
                    <div class="input-group mb-3" style="padding: 15px;">
                        <span class="btn btn-outline-success" id="inputGroup-sizing-sm" style="color: greenyellow;">Nombre</span>
                        <input type="text" name="name" class="form-control" placeholder="Nombre del producto" required>
                    </div>
                    <div class="input-group mb-3" style="padding: 15px;">
                        <span class="btn btn-outline-success" id="inputGroup-sizing-sm" style="color: greenyellow;">Cantidad</span>
                        <input type="number" name="qty" class="form-control" placeholder="Cantidad" required>
                    </div>
                    <div class="input-group mb-3" style="padding: 15px;">
                        <span class="btn btn-outline-success" id="inputGroup-sizing-sm" style="color: greenyellow;">Precio del proveedor</span>
                        <input type="number" name="buyingprice" class="form-control" placeholder="Precio unitario del proveedor" required>
                    </div>
                    <div class="input-group mb-3" style="padding: 15px;">
                        <span class="btn btn-outline-success" id="inputGroup-sizing-sm" style="color: greenyellow;">Precio de venta</span>
                        <input type="number" name="sellingprice" class="form-control" placeholder="Precio de venta al público" required>
                    </div>
                    <div class="input-group mb-3" style="padding: 15px;">
                        <span class="btn btn-outline-success" id="inputGroup-sizing-sm" style="color: greenyellow;">Fecha de vencimiento</span>
                        <input type="date" name="expiration" class="form-control" placeholder="Fecha de vencimiento" required>
                    </div>
                    <div class="input-group mb-3" style="padding: 15px;">
                        <span class="btn btn-outline-success" id="inputGroup-sizing-sm" style="color: greenyellow;">Seleccionar categoría</span>
                        <select name="category">
                            @foreach($categories as $category)                        
                                <option value="{{$category->id}}">{{$category->name}}</option>
                                <!-- <input type="hidden" value="{{$category->id}}" name="{{$category->id}}" class="form-control" required> -->
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
                        <input type="file" name="image" class="form-control" required>
                    </div>
        
                    <div>
                        <input type="submit" class="btn btn-primary mb-2"/>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>