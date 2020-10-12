<?php /* Template Name: Workshops Page */ ?>

<?php get_header(); ?>
<?php $breakpoint = "large"; ?>

	<div id="content">

		<div id="inner-content" class="expanded row">

	    <main id="main" class="expanded row workshops" role="main">

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

          <?php get_template_part( 'parts/loop', 'page' ); ?>

        <?php endwhile; endif; ?>

				<div id="workshops" class="expanded row">
				  <div id="workshops-1" class="expanded row">
            <div class="small-offset-0 large-offset-1 large-10 columns">
              <div class="small-12 large-4 columns service">
                <div class="inner-stuff">
                  <i class="fa fa-camera-retro"></i>
                  <p><?php echo the_field( 'left_box' ); ?></p>
                </div>
              </div>
              <div class="small-12 large-4 columns service">
                <div class="inner-stuff">
                  <i class="fa fa-refresh"></i>
                  <p><?php echo the_field( 'center_box' ); ?></p>
                </div>
              </div>
              <div class="small-12 large-4 columns service">
                <div class="inner-stuff">
                  <i class="fa fa-child"></i>
                  <p><?php echo the_field( 'right_box' ); ?></p>
                </div>
              </div>
            </div>
				  </div>
          <div id="workshops-2" class="expanded row">
            <div class="small-offset-1 small-10 medium-offset-2 medium-8 columns">
              <?php echo the_field( 'call_to_action_section' ); ?>
            </div>
          </div>
				</div>

			</main> <!-- end #main -->

		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>
