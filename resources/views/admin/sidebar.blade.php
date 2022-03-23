<!DOCTYPE html>
<html lang="es">
<head>
    <style>
        body{
            font-family: "Comic Sans";
        }
        
.sidebar {
    height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: black;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}
.sidebar a{
    padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidebar a:hover{
    color:chocolate;
}

.sidebar .botoncerrar{
    position: absolute;
    top: 0;
    right: 5px;
    font-size: 36px;
    margin-left: 30px;
}

.botonabrir{
    font-size: 20px;
  background-color: #141414;
  color: white;
  border: none;
}
#main{
    transition: margin-left .5s;
}
@media screen and (max-height: 450px) {
  .sidebar {padding-top: 15px;}
  .sidebar a {font-size: 18px;}
}
    </style>
</head>
<body>
    <div id="s_sidebar" class="sidebar">
        <a href="javascript:void(0)" class="botoncerrar" onclick="closeNav()">&times;</a>
        <a href="/">Inicio</a>
        @if(Auth::user()->rol=='ADMIN')
            <a href="/user">Usuarios</a>
            <a href="/categoria/category">Categorías</a>
            <a href="/proveedor/suppliers">Proveedores</a>
            <a href="/producto/products">Productos</a>
        @endif
    </div>

    <div id="main">
        <button class="botonabrir" onclick="openNav()">&#9776; Ver Menú</button>
    </div>
    <script>
        function openNav() {
            document.getElementById("s_sidebar").style.width = "250px";
            document.getElementById("main").style.marginLeft = "250px";
            }

        function closeNav() {
            document.getElementById("s_sidebar").style.width = "0";
            document.getElementById("main").style.marginLeft= "0";
            }
    </script>
</body>
</html>