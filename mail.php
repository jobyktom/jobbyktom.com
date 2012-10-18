<?php
//If the form is submitted
if (isset($_POST['submit'])) {

	//Check to make sure that the name field is not empty
	if (trim($_POST['contactname']) == '') {
		$hasError = true;
	} else {
		$name = trim($_POST['contactname']);
	}

	//Check to make sure that the subject field is not empty
	if (trim($_POST['subject']) == '') {
		$hasError = true;
	} else {
		$subject = trim($_POST['subject']);
	}

	//Check to make sure sure that a valid email address is submitted
	if (trim($_POST['email']) == '') {
		$hasError = true;
	} else if (!eregi("^[A-Z0-9._%-]+@[A-Z0-9._%-]+\.[A-Z]{2,4}$", trim($_POST['email']))) {
		$hasError = true;
	} else {
		$email = trim($_POST['email']);
	}

	//Check to make sure comments were entered
	if (trim($_POST['message']) == '') {
		$hasError = true;
	} else {
		if (function_exists('stripslashes')) {
			$comments = stripslashes(trim($_POST['message']));
		} else {
			$comments = trim($_POST['message']);
		}
	}

	//If there is no error, send the email
	if (!isset($hasError)) {
		$emailTo = 'jobbyktom@gmail.com'; //Put your own email address here
		$body = "Name: $name \n\nEmail: $email \n\nSubject: $subject \n\nComments:\n $comments";
		$headers = 'From: My Site <' . $emailTo . '>' . "\r\n" . 'Reply-To: ' . $email;

		mail($emailTo, $subject, $body, $headers);
		$emailSent = true;
	}
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
    <head>
        <title>Jobby K Tom : Photography</title>
        <meta http-equiv="content-type" content="text/html;charset=utf-8" />
        <meta name="keywords" content="LightBox, Photo Gallery, jQuery Image Slideshow, jQuery Popup Modal" />
        <meta name="description" content="LightBox Gallery created with Jquery" />
        <link rel="shortcut icon" href="favicon.ico" />

         <!-- Start VisualLightBox.com HEAD section -->
		<?php include 'includes/styles.php'; ?>
        <!-- End VisualLightBox.com HEAD section -->

        <script type="text/javascript">
            var _gaq = _gaq || [];
            _gaq.push(['_setAccount', 'UA-18720217-1']);
            _gaq.push(['_trackPageview']);

            (function() {
                var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
                ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
            })();

        </script>
    </head>

    <body bgcolor="#000000">

        <div id="bodywrap">
			<?php include 'includes/iconlinks.php'; ?>
            <div id="contentwrap">
                <div id="contents">
                    <div id="top">
						<?php include 'includes/menu.php'; ?>
					</div>

					<br/>
					<div id="contactform">
						<div id="contact-wrapper">
							<?php if (isset($hasError)) { //If errors are found
								?>
							<p class="error">Please check if you've filled all the fields with valid information. Thank you.</p>
								<?php } ?>

							<?php if (isset($emailSent) && $emailSent == true) { //If email is sent  ?>
							<p><strong>Email Successfully Sent!</strong></p>
							<p>Thank you <strong><?php echo $name; ?></strong>. Your Comments and suggestionas are valid for me.I will be in touch with you soon.</p>
								<?php } ?>

							<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" id="contactform">
								<div>
									<label for="name"><strong>Name:</strong></label>
									<input type="text" size="50" name="contactname" id="contactname" value="" class="required" />
								</div>

								<div>
									<label for="email"><strong>Email:</strong></label>
									<input type="text" size="50" name="email" id="email" value="" class="required email" />
								</div>

								<div>
									<label for="subject"><strong>Subject:</strong></label>
									<input type="text" size="50" name="subject" id="subject" value="" class="required" />
								</div>

								<div>
									<label for="message"><strong>Message:</strong></label>
									<textarea rows="5" cols="38" name="message" id="message" class="required"></textarea>
								</div>
								<input type="submit" value="Send Message" name="submit" />
							</form>

						</div>
					</div>
					<br/>
				</div>
				<div class="clear"></div>

			</div>
		</div>
        <div id="pagefooter">
			<?php include 'includes/footer.php'; ?>
            <div id="credits">
				<?php include 'includes/iconlinks.php'; ?>
                <p>
                    <span class="copyright">
                        &copy; 2010 | Jobby K Tom |  All Rights Reserved </span>
                </p>
            </div>
        </div>
		<!-- Scripts -->
		<?php include 'includes/scripts.php'; ?>
		<!-- End of Scripts -->
        <script src="http://ajax.microsoft.com/ajax/jquery.validate/1.7/jquery.validate.pack.js" type="text/javascript"></script>

    </body>
</html>