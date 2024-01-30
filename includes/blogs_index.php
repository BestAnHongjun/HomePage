<article class="post">
  <header class="post-header home">
    <div class="post-title">博客</div>
  </header>
  <div class="post-content">
    <ul class="post-list">
    <?php
        $blogs = get_blogs();
        foreach ($blogs as $blog) {
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
  <?php include 'layouts/footer.php'; ?>
</article>
