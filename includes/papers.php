<article class="post">
	<header class="post-header">
		<div class="post-title"> 
		    <?php echo $__paper["title"][0]; ?>
		</div>
		<time class="post-date dt-published" datetime="<?php echo $__paper["date"]["year"].'-'.$__paper["date"]["month"].'-'.$__paper["date"]["day"]; ?>" itemprop="datePublished">
		    <?php 
		        echo $__paper["date"]["year"].'/'.$__paper["date"]["month"].'/'.$__paper["date"]["day"];
		    ?>
		</time>		
	</header>

	<div class="post-content  post-article">
		<?php echo $__content; ?>
	</div>
	<?php include 'layouts/footer.php'; ?>
</article>