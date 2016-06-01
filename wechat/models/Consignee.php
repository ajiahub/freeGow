<?php

namespace wechat\models;

use Yii;

/**
 * This is the model class for table "{{%consignee}}".
 *
 * @property string $consignee_id
 * @property string $wx_name
 * @property string $consignee
 * @property string $mobile
 * @property string $province
 * @property string $city
 * @property string $area
 * @property string $address
 * @property string $zip
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 */
class Consignee extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%consignee}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['wx_name', 'consignee', 'mobile', 'province', 'city', 'area', 'address', 'created_at'], 'required'],
            [['zip', 'created_at', 'updated_at', 'deleted_at'], 'integer'],
            [['wx_name', 'consignee', 'mobile'], 'string', 'max' => 20],
            [['province', 'city', 'area'], 'string', 'max' => 30],
            [['address'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'consignee_id' => 'Consignee ID',
            'wx_name' => '用户名',
            'consignee' => '收货人',
            'mobile' => '手机号码',
            'province' => 'Province',
            'city' => 'City',
            'area' => 'Area',
            'address' => 'Address',
            'zip' => 'Zip',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'deleted_at' => 'Deleted At',
        ];
    }
}
