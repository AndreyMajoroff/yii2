<?php


namespace app\models;


use yii\base\Model;

class UserJoinForm extends Model
{
    public $name;
    public $email;
    public $password;
    public $confirmPassword;

    public function rules()
    {
       return
           [
               ['name', 'required'],
               ['email', 'required'],
               ['password', 'required'],
               ['confirmPassword', 'required'],
               ['name', 'string', 'min' => 3, 'max' => 30],
               ['email', 'email', 'message' => 'Email is not correct'],
               ['password', 'string', 'min' => 4],
               ['confirmPassword', 'compare', 'compareAttribute' => 'password',
                   'message' => 'Confirmation is not correct']

           ];
    }

    public function setUserRecord($userRecord)
    {
        $this->name = $userRecord->name;
        $this->email = $userRecord->email;
        $this->password = $this->confirmPassword = 'qwas';
    }
}