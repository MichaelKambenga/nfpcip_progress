<?php
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use kartik\builder\Form;
use backend\models\FpStrategy;
use backend\models\Organisations;

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
        'columns' => 4,
        'attributes' => [
            'ResultAreas' => [
                'type' => Form::INPUT_DROPDOWN_LIST,
                'label' => 'Strategic Area/Results',
                'items' => ['ALL' => 'All Strategic Action Areas', 'AAR' => 'One Strategic Action Area', 'ATN' => 'One Strategic Result'], 'options' => ['prompt' => 'Select Strategic Area/Result'],
                'columnOptions' => ['id' => 'ResultAreas-id']
            ],
            'ResultArea' => [
                'type' => Form::INPUT_DROPDOWN_LIST,
                'label' => 'Strategic Action Area',
                'items' => ArrayHelper::map(FpStrategy::find()->where(['strategy_level_id' => 'AAR'])->asArray()->all(), 'strategy_item_id', 'strategy_item'), 'options' => ['prompt' => 'Select Strategic Actionn Area'],
                'columnOptions' => ['id' => 'ResultArea-id']
            ],
            'Result' => [
                'type' => Form::INPUT_DROPDOWN_LIST,
                'label' => 'Strategic Result',
                'items' => ArrayHelper::map(FpStrategy::find()->where(['strategy_level_id' => 'ATN'])->asArray()->all(), 'strategy_item_id', 'strategy_item'), 'options' => ['prompt' => 'Select Strategic Result'],
                'columnOptions' => ['id' => 'Result-id']
            ],
            'SummaryLevel' => [
                'type' => Form::INPUT_DROPDOWN_LIST,
                'label' => 'Summary Level',
                'items' => ['ACY' => 'All Activities', 'ATN' => 'Summarise by result', 'AAR' => 'Summarise by result area', 'ALL' => 'Overall Total'], 'options' => ['prompt' => 'Select Summary Level'],
                'columnOptions' => ['id' => 'SummaryLevel-id']
            ],
        ]
    ]);
    ?>
    
    <?php
    echo \kartik\builder\Form::widget([
        'model' => $model,
        'form' => $form,
        'columns' => 4,
        'attributes' => [
            'Partners' => [
                'type' => Form::INPUT_DROPDOWN_LIST,
                'label' => 'Select Partners',
                'items' => ['ALL' => 'Total all partners', 'LIST' => 'List partners', 'ONE' => 'One partner'], 'options' => ['prompt' => 'Select Partners'],
                'columnOptions' => ['id' => 'Partners-id']
            ],
            'Partner' => [
                'type' => Form::INPUT_DROPDOWN_LIST,
                'label' => 'Select Partner',
                'items' => ArrayHelper::map(Organisations::find()->where(['reporting' => -1])->orderBy('organisation_name_short')->asArray()->all(), 'organisation_id', 'organisation_name_long'), 'options' => ['prompt' => 'Select Partner'],
                'columnOptions' => ['id' => 'Partner-id']
            ],
             'Funders' => [
                'type' => Form::INPUT_DROPDOWN_LIST,
                'label' => 'Select Funders',
                'items' => ['ALL' => 'Total all funders', 'LIST' => 'List funders', 'ONE' => 'One funder'], 'options' => ['prompt' => 'Select Funders'],
                'columnOptions' => ['id' => 'Funders-id']
            ],
            'Funder' => [
                'type' => Form::INPUT_DROPDOWN_LIST,
                'label' => 'Select Funder',
                'items' => ArrayHelper::map(Organisations::find()->where(['funding_source' => -1])->orderBy('organisation_name_short')->asArray()->all(), 'organisation_id', 'organisation_name_long'), 'options' => ['prompt' => 'Select Funder'],
                'columnOptions' => ['id' => 'Funder-id']
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


