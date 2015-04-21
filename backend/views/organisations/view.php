<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Organisations */

$this->title = $model->organisation_name_short;
$this->params['breadcrumbs'][] = ['label' => 'Organisations', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="organisations-view">

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->organisation_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->organisation_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'organisation_id',
            'organisation_name_short',
            'organisation_name_long',
            'phone',
            'address',
            'organisation_email:email',
            'website',
            'status',
            'funding_source',
            'reporting',
            'single_source_indicators',
        ],
    ]) ?>

</div>
