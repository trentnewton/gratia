<?php
/*
Template Name: Services
*/
?>
<?php get_header(); ?>
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		<header id="page-heading">
          <div class="page-heading-mask">
              <div class="row">
                <div class="small-12 columns fade-animate">
                  <h1><?php the_title(); ?></h1>
                  </div>
              </div>
          </div>
        </header>
        <section id="page-content">
            	<?php the_content(); ?>
        </section>
<?php endwhile; ?>
<?php get_footer(); // will include footer-no-sidebar.php; ?>