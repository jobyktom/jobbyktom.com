<? ob_start("ob_gzhandler"); ?>
<?php

$slides = file('product-slider/db/slider.db.txt');
$products='';

foreach($slides as $v) {
	$data = preg_split('/\s*\|\s*/',$v);

	$products.='

	<div class="product">
	<div class="pic"><img src="'.$data[3].'" width="128" height="128" alt="'.htmlspecialchars($data[0]).'" /></div>
	<div class="title">'.$data[0].'</div>

	<div class="price">$'.$data[2].'</div>

	<div class="description">'.$data[1].'</div>
	<div class="link"><a href="'.$data[4].'" target="blank">Find out more</a></div>
	<div class="clear"></div>
	</div>

	';
}

?>
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
		<link rel="stylesheet" type="text/css" href="product-slider/demo.css" />
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

                    <div>
                        <div id="vlightbox1">
							<div id="main">
								<div class="titles">
									<h1>Notebooks</h1>
									<h2>Fresh on the market</h2>
								</div>

								<div class="container">

									<div id="slider">
										<?=$products?>
									</div>
									<div class="clear"></div>
								</div>
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
		<!-- End of Scripts -->
		<script src="engine/js/jquery-ui.min.js?v=1234.2" type="text/javascript"></script>
		<script type="text/javascript" src="product-slider/mopSlider/mopSlider-2.4.js"></script>
		<script type="text/javascript" src="product-slider/pngFix/jquery.pngFix.js"></script>
		<script type="text/javascript">
			$(document).ready(function(){

				$("#slider").mopSlider({
					'w':800,
					'h':150,
					'sldW':500,
					'btnW':200,
					'itemMgn':20,
					'indi':"Slide To View More",
					'type':'tutorialzine',
					'shuffle':0
				});

			});
		</script>
        <div id="contact" />
		<!--        <script src="http://cdn.wibiya.com/Toolbars/dir_0590/Toolbar_590980/Loader_590980.js" type="text/javascript"></script>-->
    </body>
</html>
