<?php
 
 /*------------------------------------*\
     Functions
 \*------------------------------------*/
 // Cria custom post type
 
 function custom_posts_theme() {

    register_post_type('servicos',
        array(
            'labels' => array(
                'name' => ('Serviços'),
                'singular_name' => ('Serviços'),
                'add_new_item' => ('Add Serviços'),
                'not_found' =>  ('Nenhuma Serviços encontrada')
            ),
            'public' => true,
            'menu_icon' => 'dashicons-chart-pie',
            'publicly_queryable' => true,
            'rewrite' => array("slug" => "service"),
            'capability_type'    => 'post',
            'supports' => array('title', 'editor', 'thumbnail'),
            'has_archive' => true,
            'hierarchical' => true,
        )
    );

}

add_action('init', 'custom_posts_theme');