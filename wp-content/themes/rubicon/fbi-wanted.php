<?php
/*
Template Name: FBI Wanted
*/
require_once THEME_DIR .'/inc/for_templates/fbi-offices-data.php';

global $offices;
get_header(); ?>
<main>
  <div class="col s12 lime lighten-5">
    <div class="row">
      <div class="col s12 offset-m3 m6 countries-list">
        <div class="section">
          <div class="input-field">
            <select class="select-country">
              <option value="" disabled selected> -- Choose city -- </option>
                <?php 
                  foreach ($offices as $key => $office) {
                    echo '<option value="'.$office['id'].'">'.$office['city'].'</option>';
                  };
                ?>
            </select>
          </div>
        </div>
      </div>
      <div class="col s12 relative" id="ajax-out">
        <div class="absolute spinner">
          <div>
            <img src="<?php echo THEME_DIR_URI ?>/dist/images/spinner.gif">
          </div>
        </div>
        <div class="row" id='rendering'>
        </div>
      </div>
    </div>
  </div>
</main>

<?php get_footer(); ?>