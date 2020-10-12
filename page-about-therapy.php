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
              <div class="faq-item">
								<h4>
									<?php echo esc_html( get_post_meta( get_the_ID(), '_clayjoints_abouttherapy_subhead1', true ) ); ?>
								</h4>
                <p>
									<?php echo wpautop( get_post_meta( get_the_ID(), '_clayjoints_abouttherapy_body1', true ) ); ?>
                </p>
              </div>

							<div class="faq-item">
								<h4>
									<?php echo esc_html( get_post_meta( get_the_ID(), '_clayjoints_abouttherapy_subhead2', true ) ); ?>
								</h4>
                <p>
									<?php echo wpautop( get_post_meta( get_the_ID(), '_clayjoints_abouttherapy_body2', true ) ); ?>
                </p>
              </div>

							<div class="faq-item">
								<h4>
									<?php echo esc_html( get_post_meta( get_the_ID(), '_clayjoints_abouttherapy_subhead3', true ) ); ?>
								</h4>
                <p>
									<?php echo wpautop( get_post_meta( get_the_ID(), '_clayjoints_abouttherapy_body3', true ) ); ?>
                </p>
              </div>

							<div class="faq-item">
								<h4>
									<?php echo esc_html( get_post_meta( get_the_ID(), '_clayjoints_abouttherapy_subhead4', true ) ); ?>
								</h4>
                <p>
									<?php echo wpautop( get_post_meta( get_the_ID(), '_clayjoints_abouttherapy_body4', true ) ); ?>
                </p>
              </div>

							<div class="faq-item">
								<h4>
									<?php echo esc_html( get_post_meta( get_the_ID(), '_clayjoints_abouttherapy_subhead5', true ) ); ?>
								</h4>
                <p>
									<?php echo wpautop( get_post_meta( get_the_ID(), '_clayjoints_abouttherapy_body5', true ) ); ?>
                </p>
              </div>
            </div>
          </div>
        </div>

        <div class="about-2">
          <div class="row">
            <div class="small-offset-1 small-10 large-offset-0 large-12 columns">
              <h2>Contact</h2>
              <div class="">
                <div class="row expanded">
                  <div class="large-4 columns">
                    <div class="inner-stuff">
                      <i class="fa fa-phone"></i>
                      <br>
											<strong>Phone</strong>
											<!-- <a href="tel:<?php //echo esc_html( get_post_meta( get_the_ID(), '_clayjoints_abouttherapy_phone', true ) ); ?>" target="_blank" rel="noopener noreferrer">
                      	<h6><?php //echo esc_html( get_post_meta( get_the_ID(), '_clayjoints_abouttherapy_phone', true ) ); ?></h6>
											</a> -->
                      <?php echo get_post_meta( get_the_ID(), '_clayjoints_abouttherapy_phones', true ); ?>
                    </div>
                  </div>

                  <div class="large-4 columns">
                    <div class="inner-stuff">
											<a href="mailto:<?php echo esc_html( get_post_meta( get_the_ID(), '_clayjoints_abouttherapy_email', true ) ); ?>" target="_blank" rel="noopener noreferrer">
	                      <i class="fa fa-envelope"></i>
	                      <br>
                      </a>
											<strong>Email</strong>
                      <a href="mailto:<?php echo esc_html( get_post_meta( get_the_ID(), '_clayjoints_abouttherapy_email', true ) ); ?>" target="_blank" rel="noopener noreferrer">
												<h6><?php echo esc_html( get_post_meta( get_the_ID(), '_clayjoints_abouttherapy_email', true ) ); ?></h6>
											</a>
                    </div>
                  </div>

                  <div class="large-4 columns">
                    <div class="inner-stuff">
                      <?php
                      $location_url = get_post_meta( get_the_ID(), '_clayjoints_abouttherapy_location_url', true );
                      if ( $location_url ): ?>
                        <a href="<?php echo esc_url( $location_url ); ?>" target="_blank" rel="noopener noreferrer">
                      <?php endif; ?>
                        <i class="fa fa-map-marker"></i>
                        <br>
                      <?php if ( $location_url ): ?>
                        </a>
                      <?php endif; ?>
											<strong>Office Location</strong>
                      <?php if ( $location_url ): ?>
                        <a href="<?php echo esc_url( $location_url ); ?>" target="_blank" rel="noopener noreferrer">
                      <?php endif; ?>
                      <?php echo get_post_meta( get_the_ID(), '_clayjoints_abouttherapy_location_wysiwyg', true ); ?>
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
              <h2>Links</h2>
              <div class="medium-4 columns">
                <h4>General Psychology Resources</h4>
                <!-- <ul>
                 	<li><a href="http://www.nami.org/" target="_blank" rel="noopener noreferrer">NAMI</a></li>
                 	<li><a href="http://www.camft.com/" target="_blank" rel="noopener noreferrer">California Association of Marriage and Family Therapists</a></li>
                 	<li><a href="http://www.aamft.org/" target="_blank" rel="noopener noreferrer">American Association for Marriage and Family Therapy</a></li>
                 	<li><a href="http://www.bbs.ca.gov/" target="_blank" rel="noopener noreferrer">California Board of Behavioral Sciences</a></li>
                </ul> -->
								<?php
									cmb2_output_link_list( '_clayjoints_abouttherapy_repeat_group_1' );
								?>
              </div>
              <div class="medium-4 columns">
                <h4>Referral Sources</h4>
								<!-- <ul>
                 	<li><a href="http://therapists.psychologytoday.com/" target="_blank" rel="noopener noreferrer">Psychology Today Therapy Directory</a></li>
                 	<li><a href="http://www.iceeft.com/" target="_blank" rel="noopener noreferrer">International Centre for Excellence in Emotionally Focused Therapy</a></li>
                 	<li><a href="http://sccc-la.org/" target="_blank" rel="noopener noreferrer">Southern California Counseling Center</a></li>
                 	<li><a href="http://ourhouse-grief.org/" target="_blank" rel="noopener noreferrer">Our House (Grief Support Groups)</a></li>
                 	<li><a href="http://www.lachild.org/" target="_blank" rel="noopener noreferrer">LA Child Guidance Center</a></li>
                </ul> -->
								<?php
									cmb2_output_link_list( '_clayjoints_abouttherapy_repeat_group_2' );
								?>
              </div>
              <div class="medium-4 columns float-left">
                <h4>Mindfulness Resources</h4>
                <!-- <ul>
                 	<li><a href="http://www.insightla.org/" target="_blank" rel="noopener noreferrer">InsightLA</a></li>
                 	<li><a href="http://www.marc.ucla.edu/" target="_blank" rel="noopener noreferrer">Mindfulness Awareness Research Center at UCLA</a></li>
                 	<li><a href="http://www.spiritrock.org/" target="_blank" rel="noopener noreferrer">Spirit Rock</a></li>
                </ul> -->
								<?php
									cmb2_output_link_list( '_clayjoints_abouttherapy_repeat_group_3' );
								?>
              </div>
            </div>
          </div>
        </div>

			</main> <!-- end #main -->

		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>
