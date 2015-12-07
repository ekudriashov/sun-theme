<?php
/**
* File used for Homepage optionally Advantages module
*
* @package Sun
**/
?>
<?php
	$adv_title 		= sun_option('adv-title');
	$first_column 	= sun_option('first-column');
	$second_column 	= sun_option('second-column');
	$third_column 	= sun_option('third-column');
	$fourth_column 	= sun_option('fourth-column');
?>
<section class="section jumbotron">
	<div class="container">
		<h2 class="title text-center"><?php echo $adv_title[0]; ?><br>
			<small><?php echo $adv_title[1]; ?></small>
		</h2>
		<div class="row">
			<figure class="col-md-3 col-sm-6 text-center">
				<i class="fa fa-<?php echo $first_column[1]; ?> fa-4x color-blue"></i>
				<h4><?php echo $first_column[0]; ?></h4>
				<p class="text-center"><?php echo $first_column[2]; ?></p>
			</figure>
			<figure class="col-md-3 col-sm-6 text-center">
				<i class="fa fa-<?php echo $second_column[1]; ?>  fa-4x color-blue"></i>
				<h4><?php echo $second_column[0]; ?></h4>
				<p class="text-center"><?php echo $second_column[2]; ?></p>
			</figure>
			<figure class="col-md-3 col-sm-6 text-center">
				<i class="fa fa-<?php echo $third_column[1]; ?>  fa-4x color-blue"></i>
				<h4><?php echo $third_column[0]; ?></h4>
				<p class="text-center"><?php echo $third_column[2]; ?></p>
			</figure>
			<figure class="col-md-3 col-sm-6 text-center">
				<i class="fa fa-<?php echo $fourth_column[1]; ?>  fa-4x color-blue"></i>
				<h4><?php echo $fourth_column[0]; ?></h4>
				<p class="text-center"><?php echo $fourth_column[2]; ?></p>
			</figure>
		</div>
	</div>
</section>