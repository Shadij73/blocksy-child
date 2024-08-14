<?php
add_filter('wp_nav_menu_items', 'hide_admin_menu_item', 10, 2);
//Test comment01
function hide_admin_menu_item($items, $args) {
    if (!is_user_logged_in()) {
        if (stripos($items, 'Admin') !== false) {
            $items = preg_replace('/<li.*?<a.*?>.*?Admin.*?<\/a><\/li>/i', '', $items);
        }
    }
    return $items;
}
//Test comment02
?>
