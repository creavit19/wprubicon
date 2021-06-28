<?php
require_once THEME_DIR.'/inc/classes/ThemeFooter.class.php';
$footer = new ThemeFooter();
?>
      </main>
      <footer class="ex-clearfix">
        <div class="col s12 grey darken-1 white-text">
          <div class="row">
            <div class="col s12 l3 push-l5"><?php dynamic_sidebar( 'footer-phone' ) ?></div>
            <div class="col s12 l4 push-l5"><?php dynamic_sidebar( 'footer-social' ) ?></div>
            <div class="col s12 l5 pull-l7"><?php echo $footer->get_copyright(); ?>  |  <a href="<?php echo $footer->get_privacy_policy_url(); ?>" class='lime-text text-lighten-2'><?php echo $footer->get_privacy_policy_title(); ?></a></div>
          </div>
        </div>
      </footer>
    </div>
	</div>
    <?php wp_footer(); ?>
</body>
</html>