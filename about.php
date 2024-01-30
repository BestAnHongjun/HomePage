<?php 
    include 'modules/Parsedown.php';
    $Parsedown = new Parsedown();

    $__include = "includes/about.php";
    
    $source = file_get_contents("pages/about.md");
    $__content = $Parsedown->text($source);
    include 'layouts/default.php';
?>