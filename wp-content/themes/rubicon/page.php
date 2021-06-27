<?php get_header(); ?>
      <?php while ( have_posts() ) : the_post(); ?>
			<article <?php post_class() ?> >
				<h1 class="entry-title"><?php the_title(); ?></h1>
        <?php the_post_thumbnail(); ?>
				<div class="entry-content">
					<?php the_content(); ?>
					<?php edit_post_link( __( 'Edit', 'rubicon' ), '<span class="edit-link">', '</span>' ); ?>
				</div>

				<?php wp_link_pages( array('before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'rubicon' ), 'after' => '</p></nav>' ) ); ?>

			</article>
		<?php endwhile;?>
<?php get_footer(); ?>