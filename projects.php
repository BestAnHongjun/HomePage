<?php 
    include 'modules/Utils.php';
    
    if (isset($_GET["url"])) {
        include 'modules/Parsedown.php';
        $Parsedown = new Parsedown();
    
        $__include = "includes/projects.php";
        $__project = get_markdown($_GET["url"], true);
        $__content = $Parsedown->text($__project["content"]);
        
        include 'layouts/default.php';
    }
    else {
        $__include = "includes/projects_index.php";
        $__content = null;
        include 'layouts/default.php';
    }
?>