<?php

use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;

/* NavBar::begin([
  'brandLabel' => 'My Company',
  'brandUrl' => Yii::$app->homeUrl,
  'options' => [
  'class' => 'navbar-inverse navbar-fixed-top',
  ],
  ]); */
$menuItems = [
    [
        'label' => Yii::t('app', 'Home'),
        'url' => ['/site/index'],
        'visible' => !Yii::$app->user->isGuest
    ],
    [
        'label' => Yii::t('app', 'Logout') . '(' . Yii::$app->user->identity->username . ')',
        'url' => ['/site/logout'],
        'linkOptions' => ['data-method' => 'post'],
        'visible' => !Yii::$app->user->isGuest
    ],
];
echo Nav::widget([
    'options' => ['class' => 'navbar-nav navbar-right'],
    'items' => $menuItems,
]);


