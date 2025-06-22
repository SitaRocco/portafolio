<?php
function cargar_estilos() {
    wp_enqueue_style('estilo-principal', get_template_directory_uri() . '/assets/css/style.css');
}

add_action('wp_enqueue_scripts', 'cargar_estilos'); 

?>