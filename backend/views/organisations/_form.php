<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Organisations */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="organisations-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'organisation_name_short')->textInput(['maxlength' => 14]) ?>

    <?= $form->field($model, 'organisation_name_long')->textInput(['maxlength' => 126]) ?>

    <?= $form->field($model, 'phone')->textInput(['maxlength' => 30]) ?>

    <?= $form->field($model, 'address')->textInput(['maxlength' => 126]) ?>

    <?= $form->field($model, 'organisation_email')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'website')->textInput(['maxlength' => 30]) ?>

    <?= $form->field($model, 'status')->textInput(['maxlength' => 3]) ?>

    <?= $form->field($model, 'funding_source')->textInput() ?>

    <?= $form->field($model, 'reporting')->textInput() ?>

    <?= $form->field($model, 'single_source_indicators')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
