<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tbl_fp_strategy".
 *
 * @property integer $strategy_item_id
 * @property string $strategy_item_code
 * @property string $strategy_item
 * @property string $strategy_level_id
 * @property integer $parent_strategy_item_id
 * @property integer $the_order
 * @property string $status
 */
class FpStrategy extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_fp_strategy';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['strategy_item_id'], 'required'],
            [['strategy_item_id', 'parent_strategy_item_id', 'the_order'], 'integer'],
            [['strategy_item_code'], 'string', 'max' => 7],
            [['strategy_item'], 'string', 'max' => 255],
            [['strategy_level_id', 'status'], 'string', 'max' => 3]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'strategy_item_id' => 'Strategy Item ID',
            'strategy_item_code' => 'Strategy Item Code',
            'strategy_item' => 'Strategy Item',
            'strategy_level_id' => 'Strategy Level ID',
            'parent_strategy_item_id' => 'Parent Strategy Item ID',
            'the_order' => 'The Order',
            'status' => 'Status',
        ];
    }
}
