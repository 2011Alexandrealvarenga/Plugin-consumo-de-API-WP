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

// recurso de segurança
if(!function_exists('add_action')){
    echo 'Opa! eu sou só um plugin, não posso ser chamado diretamente';
    exit;
}

// setup
define('API_URL', __FILE__);

// includes
include('inc/api.php');
include('inc/enqueue.php');

// hooks
add_action('wp_enqueue_scripts', 'br_api_css'); //style e script
add_action('rest_api_init','get_api_ajax_endpoint');
add_shortcode('rest-ajax','shortcode_consumindo_api');

function shortcode_consumindo_api($resultado){
    $resultado = consumindo_api_ajax_callback();
    ?>
    <div class="container">
        <div class="row">
            <div class="col">            
                <?php 
                foreach($resultado->data as $get_result){?>
                <p>titulo: <?php echo $get_result->title ;?></p> 
                <img  width="200px" height="200px" src="<?php echo substr($get_result->images->downsized_large->url,0,-5);?>"><br>
                <?php  }?>
            </div>
        </div>
    </div>
<?php }?>