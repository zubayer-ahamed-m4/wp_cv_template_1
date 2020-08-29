<!DOCTYPE html>
<html>
	<head>

		<!-- Basic -->
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">	

		<title><?php bloginfo( 'name' ); ?></title>		

		<meta name="keywords" content="Zubayer Ahamed" />
		<meta name="description" content="Zubayer Ahamed CV">
		<meta name="author" content="zubayerahamed">

		<!-- Favicon -->
		<link rel="shortcut icon" href="<?php echo get_theme_file_uri(); ?>img/favicon.ico" type="image/x-icon" />
		<link rel="apple-touch-icon" href="<?php echo get_theme_file_uri(); ?>img/apple-touch-icon.png">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

		<!-- Web Fonts  -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="<?php echo get_theme_file_uri(); ?>/vendor/bootstrap/css/bootstrap.min.css">		
		<link rel="stylesheet" href="<?php echo get_theme_file_uri(); ?>/vendor/fontawesome-free/css/all.min.css">		
		<link rel="stylesheet" href="<?php echo get_theme_file_uri(); ?>/vendor/animate/animate.min.css">		
		<link rel="stylesheet" href="<?php echo get_theme_file_uri(); ?>/vendor/simple-line-icons/css/simple-line-icons.min.css">		
		<link rel="stylesheet" href="<?php echo get_theme_file_uri(); ?>/vendor/owl.carousel/assets/owl.carousel.min.css">		
		<link rel="stylesheet" href="<?php echo get_theme_file_uri(); ?>/vendor/owl.carousel/assets/owl.theme.default.min.css">		
		<link rel="stylesheet" href="<?php echo get_theme_file_uri(); ?>/vendor/magnific-popup/magnific-popup.min.css">

		<!-- Theme CSS -->
		<link rel="stylesheet" href="<?php echo get_theme_file_uri(); ?>/css/theme.css">
		<link rel="stylesheet" href="<?php echo get_theme_file_uri(); ?>/css/theme-elements.css">
		<link rel="stylesheet" href="<?php echo get_theme_file_uri(); ?>/css/theme-blog.css">
		<link rel="stylesheet" href="<?php echo get_theme_file_uri(); ?>/css/theme-shop.css">

		<!-- Current Page CSS -->
		<link rel="stylesheet" href="<?php echo get_theme_file_uri(); ?>/vendor/rs-plugin/css/settings.css">
		<link rel="stylesheet" href="<?php echo get_theme_file_uri(); ?>/vendor/rs-plugin/css/layers.css">
		<link rel="stylesheet" href="<?php echo get_theme_file_uri(); ?>/vendor/rs-plugin/css/navigation.css">
		
		<!-- Demo CSS -->
		<link rel="stylesheet" href="<?php echo get_theme_file_uri(); ?>/css/demos/demo-resume.css">

		<!-- Skin CSS -->
		<link rel="stylesheet" href="<?php echo get_theme_file_uri(); ?>/css/skins/skin-resume.css">		

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="<?php echo get_theme_file_uri(); ?>/css/custom.css">

		<!-- Head Libs -->
		<script src="<?php echo get_theme_file_uri(); ?>/vendor/modernizr/modernizr.min.js"></script>
        <?php wp_head(); ?>
	</head>
    <body <?php body_class(); ?> data-spy="scroll" data-target=".wrapper-spy">
        
        <section id="blog" class="section section-no-border bg-color-light m-0">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h2 class="text-color-quaternary font-weight-extra-bold text-uppercase">My Blog</h2>

                        <div class="row">
                            <?php 
                                while(have_posts()){
                                    the_post();
                            ?>
                            <div class="col-lg-6 mb-5 mb-lg-0" style="margin-bottom: 40px!important;">
                                <article class="thumb-info custom-thumb-info-2 custom-box-shadow-1 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="0" data-appear-animation-duration="1s">
                                    <div class="thumb-info-wrapper">
                                        <a href="<?php the_permalink(); ?>">
                                            <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(),'blog-thumbnail'); ?>" alt class="img-fluid" />
                                        </a>
                                    </div>
                                    <div class="thumb-info-caption">
                                        <div class="thumb-info-caption-text">
                                            <h4 class="mb-2">
                                                <a href="#" class="text-decoration-none text-color-dark font-weight-semibold">
                                                    <?php the_title(); ?>
                                                </a>
                                            </h4>
                                            <p class="custom-text-color-2">
                                                <?php the_excerpt(); ?>
                                            </p>
                                        </div>
                                        <hr class="solid m-0 mt-4 mb-2">
                                        <div class="row justify-content-between">
                                            <div class="col-auto custom-blog-post-date text-uppercase font-weight-semibold text-color-dark text-2">
                                                July 12-2020
                                            </div>
                                            <div class="col-auto custom-blog-post-share text-uppercase font-weight-semibold text-color-dark text-2">
                                                Share:
                                                <ul class="mb-0">
                                                    <li>
                                                        <a class="item-facebook text-decoration-none text-uppercase" href="#" title="Share on Facebook">Facebook</a>
                                                    </li>
                                                    <li>
                                                        <a class="item-twitter text-decoration-none text-uppercase" href="#" title="Share on Twitter">Twitter</a>
                                                    </li>
                                                    <li>
                                                        <a class="item-google-plus text-decoration-none text-uppercase" href="#" title="Share on Google Plus">Google Plus</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Vendor -->
		<script src="<?php echo get_theme_file_uri(); ?>/vendor/jquery/jquery.min.js"></script>
		<script src="<?php echo get_theme_file_uri(); ?>/vendor/jquery.appear/jquery.appear.min.js"></script>
		<script src="<?php echo get_theme_file_uri(); ?>/vendor/jquery.easing/jquery.easing.min.js"></script>
		<script src="<?php echo get_theme_file_uri(); ?>/vendor/jquery.cookie/jquery.cookie.min.js"></script>
		<script src="<?php echo get_theme_file_uri(); ?>/vendor/popper/umd/popper.min.js"></script>
		<script src="<?php echo get_theme_file_uri(); ?>/vendor/bootstrap/js/bootstrap.min.js"></script>
		<script src="<?php echo get_theme_file_uri(); ?>/vendor/common/common.min.js"></script>
		<script src="<?php echo get_theme_file_uri(); ?>/vendor/jquery.validation/jquery.validate.min.js"></script>
		<script src="<?php echo get_theme_file_uri(); ?>/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
		<script src="<?php echo get_theme_file_uri(); ?>/vendor/jquery.gmap/jquery.gmap.min.js"></script>
		<script src="<?php echo get_theme_file_uri(); ?>/vendor/jquery.lazyload/jquery.lazyload.min.js"></script>
		<script src="<?php echo get_theme_file_uri(); ?>/vendor/isotope/jquery.isotope.min.js"></script>
		<script src="<?php echo get_theme_file_uri(); ?>/vendor/owl.carousel/owl.carousel.min.js"></script>
		<script src="<?php echo get_theme_file_uri(); ?>/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
		<script src="<?php echo get_theme_file_uri(); ?>/vendor/vide/jquery.vide.min.js"></script>
		<script src="<?php echo get_theme_file_uri(); ?>/vendor/vivus/vivus.min.js"></script>
		
		<!-- Theme Base, Components and Settings -->
		<script src="<?php echo get_theme_file_uri(); ?>/js/theme.js"></script>
		
		<!-- Current Page Vendor and Views -->
		<script src="<?php echo get_theme_file_uri(); ?>/vendor/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
		<script src="<?php echo get_theme_file_uri(); ?>/vendor/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

		<!-- Current Page Vendor and Views -->
		<script src="<?php echo get_theme_file_uri(); ?>/js/views/view.contact.js"></script>

		<!-- Demo -->
		<script src="<?php echo get_theme_file_uri(); ?>/js/demos/demo-resume.js"></script>
		
		<!-- Theme Custom -->
		<script src="<?php echo get_theme_file_uri(); ?>/js/techalap.js"></script>
		
		<!-- Theme Initialization Files -->
		<script src="<?php echo get_theme_file_uri(); ?>/js/theme.init.js"></script>

		<?php wp_footer(); ?>
    </body>
</html>