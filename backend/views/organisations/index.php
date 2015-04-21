<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\OrganisationsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Organisations';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="organisations-index">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Organisations', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

//            'organisation_id',
            'organisation_name_short',
            'organisation_name_long',
            'phone',
            'address',
            // 'organisation_email:email',
            // 'website',
            // 'status',
            // 'funding_source',
            // 'reporting',
            // 'single_source_indicators',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
