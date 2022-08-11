<?php 

/*
Plugin Name: Consumindo API - WP
Plugin URI: 
Description: Consumo de API utilizando as funções do wp
Version: 1.0
Author: 
Author URI: 
License: GLPV2
Text Domain: segundo plugin
*/

// setup
define('API_URL', __FILE__);

// includes
// include('inc/api.php');
// include('inc/enqueue.php');
// require 'inc/resultado-dados.php'; 

add_action('init','consumindo_api');

function consumindo_api(){

    $url = 'https://api.giphy.com/v1/gifs/trending?api_key=pLURtkhVrUXr3KG25Gy5IvzziV5OrZGa';
    $arguments = array(
        'method' => 'GET'
    );

    $response = wp_remote_get($url, $arguments);

    if(is_wp_error($response)){
        $error_message = $response->get_error_message();
        return 'mensagem de erro: ' .$error_message;
    }else{
        $response;
    }


    $resultado = wp_remote_retrieve_body($response);

    return $resultado;
}

$resultado = consumindo_api();


echo '<pre>';
    print_r($resultado->data);
echo '</pre>';
?>
 


<?php 





    // $responseEmbed = wp_remote_get( $urlEmbed, array(
    //     'method'      => 'GET'
    //     )
    // );
    
    // if ( is_wp_error( $responseEmbed ) ) {
    //     return false;
    // } else {
    //     $rEmbed = wp_remote_retrieve_body( $responseEmbed );
    //     $jsonEmbed = json_decode($rEmbed, true);       
    
    // }
    
    // echo '<pre>';
    //     echo print_r($jsonEmbed);
    // echo '</pre>';
