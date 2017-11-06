<?php
function refactor_nav_menu_class( $classes ) {
    return array_intersect($classes, array(
        'menu-item',
        'menu-item-has-children'
    ));
}
add_filter( 'nav_menu_css_class', 'refactor_nav_menu_class' );
?>
