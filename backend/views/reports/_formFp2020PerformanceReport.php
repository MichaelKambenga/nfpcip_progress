<?php

use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use kartik\builder\Form;
use backend\models\AarAreaNames;

/* @var $this yii\web\View */
/* @var $model backend\models\User */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="perfomance-report-form">

    <?php $form = \kartik\form\ActiveForm::begin([]); ?>
    <?php
    echo \kartik\builder\Form::widget([
        'model' => $model,
        'form' => $form,
        'columns' => 4,
        'attributes' => [
            'FromDateMonth' => [
                'type' => Form::INPUT_DROPDOWN_LIST,
                'label' => 'Month From',
                'items' => \backend\models\Reports::getDropDownMonth(),
            ],
            'FromDateYear' => [
                'type' => Form::INPUT_DROPDOWN_LIST,
                'label' => 'Year From',
                'items' => \backend\models\Reports::getDropDownYear(),
            ],
            'ToDateMonth' => [
                'type' => Form::INPUT_DROPDOWN_LIST,
                'label' => 'Month To',
                'items' => \backend\models\Reports::getDropDownMonth(),
            ],
            'ToDateYear' => [
                'type' => Form::INPUT_DROPDOWN_LIST,
                'label' => 'Year To',
                'items' => \backend\models\Reports::getDropDownYear(),
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
            'Zone' => [
                'type' => Form::INPUT_DROPDOWN_LIST,
                'label' => 'Zone',
                'items' => [1 => 'Central Zone',2 => 'Eastern Zone',3 => 'Lake Zone',4 => 'Northern Zone',5 => 'Southern Highlands Zone','6' => 'Western Zone'],'options' => ['prompt' => 'Select Zone'],
            ],
            'Region' => [
                'type' => Form::INPUT_DROPDOWN_LIST,
                'label' => 'Region',
                'items' => ArrayHelper::map(AarAreaNames::find()->where(['area_type_id' => 'REG'])->asArray()->all(), 'id', 'area_name'), 'options' => ['prompt' => 'Select Region'],
                'columnOptions' => ['id' => 'region-id']
            ],
            'District' => [
                'type' => Form::INPUT_DROPDOWN_LIST,
                'label' => 'District',
//                'pluginOptions' => [
//                    'depends' => ['region'],
//                    'placeholder' => 'Select District',
//                    'url' => Url::to(['reports/districts'])
//                ],
                'items' => ArrayHelper::map(AarAreaNames::find()->where(['area_type_id' => 'DTR'])->asArray()->all(), 'id', 'area_name'), 'options' => ['prompt' => 'Select District'],
            ],
        ]
    ]);
    ?>

    <div class="form-group">
        <?= Html::submitButton('Preview Results', ['class' => 'btn btn-primary', 'style' => 'margin-left: 350px']) ?>
        <?= Html::resetButton('Reset Search', ['class' => 'btn btn-default', 'style' => 'margin-left: 40px']) ?>
    </div>

    <?php
    \kartik\form\ActiveForm::end();
    ?>

</div>

