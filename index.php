<?php get_header(); ?>


<body>
	<div id="mypopup" class="pop-up">
		<button class="close">x</button>
		<div class="description">
			<img  id="img01" src="images/image3.png"> 
			<div id="pop-up-caption">
			
			</div>			
		</div>
		
		<div class="related-images-title">Related Images</div>
		<div class="related-images-container">

			<div class="related-images-item">
				<?php get_related_posts_thumbnails(); ?>
				

			</div>	
			
		</div>

			
	</div>


<div class="container">
<?php while(have_posts()){ ?>
<div class="image-container">
<?php	the_post();
	the_content();
	the_title('<div class="caption">','</div>'); ?>
</div>
<?php }?>
</div>
</body>
<?php
get_footer();

?>










