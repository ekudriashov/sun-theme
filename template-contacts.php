<?php
/**
 * Template Name: Contact Page
 *
 * This is the template that displays a contact page with contact form.
 *
 * @package Sun
 */
?>
<?php
	$nameError = '';
	$emailError = '';
	$messageError = '';
	$sumError = '';
	if (isset($_POST['submitted'])) {
		if(trim($_POST['contactName']) === '') {
			$nameError = 'Please enter your name.';
			$hasError = true;
		} else {
			$name = trim($_POST['contactName']);
		}
		if(trim($_POST['email']) === '') {
			$emailError = 'Please enter your email address.';
			$hasError = true;
		} elseif (!preg_match("/^[[:alnum:]][a-z0-9_.-]*@[a-z0-9.-]+\.[a-z]{2,4}$/i", trim($_POST['email']))) {
			$emailError = 'You entered an invalid email address.';
			$hasError = true;
		} else {
			$email = trim($_POST['email']);
		}
		if (trim($_POST['subject']) != '') {
			$about = trim($_POST['subject']);
		} else {
			$about = '';
		}
		if(trim($_POST['message']) === '') {
			$messageError = 'Please enter a message.';
			$hasError = true;
		} else {
			if(function_exists('stripslashes')) {
				$message = stripslashes(trim($_POST['message']));
			} else {
				$message = trim($_POST['message']);
			}
		}
		if(trim($_POST['sum']) === '' || trim($_POST['sum']) != '11') {
			$sumError = "Please enter what's 7 + 4";
			$hasError = true;
		}
		if(!isset($hasError)) {
			if (!isset($emailTo) || ($emailTo == '') ){
				$emailTo = get_option('admin_email');
			}
			$subject = $about.' [Sun Contact Form] From '.$name;
			$body = "Name: $name \n\nEmail: $email \n\nMessage: $message";
			$headers = 'From: '.$name.' <'.$emailTo.'>' . "\r\n" . 'Reply-To: ' . $emailTo;
			mail($emailTo, $subject, $body, $headers);
			$emailSent = true;
		}
	}
?>
<?php get_header(); ?>
<?php $image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full'); ?>
<?php while ( have_posts() ) : the_post(); ?>
<header class="head-inner" <?php if ( has_post_thumbnail() ) { ?>
		   style="background: url(<?php echo $image_url[0]; ?>);" 
		<?php } ?>>
	<div class="container">
		<div class="row">
			<?php the_title('<h1 class="page-title text-center">', '</h1>'); ?>
		</div>
	</div>
</header>
<section class="jumbotron">
	<div class="container">
		<div class="row">
			<div class="col-md-8 topspace">
					<?php if(isset($emailSent) && $emailSent == true) { ?>
						<div class="alert alert-success" role="alert">
							<p><?php _e('Thanks, your email was sent successfully.', 'sun') ?></p>
						</div>
					<?php } else { ?>
						<div class="post-desc">
							<?php the_content(); ?>
						</div>
						<?php if(!empty($hasError) || !empty($sumError)) { ?>
						<div class="alert alert-danger alert-dismissible" role="alert">
							<button type="button" class="close" data-dismiss="alert">
								<span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
							</button>
							<strong><?php _e('Error!', 'sun'); ?></strong> <?php _e('Please try again.', 'sun'); ?>
						</div>
						<?php } ?>
				<form class="contactform" action="<?php the_permalink(); ?>" method="post">
					<div class="row">
						<div class="form-group col-md-6 <?php if(!empty($nameError)) { echo 'has-error'; }?>">
							<label for="contactName" class="sr-only"><?php _e('Name', 'sun'); ?></label>
							<input type="text" class="form-control" name="contactName" id="contactName" placeholder="* Enter your full name">
						</div>
						<div class="form-group col-md-6 <?php if(!empty($emailError)) { echo 'has-error'; }?>">
							<label for="email" class="sr-only"><?php _e('Email', 'sun'); ?></label>
							<input type="text" class="form-control" name="email" id="email" placeholder="* Enter your email address">
						</div>
					</div>
					<div class="form-group">
						<label for="subject" class="sr-only">Subject</label>
						<input type="text" class="form-control" name="subject" id="subject" placeholder="Enter your subject">
					</div>
					<div class="form-group <?php if(!empty($messageError)) { echo 'has-error'; }?>">
						<label for="message" class="sr-only">Message</label>
						<textarea rows="12" class="form-control" name="message" id="message" placeholder="* Your message here..."></textarea>
					</div>
					<div class="row">
						<div class="form-group col-lg-2 pull-right <?php if(!empty($sumError)) { echo 'has-error'; }?>">
							<label for="sum" class="sr-only"><?php _e('I am human:', 'sun') ?></label>
							<input type="text" class="form-control" name="sum" id="sum" placeholder="* 7 + 4 =">
						</div>
					</div>
					<input type="submit" class="btn btn-primary pull-left" value="<?php _e('Get In Touch', 'sun'); ?>">
					<input type="hidden" name="submitted" id="submitted" value="true" />
					<span class="pull-right text-muted">* Please fill all required form field, thanks!</span>
				</form>
				<?php } ?>
			</div>
			<?php endwhile; // end of the loop. ?>
			<?php get_sidebar('contact'); ?>
		</div>
	</div>
</section>
<?php get_footer(); ?>