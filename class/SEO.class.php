<?php

class SEO {
    public static CSS $Css;
    public static string $Nome;
    public static string $Title;
    public static string $Icone;
    private string $Author;
    
    function __construct(string | null $Title = null, css | null $Css = null, string | null $Author = null, string | null $Icone = null, string | null $Nome = null){
        SEO::$Title = $Title ?? "";
        SEO::$Css = $Css ?? new CSS;
        SEO::$Icone = $Icone ?? "";
        SEO::$Nome = $Nome ?? "";
        $this->Author = $Author ?? "";
    }

    public static function head(){
        ?>
        <link rel="shortcut icon" href="<?= ASSETS_S ."site/favicon/favicon.ico" ?>" type="image/x-icon">
        <title><?= SEO::$Title ?></title>
        <?= SEO::$Css->loadLink() ?>
        <?php
    }
}

?>