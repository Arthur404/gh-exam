<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
    <label>
        <input type="search" class="search-field"
               placeholder="<?php echo esc_html__( 'Type and hit Enter...', 'gh-exam' ) ?>"
               value="<?php echo get_search_query() ?>" name="s"
               title="<?php echo esc_html__( 'Search for:', 'gh-exam' ) ?>" />
    </label>
</form>