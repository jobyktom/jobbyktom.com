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
        <link rel="stylesheet" href="engine/css/vlightbox1.css?v=1234.2" type="text/css" />
        <link rel="stylesheet" href="engine/css/visuallightbox.css?v=1234.2" type="text/css" media="screen" />
        <link rel="stylesheet" href="engine/css/jimgMenukwicks.css?v=1234.2" type="text/css" />
        <link rel="stylesheet" href="engine/css/contactable.css" type="text/css" />
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
        <!-- Start VisualLightBox.com BODY section id=1 -->

        <div id="bodywrap">
			<?php include 'includes/iconlinks.php'; ?>
            <div id="contentwrap">
                <div id="contents">
                    <div id="top">
						<?php include 'includes/menu.php'; ?>
                    </div>

                    <div>
                        <div id="vlightbox1">
							<?php
							$email = "jobyktom@gmail.com";
							$default = "http://www.somewhere.com/homestar.jpg";
							$size = 40;
							$grav_url = "http://www.gravatar.com/avatar/" . md5( strtolower( trim( $email ) ) ) . "?d=" . urlencode( $default ) . "&s=" . $size;

							//echo file_get_contents("http://www.google.com");
							//$stringIp = $_SERVER['REMOTE_ADDR'];
							//echo ($stringIp);
//<img width="80" height="80" title="2010-10-11 15:50:58" alt="2010-10-11 15:50:58" src="/userimage/3869223/.jpg">
							/**
							 * Get either a Gravatar URL or complete image tag for a specified email address.
							 *
							 * @param string $email The email address
							 * @param string $s Size in pixels, defaults to 80px [ 1 - 512 ]
							 * @param string $d Default imageset to use [ 404 | mm | identicon | monsterid | wavatar ]
							 * @param string $r Maximum rating (inclusive) [ g | pg | r | x ]
							 * @param boole $img True to return a complete IMG tag False for just the URL
							 * @param array $atts Optional, additional key/value attributes to include in the IMG tag
							 * @return String containing either just a URL or a complete image tag
							 * @source http://gravatar.com/site/implement/images/php/
							 */
							function get_gravatar( $email, $s = 80, $d = 'mm', $r = 'x', $img = false, $atts = array() ) {
								$url = 'http://www.gravatar.com/avatar/';
								$url .= md5( strtolower( trim( $email ) ) );
								$url .= "?s=$s&d=$d&r=$r";
								if ( $img ) {
									$url = '<img src="' . $url . '"';
									foreach ( $atts as $key => $val )
										$url .= ' ' . $key . '="' . $val . '"';
									$url .= ' />';
								}
								return $url;
							}
							?>
							<img src="<?php echo get_gravatar("jobyktom@gmail.com"); ?>" alt="" />
							<!--<img src="<?php echo $grav_url; ?>" alt="" />-->
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
        <script src="engine/js/jquery.min.js?v=1234.2" type="text/javascript"/>
        <script src="engine/js/visuallightbox.js?v=1234.2" type="text/javascript"><script></script>
        <script src="engine/js/vlbdata.js?v=1234.2" type="text/javascript"/>
        <script src="engine/js/jquery.contactable.js" type="text/javascript" ><script></script>
        <script src="engine/js/jquery-easing-1.3.pack.js?v=1234.2" type="text/javascript"></script>
        <script src="engine/js/jquery-easing-compatibility.1.2.pack.js?v=1234.2"type="text/javascript" ></script>
        <script src="engine/js/jquery.kwicks-1.5.1.pack.js?v=1234.2" type="text/javascript"></script>
        <script src="engine/js/jquery.validate.pack.js" type="text/javascript" ></script>
        <script src="engine/js/script.js?v=1234.2" type="text/javascript"></script>
        <div id="contact" />
        <!--        <script src="http://cdn.wibiya.com/Toolbars/dir_0590/Toolbar_590980/Loader_590980.js" type="text/javascript"></script>-->
    </body>
</html>
