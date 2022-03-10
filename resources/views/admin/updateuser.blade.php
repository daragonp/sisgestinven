            <form action="{{url('actualizarusuario', $usuario->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                <h1 class="title" align="center">Actualizar usuario</h1>
                @if(session()->has('mensaje'))
                    <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert">x</button>
                        {{session()->get('mensaje')}}
                    </div>
                @endif
                <div class="input-group mb-3" style="padding: 15px;">
                    <span class="btn btn-outline-secondary" id="inputGroup-sizing-sm" style="color:yellow;">Nombre completo</span>
                    <input value="{{$usuario->name}}" type="text" name="name" class="form-control" style="color:red;" required>
                </div>
                <div class="input-group mb-3" style="padding: 15px;">
                    <span class="btn btn-outline-secondary" id="inputGroup-sizing-sm" style="color:yellow;">Email</span>
                    <input value="{{$usuario->email}}" type="text" name="email" class="form-control" style="color:red;" required>
                </div>
                <div class="input-group mb-3">
                    <input type="submit" value="Actualizar datos" style="color:yellow;" class="btn btn-outline-success ml-auto" style="padding: 15px;">
                </div>
            </form>