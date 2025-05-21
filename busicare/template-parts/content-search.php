<article id="post-<?php the_ID(); ?>" <?php post_class('post'); ?>>	
	<?php
	if(has_post_thumbnail()):?>
	<figure class="post-thumbnail mb-4">
		<a href="<?php the_permalink();?>">
			<?php the_post_thumbnail('full',array('class'=>'img-fluid'));?>
		</a>			
	</figure>	
	<?php endif;?>

    <div class="post-content">
		<div class="entry-date <?php if (!has_post_thumbnail()) {echo 'remove-image';} ?>">
			<a href="<?php echo esc_url( home_url('/') ); ?>/<?php echo esc_html(date( 'Y/m' , strtotime( get_the_date() )) ); ?>"><time><?php echo esc_html(get_the_date()); ?></time></a>
		</div>
    	<div class="entry-meta">
			<span class="author"><?php esc_html_e('By','busicare');?>
				<a href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>"> <?php echo esc_html(get_the_author());?></a>
			</span>
			<?php if ( has_category() ) : 
			echo '<span class="cat-links">'. esc_html__('In','busicare') . ' ';
    		the_category( ', ' );
    		echo '</span>';
			endif;?>
		</div>
	</div>

	<header class="entry-header">
		<h3 class="entry-title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
	</header>	

	<div class="entry-content">
		<?php the_excerpt(); wp_link_pages( ); ?>
		<p><a href ="<?php echo esc_url(get_the_permalink()); ?>" class="more-link"><?php echo esc_html__( 'Read More','busicare' );?><i class="fa <?php if(is_rtl()){echo 'fa-long-arrow-left';} else{ echo 'fa-long-arrow-right';}?>"></i></a></p>
	</div>										
</article>