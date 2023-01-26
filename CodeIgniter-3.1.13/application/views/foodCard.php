<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php foreach($foods as $food){?>
<div class="container mt-3">
    <div class="mt-4 p-2 bg-primary text-white rounded" style="background-image: url('<?php echo $food["image"]?>')">
        <h1><?php echo $food['product_category_name']?></h1>   
    </div>
</div>
<?php }?> 