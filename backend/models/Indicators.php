<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tbl_fp_indicators".
 *
 * @property integer $indicator_id
 * @property string $indicator_code
 * @property string $indicator_description
 * @property integer $strategy_item_id
 * @property string $indicator_type_id
 * @property string $source_type_id
 * @property string $frequency_id
 * @property string $time_aggregation_id
 * @property string $numerator_description
 * @property string $denominator_description
 * @property string $disagg_area_type_id
 * @property string $disagg_group_id
 * @property string $status
 */
class Indicators extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_fp_indicators';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['strategy_item_id'], 'integer'],
            [['indicator_code'], 'string', 'max' => 7],
            [['indicator_description', 'numerator_description', 'denominator_description'], 'string', 'max' => 254],
            [['indicator_type_id', 'source_type_id', 'frequency_id', 'time_aggregation_id', 'disagg_area_type_id', 'disagg_group_id', 'status'], 'string', 'max' => 3]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'indicator_id' => 'Indicator ID',
            'indicator_code' => 'Indicator Code',
            'indicator_description' => 'Indicator Description',
            'strategy_item_id' => 'Strategy Item ID',
            'indicator_type_id' => 'Indicator Type ID',
            'source_type_id' => 'Source Type ID',
            'frequency_id' => 'Frequency ID',
            'time_aggregation_id' => 'Time Aggregation ID',
            'numerator_description' => 'Numerator Description',
            'denominator_description' => 'Denominator Description',
            'disagg_area_type_id' => 'Disagg Area Type ID',
            'disagg_group_id' => 'Disagg Group ID',
            'status' => 'Status',
        ];
    }
}
