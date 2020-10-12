<?php /* Template Name: Areas Of Focus Page */ ?>

<?php get_header(); ?>
<?php $breakpoint = "xlarge"; ?>

	<div id="content">

		<div id="inner-content" class="expanded row">

		  <main id="main" class="expanded row areas-of-focus" role="main">

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

          <?php get_template_part( 'parts/loop', 'page' ); ?>

        <?php endwhile; endif; ?>

        <div id="life-transitions" class="expanded row">
          <div class="focus-row row">
            <div class="small-offset-1 small-10 columns">
              <h2><?php echo the_field( 'section_1_title' ); ?></h2>
              <hr class="focus">
							<?php echo the_field( 'section_1_text' ); ?>
            </div>
          </div>
        </div>

        <div id="couples-therapy" class="expanded row">
          <div class="focus-row row">
            <div class="small-offset-1 small-10 columns">
							<h2><?php echo the_field( 'section_2_title' ); ?></h2>
              <hr class="focus">
							<?php echo the_field( 'section_2_text' ); ?>
            </div>
          </div>
        </div>

        <div id="creative-issues" class="expanded row">
          <div class="focus-row row">
            <div class="small-offset-1 small-10 columns">
              <h2><?php echo the_field( 'section_3_title' ); ?></h2>
              <hr class="focus">
              <?php echo the_field( 'section_3_text' ); ?>
            </div>
          </div>
        </div>

        <div id="EMDR" class="expanded row">
          <div class="focus-row row">
            <div class="small-offset-1 small-10 columns">
            <h2><?php echo the_field( 'section_4_title' ); ?></h2>
              <hr class="focus">
              <?php echo the_field( 'section_4_text' ); ?>
            </div>
          </div>
        </div>

			</main> <!-- end #main -->

		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>
