<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./bootstrap-5.1.0-dist/css/bootstrap.min.css">

    <!-- swa 2 -->
    <link rel="stylesheet" href="./swa2/dist/sweetalert2.min.css">

    <title>Login de usuario</title>

  </head>
  <body>
      <div id="login">
          <h3 class="text-center display-4">LOGIN DE USUARIOS</h3>
          <div class="container">
              <div id="login-row" class="row justify-content align-items-center">
                  <div id="login-column" class="col-md-6">
                      <div id="login-box" class="col-md-12 bg-light text-dark">
                          <form id="formlogin" class="form" action="" method="POST">
                              <h3 class="text-center text-dark">INICIAR SESION</h3>
                              <div class="form-group">
                                  <label for="usuario" class="text-dark">USUARIO</label>
                                  <input type="text" name="usuario" id="usuario" class="form-control" placeholder="ingrese el usuario">
                              </div>
                              <div class="form-group">
                                  <label for="password" class="text-dark"> PASSWORD</label>
                                  <input type="password" name="password" id="password" class="form-control" placeholder="ingrese la contraseña">
                              </div>
                              <div class="form-group">
                                  <input type="submit" value="INICIAR SESION" class="btn btn-primary">
                                  <input type="reset" value="LIMPIAR" class="btn btn-info">
                              </div>

                          </form>
                      </div>
                  </div>
              </div>
          </div>
      </div>


    <!-- Optional JavaScript; choose one of the two! -->
    <script type="text/javascript" src="./jquery/jquery-3.3.1.min.js"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <script src="./pooper/popper.min.js"></script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="./bootstrap-5.1.0-dist/js/bootstrap.min.js"></script>
    <!-- Data Table -->
    <script src="./swa2/dist/sweetalert2.min.js"></script>
    <!-- Data Table -->
    <script src="./main.js"></script>
    
  </body>
</html>