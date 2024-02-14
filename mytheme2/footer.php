
<footer>

    <section class="container">

        <div class="column"><span class="category">Om</span>
        <?php
                        $menu = array(
                            'theme_location' => 'footer_om',
                            'menu_id' => 'footer_om',
                            'container' => 'nav-container',
                            'container_class' => "menu"
                        );

                        wp_nav_menu($menu);
                    ?>
        </div>


        
        
        <div class="column"><span class="category">Kundservice</span>
        <?php
                        $menu = array(
                            'theme_location' => 'footer_kundservice',
                            'menu_id' => 'footer_kundservice',
                            'container' => 'nav-container',
                            'container_class' => "menu"
                        );

                        wp_nav_menu($menu);
                    ?>
                    
        </div>
        


        <div class="column"><span class="category">Sociala medier</span>
    
        <?php
                        $menu = array(
                            'theme_location' => 'footer_socialamedier',
                            'menu_id' => 'footer_socialamedier',
                            'container' => 'nav-container',
                            'container_class' => "menu"
                        );

                        wp_nav_menu($menu);
                    ?>



                
        </div>
        


    </section>

</footer>



    </body>
</html>

