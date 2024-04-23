<?php 
    include 'modules/Parsedown.php';
    include 'modules/Utils.php';
    $Parsedown = new Parsedown();

    $__include = "includes/home.php";
    $source = file_get_contents("pages/about.md");
    $__content = $Parsedown->text($source);

    include 'layouts/default.php';
?>