<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>CRUD APP</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css"
          integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        html, body {
            max-width: 100%;
            overflow-x: hidden;
        }

        form {
            padding: 0;
            margin: 0;
        }

        .footer {
            position: absolute;
            bottom: 0;
            width: 100%;
            height: 45px;
        }

        body {
            background-color: #e3f2fd;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-dark bg-primary">
    <a href="{{route('home')}}" style="color: white; margin-left: 100px; font-size: 20px"><b>CRUD APP</b></a>
    <div class="form-inline">
        <label style="color: white; margin-right: 70px;">Made In: Laravel</label>
    </div>
</nav>
<div class="container-solid">
    <div class="row">
        @yield('content')
    </div>
</div>

<br>
<br>
<br>
<br>
<br>
<div class="navbar navbar-dark bg-primary footer">
    <h5 style="color: white; margin-left: 100px; ">ING SISTEMAS VII</h5>
    <div class="form-inline">
        <label style="color: white; margin-right: 70px;">Dev By: Julio Sarmiento, Royman Rojas, William Ortiz</label>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

@if(\Illuminate\Support\Facades\Session::has('success'))
    <script>
        swal("Proceso Completado", "{{\Illuminate\Support\Facades\Session::get('success')}}", "success");
    </script>
    <?php
    \Illuminate\Support\Facades\Session::remove('success');
    ?>
@endif

@if(\Illuminate\Support\Facades\Session::has('error'))
    <script>
        swal("Error", "{{\Illuminate\Support\Facades\Session::get('error')}}", "error");
    </script>
    <?php
    \Illuminate\Support\Facades\Session::remove('error');
    ?>
@endif
</body>
</html>
