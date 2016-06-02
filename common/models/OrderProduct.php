<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%t_order_product}}".
 *
 * @property integer $order_product_id
 * @property integer $store_id
 * @property string $order_trade_no
 * @property integer $goods_id
 * @property integer $number
 */
class OrderProduct extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%t_order_product}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['store_id', 'order_trade_no', 'goods_id', 'number'], 'required'],
            [['store_id', 'goods_id', 'number'], 'integer'],
            [['order_trade_no'], 'string', 'max' => 75],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'order_product_id' => '订单产品表主键ID',
            'store_id' => '店铺ID',
            'order_trade_no' => '订单ID',
            'goods_id' => '产品ID',
            'number' => '购买数量',
        ];
    }
}
