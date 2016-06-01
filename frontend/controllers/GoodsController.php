<?php
/**
 * Created by PhpStorm.
 * User: francics <allenfrancics@foxmail.com>
 * Date: 2016/5/1
 * Time: 10:12
 */
namespace frontend\controllers;

use Yii;
use frontend\models\Goods;
use frontend\models\GoodsContent;
use frontend\models\UploadForm;
use yii\web\UploadedFile;

class GoodsController extends MController
{
    /**
     * not recommend
     */
    public function init()
    {
        $this->enableCsrfValidation = false;
    }

    /**
     * 产品列表
     * @return string
     */
    public function actionIndex()
    {
        $params = Yii::$app->request->queryParams;
        $params['status'] = 1;
        $model = new Goods();
        $dataProvider = $model->search($params);
        return $this->render('index', ['dataProvider' => $dataProvider]);
    }

    /**
     * 未上架产品列表
     * @return string
     */
    public function actionUnsale()
    {
        $params = Yii::$app->request->queryParams;
        $params['status'] = 0;
        $model = new Goods();
        $dataProvider = $model->search($params);
        return $this->render('index', ['dataProvider' => $dataProvider]);
    }

    /**
     * 待补货产品列表
     * @return string
     */
    public function actionLowstock()
    {
        $params = Yii::$app->request->queryParams;
        $params['action'] = Yii::$app->controller->action->id;
        $model = new Goods();
        $dataProvider = $model->search($params);
        return $this->render('index', ['dataProvider' => $dataProvider]);
    }

    /**
     * 创建产品
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Goods();
        $content = new GoodsContent();

        if (Yii::$app->request->isPost) {
            /*
            $model->load(Yii::$app->request->post());
            echo "<pre>";
            print_r($model);
            echo "<hr>";
            print_r(Yii::$app->request->post());
            echo "<hr>";
            $_POST['GoodsContent'] = ['goods_id' => 6, 'content' => $_POST['content']];
            $content->load($_POST);
            print_r($content);
            exit;
            */
            $posts = Yii::$app->request->post();
            $posts['Goods']['image_id'] = implode(',', $posts['image_id']);
            $posts['Goods']['username'] = $this->username;
            $posts['Goods']['default_image_id'] = (int)(!empty($posts['default_image_id']) ? $posts['default_image_id'] : $posts['image_id'][0]);
            if ($model->load($posts)) {
                if ($model->validate()) {

                    if ($model->save()) {
                        $_POST['GoodsContent'] = ['goods_id' => $model->goods_id, 'content' => $_POST['content']];
                        $content->load($_POST);
                        if ($content->validate()) {
                            $content->save();
                        }
                    }
                    return $this->redirect(['index']);
                }
            }
        }

        return $this->render('create', ['model' => $model, 'content' => $content]);
    }

    /**
     * 编辑产品
     * @param $goods_id
     * @return string|\yii\web\Response
     */
    public function actionEdit($goods_id)
    {
        $model = Goods::findOne(['goods_id' => $goods_id]);
        $content = GoodsContent::findOne(['goods_id' => $goods_id]);

        if (Yii::$app->request->isPost) {
            $posts = Yii::$app->request->post();
            $posts['Goods']['image_id'] = implode(',', $posts['image_id']);
            $posts['Goods']['default_image_id'] = (int)(!empty($posts['default_image_id']) ? $posts['default_image_id'] : $posts['image_id'][0]);
            if ($model->load($posts)) {
                if ($model->validate()) {
                    if ($model->save()) {
                        $_POST['GoodsContent'] = ['goods_id' => $model->goods_id, 'content' => $_POST['content']];
                        $content->load($_POST);
                        if ($content->validate()) {
                            $content->save();
                        }
                    }
                    return $this->redirect(['index']);
                }
            }
        }
        return $this->render('create', ['model' => $model, 'content' => $content]);
    }

    /**
     * 硬删除产品，不推荐
     * @param $goods_id
     */
    public function actionDel($goods_id)
    {
        Goods::deleteAll(['goods_id' => $goods_id]);
        $this->redirect(['index']);
    }

    /**
     * 产品评论
     * @return string
     */
    public function actionComments()
    {
        return $this->render('comments');
    }

    /**
     * 产品图片异步上传
     * @return string
     */
    public function actionGoodpicupload()
    {
        $model = new UploadForm();
        if (Yii::$app->request->isPost) {
            $model->imageFile = UploadedFile::getInstance($model, 'imageFile');
            if ($result = $model->upload()) {
                $data = ['code' => 1, 'pic' => Yii::$app->request->hostInfo . '/' . $result->image, 'image_id' => $result->image_id];
                return json_encode($data);
            }
        }
    }
}