
<?php


add_theme_support('menus');
add_theme_support('post-thumbnails');

function add_additional_class_on_li($classes, $item, $args) {
    if(isset($args->add_li_class)) {
        $classes[] = $args->add_li_class;
    }
    return $classes;
}


add_theme_support('woocommerce');
//search form 




//shop product 
function shop_page_products(){
     // query arguments 
     $args_shop = array(
         'post_type' => 'product',
         'product_tag' => 'Featured',

     );
     // run the loop 
     $query = new WP_Query($args_shop);
     if ( $query ->  have_posts() ) { }
       
      

}
add_action('','');
?>



