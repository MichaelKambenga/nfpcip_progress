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
<div class="jumbotron">
    <div style="font-size: 15px;font-family: aerial;"> If you are not yet registered in this system and you work for an organisation which is implementing family planning activities, please fill the form below to request login access.</div>
</div>

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
            'full_name' => [
                'type' => Form::INPUT_TEXT,
//                'label' => '',
            ],
            'password' => [
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
            'organisation_id' => [
                'type' => Form::INPUT_DROPDOWN_LIST,
//                'label' => '',
                'items' => ArrayHelper::map(Organisations::find()->all(), 'organisation_id', 'organisation_name_short'), 'options' => ['prompt' => 'Select Organization'],
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
        'columns' => 1,
        'attributes' => [
            'registration_details' => [
                'type' => Form::INPUT_TEXTAREA,
                'label' => 'Please introduce yourself, your organisation, your role and your involvement in NFPCIP:',
            ],
        ]
    ]);
    ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Submit') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary', 'style' => 'margin-left: 400px']) ?>
    </div>
    <?php
    \kartik\form\ActiveForm::end();
    ?>
</div>
