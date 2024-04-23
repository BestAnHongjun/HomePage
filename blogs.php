<?php 
    include 'modules/Utils.php';
    
    if (isset($_GET["url"]) || isset($_GET["id"])) {
        include 'modules/Parsedown.php';
        $Parsedown = new Parsedown();
    
        $__include = "includes/blogs.php";
        if (isset($_GET["url"]))
            $__blog = get_markdown($_GET["url"], true);
        else if (isset($_GET["id"])) {
            $url = get_blog_by_id((int)$_GET["id"]);
            if ($url == NULL) {
                header("status: 404 Not Found");
                exit(0);
            }
            $__blog = get_markdown($url, true);
        }
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