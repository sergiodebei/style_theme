<?php
/**
 * The main template file.
 * Template Name: Home/Blog
 * Description: Home/Blog
 * @package Malu theme
 */

get_header(); ?>

		<!-- <link rel="icon" type="image/x-icon"/ href="favicon.ico" > -->
		<link rel="icon" type="image/png" href="<?php bloginfo( 'template_url' ); ?>/img/favicon_malu.png?v=2" />
		<meta name="theme-color" content="#bc080f">
		<title>Malu</title> 

    </head>

    <body class="malu malu_red">

            <!--[if lt IE 8]>
                <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
            <![endif]-->

            <header id="header">
                <div class="container">
                    <div class="header_inner">
                        <div class="header_branding" id="">
                            <a href="#" class="logo">
                                <img src="<?php bloginfo( 'template_url' ); ?>/img/malu.svg" alt="" class="header_branding_logo">
                            </a>
                        </div>
                        <nav class="from_left_effect">
                			<?php 
                                wp_nav_menu(
                    			    array(
                    	    			'container'=> '',
                    	    			'container_class'=> '',
                    	    			'container_id'=> '',
                    	    			'menu_class'=> 'menu',
                    	    			'menu_id'=> '',
                    	    			'theme_location' => 'malu-menu'
                    			    )
                		        ); 
                	        ?>
                            <?php echo do_shortcode( '[wpml_language_selector_widget]'); ?>
                        </nav>
                        <div class="hamburger-menu">
                            <div class="bar"></div>   
                        </div>
                    </div>
                </div>
            </header>
        
            <main>

                <section id="heroslider_mobile">
                    <div class="container heroslider_mobile_container">
                    
	                    <?php if( have_rows('slider_images') ): ?>
	                    	<?php while( have_rows('slider_images') ): the_row(); ?>

	                    		<?php $hero_image = get_sub_field('slider_image'); ?>

	                    		<div class="hsm_slide">
	                    		    <div class="hsm_slide_visual" style="background-image: url(<?php echo $hero_image; ?>);">
	                    		    </div>
	                    		</div>

                			<?php endwhile; ?>
                		<?php endif; ?>
                		<?php wp_reset_query(); ?>

                    </div>
                    <div class="container">
                        <div class="hsm_slide_message_container">
                            <div class="message_box">
                                <h1 class="mb_title">
                                    <?php echo get_field( "slider_message_title" ); ?>
                                </h1>
        		                <p><?php echo get_field( "slider_message_text" ); ?></p>
        		                <a class="button" href="<?php echo get_field( "slider_button_link" ); ?>">
        		                    <?php echo get_field( "slider_button_text" ); ?>
        		                </a>
                            </div>
                        </div>
                    </div>
                </section>

                <section id="heroslider">
                    <div class="heroslider_container">

                        <?php if( have_rows('slider_images') ): ?>
                        	<?php while( have_rows('slider_images') ): the_row(); ?>

                        		<?php $hero_image = get_sub_field('slider_image'); ?>

                        		<div class="slide" style="background-image: url(<?php echo $hero_image; ?>);">
                        		    <div class="container">
                        		        <div class="hero_message_container">
                        		            <div class="message_box">
                        		                <h1 class="mb_title">
                        		                    <?php echo get_field( "slider_message_title" ); ?>
                        		                </h1>
                        		                <p><?php echo get_field( "slider_message_text" ); ?></p>
                        		                <a class="button" href="<?php echo get_field( "slider_button_link" ); ?>">
                        		                    <?php echo get_field( "slider_button_text" ); ?>
                        		                </a>
                        		            </div>
                        		        </div>
                        		    </div>
                        		</div>

                        	<?php endwhile; ?>
                        <?php endif; ?>
                        <?php wp_reset_query(); ?>

                    </div>
                </section>
                    
                <style>#whatwedo:before { background-image: url(<?php bloginfo( 'template_url' ); ?>/img/malu_background_red.jpg) }</style>
                <section id="whatwedo">
                    <div class="section_intro">
                        <h1><?php echo get_field( "section_title" ); ?></h1>
                    </div>
                    <div class="container">
                        <div class="whatwedo_container">

		                    <?php if( have_rows('services') ): ?>
	
								<ul class="wwd_menu">

		                    	<?php while( have_rows('services') ): the_row(); ?>

		                    		<?php 
		                    			$service_icon = get_sub_field('service_icon'); 
		                    			$service_title = get_sub_field('service_title'); 
		                    			$service_subtitle = get_sub_field('service_subtitle'); 
		                    			$service_description = get_sub_field('service_description'); 
		                    			$service_image = get_sub_field('service_image'); 
		                    		?>

		                    		<li class="wwd_menu_item">
		                    		    <div class="wwd_mi_header">
		                    		        <div class="wwd_mi_visual">
		                    		            <img src="<?php echo $service_icon; ?>" alt="">
		                    		        </div>
		                    		        <div class="wwd_mi_content">
		                    		            <h3><?php echo $service_title; ?></h3>
		                    		            <p><?php echo $service_subtitle; ?></p>
		                    		        </div>
		                    		    </div>
		                    		    <div class="wwd_mi_body">
		                    		        <div class="wwd_mi_body_container">
		                    		            <div class="wwd_mi_b_content">
		                    		                <div class="wwd_mi_b_text">
		                    		                   <?php echo $service_description; ?>
		                    		                </div>
		                    		            </div>
		                    		            <div class="wwd_mi_b_visual">
		                    		                <img src="<?php echo $service_image; ?>" alt="">
		                    		            </div>
		                    		        </div>
		                    		    </div>
		                    		</li>

	                			<?php endwhile; ?>
									
									<span class="underline">
									    <span class="span_content">x</span>
									</span>
	                			</ul>

	                		<?php endif; ?>
	                		<?php wp_reset_query(); ?>

		                    <?php if( have_rows('services') ): ?>
	
								<div id="wwd_slides">

		                    	<?php while( have_rows('services') ): the_row(); ?>

		                    		<?php 
		                    			$service_icon = get_sub_field('service_icon'); 
		                    			$service_title = get_sub_field('service_title'); 
		                    			$service_subtitle = get_sub_field('service_subtitle'); 
		                    			$service_description = get_sub_field('service_description'); 
		                    			$service_image = get_sub_field('service_image'); 
		                    		?>

		                    		<div class="wwd_slide">
		                    		    <div class="col-m-7 wwd_slide_content">
		                    		        <div class="wwd_title">
		                    		            <h1><?php echo $service_subtitle; ?></h1>
		                    		        </div>
		                    		        <div class="wwd_text">
		                    		            <p><?php echo $service_description; ?></p>
		                    		        </div>
		                    		    </div>
		                    		    <div class="col-m-5 wwd_slide_visual">
		                    		        <img src="<?php echo $service_image; ?>" alt="">
		                    		    </div>
		                    		</div>

	                			<?php endwhile; ?>

	                			</div>

	                		<?php endif; ?>
	                		<?php wp_reset_query(); ?>

                        </div>
                        <div class="private_labels">
                            <div class="col-m-7 pl_visuals">
                                <div class="row pl_visuals_container">

            	                    <?php if( have_rows('pl_images') ): ?>
            	                    	<?php while( have_rows('pl_images') ): the_row(); ?>

            	                    		<?php $image = get_sub_field('image'); ?>

            	                    		<div class="visual_bg" style="background-image: url(<?php echo $image; ?>);"></div>
            	                    		
                            			<?php endwhile; ?>
                            		<?php endif; ?>
                            		<?php wp_reset_query(); ?>

                                </div>
                            </div>
                            <div class="col-m-5 pl_content message_box">
                                <h1 class="mb_title">
                                    <?php echo get_field( "pl_title" ); ?>
                                </h1>
                                <p><?php echo get_field( "pl_text" ); ?></p>
                                <a class="button" href="<?php echo get_field( "pl_button_link" ); ?>">
                                    <?php echo get_field( "pl_button_text" ); ?>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="brand_hover_container">
                        <div class="container">
                            <div class="brand_hover">

        	                    <?php if( have_rows('brand') ): ?>
        	                    	<?php while( have_rows('brand') ): the_row(); ?>

        	                    		<?php $brand_front = get_sub_field('brand_front'); ?>
        	                    		<?php $brand_back = get_sub_field('brand_back'); ?>

        	                    		<div class="bh_content_col">
        	                    		    <div class="bh_side bh_front">
        	                    		        <div class="bh_front_logo">
        	                    		            <img src="<?php echo $brand_front; ?>" alt="">
        	                    		        </div>
        	                    		    </div>
        	                    		    <div class="bh_side bh_back" style="background-image: url(<?php echo $brand_back; ?>);">
        	                    		    </div>
        	                    		</div>
        	                    		
                        			<?php endwhile; ?>
                        		<?php endif; ?>
                        		<?php wp_reset_query(); ?>

                            </div>  
                        </div>
                    </div>
                </section>

               <section id="offices">
                    <div class="section_intro">
                    	<h1><?php echo get_field( "o_title" ); ?></h1>
                        <h1></h1>
                    </div>
                    <div class="container">
                        <div class="offices_map">
                            <img src="<?php echo get_field( "o_map_image" ); ?>" alt="">
                        </div>
                    </div>
                </section>

                <style>#customers:before { background-image: url(<?php bloginfo( 'template_url' ); ?>/img/malu_background_red.jpg) }</style>
                <section id="customers">
                    <div class="section_intro">
                        <h1><?php echo get_field( "cs_title" ); ?></h1>
                    </div>
                    <div class="container">
                        <div class="customers_slider">

    	                    <?php if( have_rows('customer') ): ?>
    	                    	<?php while( have_rows('customer') ): the_row(); ?>

    	                    		<?php $customer_logo = get_sub_field('customer_logo'); ?>

    	                    		<div class="cl_col">
    	                    		    <img src="<?php echo $customer_logo; ?>" alt="" class="">
    	                    		</div>

                    			<?php endwhile; ?>
                    		<?php endif; ?>
                    		<?php wp_reset_query(); ?>

                        </div>   
                    </div>
                </section>
              
                <section id="contactus">
                    <div class="section_intro">
                        <h1><?php echo get_field( "c_title" ); ?></h1>
                        <div class="container form_container">
                            <p class="section_intro_text"><?php echo get_field( "c_text" ); ?></p>
                            <?php 
                                echo get_field( "c_shortcode" );
                                // gravity_form( 1, false, false, false, '', false ); 
                            ?>
                        </div>
                    </div>
                </section>
                
                <section id="quality_mark">
                    <div class="container">
                        <div class="quality_mark_container">

    	                    <?php if( have_rows('marks') ): ?>
    	                    	<?php while( have_rows('marks') ): the_row(); ?>

    	                    		<?php $mark_logo = get_sub_field('mark_logo'); ?>

    	                    		<div class="qm_single">
    	                    		    <img src="<?php echo $mark_logo; ?>" alt="" class="">
    	                    		</div>

                    			<?php endwhile; ?>
                    		<?php endif; ?>
                    		<?php wp_reset_query(); ?>

                        </div>
                    </div>
                </section>

            </main>

            <div class=" bodyoverlay"></div>

    <!--         <div class="flying">
                <a href="#0" class="cd cd__top"><i class="fa fa-caret-up fa-2x" aria-hidden="true"></i></a>
            </div> -->

            <style>footer:before { background-image: url(<?php bloginfo( 'template_url' ); ?>/img/malu_background_red.jpg) }</style>
            <footer>
                <div class="container">
                    <div class="row footer_container">
                        <div class="fc_col footer_logo_container">
                            <img class="footer_logo" src="<?php bloginfo( 'template_url' ); ?>/img/malu_white.svg" alt="">
                        </div>
                        <div class="fc_offset"></div>
                        <div class="fc_col">
                            <p><?php echo get_field( "fi_address" ); ?></p>
                            <p><?php echo get_field( "fi_phone_numbers" ); ?></p>
                        </div>  
                        <div class="fc_col">

                            <?php 
                                wp_nav_menu(
                    			     array(
                    	    			'container'=> '',
                    	    			'container_class'=> '',
                    	    			'container_id'=> '',
                    	    			'menu_class'=> 'internal_page_menu',
                    	    			'menu_id'=> '',
                    	    			'theme_location' => 'malu-footer-menu'
                    			     )
                		        );
                             ?>

                        </div>
                        <div class="fc_col">
                            <ul class="social_menu">
                                <li>
                                    <a href="<?php echo get_field( "fi_facebook_link" ); ?>">
                                        <i class="fa fa-facebook" aria-hidden="true"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo get_field( "fi_linkedin_link" ); ?>">
                                        <i class="fa fa-linkedin" aria-hidden="true"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>

<?php
get_footer();

