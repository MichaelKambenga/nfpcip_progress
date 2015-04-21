<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tbl_aar_area_names".
 *
 * @property integer $id
 * @property integer $area_id
 * @property integer $area_parent_id
 * @property string $area_name
 * @property string $area_type_id
 * @property string $status
 * @property string $date_active
 * @property string $date_closed
 */
class AarAreaNames extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_aar_area_names';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['area_id', 'area_parent_id'], 'integer'],
            [['date_active', 'date_closed'], 'safe'],
            [['area_name'], 'string', 'max' => 50],
            [['area_type_id'], 'string', 'max' => 3],
            [['status'], 'string', 'max' => 16]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'area_id' => 'Area ID',
            'area_parent_id' => 'Area Parent ID',
            'area_name' => 'Area Name',
            'area_type_id' => 'Area Type ID',
            'status' => 'Status',
            'date_active' => 'Date Active',
            'date_closed' => 'Date Closed',
        ];
    }
}
