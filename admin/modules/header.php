<?php
/**
 * @package Admin
 * @sub-package Header
 */
 ?>
<div id="plugin-option-header">
    <?php
		//Only display social facebook and twitter buttons on dashboard
		if ( isset($_GET['page'] ) && ( $_GET['page'] == 'catch-web-tools' ) )  : ?>
		<div id="plugin-social">
        <ul>
            <li class="widget-fb">
                <div data-show-faces="false" data-width="80" data-layout="button_count" data-send="false" data-href="<?php echo esc_url( __('https://facebook.com/catchthemes', 'catch-web-tools' ) ); ?>" class="fb-like"></div></li>
            <li class="widget-tw">
                <a data-dnt="true" data-show-screen-name="true" data-show-count="true" class="twitter-follow-button" href="<?php echo esc_url( __('https://twitter.com/catchthemes', 'catch-web-tools' ) ); ?>">Follow @catchthemes</a>
            </li>
        </ul>
    </div><!-- #plugin-social -->
    <?php endif; ?>
    <div id="plugin-option-title">
        <h2 class="title"><?php _e( 'Catch Web Tools By', 'catch-web-tools' ); ?></h2>
        <h2 class="logo">
            <a href="<?php echo esc_url( __( 'https://catchthemes.com/', 'catch-web-tools' ) ); ?>" title="<?php esc_attr_e( 'Catch Themes', 'catch-web-tools' ); ?>" target="_blank">
                <img src="<?php echo CATCHWEBTOOLS_URL.'images/catch-themes.png'; ?>" alt="<?php _e( 'Catch Themes', 'catch-web-tools' ); ?>" />
            </a>
        </h2>
    </div><!-- #plugin-option-title -->

    <div id="plugin-support">
        <ul>
            <li><a class="button" href="<?php echo esc_url( __('https://catchthemes.com/forum/catch-web-tools/', 'catch-web-tools' )); ?>" title="<?php esc_attr_e('Support Forum', 'catch-web-tools' ); ?>" target="_blank"><?php printf(__('Support Forum', 'catch-web-tools' )); ?></a></li>
            <li><a class="button" href="<?php echo esc_url( __('https://catchthemes.com/wp-plugins/catch-web-tools/', 'catch-web-tools' )); ?>" title="<?php esc_attr_e('Plugin Details', 'catch-web-tools' ); ?>" target="_blank"><?php printf(__('Plugin Details', 'catch-web-tools' ) ); ?></a></li>
            <li><a class="button" href="<?php echo esc_url( __('https://www.facebook.com/catchwebtools/', 'catch-web-tools' ) ); ?>" title="<?php esc_attr_e( 'Like Catch Themes on Facebook', 'catch-web-tools' ); ?>" target="_blank"><?php printf(__('Facebook', 'catch-web-tools' )); ?></a></li>
            <li><a class="button" href="<?php echo esc_url( __('https://twitter.com/catchwebtools/', 'catch-web-tools' ) ); ?>" title="<?php esc_attr_e( 'Follow Catch Themes on Twitter', 'catch-web-tools' ); ?>" target="_blank"><?php printf( __('Twitter', 'catch-web-tools' ) ); ?></a></li>
            <li><a class="button" href="<?php echo esc_url( __('https://wordpress.org/support/view/plugin-reviews/catch-web-tools', 'catch-web-tools' ) ); ?>" title="<?php esc_attr_e('Rate us 5 Star on WordPress', 'catch-web-tools' ); ?>" target="_blank"><?php printf( __('5 Star Rating', 'catch-web-tools' ) ); ?></a></li>
        </ul>
    </div><!-- #plugin-support -->
</div><!-- #plugin-option-header -->

<?php if( isset($_GET['settings-updated']) ) { ?>

<div id="message" class="updated fade">
	<p><strong><?php _e( 'Plugin Options Saved.', 'catch-web-tools' ) ?></strong></p>
</div>

<?php }