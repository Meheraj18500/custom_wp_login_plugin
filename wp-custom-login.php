<?php
/**
 * Plugin Name:       Login Page Customizer
 * Plugin URI:        https://wordpress.org/plugins/wp-login-customizer/
 * Description:       This is a Custom Login design plugin. You can change your wordpress Signup & Login interface. 
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Meheraj
 * Author URI:        https://developermeheraj.com/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       wpcl
 */


  // Plugin Admin Page Style
  add_action( "admin_enqueue_scripts", "wpcl_enqueue_admin_style" );
  function wpcl_enqueue_admin_style(){
    wp_enqueue_style('wpcl-admin-style', plugins_url('css/wpcl-admin-style.css', __FILE__));
  }

  // Plugin Option Page Function
  add_action( 'admin_menu', 'wpcl_add_theme_page' );
  function wpcl_add_theme_page(){
    add_menu_page('Wp Login Customizer', 'Login Customizer', 'manage_options', 'wpcl-plugin-option', 'wpcl_create_page', 'dashicons-admin-customizer', '100');
  }

  // Plugin Callback
  function wpcl_create_page(){
    ?>
      <div class="wpcl_area">
        <div class="wpcl_content_area area_common">
          <h2 id="title"><?php print esc_attr( 'Login Page Customizar' ) ?></h2>
          <form action="options.php" method="post">
            <?php wp_nonce_field( 'update-options' ); ?>

            <!-- All Color style -->
            <h3 id="title"><?php print esc_attr( 'All Color Style' ) ?></h3>
            <div class="all_color_style">
              
              <!-- Plugin Primary Color -->
              <div class="form-group">
                <label for="wpcl_primary_color" name="wpcl_primary_color"><?php print esc_attr( 'Primary Color' ); ?></label>
                <input type="color" name="wpcl_primary_color" value="<?php 
                $my_options = get_option('wpcl_primary_color');
                echo esc_attr( $my_options ) ? $my_options : '#ffffff' ?>">
              </div>
              
              <!-- Plugin secondary Color -->
              <div class="form-group">
                <label for="wpcl_secondary_color" name="wpcl_secondary_color"><?php print esc_attr( 'Secondary Color' ); ?></label>
                <input type="color" name="wpcl_secondary_color" value="<?php 
                $my_options = get_option('wpcl_secondary_color');
                echo esc_attr( $my_options ) ? $my_options : '#231837' ?>">
              </div>
              
              <!-- Body Background Color -->
              <div class="form-group">
                <label for="wpcl_body_bg_color" name="wpcl_body_bg_color"><?php print esc_attr( 'Body Background Color' ); ?></label>
                <input type="color" name="wpcl_body_bg_color" value="<?php 
                $my_options = get_option('wpcl_body_bg_color');
                echo esc_attr( $my_options ) ? $my_options : '#0B1218' ?>">
              </div>
              
              <!-- Card Background Color -->
              <div class="form-group">
                <label for="wpcl_card_bg_color" name="wpcl_card_bg_color"><?php print esc_attr( 'Card Background Color' ); ?></label>
                <input type="color" name="wpcl_card_bg_color" value="<?php 
                $my_options = get_option('wpcl_card_bg_color');
                echo esc_attr( $my_options ) ? $my_options : '#ffffff' ?>">
              </div>
              
              <!-- Card Border Color -->
              <div class="form-group">
                <label for="wpcl_card_border_color" name="wpcl_card_border_color"><?php print esc_attr( 'Card Border Color' ); ?></label>
                <input type="color" name="wpcl_card_border_color" value="<?php 
                $my_options = get_option('wpcl_card_border_color');
                echo esc_attr( $my_options ) ? $my_options : '#f9f9f9' ?>">
              </div>
              
              <!-- logo Background Color -->
              <div class="form-group">
                <label for="wpcl_logo_bg_color" name="wpcl_logo_bg_color"><?php print esc_attr( 'Logo Background Color' ); ?></label>
                <input type="color" name="wpcl_logo_bg_color" value="<?php 
                $my_options = get_option('wpcl_logo_bg_color');
                echo esc_attr( $my_options ) ? $my_options : '#ffffff' ?>">
              </div>
            </div>

            <!-- Width and Height style -->
            <div class="all_size">
              <h3 id="title"><?php print esc_attr( 'Width & Height Style' ) ?></h3>
              <!-- Card Width -->
              <div class="form-group">
                <label for="wpcl_card_width" name="wpcl_card_width"><?php print esc_attr( 'Enter Card Width' ); ?></label>
                <input type="text" name="wpcl_card_width" placeholder="Width" value="<?php 
                $my_options = get_option('wpcl_card_width');
                echo esc_attr( $my_options ) ? $my_options : '450px' ?>">
              </div>
              <!-- Logo Width -->
              <div class="form-group">
                <label for="wpcl_logo_width" name="wpcl_logo_width"><?php print esc_attr( 'Logo Width' ); ?></label>
                <input type="text" name="wpcl_logo_width" placeholder="Width" value="<?php 
                $my_options = get_option('wpcl_logo_width');
                echo esc_attr( $my_options ) ? $my_options : '200px' ?>">
              </div>
              <!-- Logo Height -->
              <div class="form-group">
                <label for="wpcl_logo_height" name="wpcl_logo_height"><?php print esc_attr( 'Logo Height' ); ?></label>
                <input type="text" name="wpcl_logo_height" placeholder="46px" value="<?php 
                $my_options = get_option('wpcl_logo_height');
                echo esc_attr( $my_options ) ? $my_options : '46px' ?>">
              </div>
            </div>

            <!-- Logo or Image Url -->
            <div class="all_upload">
              <h3 id="title"><?php print esc_attr( 'Logo or Image URL' ) ?></h3>
              <!-- Background image upload -->
              <div class="form-group">
                <label for="wpcl_bg_upload" name="wpcl_bg_upload"><?php print esc_attr( 'Background Image' ); ?></label>
                <input type="url" name="wpcl_bg_upload" placeholder="Past Your Background URL" value="<?php print get_option('wpcl_bg_upload'); ?>">
              </div>
              <!-- Logo upload -->
              <div class="form-group">
                <label for="wpcl_logo_upload" id="wpcl_logo_upload" name="wpcl_logo_upload"><?php print esc_attr( 'Your Logo' ); ?></label>
                <input type="url" name="wpcl_logo_upload" placeholder="Past Your Logo URL" value="<?php print get_option('wpcl_logo_upload'); ?>">
              </div>
            </div>



            <input type="hidden" name="action" value="update">
            <input type="hidden" name="page_options" value="wpcl_body_bg_color, wpcl_bg_upload, wpcl_card_bg_color, wpcl_card_border_color, wpcl_card_width, wpcl_primary_color, wpcl_secondary_color, wpcl_logo_bg_color, wpcl_logo_width, wpcl_logo_height, wpcl_logo_upload">
            <input type="submit" name="submit" class="button button-primary" value="<?php _e('Save Changes', 'wpcl'); ?>">
          </form>
        </div>
        
        <div class="wpcl_sidebar_area area_common">
          <h2 id="title"><?php print esc_attr( 'Author Info' ) ?></h2>
          <div class="author_card">
            <img src="<?php print plugin_dir_url( __FILE__ ) . 'img/meheraj.jpg' ?>" alt="Meheraj">
            <h3>Developer Meheraj</h3>
            <p>I'm a professional WordPress & Web Developer.</p>
            <ul class="social_link">
              <li><a target="_blank" href="https://developermeheraj.com/"><span class="dashicons dashicons-admin-site"></span></a></li>
              <li><a target="_blank" href="https://www.linkedin.com/in/meheraj185/"><span class="dashicons dashicons-linkedin"></span></a></li>
              <li><a target="_blank" href="https://www.instagram.com/meheraj1850/"><span class="dashicons dashicons-instagram"></span></a></li>
              <li><a target="_blank" href="link"><span class="dashicons dashicons-youtube"></span></a></li>
              <li><a target="_blank" href="https://www.facebook.com/meheraj185/"><span class="dashicons dashicons-facebook-alt"></span></a></li>
            </ul>
          </div>
          <div class="donation_link">
            <div class="donation_box">
              <h3>Donation For Meheraj</h3>
              <a href="https://bmc.link/meheraj185" ><img src="<?php print plugin_dir_url( __FILE__ ) . 'img/donation.png' ?>" alt="Buy me a coffee"></a>
            </div>
          </div>
        </div>
      </div>
    <?php
  }

  // Loading CSS file
  add_action('login_enqueue_scripts','wpcl_login_enqueue_register');
  function wpcl_login_enqueue_register(){
    wp_enqueue_style( 'wpcl_login_css', plugins_url( 'css/wpcl-style.css', __FILE__ ), false, "1.0.0");
  }

  // Login form Dynamic Style
  add_action( 'login_enqueue_scripts', 'wpcl_login_logo_change');
  function wpcl_login_logo_change(){
    ?>
    <style>

      #login h1 a, .login h1 a{
        background-image: url(<?php 
        $my_options = get_option('wpcl_logo_upload');
        echo esc_attr( $my_options ) ? $my_options : plugin_dir_url( __FILE__ ) . 'img/logo.png'; ?>) !important;
      }
      body.login {
        background-image: url(<?php 
        $my_options = get_option('wpcl_bg_upload');
        echo esc_attr( $my_options ) ? $my_options : plugin_dir_url( __FILE__ ) . 'img/Frame\ 14.jpg'; ?>) !important;
      }

      body.login::after {
        background: <?php print get_option('wpcl_body_bg_color'); ?> !important;
      }
      body.login #login h1 {
        background-color: <?php print get_option('wpcl_logo_bg_color'); ?> !important;
      }
      body.login #login h1 a, body.login .login h1 a {
        width: <?php print get_option('wpcl_logo_width'); ?> !important;
        height: <?php print get_option('wpcl_logo_height'); ?> !important;
      }
      body.login #login {
        background-color: <?php print get_option('wpcl_card_bg_color'); ?> !important;
        border: 0px solid <?php print get_option('wpcl_card_border_color'); ?> !important;
        width: <?php print get_option('wpcl_card_width'); ?> !important;
      }
      body.login #loginform {
        background-color: <?php print get_option('wpcl_card_bg_color'); ?> !important;
        border-top: 1px solid <?php print get_option('wpcl_card_border_color'); ?> !important;
        border-bottom: 1px solid <?php print get_option('wpcl_card_border_color'); ?> !important;
      }
      #login form p.submit input {
        background: <?php print get_option('wpcl_primary_color'); ?> !important;
        border-color: <?php print get_option('wpcl_primary_color'); ?> !important;
        color: <?php print get_option('wpcl_secondary_color'); ?> !important;
      }
      #login form p.submit input:hover {
        background: <?php print get_option('wpcl_primary_color'); ?> !important;
        color: <?php print get_option('wpcl_secondary_color'); ?> !important;
      }
      .login #backtoblog a, .login #nav a {
        color: <?php print get_option('wpcl_primary_color'); ?> !important;
      }
      
      #login #login_error, #login .message, #login .success{
        background: <?php print get_option('wpcl_primary_color'); ?> !important;
        color: <?php print get_option('wpcl_secondary_color'); ?> !important;
    }

    </style>

    <?php
  }


  // Changing Login form logo url
  add_filter( 'login_header_url', 'wpcl_login_logo_url_change');
  function wpcl_login_logo_url_change(){
    return home_url();
  }

  /*
  * Redirect Plugin 
  */
  register_activation_hook( __FILE__, 'wpcl_activation_plugin' );
  function wpcl_activation_plugin(){
    add_option('wpcl_plugin_activation_command', true);
  }

  add_action( 'admin_init', 'wpcl_redirect_plugin');
  function wpcl_redirect_plugin(){
    if(get_option('wpcl_plugin_activation_command', false)){
      delete_option('wpcl_plugin_activation_command');
      if(!isset($_GET['active-multi'])){
        wp_safe_redirect(admin_url( 'admin.php?page=wpcl-plugin-option' ));
        exit;
      }
    }
  }
  
    
  ?>