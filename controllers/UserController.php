<?php


namespace app\controllers;

use app\models\UserIdentity;
use app\models\UserJoinForm;
use app\models\UserLoginForm;
use app\models\UserRecord;
use Yii;
use yii\web\Controller;

class UserController extends Controller
{
    public function actionJoin()
    {
        if (Yii::$app->request->isPost)
            return $this->actionJoinPost();
        $userJoinForm = new UserJoinForm();
        $userRecord = new UserRecord();
        $userRecord->setTestUser();
        $userJoinForm->setUserRecord($userRecord);
       return $this->render('join', compact('userJoinForm')
       );
    }

    public function actionJoinPost()
    {
        $userJoinForm = new UserJoinForm();
       if ($userJoinForm->load(Yii::$app->request->post()))
        if ($userJoinForm->validate()) {
            $userRecord = new UserRecord();
            $userRecord->setUserJoinForm($userJoinForm);
            $userRecord->save();
            return $this->redirect('/web/user/login');
        }
            return $this->render('join',
                //['userJoinForm' => $userJoinForm],
                compact('userJoinForm')
            );

    }

    public function actionLogin()
    {
        if (Yii::$app->request->isPost){
            return $this->actionLoginPost();
        }
        $userLoginForm = new UserLoginForm;
       return $this->render('login', compact('userLoginForm'));
    }

    public function actionLoginPost()
    {
        $userLoginForm = new UserLoginForm();
        if ($userLoginForm->load(Yii::$app->request->post()))
        if ($userLoginForm->validate())
        {
            $userLoginForm->login();
            return $this->redirect('/web/');
        }
        return $this->render('login', compact('userLoginForm'));

    }

    public function actionLogout()
    {
        Yii::$app->user->logout();
        $this->redirect('/web/');
    }



}