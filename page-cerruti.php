<?php
/**
 * The main template file.
 * Template Name: Cerruti page
 * Description: Page
 * @package Malu theme
 */

get_header(); ?>

		<!-- <link rel="icon" type="image/x-icon"/ href="favicon.ico" > -->
		<link rel="icon" type="image/png" href="<?php bloginfo( 'template_url' ); ?>/img/favicon_cerruti.png?v=2" />
		<meta name="theme-color" content="#193b4c">
		<title>Cerruti</title> 

    </head>

    <body class="cerruti">

            <!--[if lt IE 8]>
                <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
            <![endif]-->

            <header id="header">
                <div class="container">
                    <div class="header_inner">
                        <div class="header_branding" id="">
                            <a href="#" class="logo">
                                <img src="<?php bloginfo( 'template_url' ); ?>/img/cerruti_1881.svg" alt="" class="header_branding_logo">
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
                    	    			'theme_location' => 'cerruti-menu'
                    			    )
                		        ); 
                	        ?>
                	        <?php do_action('wpml_add_language_selector'); ?>
                        </nav>
                        <div class="hamburger-menu">
                            <div class="bar"></div>   
                        </div>
                    </div>
                </div>
            </header>
        
            <main>

                <section id="heroslider">
                    <div class="container heroslider_container">

	                    <?php if( have_rows('slider_images') ): ?>
	                    	<?php while( have_rows('slider_images') ): the_row(); ?>

                    			<?php $hero_image = get_sub_field('slider_image'); ?>

				                <div class="slide" style="background-image: url(<?php echo $hero_image; ?>);">
				                    <div class="row">
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

                <section id="collections">
                    <div class="section_intro">
                        <h1><?php echo get_field( "collection_section_title" ); ?></h1>
                    </div>
                    <div class="container">
                        <div class="collections_container">

    	                    <?php if( have_rows('collection') ): ?>
    	                    	<?php while( have_rows('collection') ): the_row(); ?>

    	                    		<?php 
    	                    			$collection_visual = get_sub_field('collection_visual'); 
    	                    			$collection_text = get_sub_field('collection_text'); 
    	                    		?>

    	                    		<div class="collection" style="background-image: url(<?php echo $collection_visual; ?>);">
    	                    		    <div class="collection_discover">
    	                    		        <span><?php echo $collection_text; ?></span>
    	                    		    </div>
    	                    		</div>

                    			<?php endwhile; ?>
                    		<?php endif; ?>
                    		<?php wp_reset_query(); ?>

                        </div>
                    </div>
                </section>

                <section id="view_collections">
                    <div class="container">
                        <div class="collections_container">
                            <div class="cc_controllers">
                                <ul class="cc_menu">

            	                    <?php if( have_rows('collections_slider') ): ?>
            	                    	<?php while( have_rows('collections_slider') ): the_row(); ?>

            	                    		<?php $collections_slider_title = get_sub_field('collections_slider_title'); ?>

            	                    		<li class="cc_menu_item">
            	                    		    <a href=""><?php echo $collections_slider_title; ?></a>
            	                    		</li>

                            			<?php endwhile; ?>
                            		<?php endif; ?>
                            		<?php wp_reset_query(); ?>

                                </ul>
                            </div>
                            <div class="cc_view">

        	                    <?php if( have_rows('collections_slider') ): ?>
        	                    	<?php while( have_rows('collections_slider') ): the_row(); ?>

        	                    		<div class="collection_slider_container">
        	                    		    <div class="collection_slider_1">

		        			                    <?php if( have_rows('collections_slider_visual') ): ?>
		        			                    	<?php while( have_rows('collections_slider_visual') ): the_row(); ?>

		        			                    		<?php $collections_slider_visual_image = get_sub_field('collections_slider_visual_image'); ?>

		        			                    		<div class="collection_slider_slide">
		        			                    		    <img src="<?php echo $collections_slider_visual_image; ?>" alt="">
		        			                    		</div>
		  
		        		                			<?php endwhile; ?>
		        		                		<?php endif; ?>

        		                		    </div>
        		                		    
        		                		    <div class="collection_slider_controllers">
        		                		        <button class="control prev prev_1">
        		                		            <p><?php echo get_field( "collections_slider_button_back_text" ); ?></p>
        		                		        </button>
        		                		        <button class="control next next_1">
        		                		            <p><?php echo get_field( "collections_slider_button_more_text" ); ?></p>
        		                		        </button>
        		                		    </div>
        		                		</div>

                        			<?php endwhile; ?>
                        		<?php endif; ?>
                        		<?php wp_reset_query(); ?>


                            </div>
                        </div>
                    </div>
                </section>

                <section id="heritage_slider">
                    <div class="container heritage_container">

	                    <?php if( have_rows('heritage_images') ): ?>
	                    	<?php while( have_rows('heritage_images') ): the_row(); ?>

	                    		<?php $slider_image = get_sub_field('slider_image'); ?>

		                        <div class="slide" style="background-image: url(<?php echo $slider_image; ?>););">
		                            <div class="row">
		                                <div class="hero_message_container">
		                                    <div class="message_box">
		                                        <h1 class="mb_title">
		                                            <?php echo get_field( "heritage_message_title" ); ?>
		                                        </h1>
		                                        <p><?php echo get_field( "heritage_message_text" ); ?></p>
		                                        <a class="button" href="<?php echo get_field( "heritage_button_link" ); ?>">
		                                            <?php echo get_field( "heritage_button_text" ); ?>
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

                <section id="heritageslider_mobile">
                    <div class="container heritageslider_mobile_container">

	                    <?php if( have_rows('heritage_images') ): ?>
	                    	<?php while( have_rows('heritage_images') ): the_row(); ?>

	                    		<?php $slider_image = get_sub_field('slider_image'); ?>

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
	                                <?php echo get_field( "heritage_message_title" ); ?>
	                            </h1>
	                            <p><?php echo get_field( "heritage_message_text" ); ?></p>
	                            <a class="button" href="<?php echo get_field( "heritage_button_link" ); ?>">
	                                <?php echo get_field( "heritage_button_text" ); ?>
	                            </a>
	                        </div>
                        </div>
                    </div>
                </section>

                <section id="events">
                    <div class="section_intro">
                        <h1>find Cerruti on these fairs</h1>
                    </div>
                    <div class="container">
                    	<?php locate_template( 'template-parts/loop-events.php', true ); ?>
                    </div>
                </section>

                <section id="press">
                    <div class="section_intro">
                        <h1><?php echo get_field( "cp_title" ); ?></h1>
                    </div>
                    <div class="container">
                        <div class="row articles">
                        	<?php locate_template( 'template-parts/loop.php', true ); ?>
                        </div>
                    </div>
                </section>
     
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
                            	// gravity_form( 2, false, false, false, '', false ); 
                            ?>
                        </div>
                    </div>
                </section>

            </main>

            <div class=" bodyoverlay"></div>

    <!--         <div class="flying">
                <a href="#0" class="cd cd__top"><i class="fa fa-caret-up fa-2x" aria-hidden="true"></i></a>
            </div> -->

            <footer>
                <div class="container">
                    <div class="row footer_container">
                        <div class="fc_col footer_logo_container">
                            <img class="footer_logo" src="<?php bloginfo( 'template_url' ); ?>/img/cerruti_1881.svg" alt="">
                        </div>
                        <!-- <div class="fc_offset"></div> -->
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
                    	    			'theme_location' => 'cerruti-footer-menu'
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

