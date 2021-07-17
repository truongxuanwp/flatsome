<?php
add_action( 'init', 'hide_notice' );
function hide_notice() {
    if( is_admin() ) {
        remove_action( 'admin_notices', 'flatsome_maintenance_admin_notice' );
    }
}
