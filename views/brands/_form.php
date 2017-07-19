<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use yii\models\Brands;

/* @var $this yii\web\View */
/* @var $model app\models\Brands */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="brands-form container col-lg-6 ">

    <?php $form = ActiveForm::begin(); ?>

	    <?= $form->field($model, 'brand_id')->textInput(['rows' => 6]) ?>
    <?= $form->field($model, 'brand_title')->textInput(['rows' => 6]) ?>
	

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary' ,'style'=>'background-color:#F68B1E; border-color:#F68B1E'] ) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
