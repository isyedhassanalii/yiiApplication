<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\UserRegistration */

$this->title = 'Create User Registration';
$this->params['breadcrumbs'][] = ['label' => 'User Registrations', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-registration-create container">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
