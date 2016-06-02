<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%t_cart}}".
 *
 * @property integer $cart_id
 * @property integer $store_id
 * @property integer $fans_id
 * @property integer $goods_id
 * @property integer $number
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $deleted_at
 */
class Cart extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%t_cart}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['store_id', 'fans_id', 'goods_id', 'number'], 'required'],
            [['store_id', 'fans_id', 'goods_id', 'number', 'created_at', 'updated_at', 'deleted_at'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'cart_id' => '购物车自增ID',
            'store_id' => 'Store ID',
            'fans_id' => 'Fans ID',
            'goods_id' => '产品ID号',
            'number' => '购买数量',
            'created_at' => '加入购物车时间',
            'updated_at' => '修改时间',
            'deleted_at' => '删除时间',
        ];
    }
}
