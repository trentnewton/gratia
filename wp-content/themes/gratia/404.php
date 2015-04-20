<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 */
get_header(); ?>
		<header id="page-heading">
          <div class="page-heading-mask">
              <div class="row">
                <div class="small-12 columns fade-animate">
                  <h1><?php _e( 'Nothing Found', 'gratia' ); ?></h1>
                  </div>
              </div>
          </div>
        </header>
        <section id="page-content">
        	<div class="row">
                <div class="small-12 columns fade-animate">
                    <div class="text-center">
                    <h3><?php _e( 'Sorry, we can\'t find that page! It might be an old link or maybe it moved.', 'gratia' ); ?></h3>
                    <br>
                    <p><a class="button" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php _e( 'Back to the home page', 'gratia' ); ?></a></p>
                    </div>
                </div>
            </div>
        </section>
<?php get_footer(); ?>