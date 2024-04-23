<article class="post">
  <header class="post-header home">
    <div class="post-title">科研</div>
  </header>
  <div class="post-content">
    <ul class="project-list">
    <?php
        $papers = get_papers();
        foreach ($papers as $paper) {
            echo '
            <li class="project-list-item">
                <div style="clear:both"></div>
                <div class="project-img">
                <img src="'.$paper["img"][0].'" style="border: 1px solid black;" />
                </div>
                <div class="project-text">
                <a class="project-link" href="/papers.php?url='.$paper["url"].'"><b><big>'.trim($paper["title"][0]).'</big></b></a><br>
                <span class="project-abstract">'.trim($paper["abstract"][0]).'</span><br>
                <span class="post-date">'.$paper["date"]["year"].'/'.$paper["date"]["month"].'/'.$paper["date"]["day"].'</span>';
            if (isset($paper["arxiv"][0])) {
              echo '<a class="project-extra-link" href="https://'.$paper["arxiv"][0].'">[ArXiv]</a>';
            }
            if (isset($paper["video"][0])) {
              echo '<a class="project-extra-link" href="https://'.$paper["video"][0].'">[Video]</a>';
            }
            if (isset($paper["aistudio"][0])) {
              echo '<a class="project-extra-link" href="https://'.$paper["aistudio"][0].'">[AI-Studio]</a>';
            }
            if (isset($paper["github"][0])) {
              echo '<a class="project-extra-link" href="https://'.$paper["github"][0].'">[GitHub]</a>';
            }
            if (isset($paper["gitee"][0])) {
              echo '<a class="project-extra-link" href="https://'.$paper["gitee"][0].'">[Gitee]</a>';
            }
            echo '
                </div>
                <div style="clear:both"></div>
            </li>
            ';
        }
    ?>
    </ul>
  </div>
  <?php include 'layouts/footer.php'; ?>
</article>
