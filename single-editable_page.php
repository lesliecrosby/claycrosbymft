<?php
/*
This is the custom post type post template.
If you edit the post type name, you've got
to change the name of this template to
reflect that name change.

i.e. if your custom post type is called
register_post_type( 'bookmarks',
then your single template should be
single-bookmarks.php

*/
?>

<?php get_header(); ?>

<div id="content">

	<div id="inner-content" class="row">

		<main id="main" class="large-8 medium-8 columns first" role="main">

		    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		    	<?php get_template_part( 'parts/loop', 'page' ); ?>
					<?php echo get_post_meta($post->ID, "Editable_Page_Field", true); ?>

		    <?php endwhile; else : ?>

		   		<?php get_template_part( 'parts/content', 'missing' ); ?>

		    <?php endif; ?>

				<?php echo get_post_meta($post->ID, "Workshops_Box_1", true); ?>
				<?php echo get_post_meta($post->ID, "A_About_Therapy_1_SubHead", true); ?>
				<!-- <?php echo get_post_meta($post->ID, "Test Metabox", true); ?> -->
		</main> <!-- end #main -->

	</div> <!-- end #inner-content -->

</div> <!-- end #content -->

<?php get_footer(); ?>
