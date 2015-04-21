<?php

use common\widgets\Menu;

echo Menu::widget(
        [
            'options' => [
                'class' => 'sidebar-menu'
            ],
            'items' => [
                [
                    'label' => Yii::t('app', 'Dashboard'),
                    'url' => Yii::$app->homeUrl,
                    'icon' => 'fa-dashboard',
                    'active' => Yii::$app->request->url === Yii::$app->homeUrl,
                    'visible' => !Yii::$app->user->isGuest
                ],
                [
                    'label' => Yii::t('app', 'Login'),
                    'url' => ['/site/login'],
                    'icon' => 'fa fa-user',
                    'visible' => Yii::$app->user->isGuest
                ],
                [
                    'label' => Yii::t('app', 'Register'),
                    'url' => ['site/register'],
                    'icon' => 'fa fa-plus',
                    'visible' => Yii::$app->user->isGuest
                ],
                [
                    'label' => Yii::t('app', 'Reporting'),
                    'url' => ['#'],
                    'icon' => 'fa fa-folder-open',
                    'visible' => !Yii::$app->user->isGuest,
                    'options' => [
                        'class' => 'treeview',
                    ],
                    'items' => [
                        [
                            'label' => Yii::t('app', 'Add Entries & Indicators'),
                            'url' => [''],
                            'icon' => 'fa fa-plus',
                            'visible' => !Yii::$app->user->isGuest
                        ],
                        [
                            'label' => Yii::t('app', 'Review Entries'),
                            'url' => [''],
                            'icon' => 'fa fa-refresh',
                            'visible' => !Yii::$app->user->isGuest
                        ],
                        [
                            'label' => Yii::t('app', 'Review Indicators'),
                            'url' => [''],
                            'icon' => 'fa fa-refresh',
                            'visible' => !Yii::$app->user->isGuest
                        ],
                        [
                            'label' => Yii::t('app', 'Formal Submission'),
                            'url' => [''],
                            'icon' => 'fa fa-mail-forward',
                            'visible' => !Yii::$app->user->isGuest
                        ],
                        [
                            'label' => Yii::t('app', 'Review Submissions'),
                            'url' => [''],
                            'icon' => 'fa fa-repeat',
                            'visible' => !Yii::$app->user->isGuest
                        ],
                    ],
                ],
                /*                 * ******************************************* */
                [
                    'label' => Yii::t('app', 'NFPCIP reports'),
                    'url' => ['#'],
                    'icon' => 'fa fa-folder',
                    'visible' => !Yii::$app->user->isGuest,
                    'options' => [
                        'class' => 'treeview',
                    ],
                    'items' => [

                        [ 'label' => Yii::t('app', 'Performance Report'),
                            'url' => ['/reports/performance-report'],
                            'icon' => 'fa fa-file-text',
                            'visible' => !Yii::$app->user->isGuest
                        ],
                        [ 'label' => Yii::t('app', 'Expenditure Summaries'),
                            'url' => ['/reports/expenditure-summaries'],
                            'icon' => 'fa fa-file-text',
                            'visible' => !Yii::$app->user->isGuest
                        ],
                        [ 'label' => Yii::t('app', 'Expenditure vs Plan Targets'),
                            'url' => ['/reports/expenditure-vs-plan-targets'],
                            'icon' => 'fa fa-file-text',
                            'visible' => !Yii::$app->user->isGuest
                        ],
                        [ 'label' => Yii::t('app', 'Expenditures-Planned vs Unplanned'),
                            'url' => ['/reports/expenditures-planned-vs-unplanned'],
                            'icon' => 'fa fa-file-text',
                            'visible' => !Yii::$app->user->isGuest
                        ],
                        [ 'label' => Yii::t('app', 'Result Narrative Report'),
                            'url' => ['/reports/result-narrative-report'],
                            'icon' => 'fa fa-file-text',
                            'visible' => !Yii::$app->user->isGuest
                        ],
                        [ 'label' => Yii::t('app', 'Indicator Tracking Report'),
                            'url' => ['/reports/indicator-tracking-report'],
                            'icon' => 'fa fa-file-text',
                            'visible' => !Yii::$app->user->isGuest
                        ],
                        [ 'label' => Yii::t('app', 'Disaggregated Indicator'),
                            'url' => ['/reports/disaggregated-indicator'],
                            'icon' => 'fa fa-file-text',
                            'visible' => !Yii::$app->user->isGuest
                        ],
                        [ 'label' => Yii::t('app', 'FP2020 Results Narrative'),
                            'url' => ['/reports/fp-results-narrative'],
                            'icon' => 'fa fa-file-text',
                            'visible' => !Yii::$app->user->isGuest
                        ],
                        [ 'label' => Yii::t('app', 'FP2020 Perfomance Report'),
                            'url' => ['/reports/fp-performance-report'],
                            'icon' => 'fa fa-file-text',
                            'visible' => !Yii::$app->user->isGuest
                        ],
                    ],
                ],
                /*                 * ************************************************ */
//                [
//                    'label' => Yii::t('app', 'NFPCIP reports'),
//                    'url' => ['#'],
//                    'icon' => 'fa fa-cog',
//                    'visible' => !Yii::$app->user->isGuest,
//                    'options' => [
//                        'class' => 'treeview',
//                    ],
//                    'items' => [
//                        [
//                            'label' => Yii::t('app', 'Performance Reports'),
//                            'url' => ['#'],
//                            'icon' => 'fa fa-user',
//                            'visible' => !Yii::$app->user->isGuest,
//                            'options' => [
//                                'class' => 'treeview',
//                            ],
//                            'items' => [
//                                [ 'label' => Yii::t('app', 'Performance Report'),
//                                    'url' => ['/reports/performance-report'],
//                                    'icon' => 'fa fa-lock',
//                                    'visible' => !Yii::$app->user->isGuest
//                                ],
//                            ],
//                        ],
//                        [
//                            'label' => Yii::t('app', 'Expenditure Reports'),
//                            'url' => ['#'],
//                            'icon' => 'fa fa-user',
//                            'visible' => !Yii::$app->user->isGuest,
//                            'options' => [
//                                'class' => 'treeview',
//                            ],
//                            'items' => [
//                                [ 'label' => Yii::t('app', 'Expenditure Summaries'),
//                                    'url' => ['/reports/expenditure-summaries'],
//                                    'icon' => 'fa fa-lock',
//                                    'visible' => !Yii::$app->user->isGuest
//                                ],
//                                [ 'label' => Yii::t('app', 'Expenditure vs Plan Targets'),
//                                    'url' => ['/reports/expenditure-vs-plan-targets'],
//                                    'icon' => 'fa fa-lock',
//                                    'visible' => !Yii::$app->user->isGuest
//                                ],
//                                [ 'label' => Yii::t('app', 'Expenditures-Planned vs Unplanned'),
//                                    'url' => ['/reports/expenditures-planned-vs-unplanned'],
//                                    'icon' => 'fa fa-lock',
//                                    'visible' => !Yii::$app->user->isGuest
//                                ],
//                            ],
//                        ],
//                        [
//                            'label' => Yii::t('app', 'Progress Reports'),
//                            'url' => ['#'],
//                            'icon' => 'fa fa-lock',
//                            'visible' => !Yii::$app->user->isGuest,
//                            'options' => [
//                                'class' => 'treeview',
//                            ],
//                            'items' => [
//                                [ 'label' => Yii::t('app', 'Result Narrative Report'),
//                                    'url' => ['/reports/result-narrative-report'],
//                                    'icon' => 'fa fa-lock',
//                                    'visible' => !Yii::$app->user->isGuest
//                                ],
//                                [ 'label' => Yii::t('app', 'Indicator Tracking Report'),
//                                    'url' => ['/reports/indicator-tracking-report'],
//                                    'icon' => 'fa fa-lock',
//                                    'visible' => !Yii::$app->user->isGuest
//                                ],
//                                [ 'label' => Yii::t('app', 'Disaggregated Indicator'),
//                                    'url' => ['/reports/disaggregated-indicator'],
//                                    'icon' => 'fa fa-lock',
//                                    'visible' => !Yii::$app->user->isGuest
//                                ],
//                            ],
//                        ],
//                        [
//                            'label' => Yii::t('app', 'FP2020 Reports'),
//                            'url' => ['#'],
//                            'icon' => 'fa fa-lock',
//                            'visible' => !Yii::$app->user->isGuest,
//                            'options' => [
//                                'class' => 'treeview',
//                            ],
//                            'items' => [
//                                [ 'label' => Yii::t('app', 'FP2020 Perfomance Report'),
//                                    'url' => [''],
//                                    'icon' => 'fa fa-lock',
//                                    'visible' => !Yii::$app->user->isGuest
//                                ],
//                                [ 'label' => Yii::t('app', 'FP2020 Results Narrative'),
//                                    'url' => [''],
//                                    'icon' => 'fa fa-lock',
//                                    'visible' => !Yii::$app->user->isGuest
//                                ],
//                            ],
//                        ],
//                    ],
//                ],
                [
                    'label' => Yii::t('app', 'Users & organizations'),
                    'url' => ['#'],
                    'icon' => 'fa fa-cog',
                    'visible' => !Yii::$app->user->isGuest,
                    'options' => [
                        'class' => 'treeview',
                    ],
                    'items' => [
                        [
                            'label' => Yii::t('app', 'Manage Users'),
                            'url' => ['/user/index'],
                            'icon' => 'fa fa-users',
                            'visible' => !Yii::$app->user->isGuest
                        ],
                        [
                            'label' => Yii::t('app', 'Manage Organizations'),
                            'url' => ['/organisations/index'],
                            'icon' => 'fa fa-cloud',
                            'visible' => !Yii::$app->user->isGuest
                        ],
                        [
                            'label' => Yii::t('app', 'Manage User Roles'),
                            'url' => ['/role/index'],
                            'icon' => 'fa fa-lock',
                            'visible' => !Yii::$app->user->isGuest
                        ],
                    ],
                ],
                [
                    'label' => Yii::t('app', 'Configuration'),
                    'url' => ['#'],
                    'icon' => 'fa fa-wrench',
                    'visible' => !Yii::$app->user->isGuest,
                    'options' => [
                        'class' => 'treeview',
                    ],
                    'items' => [
                        [
                            'label' => Yii::t('app', 'Disaggregation Items'),
                            'url' => ['ind-disagg/index'],
                            'icon' => 'fa fa-italic',
                            'visible' => !Yii::$app->user->isGuest
                        ],
                        [
                            'label' => Yii::t('app', 'Currencies'),
                            'url' => ['fp-lists/index','type'=>'currencies'],
                            'icon' => 'fa fa-money',
                            'visible' => !Yii::$app->user->isGuest
                        ],
                        [
                            'label' => Yii::t('app', 'Exchange Rates'),
                            'url' => ['exchange-rates/index'],
                            'icon' => 'fa fa-stack-exchange',
                            'visible' => !Yii::$app->user->isGuest
                        ],
                    ],
                ],
                [
                    'label' => Yii::t('app', 'Notification Manager'),
                    'url' => ['#'],
                    'icon' => 'fa fa-exclamation',
                    'visible' => !Yii::$app->user->isGuest,
                    'options' => [
                        'class' => 'treeview',
                    ],
                    'items' => [
                        [
                            'label' => Yii::t('app', 'Manage Notifications'),
                            'url' => [''],
                            'icon' => 'fa fa-comments',
                            'visible' => !Yii::$app->user->isGuest
                        ],
                    ],
                ],
                [
                    'label' => Yii::t('app', 'My Account'),
                    'url' => ['#'],
                    'icon' => 'fa fa-user',
                    'visible' => !Yii::$app->user->isGuest,
                    'options' => [
                        'class' => 'treeview',
                    ],
                    'items' => [
//                        [
//                            'label' => Yii::t('app', 'Change Password'),
//                            'url' => [''],
//                            'icon' => 'fa fa-user',
//                            'visible' => !Yii::$app->user->isGuest
//                        ],
                        [
                            'label' => Yii::t('app', 'Edit my Details'),
                            'url' => ['user/update','id'=> Yii::$app->user->identity->id],
                            'icon' => 'fa fa-edit',
                            'visible' => !Yii::$app->user->isGuest
                        ],
                    ],
                ],
                [
                    'label' => Yii::t('app', 'Return to MoHSW Website'),
                    'url' => 'http://www.moh.go.tz',
                    'icon' => 'fa-hospital-o',
                    'active' => Yii::$app->request->url === Yii::$app->homeUrl,
                    'visible' => Yii::$app->user->isGuest,
                ],
                [
                    'label' => Yii::t('app', 'Logout') . ' [' . Yii::$app->user->identity->username . ']',
                    'url' => ['/site/logout'],
                    'icon' => 'fa-sign-out',
//                    'linkOptions' => ['data-method' => 'post'],
                    'visible' => !Yii::$app->user->isGuest
                ],
            ]
        ]
);
