<article id="post-<?php the_ID(); ?>" <?php post_class('post'); ?>>
	<?php if(has_post_thumbnail()):?>
		<figure class="post-thumbnail">	
			<a href="<?php the_permalink();?>"><?php the_post_thumbnail('full',array('class' => 'img-fluid'));?></a>
		</figure>
	<?php endif;?>					
	<div class="entry-content">
		<?php the_content();?>
	</div>
</article>