<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\ExchangeRates */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="exchange-rates-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'report_period_end')->textInput() ?>

    <?= $form->field($model, 'currency_id')->textInput(['maxlength' => 3]) ?>

    <?= $form->field($model, 'tsh_per_currency')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
