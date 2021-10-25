<?php
session_start();
if($_SESSION['usuario']==null){
    header('location:../index.php');
}else{
    if($_SESSION['roles']){

    }
}
?>

<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../bootstrap-5.1.0-dist/css/bootstrap.min.css">

    <!-- swa 2 -->
    <link rel="stylesheet" href="../swa2/dist/sweetalert2.min.css">

    <title>Login de usuario</title>

  </head>
  <body>
      <div class="container">
          <div class="row">
              <div class="col-lg-12">
                  <div class="jumbotron">
                      <h1 class="display-4 text-center"> BIENVENIDO ADMINISTRADOR</h1>
                      <h2 class="text-center">USUARIO <?php echo$_SESSION['usuario'];?></h2>   
                      <hr>
                      <a class="btn btn-danger btn-lg" href="../bd/logout.php" role="button">Cerrar sesion</a>
                  </div>
              </div>
          </div>

      </div>

    <!-- Optional JavaScript; choose one of the two! -->
    <script type="text/javascript" src="../jquery/jquery-3.3.1.min.js"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <script src="../pooper/popper.min.js"></script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="../bootstrap-5.1.0-dist/js/bootstrap.min.js"></script>
    <!-- Data Table -->
    <script src="../swa2/dist/sweetalert2.min.js"></script>
    <!-- Data Table -->
    <script src="../main.js"></script>
    
  </body>
</html>