<?php

use yii\helpers\Html;
use kartik\builder\Form;
use backend\models\User;
use backend\models\Organisations;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model backend\models\User */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-form">
    <?php $form = \kartik\form\ActiveForm::begin([]); ?>
    <?php
    echo \kartik\builder\Form::widget([
        'model' => $model,
        'form' => $form,
        'columns' => 3,
        'attributes' => [
            'username' => [
                'type' => Form::INPUT_TEXT,
//                'label' => '',
            ],
            'password' => [
                'type' => Form::INPUT_PASSWORD,
//                'label' => '',
            ],
            'repassword' => [
                'type' => Form::INPUT_PASSWORD,
//                'label' => '',
            ],
        ]
    ]);
    ?>

    <?php
    echo \kartik\builder\Form::widget([
        'model' => $model,
        'form' => $form,
        'columns' => 3,
        'attributes' => [
            'full_name' => [
                'type' => Form::INPUT_TEXT,
//                'label' => '',
            ],
            'email' => [
                'type' => Form::INPUT_TEXT,
//                'label' => '',
            ],
            'phone' => [
                'type' => Form::INPUT_TEXT,
//                'label' => '',
            ],
        ]
    ]);
    ?>

    <?php
    echo \kartik\builder\Form::widget([
        'model' => $model,
        'form' => $form,
        'columns' => 3,
        'attributes' => [
            'role' => [
                'type' => Form::INPUT_DROPDOWN_LIST,
//                'label' => '',
                'items' => User::getArrayRole(),
            ],
            'organisation_id' => [
                'type' => Form::INPUT_DROPDOWN_LIST,
//                'label' => '',
                'items' => ArrayHelper::map(Organisations::find()->all(), 'organisation_id', 'organisation_name_short'), 'options' => ['prompt' => 'Select Organization'],
            ],
            'status' => [
                'type' => Form::INPUT_DROPDOWN_LIST,
//                'label' => '',
                'items' => User::getArrayStatus(),
            ],
        ]
    ]);
    ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>
    <?php
    \kartik\form\ActiveForm::end();
    ?>
</div>
