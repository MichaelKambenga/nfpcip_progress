<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\FpLists */

$this->title = 'Create Fp Lists';
$this->params['breadcrumbs'][] = ['label' => 'Fp Lists', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fp-lists-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
