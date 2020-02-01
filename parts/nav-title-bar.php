<?php $breakpoint = "xlarge"; ?>


<div class="title-bar" data-responsive-toggle="top-bar-menu" data-hide-for="<?php echo $breakpoint ?>">
  <button class="menu-icon" type="button" data-toggle></button>
  <div class="title-bar-title">
			<a class="logo" href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a>
      <a class="logo-email" href="mailto:clay@claycrosbymft.com" target="_blank">clay@claycrosbymft.com</a>
  </div>
</div>




<div class="top-bar" id="top-bar-menu">
	<div class="top-bar-left show-for-xlarge">
		<a class="logo" href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a>
    <a class="logo-email" href="mailto:clay@claycrosbymft.com" target="_blank">clay@claycrosbymft.com</a>
	</div>

	<div class="top-bar-right">
		<?php joints_top_nav(); ?>
	</div>
</div>
