<?php
/**
 * Created by PhpStorm.
 * User: francics <allenfrancics@foxmail.com>
 * Date: 2016/5/14
 * Time: 17:21
 */
namespace wechat\models;

/**
 * This is the model class for table "{{%goods_content}}".
 *
 * @property string $goods_id
 * @property string $content
 */
class GoodsContent extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%goods_content}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['goods_id', 'content'], 'required'],
            [['goods_id'], 'integer'],
            [['content'], 'string']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'goods_id' => 'Goods ID',
            'content' => 'Content',
        ];
    }
}
