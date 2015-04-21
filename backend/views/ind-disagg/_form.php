<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\IndDisagg */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ind-disagg-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'disagg_group_id')->textInput(['maxlength' => 3]) ?>

    <?= $form->field($model, 'disagg_id')->textInput(['maxlength' => 3]) ?>

    <?= $form->field($model, 'disagg')->textInput(['maxlength' => 30]) ?>

    <?= $form->field($model, 'status')->textInput(['maxlength' => 3]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
