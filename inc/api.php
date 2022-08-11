<?php
function get_api_ajax_endpoint(){
    register_rest_route(
        'techiepress',
        'rest-ajax',
        [
            'methods'               =>  'GET',
            'permission_callback'   =>  '__return_true',
            'callback'              =>  'consumindo_api_ajax_callback',
        ]
        );
}

function consumindo_api_ajax_callback(){
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

    $resultado = json_decode(wp_remote_retrieve_body($response));
    return $resultado;
    
}