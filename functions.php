<?php 


function add_responsive_class($content){

        $content = mb_convert_encoding($content, 'HTML-ENTITIES', "UTF-8");
        $document = new DOMDocument();
        libxml_use_internal_errors(true);
        $document->loadHTML(utf8_decode($content));

        $imgs = $document->getElementsByTagName('img');
        foreach ($imgs as $img) {
           $img->setAttribute('class','myImages');

        }

        $html = $document->saveHTML();
        return $html;
}

function cereal_files(){
	
	wp_enqueue_script( 'script', get_template_directory_uri() . '/js/script.js', array ( 'jquery' ), 1.1, true);
	wp_enqueue_style('cereal_main_styles', get_stylesheet_uri());

}


add_theme_support( 'post-thumbnails' );
add_action('wp_enqueue_scripts', 'cereal_files');
add_filter('the_content', 'add_responsive_class');