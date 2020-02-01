<?php /* Template Name: Standard Page */ ?>

<?php get_header(); ?>
<?php $breakpoint = "xlarge"; ?>

	<div id="content">

		<div id="inner-content" class="expanded row">

		  <main id="main" class="expanded row" role="main">

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

          <?php get_template_part( 'parts/loop', 'page' ); ?>

        <?php endwhile; endif; ?>

				

			</main> <!-- end #main -->

		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>
