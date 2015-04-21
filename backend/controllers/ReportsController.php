<?php

namespace backend\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use backend\models\Reports;

/**
 * ReportsController implements the generation of different reports.
 */
class ReportsController extends Controller {

    public function behaviors() {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['@']
                    ]
                ]
            ],
        ];
    }

    /**
     * Retrieves the Perfomance Report Previously Called Activity Summary From the Selected Criterias.
     */
    public function actionPerformanceReport() {
        $model = new Reports;
        $dataProvider = NULL;
        if (isset($_POST['Reports'])) {
            $model->attributes = $_POST['Reports'];
            $perfomanceData = 'Testing';
            if ($perfomanceData) {
                $dataProvider = $perfomanceData;
                $from_date = '1-' . $model->FromDateMonth . '-' . $model->FromDateYear;
                $to_date = '31-' . $model->ToDateMonth . '-' . $model->ToDateYear;
            }
            $dataProvider = $perfomanceData;
        }
        return $this->render('/reports/performanceReport', array('model' => $model, 'dataProvider' => $dataProvider, 'from_date' => $from_date, 'to_date' => $to_date));
    }

    /**
     * Retrieves the Expenditure Summaries Previously Called Funding For Period From the Selected Criterias.
     */
    public function actionExpenditureSummaries() {
        $model = new Reports;
        $dataProvider = NULL;
        if (isset($_POST['Reports'])) {
            $model->attributes = $_POST['Reports'];
            $perfomanceData = 'Testing';
            if ($perfomanceData) {
                $dataProvider = $perfomanceData;
                $from_date = '1-' . $model->FromDateMonth . '-' . $model->FromDateYear;
                $to_date = '31-' . $model->ToDateMonth . '-' . $model->ToDateYear;
            }
            $dataProvider = $perfomanceData;
        }
        return $this->render('/reports/expenditureSummaries', array('model' => $model, 'dataProvider' => $dataProvider, 'from_date' => $from_date, 'to_date' => $to_date));
    }

    /**
     * Retrieves the Expenditure vs Plan Targets Previously Called Funding vs Target - Quarter and Commulative From the Selected Criterias.
     */
    public function actionExpenditureVsPlanTargets() {
        $model = new Reports;
        $dataProvider = NULL;
        if (isset($_POST['Reports'])) {
            $model->attributes = $_POST['Reports'];
            $perfomanceData = 'Testing';
            if ($perfomanceData) {
                $dataProvider = $perfomanceData;
                $from_date = '1-' . $model->FromDateMonth . '-' . $model->FromDateYear;
                $to_date = '31-' . $model->ToDateMonth . '-' . $model->ToDateYear;
            }
            $dataProvider = $perfomanceData;
        }
        return $this->render('/reports/expenditureVsPlanTargets', array('model' => $model, 'dataProvider' => $dataProvider, 'from_date' => $from_date, 'to_date' => $to_date));
    }

    /**
     * Retrieves the Expenditures-Planned vs Unplanned Previously Called Funding-Planned vs Unplanned From the Selected Criterias.
     */
    public function actionExpendituresPlannedVsUnplanned() {
        $model = new Reports;
        $dataProvider = NULL;
        if (isset($_POST['Reports'])) {
            $model->attributes = $_POST['Reports'];
            $perfomanceData = 'Testing';
            if ($perfomanceData) {
                $dataProvider = $perfomanceData;
                $from_date = '1-' . $model->FromDateMonth . '-' . $model->FromDateYear;
                $to_date = '31-' . $model->ToDateMonth . '-' . $model->ToDateYear;
            }
            $dataProvider = $perfomanceData;
        }
        return $this->render('/reports/expendituresPlannedVsUnplanned', array('model' => $model, 'dataProvider' => $dataProvider, 'from_date' => $from_date, 'to_date' => $to_date));
    }

    /**
     * Retrieves the Result Narative Report Previously Called Activity Narative From the Selected Criterias.
     */
    public function actionResultNarrativeReport() {
        $model = new Reports;
        $dataProvider = NULL;
        if (isset($_POST['Reports'])) {
            $model->attributes = $_POST['Reports'];
            $perfomanceData = 'Testing';
            if ($perfomanceData) {
                $dataProvider = $perfomanceData;
                $from_date = '1-' . $model->FromDateMonth . '-' . $model->FromDateYear;
                $to_date = '31-' . $model->ToDateMonth . '-' . $model->ToDateYear;
            }
            $dataProvider = $perfomanceData;
        }
        return $this->render('/reports/narrativeReport', array('model' => $model, 'dataProvider' => $dataProvider, 'from_date' => $from_date, 'to_date' => $to_date));
    }

    /**
     * Retrieves the Indicator Tracking Report Previously Called Indicator vs Target From the Selected Criterias.
     */
    public function actionIndicatorTrackingReport() {
        $model = new Reports;
        $dataProvider = NULL;
        if (isset($_POST['Reports'])) {
            $model->attributes = $_POST['Reports'];
            $perfomanceData = 'Testing';
            if ($perfomanceData) {
                $dataProvider = $perfomanceData;
                $from_date = '1-' . $model->FromDateMonth . '-' . $model->FromDateYear;
                $to_date = '31-' . $model->ToDateMonth . '-' . $model->ToDateYear;
            }
            $dataProvider = $perfomanceData;
        }
        return $this->render('/reports/indicatorTrackingReport', array('model' => $model, 'dataProvider' => $dataProvider, 'from_date' => $from_date, 'to_date' => $to_date));
    }

    /**
     * Retrieves the Disaggregated Indicator From the Selected Criterias.
     */
    public function actionDisaggregatedIndicator() {
        $model = new Reports;
        $dataProvider = NULL;
        if (isset($_POST['Reports'])) {
            $model->attributes = $_POST['Reports'];
            $perfomanceData = 'Testing';
            if ($perfomanceData) {
                $dataProvider = $perfomanceData;
                $from_date = '1-' . $model->FromDateMonth . '-' . $model->FromDateYear;
                $to_date = '31-' . $model->ToDateMonth . '-' . $model->ToDateYear;
            }
            $dataProvider = $perfomanceData;
        }
        return $this->render('/reports/disaggregatedIndicator', array('model' => $model, 'dataProvider' => $dataProvider, 'from_date' => $from_date, 'to_date' => $to_date));
    }

    /**
     * Retrieves the FP2020 Perfomance Report Previously Called Activity Summary From the Selected Criterias.
     */
    public function actionFpPerformanceReport() {
        $model = new Reports;
        $dataProvider = NULL;
        if (isset($_POST['Reports'])) {
            $model->attributes = $_POST['Reports'];
            $perfomanceData = 'Testing';
            if ($perfomanceData) {
                $dataProvider = $perfomanceData;
                $from_date = '1-' . $model->FromDateMonth . '-' . $model->FromDateYear;
                $to_date = '31-' . $model->ToDateMonth . '-' . $model->ToDateYear;
            }
            $dataProvider = $perfomanceData;
        }
        return $this->render('/reports/fp2020PerformanceReport', array('model' => $model, 'dataProvider' => $dataProvider, 'from_date' => $from_date, 'to_date' => $to_date));
    }

    /**
     * Retrieves the FP2020 Results Narrative Previously Called Activity Summary From the Selected Criterias.
     */
    public function actionFpResultsNarrative() {
        $model = new Reports;
        $dataProvider = NULL;
        if (isset($_POST['Reports'])) {
            $model->attributes = $_POST['Reports'];
            $perfomanceData = 'Testing';
            if ($perfomanceData) {
                $dataProvider = $perfomanceData;
                $from_date = '1-' . $model->FromDateMonth . '-' . $model->FromDateYear;
                $to_date = '31-' . $model->ToDateMonth . '-' . $model->ToDateYear;
            }
            $dataProvider = $perfomanceData;
        }
        return $this->render('/reports/fp2020NarrativeReport', array('model' => $model, 'dataProvider' => $dataProvider, 'from_date' => $from_date, 'to_date' => $to_date));
    }

}
