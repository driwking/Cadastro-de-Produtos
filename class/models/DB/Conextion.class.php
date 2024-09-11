<?php

class Conextion extends PDO {
    function __construct()
    {
       $this->conexion();
    }

    protected function conexion (){
        parent::__construct(DRIVE . ":dbname=" . DB . ";host=" . HOST, USER, PASS);
    }
} 

?>