<form role="search" method="get" id="searchform" class="searchform" action="<?php echo esc_url( home_url( '/' )) ?>"

<div>
    <label class="sceen-reader-text" for="s"><?php esc_html_e('Search for:', 'wp-devs') ?> </label>
    <input type="text" value="<?php echo get_search_query();?>>" name="s" id="s">
    <input type="submit" id="searchsubmit" value="search">
</div>

</form>
