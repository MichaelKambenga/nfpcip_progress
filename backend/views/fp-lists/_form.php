<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\FpLists */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="fp-lists-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'item_id')->textInput(['maxlength' => 3]) ?>

    <?= $form->field($model, 'item')->textInput(['maxlength' => 62]) ?>

    <?= $form->field($model, 'in_list_of')->textInput(['maxlength' => 62]) ?>

    <?= $form->field($model, 'configurable')->textInput() ?>

    <?= $form->field($model, 'the_order')->textInput() ?>

    <?= $form->field($model, 'status')->textInput(['maxlength' => 3]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
