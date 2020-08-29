<?php
/*
Template Name: CV
*/
?>
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

		<div class="body">
			<header id="header" class="header-floating-icons" data-plugin-options="{'stickyEnabled': false, 'stickyEnableOnBoxed': false, 'stickyEnableOnMobile': false, 'stickyStartAt': 0, 'stickySetTop': '60px', 'stickyChangeLogo': false}">
				<div class="header-body">
					<div class="header-container container">
						<div class="header-row">
							<div class="header-column">
								<div class="header-row">
									<div class="header-nav pt-1">
										<div class="header-nav-main">
											<nav class="wrapper-spy collapse">
												<ul class="nav" id="mainNav">
													<li>
														<a data-hash href="#about-me" class="nav-link text-color-dark bg-color-primary">
															<i class="icon-home icons"></i>
															<span class="custom-tooltip">About Me</span>
														</a>
													</li>
													<li>
														<a data-hash href="#experience" class="nav-link text-color-dark bg-color-primary">
															<i class="icon-eye icons"></i>
															<span class="custom-tooltip">Experience</span>
														</a>
													</li>
													<li>
														<a data-hash href="#education" class="nav-link text-color-dark bg-color-primary">
															<i class="icon-briefcase icons"></i>
															<span class="custom-tooltip">Education</span>
														</a>
													</li>
													<li>
														<a data-hash href="#skills" class="nav-link text-color-dark bg-color-primary">
															<i class="icon-graduation icons"></i>
															<span class="custom-tooltip">Skills</span>
														</a>
													</li>
													<li>
														<a data-hash href="#portfolio" class="nav-link text-color-dark bg-color-primary">
															<i class="icon-diamond icons"></i>
															<span class="custom-tooltip">Portfolio</span>
														</a>
													</li>
													<li>
														<a data-hash href="#recommendations" class="nav-link text-color-dark bg-color-primary">
															<i class="icon-pencil icons"></i>
															<span class="custom-tooltip">Recommendations</span>
														</a>
													</li>
													<li>
														<a data-hash href="#blog" class="nav-link text-color-dark bg-color-primary">
															<i class="icon-bubbles icons"></i>
															<span class="custom-tooltip">Blog</span>
														</a>
													</li>
													<li>
														<a data-hash href="#say-hello" class="nav-link text-color-dark bg-color-primary">
															<i class="icon-envelope-open icons"></i>
															<span class="custom-tooltip">Say Hello</span>
														</a>
													</li>
												</ul>
											</nav>
										</div>
										<button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main nav">
											<i class="fas fa-bars"></i>
										</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>

			<div role="main" class="main">

			<?php if(have_posts()) { ?>
                <?php while(have_posts()) { ?>
                    <?php the_post(); ?>
                    <?php 
                        $pageBanner = get_field('cv_page_banner');
                        $movingImage = get_field('cv_moving_image');
                        $resumePhoto = get_field('cv_resume_photo');
                        $designation = get_field('cv_designation');
                        $address = get_field('cv_address');
                        $companyName = get_field('cv_company_name');
                        $aboutMe = get_field('cv_about_me');
                        $previousDesignation = get_field('cv_previous_designation');
                        $education = get_field('cv_education');
                        $aboutMeShort = get_field('cv_about_me_short');
                        $birthday = new DateTime(get_field('cv_birthday'));
                        $skype = get_field('cv_skype');
                        $skypeName = get_field('cv_skype_name');
                        $meritalStatus = get_field('cv_marital_status');
                        $nationality = get_field('cv_nationality');
                        $mobile1 = get_field('cv_mobile1');
                        $mobile2 = get_field('cv_mobile2');
                        $email = get_field('cv_email');
                        $facebook = get_field('cv_facebook');
                        $twitter = get_field('cv_twitter');
                        $linkedIn = get_field('cv_linked_in');
                        $youtube = get_field('cv_youtube');
                        $resumeFile = get_field('cv_resume_file');
					?>
					
					<section id="about-me" class="section section-no-border section-parallax custom-section-padding-1 custom-position-1 custom-xs-bg-size-cover parallax-no-overflow m-0" data-plugin-parallax data-plugin-options="{'speed': 1.5}" data-image-src="<?php echo esc_url( $pageBanner ); ?>">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-4 custom-sm-margin-bottom-1">
                                    <img src="<?php echo esc_url( $resumePhoto ); ?>" class="img-fluid custom-border custom-image-position-2 custom-box-shadow-4" alt />
                                </div>
                                <div class="col-lg-6 col-xl-5">
                                    <h1 class="text-color-primary custom-font-size-1" style="font-size: 55px;"><?php the_title(); ?></h1>
                                    <p class="text-color-light font-weight-normal custom-font-size-2 custom-margin-bottom-1"><?php echo $designation; ?></p>
                                    <span class="custom-about-me-infos">
                                        <span class="custom-text-color-1 text-uppercase"><?php echo $address; ?></span>
                                        <span class="custom-text-color-1 text-uppercase mb-3"><?php echo $companyName; ?></span>
                                        <span class="custom-text-color-1 text-uppercase">
                                            <strong class="text-color-light">Previous: </strong>
                                            <?php echo $previousDesignation; ?>
                                            <a data-hash href="#experience" class="btn btn-tertiary text-uppercase custom-btn-style-1 text-1 ml-2">View More</a>
                                        </span>
                                        <span class="custom-text-color-1 text-uppercase">
                                            <strong class="text-color-light">Education: </strong>
                                            <?php echo $education; ?>
                                            <a data-hash href="#education" class="btn btn-tertiary text-uppercase custom-btn-style-1 text-1 ml-2">View More</a>
                                        </span>
                                    </span>
                                </div>
                                <div class="col-lg-2 col-xl-3 d-none d-lg-block">
                                    <img src="<?php echo esc_url( $movingImage ); ?>" custom-anim class="img-fluid custom-image-pos-1" alt />
                                </div>
                            </div>
                        </div>
                        
                        <ul class="social-icons social-icons-dark-2 custom-social-icons">
                            <li class="social-icons-facebook">
                                <a href="<?php echo $facebook ?>" target="_blank" title="Facebook">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                            <li class="social-icons-twitter">
                                <a href="<?php echo $twitter; ?>" target="_blank" title="Twitter">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                            <li class="social-icons-youtube">
                                <a href="<?php echo $youtube; ?>" target="_blank" title="Youtube">
                                    <i class="fab fa-youtube"></i>
                                </a>
                            </li>
                        </ul>
                    </section>

					<div class="custom-about-me-links bg-color-light">
                        <div class="container">
                            <div class="row justify-content-end">
                                <div class="col-lg-3 text-center custom-xs-border-bottom p-0">
                                    <a data-hash href="#say-hello" class="text-decoration-none">
                                        <span class="custom-nav-button text-color-dark">
                                            <i class="icon-earphones-alt icons text-color-primary"></i>
                                            Contact Information	
                                        </span>
                                    </a>
                                </div>
                                <div class="col-lg-2 text-center custom-xs-border-bottom p-0">
                                    <a data-hash href="#say-hello" class="text-decoration-none">
                                        <span class="custom-nav-button custom-divisors text-color-dark">
                                            <i class="icon-envelope-open icons text-color-primary"></i>
                                            Send Message	
                                        </span>
                                    </a>
                                </div>
                                <div class="col-lg-3 text-center p-0">
                                    <a href="<?php echo esc_url($resumeFile); ?>" target="_blank" class="text-decoration-none">
                                        <span class="custom-nav-button text-color-dark">
                                            <i class="icon-cloud-download icons text-color-primary"></i>
                                            Download Resume	
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

					<section class="section section-no-border bg-color-light m-0">
                        <div class="container">
                            <div class="row">
                                <div class="col">

                                    <div class="custom-box-details bg-color-light custom-box-shadow-1 col-lg-6 ml-5 mb-5 mb-lg-4 float-right clearfix">
                                        <h4>Personal Details</h4>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <ul class="custom-list-style-1 p-0 mb-0">
                                                    <li>
                                                        <span class="text-color-dark">Birthday:</span>
                                                        <span class="custom-text-color-2"><?php echo $birthday->format('d M Y'); ?></span>
                                                    </li>
                                                    <li>
                                                        <span class="text-color-dark">Marital:</span>
                                                        <span class="custom-text-color-2"><?php echo $meritalStatus; ?></span>
                                                    </li>
                                                    <li>
                                                        <span class="text-color-dark">Nationality:</span>
                                                        <span class="custom-text-color-2"><?php echo $nationality; ?></span>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-md-6">
                                                <ul class="custom-list-style-1 p-0 mb-0">
                                                    <li>
                                                        <span class="text-color-dark">Skype:</span>
                                                        <span class="custom-text-color-2"><a class="custom-text-color-2" href="skype:<?php echo $skypeName; ?>?chat"><?php echo $skypeName; ?></a></span>
                                                    </li>
                                                    <li>
                                                        <span class="text-color-dark">MOBILE 1:</span>
                                                        <span class="custom-text-color-2"><a class="custom-text-color-2" href="tel:01748562164"><?php echo $mobile1; ?></a></span>
                                                    </li>
                                                    <li>
                                                        <span class="text-color-dark">MOBILE 2:</span>
                                                        <span class="custom-text-color-2"><a class="custom-text-color-2" href="tel:01748562164"><?php echo $mobile2; ?></a></span>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-md-12">
                                                <ul class="custom-list-style-1 p-0 mb-0">
                                                    <li>
                                                        <span class="text-color-dark">EMAIL:</span>
                                                        <span class="custom-text-color-2"><a class="custom-text-color-2" href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a></span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <h2 class="text-color-quaternary font-weight-extra-bold text-uppercase">About Me</h2>

                                    <p class="custom-text-color-2"><?php echo $aboutMeShort; ?></p>

                                    <div class="about-me-more" id="aboutMeMore">
                                        <?php the_content(); ?>
                                    </div>

                                    <a id="aboutMeMoreBtn" class="btn btn-tertiary text-uppercase custom-btn-style-1 text-1" href="#">View More</a>

                                </div>
                            </div>
                        </div>
                    </section>

				<?php } ?> 
            <?php } ?>

			<section id="experience" class="section section-secondary section-no-border m-0">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <h2 class="text-color-quaternary text-uppercase font-weight-extra-bold">Experience</h2>
                            <section class="timeline custom-timeline" id="timeline">
                                <div class="timeline-body">
                                    
                                    <?php 
                                        $experienceQueryArgs = array(
                                            'posts_per_page' => -1,
                                            'post_type' => 'experience',
                                            'orderby' => 'meta_value_num',
                                            'meta_key' => 'exp_from',
                                            'order' => 'DESC'
                                        );
                                        $experiences = new WP_Query($experienceQueryArgs);

                                        if($experiences->have_posts()){
                                            while($experiences->have_posts()){
                                                $experiences->the_post();
                                    ?>
                                        <article class="timeline-box right custom-box-shadow-2">
                                            <div class="row">
                                                <div class="experience-info col-lg-3 col-sm-5 bg-color-primary">
                                                    <span class="from text-color-dark text-uppercase">
                                                        From
                                                        <span class="font-weight-semibold">
                                                            <?php echo (new DateTime(get_field('exp_from')))->format('M Y'); ?>
                                                        </span>
                                                    </span>
                                                    <span class="to text-color-dark text-uppercase">
                                                        To
                                                        <span class="font-weight-semibold">
                                                            <?php
                                                                if(get_field('exp_work_presently')){
                                                                    echo "Present";
                                                                } else {
                                                                    echo (new DateTime(get_field('exp_from')))->format('M Y'); 
                                                                }
                                                            ?>
                                                        </span>
                                                    </span>
                                                    <p class="text-color-dark">(3 Years 9 Months)</p>
                                                    <span class="company text-color-dark font-weight-semibold">
                                                        <?php echo get_field('exp_company_name'); ?>
                                                        <span class="company-location text-color-dark font-weight-normal text-uppercase">
                                                            <?php echo get_field('exp_address'); ?>
                                                        </span>
                                                    </span>
                                                </div>
                                                <div class="experience-description col-lg-9 col-sm-7 bg-color-light">
                                                    <h4 class="text-color-dark font-weight-semibold"><?php the_title(); ?></h4>
                                                    <p class="custom-text-color-2">
                                                        <?php the_content(); ?>
                                                    </p>
                                                </div>
                                            </div>
                                        </article>

                                        <?php } ?>
                                        <?php wp_reset_query(); ?>
                                    <?php } ?>
                                    
                                    <div class="timeline-bar"></div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </section>

			<section id="education" class="section section-no-border custom-bg-color-1 m-0">
				<div class="container">
					<div class="row">
						<div class="col">
							<h2 class="text-color-quaternary text-uppercase font-weight-extra-bold m-0">Education</h2>
							<div class="owl-carousel nav-bottom custom-dots-style-1 mb-0" data-plugin-options="{'items': 1, 'loop': false, 'dots': true, 'nav': false}">
								<div class="row">
                                    
                                    <?php 
                                        $educationQueryArgs = array(
                                            'posts_per_page' => -1,
                                            'post_type' => 'education',
                                            'orderby' => 'meta_value_num',
                                            'meta_key' => 'edu_passing_year',
                                            'order' => 'DESC'
                                        );
                                        $educations = new WP_Query($educationQueryArgs);
                                        
                                        //var_dump($educations);

                                        if($educations->have_posts()){
                                            while($educations->have_posts()){
                                                $educations->the_post();
                                    ?>
                                        <div class="col-lg-6 col-sm-6 pb-4">
                                            <div class="custom-box-details-2 bg-color-light custom-box-shadow-3">
                                                <i class="icon-graduation icons text-color-primary"></i>
                                                <h4 class="font-weight-semibold text-color-dark m-0"><?php the_title(); ?></h4>
                                                <p class="custom-text-color-2 mb-1">
                                                    Exam Title : <?php echo get_field( 'edu_exam_title' ); ?><br/>
                                                    Group : <?php echo get_field( 'edu_group' ); ?><br/>
                                                    <?php if(get_field( 'edu_major' )){ ?>
                                                        Major : <?php echo get_field( 'edu_major' ); ?><br/>
                                                    <?php } ?>
                                                    CGPA : <?php echo get_field( 'edu_cgpa' ); ?> out of <?php echo get_field( 'edu_cgpa_out_of' ); ?>
                                                </p>
                                                <strong>Passing Year : </strong><strong class="text-color-primary"><?php echo (new DateTime(get_field('edu_passing_year')))->format('Y'); ?></strong>
                                            </div>
                                        </div>
                                    
                                        <?php } ?>
                                        <?php wp_reset_query(); ?>
                                    <?php } ?>

								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section id="skills" class="section section-no-border bg-color-light m-0">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-md-6 col-lg-8 mb-4 mb-md-0">
							<div class="row">
								<div class="col-lg-12">
									<h2 class="text-color-quaternary text-uppercase font-weight-extra-bold">Skills & Language</h2>
									<div class="progress-bars custom-progress-bars">
										
										<div class="row">
											<?php 
												$skillQueryArgs = array(
													'posts_per_page' => -1,
													'post_type' => 'skill',
													'order' => 'DESC'
												);
												$skills = new WP_Query($skillQueryArgs);
												
												//var_dump($educations);

												if($skills->have_posts()){
													while($skills->have_posts()){
														$skills->the_post();
											?>
												<div class="col-md-6">
													<div class="progress-label text-color-dark font-weight-semibold text-uppercase text-2">
														<span><?php the_title(); ?></span>
													</div>
													<div class="progress mb-2">
														<div class="progress-bar" data-appear-progress-animation="<?php echo get_field('skill_percentage') ?>%"></div>
													</div>
												</div>
											
												<?php } ?>
												<?php wp_reset_query(); ?>
											<?php } ?>
										</div>

									</div>
								</div>
								
							</div>
						</div>
						<div class="col-md-6 col-lg-4">
							<div class="row">
								<div class="col">
									<div class="custom-box-details bg-color-light custom-box-shadow-1">
										<h4 class="text-color-dark">Languages</h4>
										<ul class="custom-list-style-1 p-0">
											<?php 
												$languageQueryArgs = array(
													'posts_per_page' => -1,
													'post_type' => 'language',
													'order' => 'DESC'
												);
												$langs = new WP_Query($languageQueryArgs);

												if($langs->have_posts()){
													while($langs->have_posts()){
														$langs->the_post();
											?>
											<li>
												<span class="font-weight-semibold custom-max-width-1 text-color-dark">
													<img src="<?php echo get_theme_file_uri(); ?>/img/blank.gif" class="flag <?php echo get_field('lang_icon'); ?> mr-1" alt="English">
													<?php the_title(); ?>:
												</span>
												<span class="custom-text-color-2"><?php echo get_field('lang_proficiency') ?></span>
											</li>
												<?php } ?>
												<?php wp_reset_query(); ?>
											<?php } ?>		
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

			<?php 
				$portArgs = array(
					'posts_per_page' => 10,
					'post_type' => 'portfolios',
					'orderby' => 'meta_value_num',
					'meta_key' => 'port_display_order',
					'order' => 'ASC'
				);
				$portfolios = new WP_Query($portArgs);
				if($portfolios->have_posts()){
			?>
			<section id="portfolio" class="section section-no-border bg-color-secondary m-0">
				<div class="container">
					<div class="row">
						<div class="col">
							<h2 class="text-color-quaternary font-weight-extra-bold text-uppercase">Portfolio</h2>
							<ul class="nav nav-pills sort-source custom-nav-sort mb-4" data-sort-id="portfolio" data-option-key="filter">
							<?php 
								$terms = get_terms( 'portfoliotypes', array(
									'hide_empty' => false,
								) );
								$count = 0;
								foreach($terms as $term){
							?>
									<li class="nav-item <?php echo ($count == 0) ? 'active' : ''; ?>" data-option-value=".<?php echo $term->name; ?>">
										<a class="nav-link text-dark <?php echo ($count == 0) ? 'active' : ''; ?>" href="#"><?php echo $term->name; ?></a>
									</li>
							<?php
									$count++;
								}
							?>
							</ul>
							<div class="sort-destination-loader sort-destination-loader-showing">
								<div class="row image-gallery sort-destination lightbox" data-sort-id="portfolio" data-plugin-options="{'delegate': 'a.lightbox-portfolio', 'type': 'image', 'gallery': {'enabled': true}}">
									<?php 
										while($portfolios->have_posts()) { 
											$portfolios->the_post();

											$terms = get_the_terms( $post->ID, 'portfoliotypes' ); 
											$categories = [];
											$categoriAsClass = " All";
											foreach($terms as $term) {
												array_push($categories, $term->name);
												$categoriAsClass .= " " . $term->name;
											}
									?>

											<div class="col-12 col-sm-6 col-lg-3 isotope-item <?php echo $categoriAsClass; ?>">
												<div class="image-gallery-item mb-4 pb-3">
													<a href="<?php echo get_the_post_thumbnail_url() ?>" class="lightbox-portfolio">
														<span class="thumb-info custom-thumb-info-1">
															<span class="thumb-info-wrapper">
																<span class="thumb-info-plus"></span>
																<?php 
																	if(in_array('Websites', $categories) || in_array('e-commerce', $categories)){
																		the_post_thumbnail('portfolio-web'); 
																	} else if (in_array('Logo', $categories)){
																		the_post_thumbnail('portfolio-logo'); 
																	}
																?>
															</span>
															<div>
																<ul class="port-content-list">
																	<?php if(get_field('port_link')){ ?>
																	<li><a href="<?php echo get_field('port_link'); ?>" target="_blank"><i class="fas fa-eye"></i></a></li>
																	<?php } ?>
																	<?php if(get_field('port_downloadable_image')){ ?>
																	<li><a href="<?php echo get_field('port_downloadable_image'); ?>" target="_blank"><i class="fas fa-download"></i></a></li>
																	<?php } ?>
																	<li><?php the_title(); ?></li>
																</ul>
															</div>
														</span>
													</a>
												</div>
											</div>

									<?php } ?>

								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<?php
				}
				wp_reset_query();
			?>

			<section id="recommendations" class="section section-no-border bg-color-primary m-0">
				<div class="container">
					<div class="row">
						<div class="col">
							<h2 class="text-color-quaternary font-weight-extra-bold text-uppercase">Recommendations</h2>
						</div>
						<div class="col-lg-12 p-0">
							<div class="owl-carousel custom-dots-style-1 custom-dots-color-1 custom-dots-position-1 mb-0" data-plugin-options="{'items': 1, 'autoHeight': true, 'loop': false, 'nav': false, 'dots': true}">
								
								<?php 
									$recQueryArgs = array(
										'posts_per_page' => -1,
										'post_type' => 'recommendation',
										'order' => 'DESC'
									);
									$recommendations = new WP_Query($recQueryArgs);

									if($recommendations->have_posts()){
										while($recommendations->have_posts()){
											$recommendations->the_post();
								?>

									<div>
										<div class="col">
											<div class="testimonial custom-testimonial-style-1 testimonial-with-quotes mb-0">
												<?php if(get_the_content()){ ?>
												<blockquote class="pb-2 testimonial-content">
													<?php echo get_the_content(); ?>
												</blockquote>
												<?php } ?>
												<div class="testimonial-author float-left">
													<p>
														<strong class="text-uppercase"><?php the_title(); ?></strong>
														<span class="custom-text-color-3"><?php echo get_field('rec_designation'); ?></span>
														<span class="custom-text-color-3"><?php echo get_field('rec_institute'); ?></span>
														<span class="custom-text-color-3"><?php echo get_field('rec_mobile'); ?></span>
														<span class="custom-text-color-3"><?php echo get_field('rec_email'); ?></span>
													</p>
												</div>
											</div>
										</div>
									</div>
								
									<?php } ?>
									<?php wp_reset_query(); ?>
								<?php } ?>
							</div>
						</div>
					</div>
				</div>
			</section>
			
			
			<?php 
				$blogPost = array(
					'posts_per_page' => 2,
					'post_type' => 'post',
					'order' => 'DESC'
				);
				$blogs = new WP_Query($blogPost);
			
				if($blogs->have_posts()){
			?>
						<section id="blog" class="section section-no-border bg-color-light m-0">
							<div class="container">
								<div class="row">
									<div class="col">
										<h2 class="text-color-quaternary font-weight-extra-bold text-uppercase">My Blog</h2>

										<div class="row">
											<?php 
												while($blogs->have_posts()){
													$blogs->the_post();
											?>
											<div class="col-lg-6 mb-5 mb-lg-0">
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
									<div class="col-lg-12 col-sm-12 pt-4 mt-4 text-center">
										<a href="<?php echo esc_url(get_permalink(get_page_by_path( 'blog' ))); ?>" class="btn btn-primary btn-outline text-color-dark custom-btn-style-2 font-weight-bold custom-border-radius-1 text-uppercase">View All</a>
									</div>
								</div>
							</div>
						</section>
				<?php } ?>
			<?php 
				wp_reset_query();  
			?>


			<div id="say-hello" class="container-fluid">
				<div class="row">
					<div class="col-lg-12 p-0">
						<section class="section section-no-border h-100 m-0" style="background: url(<?php echo get_field('cv_footer_background'); ?>); background-size: cover;">
							<div class="container">
								<div class="row m-0">
									<div class="col-half-section col-half-section-left ml-3">
										<a href="mailto:<?php echo get_field('cv_email'); ?>" class="text-decoration-none">
											<span class="feature-box custom-feature-box align-items-center mb-4">
												<span class="custom-feature-box-icon">
													<i class="icon-envelope icons text-color-light"></i>
												</span>
												<span class="feature-box-info">
													<span class="custom-label font-weight-semibold text-uppercase custom-text-color-1">Email</span>
													<strong class="font-weight-light text-color-light custom-opacity-effect-1"><?php echo get_field('cv_email'); ?></strong>
												</span>
											</span>
										</a>
										<a href="tel:<?php echo get_field('cv_mobile1'); ?>" class="text-decoration-none">
											<span class="feature-box custom-feature-box align-items-center mb-4">
												<span class="custom-feature-box-icon">
													<i class="icon-phone icons text-color-light"></i>
												</span>
												<span class="feature-box-info">
													<span class="custom-label font-weight-semibold text-uppercase custom-text-color-1">Mobile</span>
													<strong class="font-weight-light text-color-light custom-opacity-effect-1"><?php echo get_field('cv_mobile1'); ?></strong>
												</span>
											</span>
										</a>
										<a href="skype:<?php echo get_field('cv_skype_name'); ?>?chat" class="text-decoration-none">
											<span class="feature-box custom-feature-box align-items-center mb-4">
												<span class="custom-feature-box-icon">
													<i class="icon-social-skype icons text-color-light"></i>
												</span>
												<span class="feature-box-info">
													<span class="custom-label font-weight-semibold text-uppercase custom-text-color-1">Skype</span>
													<strong class="font-weight-light text-color-light custom-opacity-effect-1"><?php echo get_field('cv_skype'); ?></strong>
												</span>
											</span>
										</a>
										<span class="feature-box custom-feature-box align-items-center">
											<span class="custom-feature-box-icon">
												<i class="icon-share icons text-color-light"></i>
											</span>
											<a href="<?php echo get_field('cv_facebook'); ?>" class="d-flex text-decoration-none">
												<span class="feature-box-info">
													<span class="custom-label font-weight-semibold text-uppercase custom-text-color-1">Follow me</span>
													<strong class="font-weight-light text-color-light custom-opacity-effect-1">Facebook</strong>
												</span>
											</a>
											<a href="<?php echo get_field('cv_twitter'); ?>" class="d-flex text-decoration-none">
												<span class="feature-box-info custom-both-side-border mt-2">
													<strong class="font-weight-light text-color-light custom-opacity-effect-1">Twitter</strong>
												</span>
											</a>
											<a href="<?php echo get_field('cv_linked_in'); ?>" class="d-flex text-decoration-none">
												<span class="feature-box-info p-0 mt-2">
													<strong class="font-weight-light text-color-light custom-opacity-effect-1">Linkedin</strong>
												</span>
											</a>
										</span>
									</div>
								</div>
							</div>
						</section>
					</div>
				</div>
			</div>

			<footer id="footer" class="m-0 p-0">
				<div class="footer-copyright bg-color-light m-0">
					<div class="container">
						<div class="row">
							<div class="col-lg-12 m-0">
								<p class="custom-text-color-2">© Copyright 2020. All Rights Reserved.</p>
							</div>
						</div>
					</div>
				</div>
			</footer>
		</div>

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
