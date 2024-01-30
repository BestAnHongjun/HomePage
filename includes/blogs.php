<article class="post">
	<header class="post-header">
		<div class="post-title"> 
		    <?php echo $__blog["title"][0]; ?>
		</div>
		<time class="post-date dt-published" datetime="<?php echo $__blog["date"]["year"].'-'.$__blog["date"]["month"].'-'.$__blog["date"]["day"]; ?>" itemprop="datePublished">
		    <?php 
		        echo $__blog["date"]["year"].'/'.$__blog["date"]["month"].'/'.$__blog["date"]["day"];
		    ?>
		</time>		
	</header>

	<div class="post-content  post-article">
		<?php echo $__content; ?>
	</div>
	<?php include 'layouts/footer.php'; ?>
</article>