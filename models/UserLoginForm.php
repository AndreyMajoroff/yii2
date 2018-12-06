<?php


namespace app\models;


use yii\base\Model;

class UserLoginForm extends Model
{
    public $email;
    public $password;

    public function rules()
    {
       return
           [
               ['email', 'required'],
               ['password', 'required'],
//               ['confirmPassword', 'required'],
//               ['name', 'string', 'min' => 3, 'max' => 30],
               ['email', 'email', 'message' => 'Email is not correct'],
               ['password', 'string', 'min' => 4],
//               ['confirmPassword', 'compare', 'compareAttribute' => 'password',
//                   'message' => 'Confirmation is not correct'],
//               ['email', 'errorIfEmailUsed'],

           ];
    }

    public function setUserRecord($userRecord)
    {
//        $this->name = $userRecord->name;
        $this->email = $userRecord->email;
        $this->password = 'qwas';
    }

    public function attributeLabels()
    {
        return [
            'email' => 'Your e-mail please',
            'password' => 'Enter your password',
        ];
    }

}