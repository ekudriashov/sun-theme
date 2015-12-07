<?php
/**
* File used for Homepage optionally Two Columns module
*
* @package Sun
**/
?>
<?php
	$main_title 	= sun_option('maincolumns-title');
	$left_title 	= sun_option('leftcolumn-title');
	$left_text 		= sun_option('leftcolumn-text');
	$left_img 		= sun_option('leftcolumn-image');
	$right_title 	= sun_option('rightcolumn-title');
	$right_text 	= sun_option('rightcolumn-text');
	$right_img 		= sun_option('rightcolumn-image'); 
?>
<section class="section section-twocolumn">
	<div class="container">
		<h2 class="text-center title"><?php echo $main_title; ?></h2>
		<div class="row">
			<div class="col-sm-6">
				<h3><?php echo $left_title; ?></h3>
				<img src="<?php echo $left_img['url']; ?>" class="img-responsive">
				<p><?php echo $left_text; ?></p>
			</div>
			<div class="col-sm-6">
				<h3><?php echo $right_title; ?></h3>
				<img src="<?php echo $right_img['url']; ?>" class="img-responsive">
				<p><?php echo $right_text; ?></p>
			</div>
		</div>
	</div>
</section>