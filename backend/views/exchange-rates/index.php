<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\ExchangeRatesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Exchange Rates';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="exchange-rates-index">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Exchange Rates', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

//            'id',
            'report_period_end',
            'currency_id',
            'tsh_per_currency',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
