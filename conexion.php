<?php
$conexion = new mysqli("localhost", "root", "Root1234", "agenda");
if ($conexion->connect_error) { die("Error de conexión"); }
$conexion->set_charset("utf8mb4");