<?php
/**
* File used for Homepage optionally Testimonials module
*
* @package Sun
**/
?>
<?php
	$testimonials_title = sun_option('testimonials-title');
	$slides 			= sun_option('testimonials-slider');
	$indicators 		= count($slides);
?>
<section class="section section-testimonials jumbotron">
	<div class="container">
		<h2 class="title text-center"><?php echo $testimonials_title; ?></h2>
		<div id="testimonials-carousel" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<?php 
					for ($i=0; $i < $indicators; $i++) { 
						echo '<li data-target="#testimonials-carousel" data-slide-to="'.$i.'"></li>';
					}
				?>	
			</ol>
			<div class="carousel-inner">
				<?php 
					$active = true;
					foreach ($slides as $slide) { ?>
						<div class="row item <?php if($active) echo' active'; $active = false; ?>">
							<div class="col-sm-3 profile">
								<img src="<?php echo ($slide['image']); ?>" alt="<?php echo ($slide['title']); ?>" />
							</div>
							<div class="col-sm-9 content">
								<blockquote>
									<i class="fa fa-quote-left"></i>
									<p><?php echo ($slide['description']); ?></p>
								</blockquote>
								<p class="source"><a href="<?php echo ($slide['url']); ?>"><?php echo ($slide['title']); ?></a>
								</p>
							</div>
						</div>
				<?php } ?>
			</div>
		</div>
	</div>
</section>