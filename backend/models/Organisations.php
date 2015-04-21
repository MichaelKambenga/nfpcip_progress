<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tbl_fp_organisations".
 *
 * @property integer $organisation_id
 * @property string $organisation_name_short
 * @property string $organisation_name_long
 * @property string $phone
 * @property string $address
 * @property string $organisation_email
 * @property string $website
 * @property string $status
 * @property integer $funding_source
 * @property integer $reporting
 * @property integer $single_source_indicators
 *
 * @property User[] $users
 */
class Organisations extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_fp_organisations';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['funding_source', 'reporting', 'single_source_indicators'], 'integer'],
            [['organisation_name_short'], 'string', 'max' => 14],
            [['organisation_name_long', 'address'], 'string', 'max' => 126],
            [['phone', 'website'], 'string', 'max' => 30],
            [['organisation_email'], 'string', 'max' => 255],
            [['status'], 'string', 'max' => 3]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'organisation_id' => 'Organisation ID',
            'organisation_name_short' => 'Organisation Code',
            'organisation_name_long' => 'Organisation Name',
            'phone' => 'Phone',
            'address' => 'Address',
            'organisation_email' => 'Organisation Email',
            'website' => 'Website',
            'status' => 'Status',
            'funding_source' => 'Funding Source',
            'reporting' => 'Reporting',
            'single_source_indicators' => 'Single Source Indicators',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsers()
    {
        return $this->hasMany(User::className(), ['organisation_id' => 'organisation_id']);
    }
}
