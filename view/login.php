
<!doctype html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Municipalidad Humaya</title>
        <link rel="icon" href="img/logo.jpg"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

        <!--estilos css-->
        <link href="css/login.css" rel="stylesheet" type="text/css"/>
        <!-- fin -->        
    </head>
    <body class="fondo">


        <div class="container-fluid">
            <div class="row justify-content-center ">
                <form class="login" action="" method="POST">
                    <?php
                    if(isset($errorLogin)){
                        echo $errorLogin;
                    }
                    ?>
                    <h2 class="text-center mb-4">Municipalidad de Humaya</h2>
                    <label for="id">Usuario</label>
                    <input class="form-control" type="text" name="username" onkeypress="return soloLetras(event)" onblur="limpia()" id="username" required><br>
                    <label for="id">Contraseña</label>
                    <input class="form-control" type="password" name="pass" id="pass" required><br>

                    <input type="hidden" name="accion" value="login">
                    <div class="d-flex justify-content-center"> <input class="btn btn-primary" type="submit" value="Inicio de Sesión" /> </div>
                </form>

            </div>


            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

            <!--js-->
            <script src="js/login.js" type="text/javascript"></script>
            <!-- fin -->


    </body>


</html>
