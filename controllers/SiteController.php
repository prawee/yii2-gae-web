<?php
/**
 * @Author: Prawee Wongsa <prawee.w@integra8t.com>
 * @Date: 10/19/2017 AD 3:12 PM
 */
namespace i8\controllers;

use Yii;
use yii\web\Controller;
use i8\models\LoginForm;

class SiteController extends Controller
{
    public $params;
    public $perPage = 10;

    public function init()
    {
        $this->params = Yii::$app->request->getQueryParams();
        if (empty($this->params['page'])) {
            $this->params['page'] = 1;
        }
        parent::init();
    }

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        $model->email = Yii::$app->request->post('email');
        $model->password = Yii::$app->request->post('password');
        if (
            isset($model->email) &&
            isset($model->password)
        ) {
            $model->login();
            if ($model->validatePassword()) {
                return $this->goHome();
            }
        }
        return $this->render('login', [
            'model' => $model
        ]);
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();
        return $this->goHome();
    }
}