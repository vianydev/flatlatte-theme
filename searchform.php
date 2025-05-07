  <form role="search" method="get" class="search-form d-sm-flex" action="<?php echo esc_url(home_url('/')); ?>">
    <div class="col-sm-6">
      <label class="search-group">
          <span class="screen-reader-text"><?php echo esc_html_x('Buscar:', 'label', 'flat-latte'); ?></span>
          <input
              type="search"
              class="search-field"
              placeholder="<?php echo esc_attr_x('Buscar ...', 'placeholder', 'flat-latte'); ?>"
              value="<?php echo get_search_query(); ?>"
              name="s"
          />
      </label>
    </div>
    <div class="col-sm-4 mt-2 mt-sm-0">
      <button type="submit" class="search-submit btn-get-started">
          <?php echo esc_html_x('Buscar', 'submit button', 'flat-latte'); ?>
          <i class="bi bi-search"></i>
      </button>
    </div>
  </form>