<?php
/**
 * @package Admin
 * @sub-package Navigation
 */
 ?>
<ul class="tabNavigation" id="mainNav">
    <li <?php echo ( isset( $_GET['page'] ) && 'catch-web-tools' == $_GET['page'] )? 'class="ui-state-active"':'' ?>>
        <a href="<?php echo admin_url( 'admin.php?page=catch-web-tools' ); ?>"><?php _e( 'Dashboard', 'catch-web-tools' );?></a>
    </li>

    <li <?php echo ( isset( $_GET['page'] ) && 'catch-web-tools-webmasters' == $_GET['page'] )? 'class="ui-state-active"':'' ?>>
        <a href="<?php echo admin_url( 'admin.php?page=catch-web-tools-webmasters' ); ?>"><?php _e( 'Webmaster Tools', 'catch-web-tools' );?></a>
    </li>

    <li <?php echo ( isset( $_GET['page'] ) && 'catch-web-tools-custom-css' == $_GET['page'] )? 'class="ui-state-active"':'' ?>>
        <a href="<?php echo admin_url( 'admin.php?page=catch-web-tools-custom-css' ); ?>"><?php _e( 'Custom CSS', 'catch-web-tools' );?></a>
    </li>

    <li <?php echo ( isset( $_GET['page'] ) && 'catch-web-tools-social-icons' == $_GET['page'] )? 'class="ui-state-active"':'' ?>>
        <a href="<?php echo admin_url( 'admin.php?page=catch-web-tools-social-icons' ); ?>"><?php _e( 'Social Icons', 'catch-web-tools' );?></a>
    </li>

   <li <?php echo ( isset( $_GET['page'] ) && 'catch-web-tools-opengraph' == $_GET['page'] )? 'class="ui-state-active"':'' ?>>
        <a href="<?php echo admin_url( 'admin.php?page=catch-web-tools-opengraph' ); ?>"><?php _e( 'Open Graph', 'catch-web-tools' );?></a>
    </li>

    <li <?php echo ( isset( $_GET['page'] ) && 'catch-web-tools-seo' == $_GET['page'] )? 'class="ui-state-active"':'' ?>>
        <a href="<?php echo admin_url( 'admin.php?page=catch-web-tools-seo' ); ?>"><?php _e( 'SEO', 'catch-web-tools' );?></a>
    </li>

    <li <?php echo ( isset( $_GET['page'] ) && 'catch-web-tools-to-top' == $_GET['page'] )? 'class="ui-state-active"':'' ?>>
        <a href="<?php echo admin_url( 'admin.php?page=catch-web-tools-to-top' ); ?>"><?php _e( 'To Top', 'catch-web-tools' );?></a>
    </li>
</ul><!-- .tabsNavigation #mainNav -->