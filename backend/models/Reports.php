<?php

namespace backend\models;

use Yii;
use yii\base\Model;

/**
 * Login form
 */
class Reports extends Model {

    public $FromDateMonth;
    public $FromDateYear;
    public $ToDateMonth;
    public $ToDateYear;
    public $Zone;
    public $Region;
    public $District;
    public $SummaryLevel;
    public $ResultAreas;
    public $ResultArea;
    public $Result;
    public $Partners;
    public $Partner;
    public $Funders;
    public $Funder;
    public $Indicator;

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            [['FromDateMonth', 'FromDateYear', 'ToDateMonth', 'ToDateYear'], 'required'],
            [['FromDateMonth', 'FromDateYear', 'ToDateMonth', 'ToDateYear', 'Zone', 'Region', 'District', 'District', 'SummaryLevel', 'SummaryLevel', 'ResultAreas', 'ResultArea', 'Result', 'Partners', 'Partner', 'Funders', 'Funder', 'Indicator'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels() {
        return [
            'FromDateMonth' => Yii::t('app', 'Month From'),
            'FromDateYear' => Yii::t('app', 'Year From'),
            'ToDateMonth' => Yii::t('app', 'Month To'),
            'ToDateYear' => Yii::t('app', 'Year To'),
            'Zone' => Yii::t('app', 'Zone'),
            'Region' => Yii::t('app', 'Region'),
            'District' => Yii::t('app', 'District'),
            'SummaryLevel' => Yii::t('app', 'Summary Level'),
            'ResultAreas' => Yii::t('app', 'Result Areas'),
            'ResultArea' => Yii::t('app', 'Result Area'),
            'Result' => Yii::t('app', 'Result'),
            'Partners' => Yii::t('app', 'Partners'),
            'Partner' => Yii::t('app', 'Partner'),
            'Funders' => Yii::t('app', 'Funders'),
            'Funder' => Yii::t('app', 'Funder'),
            'Indicator' => Yii::t('app', 'Indicator'),
        ];
    }

    public function getCustomerUnPaidBalancesByDate() {
        $date = $this->day . ' 23:59:59';
        $sql = "SELECT tbl_company_sales_voucher.Id,tbl_company_sales_voucher.CompanyId,tbl_company_sales_voucher.VoucherNo,tbl_company_sales_voucher.ReceiptNo,tbl_company_sales_voucher.DateCreated,tbl_company_sales_voucher.SalesDate,tbl_company_sales_voucher.SalesStoreId,tbl_company_sales_voucher.CustomerId,tbl_company_sales_voucher.UserId,tbl_company_sales_voucher.Status
                FROM tbl_company_sales_voucher
                INNER JOIN tbl_sales_voucher_item ON tbl_sales_voucher_item.VoucherId = tbl_company_sales_voucher.Id
                INNER JOIN tbl_company_receipt_voucher ON tbl_company_receipt_voucher.SalesVoucherId = tbl_company_sales_voucher.Id
                WHERE (
               ( 
                SELECT SUM( AmountReceived ) as AmountReceived FROM tbl_company_receipt_voucher WHERE tbl_company_receipt_voucher.SalesVoucherId = tbl_company_sales_voucher.Id
               ) < 
               ( 
               SELECT SUM( TotalPrice ) AS TotalPrice FROM tbl_sales_voucher_item WHERE tbl_sales_voucher_item.VoucherId = tbl_company_sales_voucher.Id 
               )
               ) AND tbl_company_sales_voucher.DateCreated <='" . $date . "'
               GROUP BY tbl_company_sales_voucher.Id";
        $data = new CSqlDataProvider($sql);
        return $data;
    }

    public function getPerfomanceReport() {
        $date = $this->day . ' 23:59:59';
        $sql = "SELECT tbl_company_sales_voucher.Id,tbl_company_sales_voucher.CompanyId,tbl_company_sales_voucher.VoucherNo,tbl_company_sales_voucher.ReceiptNo,tbl_company_sales_voucher.DateCreated,tbl_company_sales_voucher.SalesDate,tbl_company_sales_voucher.SalesStoreId,tbl_company_sales_voucher.CustomerId,tbl_company_sales_voucher.UserId,tbl_company_sales_voucher.Status
                FROM tbl_company_sales_voucher
                INNER JOIN tbl_sales_voucher_item ON tbl_sales_voucher_item.VoucherId = tbl_company_sales_voucher.Id
                INNER JOIN tbl_company_receipt_voucher ON tbl_company_receipt_voucher.SalesVoucherId = tbl_company_sales_voucher.Id
                WHERE (
               ( 
                SELECT SUM( AmountReceived ) as AmountReceived FROM tbl_company_receipt_voucher WHERE tbl_company_receipt_voucher.SalesVoucherId = tbl_company_sales_voucher.Id
               ) < 
               ( 
               SELECT SUM( TotalPrice ) AS TotalPrice FROM tbl_sales_voucher_item WHERE tbl_sales_voucher_item.VoucherId = tbl_company_sales_voucher.Id 
               )
               ) AND tbl_company_sales_voucher.DateCreated <='" . $date . "'
               GROUP BY tbl_company_sales_voucher.Id";
        $data = new CSqlDataProvider($sql);
        return $data;
    }

    static function getDropDownMonth() {
        $optionLabel = [
            '' => 'Select Month',
            '01' => 'January',
            '02' => 'February',
            '03' => 'March',
            '04' => 'April',
            '05' => 'May',
            '06' => 'June',
            '07' => 'July',
            '08' => 'August',
            '09' => 'September',
            '10' => 'October',
            '11' => 'Novomber',
            '12' => 'December'
        ];
        return $optionLabel;
    }

    static function getDropDownYear() {
        $optionYear = ['' => 'Select Year'];
        $currentYear = date('Y');
        for ($i = 0; $i <= 5; $i++) {
            $year = $currentYear - $i;
            $optionYear[$year] = $year;
        }
        return $optionYear;
    }

}
