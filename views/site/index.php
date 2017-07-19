<?php


use yi\helpers\Html;
use yii\widgets\LinkPager;
use yii\widgets\DetailView;



/* @var $this yii\web\View */

$this->title = 'Online Shopping Store';
?>

	              <div class="container" style="margin-top:40px;">
               
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="images/slide2.jpg" alt="" style="height:auto;width:100%;">
     
    </div>
    <div class="item">
      <img src="images/slide1.jpg" alt="" style="height:auto;width:100%;">
     
    </div>
	
	<div class="item">
      <img src="images/slide3.jpg" alt="" style="height:auto;width:100%;">
      
    </div>
    
  </div>

 
</div>
            </div>

	  
	




	
	<div class="container" style="margin-top:20px;">
  <!---sidebar start--->
    <div class="panel panel-default" id="sidebar">
  
    <div class="panel-heading" style="background-color:#F68B1E; color:white;">Categories</div>
   <?php
		foreach($model as $records){
	   $title = $records->cat_title;
	   
	   echo	"<div class='panel-body' ><a id='panel-link' href='#' style='margin-left:50px; font-size:15px; color:black; '>$title</a></div>";
	   //echo "<a href='#'>$title</a>"; 
   } ?>
	

	
	<hr>
    <div class="panel-heading" style="background-color:#F68B1E; color:white;">Brands</div>
	
	<?php
		foreach($model1 as $records){
	   $title = $records->brand_title;
	   
	   echo	"<div class='panel-body' ><a id='panel-link' href='#' style='margin-left:50px; font-size:15px; color:black;'>$title</a></div>";
	   //echo "<a href='#'>$title</a>"; 
   } ?>
   
	<hr>
	</div>
	
	
	

                       


                    
	
	
	
	
  
  
<!---sidebar end--->

   	<div class="content-area">
	
	<!---product-row start--->
	
	 <div class="row product-content" >
	 
	 
<?php
foreach($model2 as $rec){
	$image=$rec->product_image;
	$price=$rec->product_price;
echo "
 <div class='col-md-4 product-div' style='border-color:#F68B1E;'>
  <div class='product-image'>
  <a href='#'>
  <img src='http://localhost/basic/web/images/$image' style='height:280px;width:250px;'></a>
  <p style='margin-top:10px; text-align:center;'>$rec->Product_title</p>
  <p style='margin-top:10px; text-align:center;'>$rec->product_price.Pkr</p>
  <div class='product-buttons'>
  <p class='buttons'>
     <a href='#' class='btn btn-default'>View detail</a>
      <a href='#' class='btn btn-primary' style='background-color:#F68B1E; border-color:#F68B1E;'>Add to cart</a>
       </p>
	</div>
   </div>
  </div>


";
}
?>



	 
  
<!---product_div start--->
 
	
	
</div>  
</div>
   
   
   
</div>
   
  

	
	