<?php

    /** Step 1. */
    function update_car_info() {
        add_options_page( 'Update Car', 'Update Car', 'manage_options', 'my-unique-identifier', 'update_car_info_page' );
    }
    
    /** Step 2 (from text above). */
    add_action( 'admin_menu', 'update_car_info' );

    /** Step 3. */
    function update_car_info_page() {
        if ( !current_user_can( 'manage_options' ) )  {
            wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
        }
        echo '<div class="wrap">';
        echo '<p>Here is where the form would go if I actually had options.</p>';
        echo '</div>';
    }
?>