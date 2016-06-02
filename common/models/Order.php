<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%t_order}}".
 *
 * @property integer $order_id
 * @property integer $store_id
 * @property string $trade_no
 * @property string $fans_id
 * @property string $wx_name
 * @property integer $province
 * @property integer $city
 * @property integer $area
 * @property string $address
 * @property string $consignee
 * @property string $mobile
 * @property integer $order_status
 * @property integer $pay_status
 * @property integer $shipping_status
 * @property string $pay_type
 * @property integer $order_fee
 * @property string $order_other
 * @property integer $created_at
 * @property integer $pay_at
 * @property integer $shipping_at
 * @property integer $updated_at
 * @property integer $deleted_at
 */
class Order extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%t_order}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['store_id', 'trade_no', 'fans_id', 'wx_name', 'province', 'city', 'area', 'address', 'consignee', 'mobile', 'pay_type', 'order_fee'], 'required'],
            [['store_id', 'province', 'city', 'area', 'order_status', 'pay_status', 'shipping_status', 'order_fee', 'created_at', 'pay_at', 'shipping_at', 'updated_at', 'deleted_at'], 'integer'],
            [['trade_no'], 'string', 'max' => 75],
            [['fans_id'], 'string', 'max' => 11],
            [['wx_name'], 'string', 'max' => 25],
            [['address', 'order_other'], 'string', 'max' => 255],
            [['consignee', 'mobile', 'pay_type'], 'string', 'max' => 20],
            [['trade_no'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'order_id' => '订单id',
            'store_id' => '门店ID',
            'trade_no' => '订单号',
            'fans_id' => '下单人手机号码',
            'wx_name' => '微信名称',
            'province' => '省份ID',
            'city' => '城市ID',
            'area' => '收货地区',
            'address' => '收货地址',
            'consignee' => '收货人',
            'mobile' => '手机号码',
            'order_status' => '订单状态',
            'pay_status' => '支付状态',
            'shipping_status' => '配送状态',
            'pay_type' => '支付方式',
            'order_fee' => '付款总额',
            'order_other' => '订单备注',
            'created_at' => '创建时间',
            'pay_at' => '订单支付时间',
            'shipping_at' => '配送时间',
            'updated_at' => 'Updated At',
            'deleted_at' => '删除时间',
        ];
    }
}
