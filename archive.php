<?php get_header(); ?>


<div id="content" class="archive-page">

	<div id="inner-content" class="grid-container">

		<main id="main" class="grid-x grid-margin-x" role="main">

			<header class="archive-header">
				<h1 class="page-title"> <?php single_term_title(); ?>  </h1>
				<?php the_archive_description('<div class="taxonomy-description">', '</div>'); ?>
			</header>
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<!-- To see additional archive styles, visit the /parts directory -->
					<?php get_template_part('assets/src/php/page-components/loop', 'archive'); ?>

				<?php endwhile; ?>

				<?php insert_page_navigation(); ?>

			<?php else : ?>

				<?php get_template_part('assets/src/php/page-components/content', 'missing'); ?>

			<?php endif; ?>

		</main> <!-- end #main -->

		<?php // get_sidebar(); ?>

	</div> <!-- end #inner-content -->

</div> <!-- end #content -->

<?php get_footer(); ?>