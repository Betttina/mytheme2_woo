

<?php

function mytheme_enqueue(){
    // wp-content/themes/mythemes
    $theme_directory = get_template_directory_uri();
    wp_enqueue_style("mystyle", $theme_directory . "/style.css");
    // wp_enqueue_script("app", $theme_directory . "/app.js");

    // $data = array();
    // $data["option"] = get_option("myoption");
    // $data["color"] = "blue";
    // $data["name"] = get_option("admin_email");

    // // vilken fil, objekt, datan.
    // // lägger till array i skriptet
    // wp_localize_script("app", "myvariables", $data);
}


// hook
// kallar på funk, kör.
add_action('wp_enqueue_scripts', 'mytheme_enqueue');

// regga meny
// det finns
// dessa finns i vårt tema och vi har döpt det till detta
function mytheme_init(){
    $menu = array(
        'huvudmeny' => "huvudmeny",
        'footer_om' => "footer_om",
        'footer_kundservice' => "footer_kundservice",
        'footer_socialamedier' => "footer_socialamedier",
	    'sekundärmeny' => 'secondary-menu',

    );

    register_nav_menus($menu);
}

add_action('after_setup_theme', 'mytheme_init');
