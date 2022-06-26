<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>LOGIN BACANO</title>
</head>
<body>
    <div class="loader">
      <h1>
        LOGIN
      </h1>
    </div>
    <form autocomplete="off" action="./index.php" method="POST" class="form">
      <div class="inputBox">
          <input type="text" name="usuario" required="required">
          <span>USUARIO</span>
      </div>
      <div class="inputBox">
          <input type="password" name="contrasena" required="required">
          <span>CONTRASEÑA</span>
      </div>
      <div class="inputSubmit">
          <input type="submit" value="INGRESAR">
      </div>
    </form>
</body>
</html>

<?php

if($_POST){
  $usuario = $_POST['usuario'];
  $contrasena = $_POST['contrasena'];
  if($usuario == 'a' && $contrasena == 'a'){
    echo '<script>window.location.href = "./handler.php";</script>';
  }else{
    echo '<h2>Usuario y/o contraseña incorrectos</h2>';
  }
}

?>