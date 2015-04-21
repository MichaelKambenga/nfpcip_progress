<?php
use dosamigos\tableexport\ButtonTableExport;
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
$this->title = Yii::t('app', 'Disaggregated Indicator');
?>
    <?php
       echo $this->render('_formDisaggregatedIndicator', ['model' => $model]);
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
    <h5>Breakdown of Indicator Values</h5>
    	<table>
            <tr><td class=aligntop><h5>Report&nbsp;period:</h5></td><td><?php // echo QuarterDescription($report_period_end) ?></td></tr>
        <tr><td class=aligntop><h5>Indicator:</h5></td><td><?php // echo $indicator_code.' - '.$indicator_description ?></td></tr>
        <tr><td class=aligntop><h5>Linked to: </h5><?php // echo strtolower($strategy_level) ?></td><td><?php // echo $strategy_item_code.' - '.$strategy_item ?></td></tr>	
	</table>
    
<?php } ?>
    










