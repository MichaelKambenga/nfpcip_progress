<?php

use dosamigos\tableexport\ButtonTableExport;

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
$this->title = Yii::t('app', 'Performance Report');
?>
<?php
echo $this->render('_formPerformanceReport', ['model' => $model]);
?>
<div style="float: right; padding: 1px;">
<?php
    if (isset($dataProvider)) {
        echo ButtonTableExport::widget(
            [
                'label' => 'Export Report to:- ',
                'selector' => '#perfomance-report', // any jQuery selector
                'exportClientOptions' => [
                    'ignoredColumns' => [0, 7],
                    'useDataUri' => false,
                    'url' => \yii\helpers\Url::to('controller/download')
                ]
            ]
    );
    ?>
</div>
<br/>

    <h5>Performance Report:- <?php echo date('F Y', strtotime($from_date)) . ' to ' . date('F Y', strtotime($to_date)) ?></h5>
    <table id= 'perfomance-report' width="100%" class="table table-bordered table-hover dataTable">
        <tr>
            <th>Code</th>
            <th>Strategy item</th>
            <th>Organisations</th>
            <th>Funds spent (Tsh)</th>
            <th>Indicator values</th>
        </tr>
         <tr>
            <td>Code</td>
            <td>Strategy item</td>
            <td>Organisations</td>
            <td>Funds spent (Tsh)</td>
            <td>Indicator values</td>
        </tr>
         <tr>
            <td>Code</td>
            <td>Strategy item</td>
            <td>Organisations</td>
            <td>Funds spent (Tsh)</td>
            <td>Indicator values</td>
        </tr>
         <tr>
            <td>Code</td>
            <td>Strategy item</td>
            <td>Organisations</td>
            <td>Funds spent (Tsh)</td>
            <td>Indicator values</td>
        </tr>
         <tr>
            <td>Code</td>
            <td>Strategy item</td>
            <td>Organisations</td>
            <td>Funds spent (Tsh)</td>
            <td>Indicator values</td>
        </tr>
         <tr>
            <td>Code</td>
            <td>Strategy item</td>
            <td>Organisations</td>
            <td>Funds spent (Tsh)</td>
            <td>Indicator values</td>
        </tr>
         <tr>
            <td>Code</td>
            <td>Strategy item</td>
            <td>Organisations</td>
            <td>Funds spent (Tsh)</td>
            <td>Indicator values</td>
        </tr>
         <tr>
            <td>Code</td>
            <td>Strategy item</td>
            <td>Organisations</td>
            <td>Funds spent (Tsh)</td>
            <td>Indicator values</td>
        </tr>
         <tr>
            <td>Code</td>
            <td>Strategy item</td>
            <td>Organisations</td>
            <td>Funds spent (Tsh)</td>
            <td>Indicator values</td>
        </tr>
         <tr>
            <td>Code</td>
            <td>Strategy item</td>
            <td>Organisations</td>
            <td>Funds spent (Tsh)</td>
            <td>Indicator values</td>
        </tr>
    </table>
<?php

};
?>


