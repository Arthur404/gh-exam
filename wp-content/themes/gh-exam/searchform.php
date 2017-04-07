<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
    <label>
        <span class="screen-reader-text"><?php echo esc_html__( 'Search for:', 'gh-exam' ) ?></span>
        <input type="search" class="search-field"
               placeholder="<?php echo esc_html__( 'Search …', 'gh-exam' ) ?>"
               value="<?php echo get_search_query() ?>" name="s"
               title="<?php echo esc_html__( 'Search for:', 'gh-exam' ) ?>" />
    </label>
    <input type="submit" class="search-submit btn"
           value="<?php echo esc_html__( 'Search', 'gh-exam' ) ?>" />
</form>