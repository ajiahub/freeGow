<?php
/**
 * Created by PhpStorm.
 * User: francics <allenfrancics@foxmail.com>
 * Date: 2016/5/8
 * Time: 20:12
 */
namespace frontend\models;

use yii\base\Model;
use yii\web\UploadedFile;

class UploadForm extends Model
{
    /**
     * @var UploadedFile
     */
    public $imageFile;

    /*
    public function rules()
    {
        return [
            [['imageFile'], 'file', 'maxSize' => 1024 * 1024 * 2, 'skipOnEmpty' => false, 'extensions' => 'png,jpg,jpeg,gif'],
        ];
    }
    */

    public function upload()
    {
        if ($this->validate()) {
            $dir = 'uploads/' . date('Ymd', time());
            if (!file_exists($dir)) {
                mkdir($dir, 0777, true);
                chmod($dir, 0777);
            }
            $newImg = substr(md5($this->imageFile->baseName . round((microtime(true) * 1000))), 0, 17);
            $this->imageFile->saveAs($dir . '/' . $newImg . '.' . $this->imageFile->extension);
            $model = new GoodsImages();
            $model->image = $dir . '/' . $newImg . '.' . $this->imageFile->extension;
            $model->save();
            return $model;
        } else {
            return false;
        }
    }
}