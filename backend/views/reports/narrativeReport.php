<?php
use dosamigos\tableexport\ButtonTableExport;
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
$this->title = Yii::t('app', 'Result Narrative Report');
?>
<?php
echo $this->render('_formNarrativeReport', ['model' => $model]);
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

    <h5>Narrative Activity Descriptions:- <?php echo date('F Y', strtotime($from_date)) . ' to ' . date('F Y', strtotime($to_date)) ?>,Result Area:- , Result:-</h5>

    <table width="100%" class="table table-bordered table-hover dataTable">

    </table>
<?php } ?>








