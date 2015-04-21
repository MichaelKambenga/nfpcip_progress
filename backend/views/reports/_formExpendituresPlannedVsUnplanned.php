<?php
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use kartik\builder\Form;
use backend\models\FpStrategy;

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



