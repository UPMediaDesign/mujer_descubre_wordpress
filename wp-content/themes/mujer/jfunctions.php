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

add_action('init', 'testimonios_register');
function testimonios_register() {
    $args = array(
        'label' => 'Testimonios',
        'singular_label' => 'Testimonio',
        'public' => true,
        'menu_position' => 14, 
        '_builtin' => false,
        'capability_type' => 'post',
        'has_archive' => false,
        'hierarchical' => false,
        'rewrite' => array( 'slug' => 'testimonios'),
        'supports' => array('title', 'editor' , 'excerpt' , 'thumbnail' )
    );
    register_post_type('testimonio', $args);
    flush_rewrite_rules();
}

add_action('init', 'videos_register');
function videos_register() {
    $args = array(
        'label' => 'Videos',
        'singular_label' => 'Video',
        'public' => true,
        'menu_position' => 14, 
        '_builtin' => false,
        'capability_type' => 'post',
        'has_archive' => false,
        'hierarchical' => false,
        'rewrite' => array( 'slug' => 'videos'),
        'supports' => array('title', 'editor' , 'excerpt' , 'thumbnail' )
    );
    register_post_type('videos', $args);
    flush_rewrite_rules();
}

?>
<?php 

function remove_comment_fields($fields) {
    unset($fields['url']);
    return $fields;
}
add_filter('comment_form_default_fields','remove_comment_fields');

function add_comment_fields($fields) {
 	
	$fields['apellido'] = '<div class="col-md-6"><p class="comment-form-apellido">' .
        '<input id="apellido" name="apellido" placeholder="Apellido" type="text" /></p></div>';
 
    $fields['edad'] = '<div class="col-md-6"><p class="comment-form-edad">' .
        '<input id="edad" name="edad" type="text" size="30" placeholder="Edad" /></p></div>';
		
    return $fields;
	
	
 
}
add_filter('comment_form_default_fields','add_comment_fields');

function add_comment_meta_values($comment_id) {
 
    if(isset($_POST['edad'])) {
        $edad = wp_filter_nohtml_kses($_POST['edad']);
        add_comment_meta($comment_id, 'edad', $edad, false);
    }
	
	 if(isset($_POST['apellido'])) {
        $apellido = wp_filter_nohtml_kses($_POST['apellido']);
        add_comment_meta($comment_id, 'apellido', $apellido, false);
    }
 
}
add_action ('comment_post', 'add_comment_meta_values', 1);
?>