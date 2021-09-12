
<?php


add_theme_support('menus');
add_theme_support('post-thumbnails');

function add_additional_class_on_li($classes, $item, $args) {
    if(isset($args->add_li_class)) {
        $classes[] = $args->add_li_class;
    }
    return $classes;
}



//search form 


?>



