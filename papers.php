<?php 
    include 'modules/Utils.php';
    
    if (isset($_GET["url"]) || isset($_GET["id"])) {
        include 'modules/Parsedown.php';
        $Parsedown = new Parsedown();
    
        $__include = "includes/papers.php";
        if (isset($_GET["url"]))
            $__paper = get_markdown($_GET["url"], true);
        else if (isset($_GET["id"])) {
            $url = get_paper_by_id((int)$_GET["id"]);
            if ($url == NULL) {
                header("status: 404 Not Found");
                exit(0);
            }
            $__paper = get_markdown($url, true);
        }
        if (isset($__paper["external"][0])) {
            $__content = file_get_contents(urldecode("https://".trim($__paper["external"][0])));
            if (isset($__paper["redirect"][0]))
                $__content = str_replace("./", "https://".trim($__paper["redirect"][0]), $__content);
            $__content = $Parsedown->text($__content);
        }
        else {
            $__content = $Parsedown->text($__paper["content"]);
        }
        include 'layouts/default.php';
    }
    else {
        $__include = "includes/papers_index.php";
        $__content = null;
        include 'layouts/default.php';
    }
?>