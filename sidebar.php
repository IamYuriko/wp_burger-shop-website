<aside class="l-sidebar">
        <div class="l-sidebar__inner">
                <nav class="p-sideMenu">
                        <button class="p-sideMenu__closeBtn"></button>
                        <section class="p-sideMenu__contents">
                                <h2 class="p-sideMenu__title c-title c-title--s u-hide--tab">Menu</h2>
                                <?php
                                // Define arguments for wp_nav_menu
                                $menu_args = array(
                                        'menu' => 'cateogrymenu',  // Replace with your menu name
                                        'container' => false,
                                        'menu_class' => 'p-sideMenu__lists',  // CSS class for the menu ul element
                                );
                                // Display the custom menu
                                wp_nav_menu($menu_args);
                                ?>
                        </section>
                </nav>
        </div>
</aside>