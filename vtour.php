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
		<!--<link rel="stylesheet" type="text/css" href="vtour/css/jquery.panorama.css" media="screen" />
		<link rel="stylesheet" type="text/css" href="vtour/css/jquery.fancybox-1.3.1.css" media="screen" />-->
		<link type="text/css" rel="stylesheet" href="/min/b=vtour/css&amp;f=jquery.panorama.css,jquery.fancybox-1.3.1.css" />
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
		<style>
			.advancedpanorama{
				visibility:hidden;
			}
		</style>
    </head>
    <body bgcolor="#000000">
        <!-- Start VisualLightBox.com BODY section id=1 -->

        <!-- End VisualLightBox.com BODY section -->

        <div id="bodywrap">
			<?php include 'includes/iconlinks.php'; ?>

            <div id="contentwrap">
                <div id="contents">
                    <div id="top">
						<?php include 'includes/menu.php'; ?>
                    </div>
                    <div>
                        <div id="vlightbox1">
							<div id="page">
								<img src="vtour/img/sculpteur.jpg" class="advancedpanorama" width="2448" height="375" usemap="testmap" alt="www.jobbyktom.com" />
								<map id="testmap" name="testmap">
									<area shape="rect" coords="1653,72,1839,255" href="salleformation.html" alt="vers la salle de formation" />
									<area shape="rect" coords="2013,114,2091,210" href="img/statue1.jpg" alt="statues" class="thickbox" />
									<area shape="rect" coords="1920,276,2070,351" href="img/gouges.jpg" alt="gouges" class="thickbox" />
								</map>
							</div>
                        </div>
						<!--Who is Online -->
						<?php include 'includes/online.php'; ?>
						<!--Who is Online -->
						<!--<a name="fb_share" type="button" href="http://www.facebook.com/sharer.php">Share</a><script src="http://static.ak.fbcdn.net/connect.php/js/FB.Share" type="text/javascript"></script>-->
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
		

		<script type="text/javascript" src="vtour/js/jquery.panorama.js"></script>
		<script type="text/javascript">
			$(document).ready(function(){
				$("img.advancedpanorama").css('visibility','visible');
				$("img.advancedpanorama").panorama({
					auto_start: 0,
					start_position: 1527
				});
			});
		</script>
		<!--
		<script type="text/javascript" src="vtour/js/cvi_text_lib.js"></script>
		<script type="text/javascript" src="vtour/js/jquery.advanced-panorama.js"></script>
		<script type="text/javascript" src="vtour/js/jquery.flipv.js"></script>
		<script type="text/javascript" src="vtour/js/jquery.fancybox-1.3.1.pack.js"></script>
		-->
		<script type="text/javascript" src="/min/b=vtour/js&amp;f=cvi_text_lib.js,jquery.advanced-panorama.js,jquery.flipv.js,jquery.fancybox-1.3.1.pack.js"></script>
		<script type="text/javascript">
			$(document).ready(function(){
				$('.thickbox').fancybox();
			});
		</script>
		<!-- End of Scripts -->

        <div id="contact" />
		<!--        <script src="http://cdn.wibiya.com/Toolbars/dir_0590/Toolbar_590980/Loader_590980.js" type="text/javascript"></script>-->
    </body>
</html>
