<?php
/**
* File used for Homepage optionally Intro module
*
* @package Sun
**/
?>
<?php
	$intro_title = sun_option('intro-title');
	$intro_text	 = sun_option('intro-text');
?>
<section class="section section-intro">
	<div class="container">
		<h2 class="text-center"><?php echo $intro_title; ?></h2>
		<p class="text-center text-muted"><?php echo $intro_text; ?></p>
	</div>
</section>