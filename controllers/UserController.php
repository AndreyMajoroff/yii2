<?php


namespace app\controllers;

use app\models\UserIdentity;
use app\models\UserJoinForm;
use app\models\UserRecord;
use Yii;
use yii\web\Controller;

class UserController extends Controller
{
    public function actionJoin()
    {
        if (Yii::$app->request->isPost)
        {
            return $this->actionJoinPost();
        }
       $userJoinForm = new UserJoinForm();
       return $this->render('join', compact('userJoinForm')
       );
    }

    public function actionJoinPost()
    {
        $userJoinForm = new UserJoinForm();
        $userJoinForm->load(Yii::$app->request->post());

        $userRecord = new UserRecord();
        $userRecord->setTestUser();
        $userJoinForm->setUserRecord($userRecord);

        return $this->render('join',
            //['userJoinForm' => $userJoinForm],
            compact('userJoinForm')
        );

    }

    public function actionLogin()
    {
//        $uid = UserIdentity::findIdentity(1);
//        Yii::$app->user->login($uid);
       return $this->render('login');
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();
        $this->redirect('/');
    }
}