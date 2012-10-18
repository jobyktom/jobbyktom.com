<? ob_start("ob_gzhandler"); ?> 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
    <head>
        <!--nm_SEO_start-->
        <title>Creative Photography: Beginner Photography, Types of Photography, Digital and SLR Camera Basics and More</title>
        <meta http-equiv="content-type" content="text/html;charset=utf-8" />
        <meta name="keywords" content="photography, beginner photography, types of photography, digital cameras,35mm camera photography,35mm film photography,35mm photography,360 photography,3d photography,about photography,abstract photography,advanced photography,advertising photography" />
        <meta name="description" content="Learn beginner photography, including types of photography, digital camera basics and more from the Photography.com community." />
        <!--nm_SEO_end-->

        <link rel="shortcut icon" href="favicon.ico" />

        <!-- Start VisualLightBox.com HEAD section -->
			<?php include 'includes/styles.php'; ?>
        <!-- End VisualLightBox.com HEAD section -->
		<script type="text/javascript" src="http://platform.twitter.com/anywhere.js?id=jDX9GzlK46F26dMlLo3w&v=1"></script>
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
		<style>
			#facebookapp{
				color: white;
			}
			.form {padding:15px;
				   border: 1px solid gray;
				   -webkit-border-radius: 2em 0;
				   -moz-border-radius: 2em 0;
			}
			.form p, .form span, .form input, .form label {font-size:1.2em;}
			.form .field {padding:5px;}
			.form label {display:block; padding:5px 0 3px 0; font-weight:bold; color:#555;}
			.Fbtextfield {display:block; height:25px; line-height:25px; border:solid 1px #ccc; padding:3px; width:100%;width:505px;}
			.form .textfield {display:block; height:25px; line-height:25px; border:solid 1px #ccc; padding:3px; width:50%;}
			.form .text-area {display:block; width:90%; border:solid 1px #ccc; padding:3px;}
			.form .button {padding: 15px 0 0; height:45px;}
			input.btn {display:block; height:30px; padding:0 15px 0 15px; float:left; border:solid 1px; border-color:#bbb #999 #999 #bbb; font: bold 1.4em 'TeXGyreAdventor', Arial, sans-serif; color:#777; background:#efefef;}
			.text-area:focus, .textfield:focus {border:solid 1px #666;}
		</style>

    </head>
    <body bgcolor="#000000">
        <div id="bodywrap">
			<?php include 'includes/iconlinks.php'; ?>

            <div id="contentwrap">
                <div id="contents">
                    <div id="top">
						<?php include 'includes/menu.php'; ?>
                    </div>

                    <div>
                        <div id="vlightbox1">
							<div id="facebookapp">
								<div id="fb-root"></div>
								<script type="text/javascript">
									window.fbAsyncInit = function() {
										FB.init({appId: '142585112453781', status: true, cookie: true, xfbml: true});

										FB.Event.subscribe('auth.login', function(response) {
											login();
										});
										FB.Event.subscribe('auth.logout', function(response) {
											logout();
										});

										FB.getLoginStatus(function(response) {
											if (response.session) {
												greet();
											}
										});
									};
									(function() {
										var e = document.createElement('script');
										e.type = 'text/javascript';
										e.src = document.location.protocol +
											'//connect.facebook.net/en_US/all.js';
										e.async = true;
										document.getElementById('fb-root').appendChild(e);
									}());

									function login(){
										FB.api('/me', function(response) {
//											alert('You have successfully logged in, '+response.name+"!");
											$('#greet').text('You have successfully logged in, '+response.name+"!");
										});
									}
									function logout(){
//										alert('You have successfully logged out!');
										$('#greet').text('You have successfully logged out!');
									}
									function greet(){
										FB.api('/me', function(response) {
											//alert('Welcome, '+response.name+"!");
											$('#greet').text('Welcome, '+response.name+"!");
										});
									}

									function setStatus(){

										// check if user is logged in:
										FB.getLoginStatus(function(response) {
											if (response.session) {
												new_status = document.getElementById('status').value;
												FB.api(
												{
													method: 'status.set',
													status: new_status
												},
												function(response) {
													if (response == 0){
														alert('Your facebook status not updated. Give Status Update Permission.');
													}
													else{
														alert('Your facebook status updated');
													}
												}
											);
											} else {
												alert('please log in first :)');
											}
										});
									}
								</script>
								<fb:login-button autologoutlink='true' perms='email,user_birthday,status_update,publish_stream'></fb:login-button>
								<br/>
								<br/>
								<br/>
								<div class="form">
									<h1 id="greet" ></h1>
									<input id="maptype" type="hidden" value="roadmap"/>
									<div><h2>Find the distance between two locations</h2></div>
									<div class="field">
										<label for="Name">First address:</label>
										<input type="text" name="address1" id="address1" placeholder="First address" autofocus class="textfield" />
									</div>
									<div class="field">
										<label for="Name">Second address:</label>
										<input type="text" name="address2" id="address2" placeholder="Second address" class="textfield" />
									</div>
									<div class="field">
										<label for="Name">Route type:</label>
										<select id="travelMode" name="travelMode" class="textfield">
											<option value="driving">driving</option>
											<option value="walking">walking</option>
											<option value="bicycling">bicycling (only in US)</option>
										</select>
									</div>

									<div class="button">
										<input type="button" value="Show" class="btn" onclick="initialize();"/>
									</div>

								</div>
								<div id="distance_direct"></div>
								<div id="distance_road"></div>
								<div id="share"></div>
								<br/><br/>

								<div id="map_canvas" style="position: relative;height: 540px;width:850px;padding:15px"></div><br/>

								<p align="center"><fb:like-box profile_id="150301311675960" stream="false" header="false"></fb:like-box></p>

								<?php
								if (isset($_GET['a1']) && isset($_GET['a2'])) {
									echo "<script>start('".$_GET['a1']."', '".$_GET['a2']."');</script>";
								}
								?>
							</div>

						<!--Who is Online -->
						<?php include 'includes/online.php'; ?>
						<!--Who is Online -->
						<!--<a name="fb_share" type="button" href="http://www.facebook.com/sharer.php">Share</a><script src="http://static.ak.fbcdn.net/connect.php/js/FB.Share" type="text/javascript"></script>-->
						</div>
                    </div>
                </div>
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

		<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
		<script src="engine/js/facebook.js?v=1234.2" type="text/javascript"></script>
        <div id="contact" />

    </body>
</html>
