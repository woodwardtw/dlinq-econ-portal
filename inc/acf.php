<?php
/**
 * UnderStrap ACF specific
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;


//resources
function resource_image(){
    if(get_field('featured_image')){
        $img_data = get_field('featured_image');
        $url = $img_data['url'];
        $alt = $img_data['alt'];
        return "<img src='{$url}' alt='{$alt}' class='resource_image'>";
    } else {
        $img_url = get_stylesheet_directory() . '/imgs/network.png';
        return "<img src='' alt='Random image meant to convey the idea of data.' class='resource-image'>";
    }
}

function econ_details($field){
    if(get_field($field)){
        $html = '';
        $resources = get_field($field);
        //var_dump($resources);
        foreach ($resources as $key => $resource) {
            // code...
            $name = $resource->name;
            $html .= "<div class='resource-item'>{$name}</div>";
        }
        return $html;
    } else {
        return 'Not found.';
    }
}



    //save acf json
        add_filter('acf/settings/save_json', 'econ_portal_json_save_point');
         
        function econ_portal_json_save_point( $path ) {
            
            // update path
            $path = get_stylesheet_directory() . '/acf-json'; //replace w get_stylesheet_directory() for theme
            
            
            // return
            return $path;
            
        }


        // load acf json
        add_filter('acf/settings/load_json', 'econ_portal_json_load_point');

        function econ_portal_json_load_point( $paths ) {
            
            // remove original path (optional)
            unset($paths[0]);
            
            
            // append path
            $paths[] = get_stylesheet_directory()  . '/acf-json';//replace w get_stylesheet_directory() for theme
            
            
            // return
            return $paths;
            
        }