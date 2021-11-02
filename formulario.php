<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
        <div class="container">

            <div class="row">
                <div class="col-xl-3"></div>
                <div class="col-xl-6" id="formulario">
                    <h1>Crear Nuevo Usuario</h1>
                    <label for="" class="form-label">Nombre:</label>
                    <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Ingresa tu nombre" Required>
                    <label for="" class="form-label">Apellidos:</label>
                    <input type="text" class="form-control" name="apellidos" id="apellidos" aria-describedby="helpId" placeholder="Ingresa tus apellidos" Required>
                    <label for="" class="form-label">Username:</label>
                    <input type="text" class="form-control" name="username" id="username" aria-describedby="helpId" placeholder="Ingresa tu nombre de usuario" Required>
                    <label for="" class="form-label">Contraseña:</label>
                    <input type="password" class="form-control" name="password" id="password" aria-describedby="helpId" placeholder="Ingresa tu contraseña" Required>
<!--
                    <label for="" class="form-label">Confirma contraseña:</label>
                    <input type="password" class="form-control" name="password-verif" id="password2" aria-describedby="helpId" placeholder="Ingresa nuevamente tu contraseña" Required>
                    <small id="helpId" class="form-text text-muted">contraseñas iguales</small>
                    <small id="helpId" class="form-text text-muted">contraseñas diferentes</small> <br/>
-->
                    <label for="" class="form-label">Email:</label>
                    <input type="text" class="form-control" name="email" id="" aria-describedby="helpId" placeholder="Ingresa tu email" Required>
                    <br/><a name="submit" id="submit" class="btn btn-success" href="#" role="button">Crear</a>
                </div>
                <div class="col-xl-3"></div>
            </div>
        </div>



    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>
