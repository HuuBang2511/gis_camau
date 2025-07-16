<?php


namespace app\modules\quanly\controllers;


use app\modules\quanly\base\QuanlyBaseController;
use yii\web\Controller;

class MapController extends QuanlyBaseController
{
    public $layout = '@app/views/layouts/map/main';

    public function actionDuctrong()
    {
        return $this->render('ductrong');
    }

    public function actionGiadinh()
    {
        return $this->render('giadinh');
    }

    public function actionMaptest()
    {
        return $this->render('mapcopy');
    }

    public function actionCamau()
    {
        return $this->render('camau');
    }
}