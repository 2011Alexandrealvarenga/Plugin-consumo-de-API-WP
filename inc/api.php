<?php




//     $url = "https://api.giphy.com/v1/gifs/trending?api_key=pLURtkhVrUXr3KG25Gy5IvzziV5OrZGa";
//     $ch = curl_init($url);
//     curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//     curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
//     curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');

//     $result = json_decode(curl_exec($ch));

//     echo"<pre>";
//         print_r($result);
//     echo"</pre>";
    
//    return $result;

<div class="container">
    <div class="row">
        <div class="col">
            <?php 
            foreach($resultado as $get_result){
             echo $get_result->id; 
             }
             ?>
        </div>
    </div>
</div>

        //  foreach($result->data as $get_result){
        //     if(!empty($get_result->username)){
        //         echo '<p> id 1: ' .$get_result->username. '<p>';
        //     }
        // }

        // echo"<pre>";
        //     print_r($result);
        // echo"</pre>";

        // echo"<pre>";             
        //     print_r(substr($get_result->images->downsized_large->url,0,-5));
        // echo"</pre>";

        // echo '<img  width="200px" height="200px" src="'.substr($get_result->images->downsized_large->url,0,-5).'"><br>';
        //   echo $get_result
        //         $get_result->url 
        //     $get_result->slug 
        //         $get_result->username               
        
    // foreach($result->data[0] as $total){
    //     echo"<pre>";
    //         print_r($total);
    //     echo"</pre>";

        // foreach($total->images as $image){
        //     echo"<pre>";
        //         print_r($image);            
        //     echo"</pre>";
        // }

    // }

    // foreach($resultado->results as $ator){
            
    //     echo 'nome '. $ator->name . '<br>';
    //     echo 'nome '. $ator->height . '<br>';
    //     echo '<hr>';
    // }
// }