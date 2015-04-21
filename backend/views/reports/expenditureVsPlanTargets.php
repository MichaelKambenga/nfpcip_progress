<?php
use dosamigos\tableexport\ButtonTableExport;
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
$this->title = Yii::t('app', 'Expenditure Vs Plan Targets');
?>
<?php
echo $this->render('_formExpenditureVsPlanTargets', ['model' => $model]);
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

    <h5>Expenditure Against Plan Targets:- <?php echo date('F Y', strtotime($from_date)) . ' to ' . date('F Y', strtotime($to_date)) ?>,Result Area:- , Result:-</h5>

    <table width="100%" class="table table-bordered table-hover dataTable">
        <tr>
            <th>Strategy item</th>
            <th>Annual target</th>
            <th>Expenditure for quarter</th>
            <th>Quarter as % of annual target</th>
            <th>Cumulative this year up to this quarter</th>
            <th>Cumulative as % of annual target</th>
        </tr>
    </table>
<?php } ?>






