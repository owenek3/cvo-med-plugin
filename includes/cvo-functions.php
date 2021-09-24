<?php

add_action( 'admin_menu', 'cvo_Add_My_Admin_Link' );
// Add a new top level menu link to the ACP
function cvo_Add_My_Admin_Link()
{
      add_menu_page(
        'CVO MED Plugin', // Title of the page
        'CVO MED', // Text to show on the menu link
        'manage_options', // Capability requirement to see the link
        'includes/cvo-first-page.php' // The 'slug' - file to display when clicking the link
    );
}