<?php 

add_image_size( 'tratamiento',450, 450, true);

add_action('init', 'preguntas_frecuentes_register');
function preguntas_frecuentes_register() {
    $args = array(
        'label' => 'Preguntas Frecuentes',
        'singular_label' => 'Pregunta',
        'public' => true,
        'menu_position' => 14, 
        '_builtin' => false,
        'capability_type' => 'post',
        'has_archive' => false,
        'hierarchical' => false,
        'rewrite' => array( 'slug' => 'preguntas-frecuentes'),
        'supports' => array('title', 'editor' , 'excerpt' , 'thumbnail' )
    );
    register_post_type('preguntas_frecuentes', $args);
    flush_rewrite_rules();
}

add_action('init', 'tratamientos_register');
function tratamientos_register() {
    $args = array(
        'label' => 'Tratamientos',
        'singular_label' => 'tratamientos',
        'public' => true,
        'menu_position' => 14, 
        '_builtin' => false,
        'capability_type' => 'post',
        'has_archive' => false,
        'hierarchical' => false,
        'rewrite' => array( 'slug' => 'tratamientos'),
        'supports' => array('title', 'editor' , 'excerpt' , 'thumbnail' )
    );
    register_post_type('tratamientos', $args);
    flush_rewrite_rules();
}

?>