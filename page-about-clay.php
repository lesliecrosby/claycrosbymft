<?php /* Template Name: About Clay Page */ ?>

<?php get_header(); ?>
<?php $breakpoint = "xlarge"; ?>

	<div id="content">

		<div id="inner-content" class="expanded row">

		  <main id="main" class="expanded row about-clay" role="main">

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

          <?php get_template_part( 'parts/loop', 'page' ); ?>

        <?php endwhile; endif; ?>

				<div id="bio-1" class="expanded row">
          <div class="row contact-1">

            <div class="small-offset-1 small-10 large-offset-0 large-4 columns">
							<div class="contact-and-photo columns">
								<div class="profile-img">
									<?php $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' ); ?>
									<img src="<?php echo $src[0]; ?>" alt="Clay Bio Photo" />
								</div>

								<div class="contact-info-sm ">
									<h4>Contact</h4>
	                <div class="contact-item phone">
	                  <i class="fa fa-phone" style="color:#2a475e;"></i>
	                  <strong>Phone (Germany)</strong>
	                  <a href="tel:<?php echo esc_html( get_post_meta( get_the_ID(), '_clayjoints_bio_phone', true ) ); ?>" target="_blank">
											<h6>
												<?php echo esc_html( get_post_meta( get_the_ID(), '_clayjoints_bio_phone', true ) ); ?>
											</h6>
										</a>
                  </div>

                  <div class="contact-item phone">
	                  <i class="fa fa-phone" style="color:#2a475e;"></i>
	                  <strong>Phone (USA)</strong>
	                  <a href="tel:<?php echo esc_html( get_post_meta( get_the_ID(), '_clayjoints_bio_phone2', true ) ); ?>" target="_blank">
											<h6>
												<?php echo esc_html( get_post_meta( get_the_ID(), '_clayjoints_bio_phone2', true ) ); ?>
											</h6>
										</a>
	                </div>

	                <div class="contact-item email">
	                  <a href="mailto:<?php echo esc_html( get_post_meta( get_the_ID(), '_clayjoints_bio_email', true ) ); ?>" target="_blank">
	                    <i class="fa fa-envelope"></i>
	                  </a>
	                  <strong>Email</strong>
	                  <br>
	                  <a href="mailto:<?php echo esc_html( get_post_meta( get_the_ID(), '_clayjoints_bio_email', true ) ); ?>" target="_blank">
											<h6>
												<?php echo esc_html( get_post_meta( get_the_ID(), '_clayjoints_bio_email', true ) ); ?>
											</h6>
										</a>
	                </div>

									<div class="contact-item location">
										<a href="<?php echo esc_html( get_post_meta( get_the_ID(), '_clayjoints_bio_locationurl', true ) ); ?>" target="_blank" rel="noopener noreferrer">
											<i class="fa fa-map-marker"></i>
										</a>
										<strong>Office Location</strong>
										<br>
										<a href="<?php echo esc_html( get_post_meta( get_the_ID(), '_clayjoints_bio_locationurl', true ) ); ?>" target="_blank" rel="noopener noreferrer">
											<h6>
												<?php echo wpautop( get_post_meta( get_the_ID(), '_clayjoints_bio_location', true ) ); ?>
											</h6>
										</a>
									</div>

									<div class="facebook">
	                  <a href="<?php echo esc_html( get_post_meta( get_the_ID(), '_clayjoints_bio_facebook', true ) ); ?>" target="_blank" rel="noopener noreferrer">
	                    <i class="fa fa-facebook"></i>
	                  </a>
	                  <strong>Facebook</strong>
	                  <br>
	                  <a href="<?php echo esc_html( get_post_meta( get_the_ID(), '_clayjoints_bio_facebook', true ) ); ?>" target="_blank" rel="noopener noreferrer">
											<h6>
												Follow Clay on Facebook
											</h6>
										</a>
	                </div>
								</div>
							</div>

            </div>

						<div class="small-offset-1 small-10 large-offset-0 large-8 columns float-left">

                  <div class="large-12 columns">
                    <div class="education">
                      <h4>Education</h4>
                      <ul>
                        <li>
                          <strong>Antioch University Los Angeles</strong>
                          <br class="hide-for-medium">Master of Arts, Clinical Psychology
                        </li>
                        <li>
                          <strong>University of Pennsylvania</strong>
                          <br class="hide-for-medium">Bachelor of Arts, English (Psychology minor)
                        </li>
                      </ul>
                    </div>
                  </div>

                  <div class="large-12 columns">
                    <div class="affiliations">
                      <h4>Professional Affiliations</h4>
											<?php
												cmb2_output_link_list( '_clayjoints_bio_repeat_group_1' );
											?>
                    </div>
                    <div class="buttons">
                      <div class="psychology-today" style="margin-bottom: 20px;">
                        <div class="inner-stuff">
                          <!--Professional verification provided by Psychology Today -->
                          <a title="verified by Psychology Today" href="https://therapists.psychologytoday.com/rms/prof_detail.php?profid=35335&amp;p=10&amp;tr=Ext_Verify">
                          <img src="https://therapists.psychologytoday.com/rms/external_verification.php?profid=35335" alt="verified by Psychology Today" width="146" height="69" border="0" />
                          </a>
                          <!-- End Verification -->
                        </div>
                      </div>
											<div class="aamft">
                        <div class="inner-stuff">
												<div data-iframe-width="150" data-iframe-height="270" data-share-badge-id="5068f032-ad7d-445b-a8e0-9f2be675f839" data-share-badge-host="https://www.youracclaim.com"></div><script type="text/javascript" async src="//cdn.youracclaim.com/assets/utilities/embed.js"></script>
                        </div>
                      </div>
                    </div>
                  </div>

						</div>

          </div> <!-- end contact-1 Row -->
        </div>

        <div id="bio-2" class="expanded row">
          <div class="row">
            <div class="small-offset-1 small-10 large-offset-0 large-12 columns">
              <h4>Selected Certificates / Advanced Trainings</h4>
							<?php
								cmb2_output_unordered_list( '_clayjoints_bio_repeat_group_2' );
							?>
            </div>
          </div>
        </div>

        <div id="bio-3" class="expanded row">
          <div class="row">
            <div class="small-offset-1 small-10 large-offset-0 large-12 columns">
							<h4>Bio</h4>
							<?php echo wpautop( get_post_meta( get_the_ID(), '_clayjoints_bio_bio', true ) ); ?>
            </div>
          </div>

        </div>

			</main> <!-- end #main -->

		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>
