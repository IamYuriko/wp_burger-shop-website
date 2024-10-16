<footer class="l-footer">
    <div class="l-footer__inner">
        <div class="l-footer__contents">
            <?php
            // Define arguments for wp_nav_menu
            $footer_menu_args = array(
                'menu' => 'footermenu',  // Replace with your menu name
                'container' => false,
                'menu_class' => 'l-footer__menu c-flex c-flex--center',  // CSS class for the menu ul element
                'footer_li_class' => 'l-footer__item'
            );

            // Display the custom menu
            wp_nav_menu($footer_menu_args);
            ?>
            <p class="l-footer__copyright"><small>Copyright: RaiseTech</small></p>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>