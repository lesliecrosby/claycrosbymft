<?php /* Template Name: Home Page */ ?>

<?php get_header(); ?>
<?php $breakpoint = "large"; ?>

	<div id="content">

		<div id="inner-content" class="expanded row">

	    <main id="main" class="expanded row home-page" role="main">

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

          <?php get_template_part( 'parts/loop', 'page' ); ?>

        <?php endwhile; endif; ?>

				<div id="home-1" class="expanded row">
					<div class="full-width-shader">
						<div class="row">
							<div class="small-offset-1 small-10 columns">
								<!-- <h2>I believe that each of us has the innate ability and desire to lead a fulfilling life and have satisfying relationships.</h2> -->
								<h2><?php echo wpautop( get_post_meta( get_the_ID(), '_clayjoints_home_hero', true ) ); ?></h2>
							</div>
						</div>
					</div>
				</div>
				<div id="home-2" class="expanded row">
					<div class="row">
						<div class="small-offset-1 small-10 medium-offset-2 medium-8 columns">
							<h3>
								<?php echo wpautop( get_post_meta( get_the_ID(), '_clayjoints_home_body1', true ) ); ?>
							</h3>
						</div>
					</div>
				</div>
				<div id="home-3" class="expanded row">
					<div class="row">
						<div class="small-offset-1 small-10 medium-offset-2 medium-8 columns">
							<h4>
								<!-- I have experience working with people who are dealing with a variety of issues including: -->
								<?php echo wpautop( get_post_meta( get_the_ID(), '_clayjoints_home_body2', true ) ); ?>
							</h4>
						</div>
						<div class="small-offset-1 small-5 medium-offset-3 medium-3 columns">
							<!-- <ul>
							 	<li>Depression</li>
							 	<li>Anxiety</li>
							 	<li>Grief / Loss</li>
							 	<li>Low Self-Esteem</li>
							 	<li>Anger</li>
							 	<li>Stress</li>
							</ul> -->
							<?php
								cmb2_output_unordered_list( '_clayjoints_home_repeat_group_1' );
							?>
						</div>
						<div class="small-5 medium-3 columns float-left">
							<!-- <ul>
							 	<li>Isolation / Loneliness</li>
							 	<li>Parenting Issues</li>
							 	<li>Addictions</li>
							 	<li>Childhood Abuse</li>
							 	<li style="line-height: 17px; margin-top: 5px;">Relationship Difficulties
								<em>(both at home and in the workplace)</em></li>
							</ul> -->
							<?php
								cmb2_output_unordered_list( '_clayjoints_home_repeat_group_2' );
							?>
						</div>
					</div>
				</div>
				<div id="home-4" class="expanded row">
					<div class="row">
						<div class="small-offset-1 small-10 medium-offset-2 medium-8 columns">
							<h4>
								<!-- In addition, a great deal of my practice focuses on the following areas of specialization: -->
								<?php echo wpautop( get_post_meta( get_the_ID(), '_clayjoints_home_body3', true ) ); ?>
							</h4>
						</div>
						<div class="small-offset-2 small-8 medium-offset-3 medium-6 columns float-left">
							<!-- <ul>
							 	<li><a href="#">Highly Creative Individuals and Couples</a></li>
							 	<li><a href="#">Emotionally Focused Couples Therapy (EFT)</a></li>
							 	<li><a href="#">Attachment Focused EMDR</a></li>
							 	<li><a href="#">Life Transitions</a></li>
							</ul> -->
							<?php
								cmb2_output_link_list( '_clayjoints_home_repeat_group_3' );
							?>
						</div>
					</div>
					<hr />
				</div>

			</main> <!-- end #main -->

		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>
