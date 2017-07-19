<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>
<div class="container">






<?php
foreach($model as $rec){
	$image=$rec->product_image;
	$price=$rec->product_price;
echo "
 <div class='col-md-4 product-div'>
  <div class='product-image'>
  <a href='#'>
  <img src='http://localhost/basic/web/images/$image' style='height:300px;width:250px;'></a>
  <p style='margin-top:10px; text-align:center;'>$rec->Product_title</p>
  <div class='product-buttons'>
  <p class='buttons'>
     <a href='#' class='btn btn-default'>View detail</a>
      <a href='#' class='btn btn-primary'>Add to cart</a>
       </p>
	</div>
   </div>
  </div>


";
}
?>


</div>



	 