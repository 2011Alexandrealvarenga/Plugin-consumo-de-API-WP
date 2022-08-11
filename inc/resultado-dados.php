<div class="container">
    <div class="row">
        <div class="col">
            <?php 
            foreach($resultado->data as $get_result){
            ?>
                <p class=""> titulo: <?php echo $get_result->title ;?> <p>
                <!-- <img src="<?php echo $get_result->images->original->url;?>" width="200px" height="150px"> -->
            <?php }?>
        </div>
    </div>
</div>
<?php 


