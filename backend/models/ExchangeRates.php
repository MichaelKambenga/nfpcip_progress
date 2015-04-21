<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tbl_fp_exchange_rates".
 *
 * @property integer $id
 * @property string $report_period_end
 * @property string $currency_id
 * @property integer $tsh_per_currency
 */
class ExchangeRates extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_fp_exchange_rates';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['report_period_end'], 'safe'],
            [['tsh_per_currency'], 'integer'],
            [['currency_id'], 'string', 'max' => 3]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'report_period_end' => 'Report Period End',
            'currency_id' => 'Currency ID',
            'tsh_per_currency' => 'Tsh Per Currency',
        ];
    }
}
