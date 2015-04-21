<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\OrganisationsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="organisations-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'organisation_id') ?>

    <?= $form->field($model, 'organisation_name_short') ?>

    <?= $form->field($model, 'organisation_name_long') ?>

    <?= $form->field($model, 'phone') ?>

    <?= $form->field($model, 'address') ?>

    <?php // echo $form->field($model, 'organisation_email') ?>

    <?php // echo $form->field($model, 'website') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'funding_source') ?>

    <?php // echo $form->field($model, 'reporting') ?>

    <?php // echo $form->field($model, 'single_source_indicators') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
