<?php
/**
 * Created by PhpStorm.
 * User: francics <allenfrancics@foxmail.com>
 * Date: 2016/5/14
 * Time: 15:48
 */
namespace common\components;

use Yii;

class ResizeImage
{
    public static function resize($username, $src, $width, $height, $level = 75, $mode = 'crop')
    {
        if (empty($username)) {
            return;
        }
        header("content-type: image/jpeg");
        ini_set("gd.jpeg_ignore_warning", true);
        $newDir = $username . '/' . $width . '_' . $height;
        $attachmentDir = Yii::getAlias("@attachment/web/attachment/" . $username . '/' . $width . '_' . $height);
        if (!file_exists($attachmentDir)) {
            mkdir($attachmentDir, 0777, true);
            chmod($attachmentDir, 0777);
        }
        $file = Yii::getAlias("@frontend/web/") . $src;

        $newImg = $attachmentDir . '/' . basename($src);

        if (!file_exists($newImg)) {
            self::resizeMode($file, $newImg, $width, $height, $level, $mode);
        }
        return Yii::$app->params ['prefixUploadUrl'] . $newDir . '/' . basename($src);
    }

    /**
     * 图片切割方式
     * 更多方式参考https://github.com/yurkinx/yii2-image
     * @param string $file
     * @param string $img
     * @param integer $width
     * @param integer $height
     * @param integer $level
     * @param string $type
     * @return boolean
     */
    public static function resizeMode($file, $img, $width, $height, $level, $mode)
    {
        switch ($mode) {
            case 'crop' :
                $image = Yii::$app->image->load($file);
                return $image->resize($width, $height, $image::CROP)->background('#fff')->save($img, $level);
                break;
            case 'horizontal' :
                $image = Yii::$app->image->load($file);
                return $image->resize($width, $height, $image::HORIZONTAL)->background('#fff')->save($img, $level);
                break;
            case 'height' :
                $image = Yii::$app->image->load($file);
                return $image->resize($width, $height, $image::HEIGHT)->background('#fff')->save($img, $level);
                break;
            case 'adapt' :
                $image = Yii::$app->image->load($file);
                return $image->resize($width, $height, $image::ADAPT)->background('#fff')->save($img, $level);
                break;
            default :
                $image = Yii::$app->image->load($file);
                return $image->resize($width, $height, $image::ADAPT)->background('#fff')->save($img, $level);
                break;
        }
    }
}