<?php

namespace app\models;

use yii\db\ActiveRecord;

class UserRecord extends ActiveRecord
{
    public static function tableName()
    {
        return'user';
    }

    public function setTestUser()
    {
        $this->name = 'John';
        $this->email = '1@2.3';
        $this->passhash = 'hash';
        $this->status =2;

    }
}