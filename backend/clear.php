<?php

require_once 'connect.db.php';

function clear($input){
    global $connect;
    $mysql = mysqli_escape_string($connect,$input);
    $html = htmlspecialchars($mysql);
    return $html;
}


?>