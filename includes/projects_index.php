<article class="post">
  <header class="post-header home">
    <div class="post-title">工程</div>
  </header>
  <div class="post-content">
    <ul class="project-list">
    <?php
        $projects = get_projects();
        foreach ($projects as $project) {
            echo '
            <li class="project-list-item">
                <div style="clear:both"></div>
                <div class="project-img">
                <img src="'.$project["img"][0].'" style="border: 1px solid black;" />
                </div>
                <div class="project-text">
                <a class="project-link" href="/projects.php?url='.$project["url"].'"><b><big>'.trim($project["title"][0]).'</big></b></a><br>
                <span class="project-abstract">'.trim($project["abstract"][0]).'</span><br>
                <span class="post-date">'.$project["date"]["year"].'/'.$project["date"]["month"].'/'.$project["date"]["day"].'</span>';
            if (isset($project["video"][0])) {
              echo '<a class="project-extra-link" href="https://'.$project["video"][0].'">[Video]</a>';
            }
            if (isset($project["aistudio"][0])) {
              echo '<a class="project-extra-link" href="https://'.$project["aistudio"][0].'">[AI-Studio]</a>';
            }
            if (isset($project["gitee"][0])) {
              echo '<a class="project-extra-link" href="https://'.$project["gitee"][0].'">[Gitee]</a>';
            }
            if (isset($project["report"][0])) {
              echo '<a class="project-extra-link" href="https://'.$project["report"][0].'">[Report]</a>';
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
