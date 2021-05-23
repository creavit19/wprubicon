<?php
require_once THEME_DIR.'/inc/classes/ThemeFooter.class.php';
$footer = new ThemeFooter();
?>
<footer>
				<div class="col s12 grey darken-1 white-text">
					<div class="copyright"><?php echo $footer->get_copyright(); ?>  |  <a href="<?php echo $footer->get_privacy_policy_url(); ?>" class='lime-text text-lighten-2'><?php echo $footer->get_privacy_policy_title(); ?></a></div>
				</div>
			</footer>
		</div>
	</div>
    <?php wp_footer(); ?>
</body>
</html>