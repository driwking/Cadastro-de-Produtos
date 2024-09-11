<?php

class SEO {
    public static CSS $Css;
    public static string $Title;
    public static string $Icone;
    private string $Author;
    
    function __construct(string | null $Title = null, css | null $Css = null, string | null $Author = null, string | null $Icone = null){
        SEO::$Title = $Title ?? "";
        SEO::$Css = $Css ?? new CSS;
        SEO::$Icone = $Icone ?? "";
        $this->Author = $Author ?? "";
    }

    public static function head(){
        ?>
        <meta>
        <title><?= SEO::$Title ?></title>
        <?= SEO::$Css->loadLink() ?>
        <?php
    }
}

?>