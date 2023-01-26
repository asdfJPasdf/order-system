<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<style>
    .card-columns {
    column-count: 2;
}
</style>
    
<?php foreach($foods as $food){?>
<div class="container mt-3 ">
    <div class="mt-4 p-2 bg-primary text-white rounded" style="background-image: url('<?php echo $food["image"]?>')">
        <div class="opacity-25">
            <h1 class="text-white text-center "><?php echo $food['product_category_name']?></h1>   
        </div>
    </div>

<div class="card-columns p-3 mx-auto">
<?php foreach($food['products'] as $product) {?>
    
    <div class="p-1">
        <div class="card card-body ">
                    <span class="float-right font-weight-bold">CHF <?php echo strval($product['product_price'])?></span>
                    <h6 class="text-truncate"><?php echo $product['product_name']?></h6>
                    <p class="small"><?php echo $product['product_description']?></p>
                    <button class="btn">In den Warenkorb</button>
            </div>
    </div>
        
<?php }?>
</div>
<?php }?> 

