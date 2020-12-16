<form role="search" method="get" id="searchform" class="form-search" action="<?php echo esc_url( home_url('/') ); ?>">
  <label class="hide" for="s"><?php _e('Search for:', 'pinnacle'); ?></label>
  <input type="text" value="<?php if (is_search()) { echo get_search_query(); } ?>" name="s" id="s" class="search-query" placeholder="<?php echo __('Search', 'pinnacle'); ?>">
  <button type="submit" id="searchsubmit" class="search-icon"><i class="icon-search"></i></button>
</form>