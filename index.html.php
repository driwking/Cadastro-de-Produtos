<!DOCTYPE html>
<html lang="pt-br">

<head>
    <?php
     if (file_exists(COMPONENTS . "menu-topo.php")) {
        if (file_exists(COMPONENTS . "css/menu-topo.css"))
            SEO::$Css->link("/" . COMPONENTS . "css/menu-topo");
    }
    
    if ($URL[0] == "index") {
       
        SEO::$Css->link("/" . VIEWS . "/home" . "/css/" . $URL[1]);
    }
    else if (is_dir(VIEWS . "/" . $URL[0])) {

        if (file_exists(COMPONENTS . "menu-topo.php")) {
            if (file_exists(COMPONENTS . "css/menu-topo.css"))
                SEO::$Css->link("/" . COMPONENTS . "css/menu-topo");
        }
        if (file_exists(VIEWS . "/" . $URL[0] . "/css/" . $URL[1] . ".css")) {
            SEO::$Css->link("/" . VIEWS . "/" . $URL[0] . "/css/" . $URL[1]);
        }
    } else {
        SEO::$Css->link("/" . VIEWS . "/404/404");
    }

    SEO::head();
    ?>
</head>

<body>
    <?php

    if (file_exists(COMPONENTS . "menu-topo.php")) {
        require COMPONENTS . "menu-topo.php";
    }

    if ($URL[0] == "index") {
       
        require VIEWS . "/home" . "/" . $URL[1] . ".php";
    } else  if (is_dir(VIEWS . "/" . $URL[0])) {
        if (file_exists(VIEWS  . "/" . $URL[0] . "/" . $URL[1] . ".php")) {
            require VIEWS  . "/" . $URL[0] . "/" . $URL[1] . ".php";
        }
    } else if (file_exists(VIEWS . $URL[0] . ".php")) {
        require VIEWS . "/" . $URL[0] . ".php";
    } else {
        require VIEWS . "/404/404.html";
    }
    ?>
</body>

</html>