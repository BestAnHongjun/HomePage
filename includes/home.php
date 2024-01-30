<article class="post">
  <header class="post-header home">
    <div class="post-title">主页</div>
  </header>
    
  <?php include 'includes/introduction.php'; ?>

  <br>
  <div style="clear: both"></div>
  <div class="post-content">
    <a class="project-extra-link" href="/about.php">查看个人简介>></a>
  </div>
  <div class="post-content" style="float: left; margin-right: 20px;">
    <h2>最新博客</h2>
    <ul class="post-list">
    <?php
        $blogs = get_blogs();
        $cnt_blogs = count($blogs);
        for ($i = 0; $i < $cnt_blogs && $i < 5; $i++)
        {
            $blog = $blogs[$i];
            echo '
            <li class="post-list-item">
                <span class="post-date">'.$blog["date"]["year"].'/'.$blog["date"]["month"].'/'.$blog["date"]["day"].'</span>
                <a class="post-link" href="/blogs.php?url='.$blog["url"].'">'.$blog["title"][0].'</a>
            </li>
            ';
        }
    ?>
    </ul>
  </div>
  <div class="post-content" style="float: left; margin-right: 20px;">
    <h2>最新工程</h2>
    <ul class="post-list">
    <?php
        $projects = get_projects();
        $cnt_projects = count($projects);
        for ($i = 0; $i < $cnt_projects && $i < 5; $i++)
        {
            $project = $projects[$i];
            echo '
            <li class="post-list-item">
                <span class="post-date">'.$project["date"]["year"].'/'.$project["date"]["month"].'/'.$project["date"]["day"].'</span>
                <a class="post-link" href="/projects.php?url='.$project["url"].'">'.$project["title"][0].'</a>
            </li>
            ';
        }
    ?>
    </ul>
  </div>
  <div style="clear:both"></div>
  <?php include 'layouts/footer.php'; ?>
</article>
