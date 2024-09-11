<?php

if (isset($_POST['conf']) or isset($_POST['canc'])) {
    print_r($_POST);
}else{
    echo 'never';
}

?>