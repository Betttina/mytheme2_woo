<html>
    <head>
        <title><?= get_option("blogname");?></title>
        <?php wp_head();?>
    </head>
    <body>
        <?php wp_body_open(); ?>
        <?php if(!empty(get_option("store_message"))) : ?>
        <div class="site-message">
            <p><?= get_option("store_message") ?></p>
        </div>
        <?php endif; ?>

        <?php wp_body_open();?>
        <header>

            <div class="column-1 header-title">
                <h1><a href="<?php echo esc_url(home_url('/')); ?>"><?= get_option("blogname"); ?></a></h1>
            </div>


                <div class="column-50">
                    <?php
                        $menu = array(
                            'theme_location' => 'huvudmeny',
                            'menu_id' => 'primary-menu',
                            'container' => 'nav-container',
                            'container_class' => "main-navigation",
                            'menu_class'     => 'menu-items',
                        );

                        wp_nav_menu($menu);
                    ?>
                </div>


            <div class="column-1">
	            <?php
	            $menu = array(
		            'theme_location' => 'sekundärmeny',
		            'menu_id' => 'secondary-menu',
		            'container' => 'nav-container',
		            'container_class' => "secondary-navigation",
		            'menu_class'     => 'login-items',
	            );

	            wp_nav_menu($menu);
	            ?>
            </div>
        </header>

