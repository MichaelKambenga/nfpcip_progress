<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tbl_fp_lists".
 *
 * @property integer $id
 * @property string $item_id
 * @property string $item
 * @property string $in_list_of
 * @property integer $configurable
 * @property integer $the_order
 * @property string $status
 */
class FpLists extends \yii\db\ActiveRecord {

    /**
     * @inheritdoc
     */
    public static function tableName() {
        return 'tbl_fp_lists';
    }

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            [['configurable', 'the_order'], 'integer'],
            [['item_id', 'status'], 'string', 'max' => 3],
            [['item', 'in_list_of'], 'string', 'max' => 62],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels() {
        return [
            'id' => 'ID',
            'item_id' => 'Item ID',
            'item' => 'Item',
            'in_list_of' => 'In List Of',
            'configurable' => 'Configurable',
            'the_order' => 'The Order',
            'status' => 'Status',
        ];
    }

}
