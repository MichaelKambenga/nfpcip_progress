<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\IndDisagg */

$this->title = 'Create Ind Disagg';
$this->params['breadcrumbs'][] = ['label' => 'Ind Disaggs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ind-disagg-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
