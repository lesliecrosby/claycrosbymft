<?php /* Template Name: About Therapy Page */ ?>

<?php get_header(); ?>
<?php $breakpoint = "xlarge"; ?>

  <div id="content">

    <div id="inner-content" class="expanded row">

      <main id="main" class="expanded row about-therapy" role="main">

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

          <?php get_template_part( 'parts/loop', 'page' ); ?>

        <?php endwhile; endif; ?>

        <div class="about-1 expanded row">
          <div class="row">
            <div class="small-offset-1 small-10 columns">

              <?php if ( have_rows( 'faq_items' ) ): while ( have_rows( 'faq_items' ) ): the_row(); ?>
                <div class="faq-item">
                  <h4><?php echo the_sub_field( 'subheading' ); ?></h4>
                  <?php echo the_sub_field( 'answer_text' ); ?>
                </div>
              <?php endwhile; endif;?>

            </div>
          </div>
        </div>

        <div class="about-2">
          <div class="row">
            <div class="small-offset-1 small-10 large-offset-0 large-12 columns">
              <h2><?php echo the_field( 'contact_section_title' ); ?></h2>
              <div class="">
                <div class="row expanded">
                  <div class="large-4 columns">
                    <div class="inner-stuff">
                      <i class="fa fa-phone"></i>
                      <br>
                      <strong>Phone</strong>
                      <?php echo the_field( 'office_phones' ); ?>
                    </div>
                  </div>

                  <div class="large-4 columns">
                    <div class="inner-stuff">
                      <a href="mailto:<?php echo the_field( 'email' ); ?>">
	                      <i class="fa fa-envelope"></i>
	                      <br>
                      </a>
                      <strong>Email</strong>
                      <a href="mailto:<?php echo the_field( 'email' ); ?>">
                        <h6><?php echo the_field( 'email' ); ?></h6>
                      </a>
                    </div>
                  </div>

                  <div class="large-4 columns">
                    <div class="inner-stuff">
                      <?php
                      $location_url = get_field( 'office_location_url' );
                      if ( $location_url ): ?>
                        <a href="<?php echo $location_url; ?>" target="_blank" rel="noopener noreferrer">
                      <?php endif; ?>
                        <i class="fa fa-map-marker"></i>
                        <br>
                      <?php if ( $location_url ): ?>
                        </a>
                      <?php endif; ?>
                      <strong>Office Location</strong>
                      <?php if ( $location_url ): ?>
                        <a href="<?php echo $location_url; ?>" target="_blank" rel="noopener noreferrer">
                      <?php endif; ?>
                      <?php echo the_field( 'office_location_text' ); ?>
                      <?php if ( $location_url ): ?>
                        </a>
                      <?php endif; ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="about-3 expanded row">
          <div class="row">
              <div class="small-offset-1 small-10 large-offset-0 large-12 columns">
              <h2><?php echo the_field( 'links_section_title' ); ?></h2>
              <div class="medium-4 columns">
                <h4><?php echo the_field( 'column_1_subheading' ); ?></h4>
                <?php echo the_field( 'column_1_text' ); ?>
              </div>
              <div class="medium-4 columns">
                <h4><?php echo the_field( 'column_2_subheading' ); ?></h4>
                <?php echo the_field( 'column_2_text' ); ?>
              </div>
              <div class="medium-4 columns float-left">
                <h4><?php echo the_field( 'column_3_subheading' ); ?></h4>
                <?php echo the_field( 'column_3_text' ); ?>
              </div>
            </div>
          </div>
        </div>

      </main> <!-- end #main -->

    </div> <!-- end #inner-content -->

  </div> <!-- end #content -->

<?php get_footer(); ?>
