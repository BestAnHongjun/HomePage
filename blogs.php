<?php 
    include 'modules/Utils.php';
    
    if (isset($_GET["url"])) {
        include 'modules/Parsedown.php';
        $Parsedown = new Parsedown();
    
        $__include = "includes/blogs.php";
        $__blog = get_markdown($_GET["url"], true);
        $__content = $Parsedown->text($__blog["content"]);
        
        include 'layouts/default.php';
    }
    else {
        $__include = "includes/blogs_index.php";
        $__content = null;
        include 'layouts/default.php';
    }
?>