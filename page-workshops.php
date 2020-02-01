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
                  <!-- <p>I teach workshops for mental health clinicians who work with clients in creative fields. I am also available to speak to groups of artists about strategies for maintaining balance and wellbeing while pursuing creative careers.</p> -->
                  <?php echo wpautop( get_post_meta( get_the_ID(), '_clayjoints_workshops_left-box', true ) ); ?>
                </div>
              </div>
              <div class="small-12 large-4 columns service">
                <div class="inner-stuff">
                  <i class="fa fa-refresh"></i>
                  <!-- <p>I offer Stress Management trainings for organizations.</p> -->
                  <?php echo wpautop( get_post_meta( get_the_ID(), '_clayjoints_workshops_center-box', true ) ); ?>
                </div>
              </div>
              <div class="small-12 large-4 columns service">
                <div class="inner-stuff">
                  <i class="fa fa-child"></i>
                  <!-- <p>My colleague Carol Potter and I are available to teach Best Practice Parenting, the strength-based parenting class we developed with Bob Mendelsohn.</p> -->
                  <?php echo wpautop( get_post_meta( get_the_ID(), '_clayjoints_workshops_right-box', true ) ); ?>
                </div>
              </div>
            </div>
				  </div>
          <div id="workshops-2" class="expanded row">
            <div class="small-offset-1 small-10 medium-offset-2 medium-8 columns">
              <h4>Please <a href="mailto:clay@claycrosbymft.com" target="_blank" rel="noopener noreferrer">email</a> your contact information if you would like to schedule a workshop.</h4>
            </div>
          </div>
				</div>

			</main> <!-- end #main -->

		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>
