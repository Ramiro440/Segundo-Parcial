<?php
  require_once "conexion.php";

  $correo = $_POST ["email"];
  $password = $_POST ["password"]; 
  
  
  if(!isset($correo) || empty($correo)) {
    echo "Debes rellenar el campo Correo";
  }
  if(!isset($password) || empty($password)) {
    echo "Debes rellenar el campo Contraseña";
  }
  
  $consulta = "SELECT * FROM usuarios WHERE email = '$correo' and password = '$password'";
  $resultado = mysqli_query ($conex, $consulta);
  $registros = mysqli_num_rows($resultado);

  if ($registros > 0) {
    $row = mysqli_fetch_assoc($resultado);  
    $gender = $row["gender"];
    $city = $row["city"];
    $state = $row["state"];

    if ($gender === "M") {
      echo "Bienvenido " . $correo . " vives en " . $city . ", " . $state;
    } elseif ($gender === "F") {
      echo "Bienvenida " . $correo  . " vives en " . $city . ", " . $state;
    }
  }d
  else {
    echo "Usuario incorrecto";
  }

?>