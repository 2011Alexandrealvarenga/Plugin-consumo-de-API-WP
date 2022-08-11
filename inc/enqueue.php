<?php 

// include 'assets/css/style.css';

function br_api_css(){
    wp_register_style(
        'br_style',
        plugins_url('assets/css/style.css', API_URL)
    );

    wp_register_style(
        'br_bootstrap',
        plugins_url('assets/css/bootstrap.css', API_URL)
    );

    wp_enqueue_style('br_style');
    wp_enqueue_style('br_bootstrap');
}