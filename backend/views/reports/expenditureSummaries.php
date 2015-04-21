<?php
use dosamigos\tableexport\ButtonTableExport;
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
$this->title = Yii::t('app', 'Expenditure Summaries');
?>
    <?php
       echo $this->render('_formExpenditureSummaries', ['model' => $model]);
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

<h5>Funds Spent on NFPCIP Activities:- <?php echo date('F Y', strtotime($from_date)) . ' to ' . date('F Y', strtotime($to_date)) ?>,Result Area:- , Result:-  ,Spent by:- , Funded by:-</h5>

<table width="100%" class="table table-bordered table-hover dataTable">
	<tr>
	<th>Strategy item</th>
	<th>Funder</th>
	<th>Partner</th>
	<th>Tsh</th>
	</tr>
</table>
<?php } ?>




