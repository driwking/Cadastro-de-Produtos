<?php
$loaded_js = [];
function load_js(string ...$paths)
{
    global $loaded_js;
    if ((bool) count($paths) == 0) {
        foreach($loaded_js as $path){
            ?>
        <script src="<?= $path ?>"></script>
            <?php
        }
    }
    try{
        foreach ($paths as $path) {
            $path .= ".js";
            if (!in_array($path, $loaded_js)) $loaded_js[] = $path;
        }
    } catch(Exception $e){
        echo $e->getMessage();
    }
}
$loaded_css = [];
function load_css(string ...$paths)
{
    global $loaded_css;
    if ((bool) count($paths) == 0) {
        foreach($loaded_css as $path){
            ?>
        <link rel="stylesheet" href="<?= $path ?>"></lin>
            <?php
        }
    }
    try{
        foreach ($paths as $path) {
            $path .= ".css";
            if (!in_array($path, $loaded_css)) $loaded_css[] = $path;
        }
    } catch(Exception $e){
        echo $e->getMessage();
    }
}


function coment(...$values){
    if(!is_array($values)){
        echo "<pre>";
        var_dump($values);
        echo "</pre>";
        return;
    }
    
    if(is_callable($values)){
        echo "<pre>";
        call_user_func($values[0], $values[2]);
        echo "</pre>";
        return;
    };
    
    echo "<pre>";
    foreach($values as $value){
        echo "<pre>";
        var_dump($value);
        echo "</pre>";
    }
    echo "</pre>";
    return;
}
