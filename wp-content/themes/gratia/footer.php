        <footer>
            <div id="main-footer">
                <div class="row">
                    <div class="medium-3 large-3 push-9 columns">
                    	<div class="inner-footer">
        					<?php if(ot_get_option( 'facebook_page_link' ) != '') : 
                            echo ot_get_option(); ?>
                            <div class="row">
                                <div class="small-7 medium-9 columns">
                                	<div class="find-us-icon">
                                	   <a href="<?php echo ot_get_option( 'facebook_page_link' ); ?>" target="_blank">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/images/FB-FindUsOnFacebook.svg" width="142" height="36" alt="<?php _e( 'Find us on Facebook', 'gratia' ); ?>">
                                        </a>
                                    </div>
                                </div>
                                <div class="small-5 medium-3 columns">
                                	<div id="top"><a href="#" title="<?php _e( 'Top', 'gratia' ); ?>"><span class="icon-top"></span></a></div>
                                </div>
                            </div>
                            <?php else : ?>
                            <div id="top"><a href="#" title="<?php _e( 'Top', 'gratia' ); ?>"><span class="icon-top"></span></a></div>
                            <?php endif; ?>
                      	</div>
                    </div>
                    <div class="medium-9 large-9 pull-3 columns">
                        <?php if(ot_get_option( 'copyright_footer' ) != '') : 
            			echo ot_get_option(); ?>
            			<p class="copyright"><?php echo ot_get_option( 'copyright_footer' ); ?></p>
            			<?php else : ?>
            			<p class="copyright">&copy;&nbsp;<?php echo date("Y"); ?>&nbsp;<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?></p>
            			<?php endif; ?>
                    </div>
                </div>
            </div>
        </footer>
        <script type="text/javascript">
            var templateUrl = '<?php bloginfo('template_directory'); ?>';
        </script>
		<?php wp_footer(); ?>
        <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
    </body>
</html>