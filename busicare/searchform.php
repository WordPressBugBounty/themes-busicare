<form class="input-group" method="get" id="searchform" action="<?php echo esc_url(home_url('/')); ?>">
    <input type="search" class="form-control" placeholder="<?php echo esc_attr_x('Search', 'placeholder', 'busicare'); ?>" value="" name="s" id="s"/>
    <button class="search-submit" type="submit"><?php esc_html_e('Search', 'busicare'); ?></button>
</form>