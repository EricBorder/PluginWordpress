<?php
/*
Plugin Name: Palabras Malsonantes
Plugin URI:
Description: Busca palabras malsonantes y las cambia por sinónimos más aceptables
Author. Sergio Fernández
Version: 1.0
Author URI:
*/

function cambiar_palabras_malsonantes( $content ) {
    $malsonantes = array('caca','culo','pedo','pis','pirola');
    $aceptables = array('excremento','trasero','flatulencia','orina','pene');

    return str_replace( $malsonantes, $aceptables, $content );
}

add_filter( 'the_content', 'cambiar_palabras_malsonantes' );
