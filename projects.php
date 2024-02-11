<?php 
    include 'modules/Utils.php';
    
    if (isset($_GET["url"])) {
        include 'modules/Parsedown.php';
        $Parsedown = new Parsedown();
    
        $__include = "includes/projects.php";
        $__project = get_markdown($_GET["url"], true);
        if (isset($__project["external"][0])) {
            $__content = file_get_contents(urldecode("https://".trim($__project["external"][0])));
            if (isset($__project["redirect"][0]))
            {
                $__content = str_replace("<img src=\"./", "<img src=\"https://".trim($__project["redirect_raw"][0]), $__content);
                $__content = str_replace("./", "https://".trim($__project["redirect"][0]), $__content);
            }
            $__content = $Parsedown->text($__content);
        }
        else {
            $__content = $Parsedown->text($__project["content"]);
        }
        include 'layouts/default.php';
    }
    else {
        $__include = "includes/projects_index.php";
        $__content = null;
        include 'layouts/default.php';
    }
?>