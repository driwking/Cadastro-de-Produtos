<?php

$con = new Conexion();
$query = $con->prepare("SELECT * FROM categorias");