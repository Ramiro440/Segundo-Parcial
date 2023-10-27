<?php

 $conex = mysqli_connect("localhost","root","123123","escuela");
 
 if (!$conex) {
    echo "Error: No se pudo conectar a MYSQL." . PHP_EOL;
    echo " errno de depuración: " .mysqli_connect_errno() . PHP_EOL;
    echo "error de depuración: " .mysqli_connect_errno() . PHP_EOL;
    exit;
 }
 
 