<?php
/**
* File used for Homepage optionally Call To Action module
*
* @package Sun
**/
?>
<?php
	$cta_title 	= sun_option('cta-title');
	$cta_text 	= sun_option('cta-text');
	$cta_color 	= sun_option('cta-color');
	$cta_button = sun_option('cta-button');
?>
<section class="section section-cta">
	<div class="container">
		<h2><?php echo $cta_title[0]; ?>
			<span><?php echo $cta_title[1]; ?></span>
		</h2>
		<div class="row topspace">
			<div class="col-sm-9">
				<p><?php echo $cta_text; ?></p>
			</div>
			<div class="col-sm-3">
				<a href="<?php echo $cta_button[1]; ?>" class="btn btn-block btn-action" style="background:<?php echo $cta_color; ?>"><?php echo $cta_button[0]; ?></a>
			</div>
		</div>
	</div>
</section>