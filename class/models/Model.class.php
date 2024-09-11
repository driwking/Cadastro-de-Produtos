<?php
abstract class Model extends Conextion{
    private int $id;
    abstract function setId();
    abstract function getId();
    abstract function getTable();
    abstract function getCamps();
    abstract function CampComparation();
    abstract function createEntitis();
    abstract function readEntitis();
    abstract function updateEntitis();
    abstract function deleteEntitis();
}



?>