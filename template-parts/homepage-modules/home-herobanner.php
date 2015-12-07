<?php
/**
* File used for Homepage optionally HERO Banner module
*
* @package Sun
**/
?>
<?php
  $banner_image = sun_option('banner-image', false, 'url'); 
  $banner_text  = sun_option('banner-text');
?>
<header class="head head-default" 
        <?php if ($banner_image != '') { ?>
          style="background: <?php echo 'url('. $banner_image .')'; ?> fixed"
        <?php } ?>>
  <?php if (!empty($banner_text)) { ?>
    <div class="container">
      <h1 class="lead text-center"><?php echo $banner_text[0]; ?></h1>
      <p class="tagline text-center"><?php echo $banner_text[1]; ?></p>
    </div>
  <?php } ?>
</header>