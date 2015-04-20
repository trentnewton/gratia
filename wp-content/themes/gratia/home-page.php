<?php
/*
Template Name: Home
*/
?>
<?php get_header(); ?>
	<section id="intro-text">
    <div class="carousel">
        <div class="carousel-bg1">
        	<div class="text-bg">
            	<div class="row">
                	<div class="small-12 columns text-center fade-animate">
            			<?php if(ot_get_option( 'slider_text1' ) != '') : 
						echo ot_get_option(); ?>
						<h1><?php echo ot_get_option( 'slider_text1' ); ?></h1>
						<?php else : ?>
						<h1><?php bloginfo( 'description' ); ?></h1>
						<?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
        <?php if(ot_get_option( 'slider_text2' ) != ''){ ?>
        <div class="carousel-bg2">
        	<div class="text-bg">
            	<div class="row">
                	<div class="small-12 columns text-center">
            			<h1><?php echo ot_get_option( 'slider_text2' ); ?></h1>
                    </div>
                </div>
            </div>
        </div>
		<?php } ?>
        <?php if(ot_get_option( 'slider_text3' ) != ''){ ?>
        <div class="carousel-bg3">
        	<div class="text-bg">
            	<div class="row">
                	<div class="small-12 columns text-center">
            			<h1><?php echo ot_get_option( 'slider_text3' ); ?></h1>
                    </div>
                </div>
            </div>
        </div>
		<?php } ?>
        <?php if(ot_get_option( 'slider_text4' ) != ''){ ?>
        <div class="carousel-bg4">
        	<div class="text-bg">
            	<div class="row">
                	<div class="small-12 columns text-center">
            			<h1><?php echo ot_get_option( 'slider_text4' ); ?></h1>
                    </div>
                </div>
            </div>
        </div>
		<?php } ?>
        <?php if(ot_get_option( 'slider_text5' ) != ''){ ?>
        <div class="carousel-bg5">
        	<div class="text-bg">
            	<div class="row">
                	<div class="small-12 columns text-center">
            			<h1><?php echo ot_get_option( 'slider_text5' ); ?></h1>
                    </div>
                </div>
            </div>
        </div>
		<?php } ?>
        <?php if(ot_get_option( 'slider_text6' ) != ''){ ?>
        <div class="carousel-bg6">
        	<div class="text-bg">
            	<div class="row">
                	<div class="small-12 columns text-center">
            			<h1><?php echo ot_get_option( 'slider_text6' ); ?></h1>
                    </div>
                </div>
            </div>
        </div>
		<?php } ?>
    </div>
    </section>
    <?php if(ot_get_option( 'subject_section_text' ) != ''){ ?>
    <section id="subjects">
    		<?php if(ot_get_option( 'subject_section_title' ) != ''){ ?>
    		<div class="row">
                <div class="small-12 columns fade-animate">
                	<h1><?php echo ot_get_option( 'subject_section_title' ); ?></h1>
                </div>
            </div>
            <?php } ?>
    		<?php if(ot_get_option( 'first_subject_image' ) != ''){ ?>
            <div class="row">
                <div class="small-4 columns fade-animate">
                <img src="<?php echo ot_get_option( 'first_subject_image' ); ?>" alt="">
                </div>
                <?php if(ot_get_option( 'second_subject_image' ) != ''){ ?>
                <div class="small-4 columns fade-animate">
                <img src="<?php echo ot_get_option( 'second_subject_image' ); ?>" alt="">
                </div>
                <?php } ?>
                <?php if(ot_get_option( 'third_subject_image' ) != ''){ ?>
                <div class="small-4 columns fade-animate">
                <img src="<?php echo ot_get_option( 'third_subject_image' ); ?>" alt="">
                </div>
                <?php } ?>
            </div>
            <?php } ?>
            <div class="row">
                <div class="small-12 columns fade-animate">
                	<?php echo ot_get_option( 'subject_section_text' ); ?>
                </div>
            </div>
        </section>
        <?php } ?>
        <?php if(ot_get_option( 'contact_section_title' ) != ''){ ?>
        <section id="contact">
      <div class="row">
          <div class="small-12 columns fade-animate">
          <h1><?php echo ot_get_option( 'contact_section_title' ); ?></h1>
          </div>
      </div>
      <div class="row">
        <div class="small-12 medium-8 large-8 columns fade-animate">
            <?php echo do_shortcode( '[contact-form-7 id="44" title="Contact form 1"]' ); ?>
        </div>
        <div class="small-12 medium-4 large-4 columns fade-animate">
            <ul class="vcard">
            	<?php if(ot_get_option( 'vcard_name', 'on' ) == "on" ){ ?>
                <li class="fn"><?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?></li>
                <?php } ?>
                <?php if(ot_get_option( 'vcard_phone' ) != ''){ ?>
                <li class="phone"><span class="icon-phone"></span>&nbsp;<?php echo ot_get_option( 'vcard_phone' ); ?></li>
                <?php } ?>
                <?php if(ot_get_option( 'vcard_address' ) != ''){ ?>
                <li class="phone"><span class="icon-address"></span>&nbsp;<?php echo ot_get_option( 'vcard_address' ); ?></li>
                <?php } ?>
                <?php if(ot_get_option( 'vcard_web', 'on' ) == "on" ){ ?>
                <li class="web"><span class="icon-web"></span>&nbsp;<?php $wwwsite_url = get_site_url();
				$to_remove = array( 'http://', 'https://' );
				foreach ( $to_remove as $item ) {
					$wwwsite_url = str_replace($item, '', $wwwsite_url);
				}
				echo $wwwsite_url;
				?></li>
                <?php } ?>
                <?php if(ot_get_option( 'vcard_email', 'on' ) == "on" ){ ?>
                <li class="email"><span class="icon-email"></span>&nbsp;<a class="email" href="mailto:<?php echo antispambot( get_bloginfo('admin_email', 'raw'), 1 ); ?>?subject=Hello" target="blank"><?php _e('Email Us', 'gratia'); ?></a></li>
                <?php } ?>
            </ul>
        </div>
      </div>
      </section>
      <?php } ?>
        <?php if(ot_get_option( 'about_us_section_title' ) != ''){ ?>
        <section id="about">
            <div class="row">
                <div class="small-12 columns fade-animate">
                	<h1><?php echo ot_get_option( 'about_us_section_title' ); ?></h1>
                </div>
            </div>
            <?php if(ot_get_option( 'first_person_about_us_text' ) != ''){ ?>
            <div class="row">
            	<?php if(ot_get_option( 'first_person_about_us_image' ) != ''){ ?>
                <div class="small-4 medium-3 large-3 columns small-centered medium-uncentered columns fade-animate">
                <img class="img-round" src="<?php echo ot_get_option( 'first_person_about_us_image' ); ?>" alt="">
                </div>
                <?php } ?>
                <?php if(ot_get_option( 'first_person_about_us_image' ) != '') : 
					echo ot_get_option(); ?>
					<div class="small-12 medium-9 large-9 columns fade-animate">
					<?php else : ?>
					<div class="small-12 columns fade-animate">
				<?php endif; ?>
                <?php echo ot_get_option( 'first_person_about_us_text' ); ?>
                </div>
            </div>
            <?php if(ot_get_option( 'second_person_about_us_text' ) != ''){ ?>
            <div class="divider"></div>
            <?php } ?>
            <?php } ?>
            <?php if(ot_get_option( 'second_person_about_us_text' ) != ''){ ?>
            <div class="row">
            	<?php if(ot_get_option( 'second_person_about_us_image' ) != ''){ ?>
                <div class="small-4 medium-3 large-3 push-9 columns small-centered medium-uncentered columns fade-animate">
                	<img class="img-round" src="<?php echo ot_get_option( 'second_person_about_us_image' ); ?>" alt="">
                </div>
                <?php } ?>
                <?php if(ot_get_option( 'second_person_about_us_image' ) != '') : 
					echo ot_get_option(); ?>
                    <div class="small-12 medium-9 large-9 pull-3 columns fade-animate">
					<?php else : ?>
					<div class="small-12 columns fade-animate">
				<?php endif; ?>
                <?php echo ot_get_option( 'second_person_about_us_text' ); ?>
                </div>
            </div>
            <?php } ?>
      </section>
      <?php } ?>

<?php get_footer(); ?>