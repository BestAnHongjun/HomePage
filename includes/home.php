<article class="post">
  <header class="post-header home">
    <div class="post-title">主页</div>
  </header>
    
  <?php include 'includes/introduction.php'; ?>
  
  <br>
  <div class="post-content" style="clear: both">
    <?php echo $__content; ?>
  </div>
<!--
  <br><hr>
  <div style="clear: both"></div>
  <div class="post-content" style="float: left; margin-right: 20px;">
    <h2>最新博客</h2>
    <a class="project-extra-link" href="/blogs.php">查看全部博客>></a>
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
    <h2>最新科研</h2>
    <a class="project-extra-link" href="/blogs.php">查看全部科研>></a>
    <ul class="post-list">
    <?php
        $papers = get_papers();
        $cnt_papers = count($papers);
        for ($i = 0; $i < $cnt_papers && $i < 5; $i++)
        {
            $paper = $papers[$i];
            echo '
            <li class="post-list-item">
                <span class="post-date">'.$paper["date"]["year"].'/'.$paper["date"]["month"].'/'.$paper["date"]["day"].'</span>
                <a class="post-link" href="/papers.php?url='.$paper["url"].'">'.$paper["title"][0].'</a>
            </li>
            ';
        }
    ?>
    </ul>
  </div>
  <div class="post-content" style="float: left; margin-right: 20px;">
    <h2>最新工程</h2>
    <a class="project-extra-link" href="/projects.php">查看全部工程>></a>
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
  -->
  <div style="clear:both"></div>
  <?php include 'layouts/footer.php'; ?>
</article>
