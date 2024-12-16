<?php
/**
 * Plugin Name: WP Welcome Plugin
 * Plugin URI: https://github.com/KaISBC/wp-welcome-plugin
 * Description: Un semplice plugin WordPress per mostrare un messaggio di benvenuto personalizzato in cima ai post.
 * Version: 1.0
 * Author: KaISBC
 * Author URI: https://github.com/KaISBC
 * License: MIT
 */

// Evita l'accesso diretto al file
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// Aggiunge il messaggio di benvenuto in cima ai post
function wp_welcome_message( $content ) {
    if ( is_single() ) { // Mostra solo sui post singoli
        $welcome_message = '<p style="background-color: #f0f8ff; padding: 10px; border-left: 4px solid #0073aa;">'
                         . 'Benvenuto nel nostro blog! Grazie per la tua visita.'
                         . '</p>';
        return $welcome_message . $content;
    }
    return $content;
}
add_filter( 'the_content', 'wp_welcome_message' );
