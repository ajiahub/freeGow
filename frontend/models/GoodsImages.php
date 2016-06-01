<?php
/**
 * Created by PhpStorm.
 * User: francics <allenfrancics@foxmail.com>
 * Date: 2016/5/2
 * Time: 16:21
 */
namespace frontend\models;

use Yii;

/**
 * This is the model class for table "{{%goods_images}}".
 *
 * @property integer $goods_id
 * @property string $image
 */
class GoodsImages extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%goods_images}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['image'], 'required'],
            [['goods_id'], 'integer'],
            [['image'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'image' => 'Image',
            'goods_id' => 'Goods Id',
        ];
    }
}
