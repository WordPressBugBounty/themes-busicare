<article  id="post-<?php the_ID(); ?>" <?php post_class('post'); ?>>	
	<?php
	if(has_post_thumbnail()):?>
	<figure class="post-thumbnail mb-4">
		<a href="<?php the_permalink();?>">
			<?php the_post_thumbnail('full',array('class'=>'img-fluid'));?>
		</a>			
	</figure>	
	<?php endif;?>
     <div class="post-content">

		<div class="entry-date <?php if (!has_post_thumbnail()){echo 'remove-image';} ?>">
			<a href="<?php echo esc_url( home_url('/') ); ?>/<?php echo esc_html(date( 'Y/m' , strtotime( get_the_date() )) ); ?>"><time><?php echo esc_html(get_the_date()); ?></time></a>
		</div>

    	<div class="entry-meta">
    	<?php 
		$busicare_blog_meta_sort=get_theme_mod( 'busicare_blog_meta_sort', array('blog_author','blog_category'));    	 
    	if ( ! empty( $busicare_blog_meta_sort ) && is_array( $busicare_blog_meta_sort ) ) :
			foreach ( $busicare_blog_meta_sort as $busicare_blog_meta_sort_key => $busicare_blog_meta_sort_val ) :
			
				if ( 'blog_author' === $busicare_blog_meta_sort_val ) :?>
						<span class="author"><?php _e('By','busicare');?>
							<a href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>"> <?php echo esc_html(get_the_author());?></a>
						</span>
					<?php 
				endif;

				if ( 'blog_category' === $busicare_blog_meta_sort_val ) :
					if ( has_category() ) : 
						echo '<span class="cat-links">'. esc_html__('In','busicare') .' ';
			    		the_category( ', ' );
			    		echo '</span>';
					endif; 
				endif;

			endforeach;
		endif;?>
		</div>
	</div>

	<header class="entry-header">
		<h3 class="entry-title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
	</header>

	<div class="entry-content">
		<?php		
		 busicare_posted_content();		 
		 $busicare_button_show_hide=get_theme_mod('busicare_blog_content','excerpt');
		 if($busicare_button_show_hide=="excerpt")
		 {?>
			 <p><?php busicare_button_title();?></p>
			<?php
		}?>
	</div>
</article>