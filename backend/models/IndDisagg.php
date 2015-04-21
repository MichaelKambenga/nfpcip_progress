<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tbl_fp_ind_disagg".
 *
 * @property integer $id
 * @property string $disagg_group_id
 * @property string $disagg_id
 * @property string $disagg
 * @property string $status
 */
class IndDisagg extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_fp_ind_disagg';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['disagg_group_id', 'disagg_id', 'status'], 'string', 'max' => 3],
            [['disagg'], 'string', 'max' => 30]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'disagg_group_id' => 'Disagg Group ID',
            'disagg_id' => 'Disagg ID',
            'disagg' => 'Disagg',
            'status' => 'Status',
        ];
    }
}
