<?php
 
 /*------------------------------------*\
     Functions
 \*------------------------------------*/
 // Cria custom post type
 
 function custom_posts_theme() {

    register_post_type('solucoes',
        array(
            'labels' => array(
                'name' => ('Soluções'),
                'singular_name' => ('Soluções'),
                'add_new_item' => ('Add Soluções'),
                'not_found' =>  ('Nenhuma Soluções encontrada')
            ),
            'public' => true,
            'menu_icon' => 'dashicons-hammer',
            'publicly_queryable' => true,
            'rewrite' => array("slug" => "solucoes"),
            'capability_type'    => 'post',
            'supports' => array('title', 'editor', 'thumbnail'),
            'has_archive' => true,
            'hierarchical' => true,
        )
    );

}

add_action('init', 'custom_posts_theme');