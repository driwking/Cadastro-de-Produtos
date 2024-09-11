<?php

class CSS {
    public array $links = [];
    public function link($file){
        ?>
        <?php array_push($this->links,"<link rel='stylesheet' href='{$file}.css'>") ?>
        <?php
    }

    public function loadLink(){
        foreach($this->links as $link){
           echo $link;
        }
    }
}

?>