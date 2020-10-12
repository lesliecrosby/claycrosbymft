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
								<h2><?php echo the_field( 'hero' ); ?></h2>
							</div>
						</div>
					</div>
				</div>
				<div id="home-2" class="expanded row">
					<div class="row">
						<div class="small-offset-1 small-10 medium-offset-2 medium-8 columns">
							<h3><?php echo the_field( 'body1' ); ?></h3>
						</div>
					</div>
				</div>
				<div id="home-3" class="expanded row">
					<div class="row">
						<div class="small-offset-1 small-10 medium-offset-2 medium-8 columns">
							<h4 style="margin-bottom: 30px;"><?php echo the_field( 'body2' ); ?></h4>
						</div>
						<div class="small-offset-1 small-5 medium-offset-3 medium-3 columns">
							<?php if ( have_rows( 'repeat_group_1' ) ): ?>
								<ul class="unordered-list-wrap">
								<?php while ( have_rows( 'repeat_group_1' ) ): the_row(); ?>
									<li class="unordered-list-item"><?php echo the_sub_field( 'list_item' ); ?></li>
								<?php endwhile; ?>
								</ul>
							<?php endif;?>
						</div>
						<div class="small-5 medium-3 columns float-left">
							<?php if ( have_rows( 'repeat_group_2' ) ): ?>
								<ul class="unordered-list-wrap">
								<?php while ( have_rows( 'repeat_group_2' ) ): the_row(); ?>
									<li class="unordered-list-item"><?php echo the_sub_field( 'list_item' ); ?></li>
								<?php endwhile; ?>
								</ul>
							<?php endif;?>
						</div>
					</div>
				</div>
				<div id="home-4" class="expanded row">
					<div class="row">
						<div class="small-offset-1 small-10 medium-offset-2 medium-8 columns">
							<h4 style="margin-bottom: 30px;"><?php echo the_field( 'body3' ); ?></h4>
						</div>
						<div class="small-offset-2 small-8 medium-offset-3 medium-6 columns float-left">
							<?php if ( have_rows( 'links' ) ): ?>
								<ul class="link-list-wrap">
								<?php
									while ( have_rows( 'links' ) ): the_row();
									$link = get_sub_field( 'url' );
								?>
									<li class="link-list-item"><a href="<?php echo $link['url']; ?>"><?php echo $link['title']; ?></a></li>
								<?php endwhile; ?>
								</ul>
							<?php endif;?>
						</div>
					</div>
					<hr />
				</div>

			</main> <!-- end #main -->

		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>
