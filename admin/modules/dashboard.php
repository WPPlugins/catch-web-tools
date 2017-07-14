<?php
/**
 * @package Admin
 * @sub-package Admin CatchIDs Display
 */
 ?>
<div id="catchwebtools" class="wrap">
	<?php include ( 'header.php' ); ?>
    <?php include ( 'navigation.php' ); ?>
    <div id="dashboard">
    	<div id="plugin-description">
            <h2><?php _e( 'Catch Web Tools', 'catch-web-tools' ); ?></h2>
            <p>
                <?php _e( 'Catch Web Tools is a simple and lightweight WordPress plugin to help you manage your WordPress site. Power up your WordPress site with powerful features that were till now only available to Catch Themes users. We currently offer Webmaster Tools, Open Graph, Custom CSS, Social Icons, Catch IDs and basic SEO Optimization.', 'catch-web-tools' ); ?>
            </p>
        </div><!-- .option-container -->

        <div id="module-container">
        	<div id="module-webmaster-tools" class="catch-modules short-desc">
                <h3><?php _e( 'Webmaster Tools', 'catch-web-tools' ); ?></h3>
                <p>
                	<?php _e( 'Webmaster Tools gives you an option to add in the Site Verfication Code and Header and Footer Script required to manage your site.', 'catch-web-tools' );?>
                </p>
                <div class="catch-actions">
                	<form method="post" action="options.php">
                    	<?php
							settings_fields( 'webmaster-tools-group' );

							$settings	=	catchwebtools_get_options( 'catchwebtools_webmaster' );

							if( ! empty ( $settings['status'] ) && $settings['status'] ) {
								echo '<input type="hidden" value="0"  name="catchwebtools_webmaster[status]"/>';

								submit_button( __( 'Deactivate', 'catch-web-tools' ), 'secondary', 'submit', false );
							}
							else {
                            	echo '<input type="hidden" value="1"  name="catchwebtools_webmaster[status]"/>';

								submit_button( __( 'Activate', 'catch-web-tools' ), 'primary', 'submit', false );
                        	}
                        ?>

                    	<a class="button-secondary" href="<?php echo esc_url( admin_url( 'admin.php?page=catch-web-tools-webmasters' ) ); ?>"><?php _e( 'Configure', 'catch-web-tools' );?></a>
                    </form>
              	</div>
        	</div><!-- #module-webmaster-tools -->

         	<div id="module-customcss" class="catch-modules short-desc">
                <h3><?php _e( 'Custom CSS', 'catch-web-tools' );?></h3>
                <p>
                    <?php _e( 'Custom CSS gives you an option to add in your CSS to your WordPress site without building Child Theme. You can just add your Custom CSS and save, it will show up in the frontend head section. Leave it blank if it is not needed.', 'catch-web-tools' ); ?>
                </p>
                <div class="catch-actions">
                    <a class="button-secondary" href="<?php echo esc_url( admin_url( 'admin.php?page=catch-web-tools-custom-css' ) ); ?>"><?php _e( 'Configure', 'catch-web-tools' );?></a>
              	</div>
          	</div><!-- #module-customcss -->

            <div id="module-catchids" class="catch-modules short-desc">
                <h3><?php _e( 'Catch IDs', 'catch-web-tools' ); ?></h3>

                <p>
                	<?php _e( 'Catch IDs will show Post ID, Page ID, Media ID, Links ID, Category ID, Tag ID and UserID in the respective admin section tables.', 'catch-web-tools' );?>
               	</p>

                <div class="catch-actions">
                    <form method="post" action="options.php">
                    	<?php
							settings_fields( 'catchids-settings-group' );

							$settings	=	catchwebtools_get_options( 'catchwebtools_catchids' );

							if( ! empty ( $settings['status'] ) && $settings['status'] ) {
								echo '<input type="hidden" value="0"  name="catchwebtools_catchids[status]"/>';

								submit_button( __( 'Deactivate', 'catch-web-tools' ), 'secondary', 'submit', false );
							}
							else {
                            	echo '<input type="hidden" value="1"  name="catchwebtools_catchids[status]"/>';

								submit_button( __( 'Activate', 'catch-web-tools' ), 'primary', 'submit', false );
                        	}
                        ?>
                    </form>
               	</div><!-- .catch-actions -->
            </div><!-- #module-catchids -->

            <div id="module-socialicons" class="catch-modules long-desc">
                <h3><?php _e( 'Social Icons', 'catch-web-tools' );?></h3>
                <p>
                	<?php _e( 'Social Icons gives you an option to add in your Social Profiles.', 'catch-web-tools' );?>
               	</p>
                <p>
                	<?php _e( 'You can add Social Icons by adding in Widgets in your Sidebar or by adding in Shortcode in your Page/Post Content or by adding the function in your template files.', 'catch-web-tools' );?>
               	</p>
                <div class="catch-actions">
                	<form method="post" action="options.php">
                    	<?php
							settings_fields( 'social-icons-group' );

							$settings	=	catchwebtools_get_options( 'catchwebtools_social' );

							if( ! empty ( $settings['status'] ) && $settings['status'] ) {
								echo '<input type="hidden" value="0"  name="catchwebtools_social[status]"/>';

								submit_button( __( 'Deactivate', 'catch-web-tools' ), 'secondary', 'submit', false );
							}
							else {
                            	echo '<input type="hidden" value="1"  name="catchwebtools_social[status]"/>';

								submit_button( __( 'Activate', 'catch-web-tools' ), 'primary', 'submit', false );
                        	}
                        ?>

                    	<a class="button-secondary" href="<?php echo esc_url( admin_url( 'admin.php?page=catch-web-tools-social-icons' ) ); ?>"><?php _e( 'Configure', 'catch-web-tools' );?></a>
                    </form>
              	</div>
         	</div><!-- #module-socialicons -->

            <div id="module-opengraph" class="catch-modules long-desc">
                <h3><?php _e( 'Open Graph', 'catch-web-tools' );?></h3>
                <p><?php _e( 'The Open Graph protocol enables your site to become a rich object in a social graph. For instance, this is used on Facebook to allow any web page to have the same functionality as any other object on Facebook.', 'catch-web-tools' ); ?>
                </p>
                <div class="catch-actions">
                	<form method="post" action="options.php">
                    	<?php
							settings_fields( 'opengraph-settings-group' );

							$settings	=	catchwebtools_get_options( 'catchwebtools_opengraph' );

							if( ! empty ( $settings['status'] ) && $settings['status'] ) {
								echo '<input type="hidden" value="0"  name="catchwebtools_opengraph[status]"/>';

								submit_button( __( 'Deactivate', 'catch-web-tools' ), 'secondary', 'submit', false );
							}
							else {
                            	echo '<input type="hidden" value="1"  name="catchwebtools_opengraph[status]"/>';

								submit_button( __( 'Activate', 'catch-web-tools' ), 'primary', 'submit', false );
                        	}
                        ?>

                    	<a class="button-secondary" href="<?php echo esc_url( admin_url( 'admin.php?page=catch-web-tools-opengraph' ) ); ?>"><?php _e( 'Configure', 'catch-web-tools' );?></a>
                    </form>
              	</div>
            </div><!-- #module-opengraph -->

        	<div id="module-seo" class="catch-modules long-desc">
                <h3><?php _e( 'SEO ( BETA Version )', 'catch-web-tools' );?></h3>
                <p>
                    <?php _e( 'SEO is in beta version. SEO can be used to add SEO meta tags to Homepage, specific Pages or Posts and Categories page. This section adds SEO meta data to site\'s section.', 'catch-web-tools' ); ?>
                </p>
                <div class="catch-actions">
                	<form method="post" action="options.php">
                    	<?php
							settings_fields( 'seo-settings-group' );

							$settings	=	catchwebtools_get_options( 'catchwebtools_seo' );

							if( ! empty ( $settings['status'] ) && $settings['status'] ) {
								echo '<input type="hidden" value="0"  name="catchwebtools_seo[status]"/>';

								submit_button( __( 'Deactivate', 'catch-web-tools' ), 'secondary', 'submit', false );
							}
							else {
                            	echo '<input type="hidden" value="1"  name="catchwebtools_seo[status]"/>';

								submit_button( __( 'Activate', 'catch-web-tools' ), 'primary', 'submit', false );
                        	}
                        ?>

                    	<a class="button-secondary" href="<?php echo esc_url( admin_url( 'admin.php?page=catch-web-tools-seo' ) ); ?>"><?php _e( 'Configure', 'catch-web-tools' );?></a>
                    </form>
              	</div>
            </div><!-- #module-seo -->

            <div id="module-catchupdater" class="catch-modules short-desc">
                <h3><?php _e( 'Catch Updater', 'catch-web-tools' ); ?></h3>

                <p>
                    <?php _e( 'Catch Updater is a simple and lightweight WordPress Theme Updater Module, which enables you to update your themes easily using WordPress Admin Panel.', 'catch-web-tools' );?>
                </p>

                <div class="catch-actions">
                    <form method="post" action="options.php">
                        <?php
                            settings_fields( 'catchupdater-settings-group' );

                            $settings   =   catchwebtools_get_options( 'catchwebtools_catch_updater' );

                            if( ! empty ( $settings['status'] ) && $settings['status'] ) {
                                echo '<input type="hidden" value="0"  name="catchwebtools_catch_updater[status]"/>';

                                submit_button( __( 'Deactivate', 'catch-web-tools' ), 'secondary', 'submit', false );

                                echo '<a class="button-secondary" href="' . esc_url( admin_url( 'theme-install.php?upload' ) ) . '">' . esc_html__( 'Upload Theme Now', 'catch-web-tools' ). '</a>';
                            }
                            else {
                                echo '<input type="hidden" value="1"  name="catchwebtools_catch_updater[status]"/>';

                                submit_button( __( 'Activate', 'catch-web-tools' ), 'primary', 'submit', false );
                            }
                        ?>
                    </form>
                </div><!-- .catch-actions -->
            </div><!-- #module-catchids -->

            <!--#module-to-top-->
            <div id="module-to-top" class="catch-modules short-desc">
                <h3><?php _e( 'To Top', 'catch-web-tools' );?></h3>
                <p>
                    <?php _e( 'To Top plugin allows the visitor as well as admin to easily scroll back to the top of the page, with fully customizable options and ability to use image.', 'catch-web-tools' ); ?>
                </p>
                <div class="catch-actions">
                    <form method="post" action="options.php">
                        <?php
                            settings_fields( 'to-top-settings-group' );

                            $settings   =   catchwebtools_get_options( 'catchwebtools_to_top_options' );

                            if( ! empty ( $settings['status'] ) && $settings['status'] ) {
                                echo '<input type="hidden" value="0"  name="catchwebtools_to_top_options[status]"/>';

                                submit_button( __( 'Deactivate', 'catch-web-tools' ), 'secondary', 'submit', false );
                            }
                            else {
                                echo '<input type="hidden" value="1"  name="catchwebtools_to_top_options[status]"/>';

                                submit_button( __( 'Activate', 'catch-web-tools' ), 'primary', 'submit', false );
                            }
                        ?>

                        <a class="button-secondary" href="<?php echo esc_url( admin_url( 'admin.php?page=catch-web-tools-to-top' ) ); ?>"><?php _e( 'Configure', 'catch-web-tools' );?></a>
                    </form>
                </div>
            </div><!-- #module-to-top -->

            <div id="module-securi-tips" class="catch-modules-long">
                <h3><?php _e( 'Security Tips', 'catch-web-tools' ); ?></h3>

                <?php
                    if ( username_exists( 'admin' ) ) {
                        echo '<p>' . __( 'Caution!!! A user with username: admin exists, need to rename this username or remove it', 'catch-web-tools' ) . '</p>';
                    }
                    else {
                        echo '<p>' . __( 'Congratulations!!! You do not have any users with admin as username', 'catch-web-tools' ) . '</p>';
                    }
                ?>

                <?php
                    global $wpdb;

                    if ( 'wp_' == $wpdb->prefix ) {
                        echo '<p>' . __( 'Caution!!! WordPress Table Prefix is "wp_", need to change this prefix', 'catch-web-tools' ) . '</p>';
                    }
                    else {
                        echo '<p>' . __( 'Congratulations!!! WordPress Table Prefix is not "wp_"', 'catch-web-tools' ) . '</p>';
                    }

                ?>

                <?php
                    global $wp_version;

                    //Get latest WordPress version. More info: wp-admin/includes/updates.php
                    $update = get_core_updates();

                    if ( version_compare( $update[0] -> current, $wp_version, '<=' ) ) {
                        echo '<p>' . __( 'Congratulations!!! Your WordPress version is the latest.', 'catch-web-tools' ) . '</p>';
                    }
                    else {
                        echo '<p>' . sprintf( __( 'Caution!!! You do not have the current version of WordPress installed. The Current version is %1$s. Your installation version is %2$s Please update it %3$shere%4$s.', 'catch-web-tools' ) , $wp_version, $update[0] -> current, '<a href='. esc_url( admin_url( 'update-core.php' ) ) .'>', '</a>' ) .'</p>';
                    }

                    //echo print_r( get_core_updates() ) ;
                ?>
            </div><!-- #module-securi-tips -->

        </div><!-- #module-container -->
	</div><!-- #dashboard -->
</div><!-- .wrap -->