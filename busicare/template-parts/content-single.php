<article id="post-<?php the_ID(); ?>" <?php post_class('post'); ?>>
	<?php
	if(has_post_thumbnail()):?>
		<figure class="post-thumbnail mb-4">
			<?php the_post_thumbnail('full',array('class'=>'img-fluid'));?>						
		</figure>	
	<?php endif;?>
    <?php if(get_theme_mod('busicare_enable_single_post_date',true) || get_theme_mod('busicare_enable_single_post_admin',true) || get_theme_mod('busicare_enable_single_post_category',true)): ?>
	<div class="post-content">
		<?php
		if(get_theme_mod('busicare_enable_single_post_date',true)===true):?>
		<div class="entry-date <?php if (!has_post_thumbnail()) {echo 'remove-image';} ?>">
			<a href="<?php echo esc_url( home_url('/') ); ?>/<?php echo esc_html(date( 'Y/m' , strtotime( get_the_date() )) ); ?>"><time><?php echo esc_html(get_the_date()); ?></time></a>
		</div>
		<?php endif;?>
    <?php if(get_theme_mod('busicare_enable_single_post_admin',true) || get_theme_mod('busicare_enable_single_post_category',true)): ?>
	<div class="entry-meta">
		<?php
		if(get_theme_mod('busicare_enable_single_post_admin',true)===true):?>
		<span class="author"><?php esc_html_e('By','busicare');?>
			<a href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>"> <?php echo esc_html(get_the_author());?></a>
		</span>
		<?php endif;
	if(get_theme_mod('busicare_enable_single_post_category',true)==true):
	if(has_category()):
		echo '<span class="cat-links">'. esc_html__('In','busicare') . ' ';
		the_category( ', ');
		echo '</span>';		
	endif; endif;?>	
	</div>
        <?php endif;?>
        </div>
    <?php endif;?>
	<header class="entry-header">
		<h3 class="entry-title">
			<?php the_title();?>
		</h3>
	</header>	

	<div class="entry-content">
		<?php the_content();?>
		<?php wp_link_pages( ); ?>
	</div>	
	<?php
	if(get_theme_mod('busicare_enable_single_post_tag',true)===true):
	if(has_tag()):?>
	<div class="entry-meta pt-4">
		<span class="tag-links"><?php the_tags('',' ');?></span>
	</div>
<?php endif; endif;?>
</article>