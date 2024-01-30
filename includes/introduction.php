<div class="row">
    <div class="me">
        <img src="/public/img/me.jpg" width="256"/>
    </div>
    <div style="float:left;">
        <?php 
            $source = file_get_contents("pages/introduction.md");
            echo $Parsedown->text($source);
        ?>
    </div>
</div>