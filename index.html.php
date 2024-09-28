<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <?php
     if (file_exists(COMPONENTS . "menu.php")) {
        if (file_exists(COMPONENTS . "css/menu.css"))
            load_css("/" . COMPONENTS . "css/menu");
    }
    
    if ($URL[0] == "index") {
       
        load_css("/" . VIEWS . "/home" . "/css/" . $URL[1]);
    }
    else if (is_dir(VIEWS . "/" . $URL[0])) {

        if (file_exists(COMPONENTS . "menu.php")) {
            if (file_exists(COMPONENTS . "css/menu.css"))
            load_css("/" . COMPONENTS . "css/menu");
        }
        if (file_exists(VIEWS . "/" . $URL[0] . "/css/" . $URL[1] . ".css")) {
            load_css("/" . VIEWS . "/" . $URL[0] . "/css/" . $URL[1]);
        }
    } else {
        load_css("/" . VIEWS . "/404/404");
    }

    SEO::head();
    load_css();
    
    ?>
</head>

<body>
    <?php
    echo $body_html;
    load_js();
    ?>
</body>

</html>