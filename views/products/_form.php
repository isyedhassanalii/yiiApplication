<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Categories;
use app\models\Brands;
/* @var $this yii\web\View */
/* @var $model app\models\Products */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="products-form container col-lg-6 ">

    <?php $form = ActiveForm::begin(['options'=>['enctype'=>'multipart/form-data']]); ?>

    
	<?= $form->field($model, 'cat_id')->dropDownList(
	ArrayHelper::map(Categories::find()->all(),'cat_id','cat_title'),
	['prompt'=> 'Select Categories']
	
	) ?>

   
	
	<?= $form->field($model, 'brand_id')->dropDownList(
	ArrayHelper::map(Brands::find()->all(),'brand_id','brand_title'),
	['prompt'=> 'Select Brands']
	
	) ?>

    <?= $form->field($model, 'Product_title')->textInput(['rows' => 6]) ?>

    <?= $form->field($model, 'product_price')->textInput() ?>

    <?= $form->field($model, 'product_image')->fileInput(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary' ,'style'=>'background-color:#F68B1E; border-color:#F68B1E']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
