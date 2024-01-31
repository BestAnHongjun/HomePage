<?php 
    include 'modules/Utils.php';
    
    if (isset($_GET["url"])) {
        include 'modules/Parsedown.php';
        $Parsedown = new Parsedown();
    
        $__include = "includes/blogs.php";
        $__blog = get_markdown($_GET["url"], true);
        if (isset($__blog["external"][0])) {
            $__content = file_get_contents(urldecode("https://".trim($__blog["external"][0])));
            if (isset($__blog["redirect"][0]))
                $__content = str_replace("./", "https://".trim($__blog["redirect"][0]), $__content);
            $__content = $Parsedown->text($__content);
        }
        else {
            $__content = $Parsedown->text($__blog["content"]);
        }
        include 'layouts/default.php';
    }
    else {
        $__include = "includes/blogs_index.php";
        $__content = null;
        include 'layouts/default.php';
    }
?>