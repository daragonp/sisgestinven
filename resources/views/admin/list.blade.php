<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador</title>
    @include('admin.head')
</head>
<body>
        @include('admin.menu')

<div class="container-scroller">
    <div class="container-fluid page-body-wrapper">

    @include('admin.sidebar')
    <div class="main-panel">
          <div class="content-wrapper">
            <div class="row">
                
              
          </div>
        </div>
    </div>
    @include('admin.script')
    </div>
</div>
</body>
<footer>
    @include('admin.footer')
</footer>
</html>