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
                <form class="form-inline" action="{{url('categoria/addcategory')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @if(session()->has('mensaje'))
                        <div class="alert alert-success">
                            <button type="button" class="close" data-dismiss="alert">X</button>
                            {{session()->get('mensaje')}}
                        </div>
                    @endif
                    <div class="form-group mb-2">
                        <label for="staticEmail2" class="sr-only">Nombre de la categoría</label>
                        <input type="text" name="category_name" id="staticEmail2" placeholder="Categoría" required>
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