<?php
namespace Step\Acceptance;

class TestUserJoin extends \AcceptanceTester
{

    public function imagineUser()
    {
        $I = $this;
        $user = [
            'name' => 'John',
            'email' => '1@2.3',
            'password' => 'qwas'
        ];
        print_r($user);
        return $user;
    }

    public function joinUser($user)
    {
        $I = $this;
        $I->amOnPage('/web/user/join');
        $I->see('Join');
        $I->fillField('UserJoinForm[name]', $user['name']);
        $I->fillField('UserJoinForm[email]', $user['email']);
        $I->fillField('UserJoinForm[password]', $user['password']);
        $I->fillField('UserJoinForm[confirm password]', $user['password']);
        $I->click('Create');
    }

    public function loginUser($user)
    {
        $I = $this;
        $I->amOnPage('/web/user/login');
        $I->see('Login');
        $I->fillField('UserLoginForm[email]', $user['email']);
        $I->fillField('UserLoginForm[password]', $user['password']);
        $I->click('Enter');
    }

    public function logoutUser()
    {
        $I = $this;
        $I->click('Logout');
    }

    public function isUserLogged($user)
    {
        $I = $this;
        $I->see($user['name']);
    }

    public function noUserLogged($user)
    {
        $I = $this;
        $I->dontSee($user['name']);
    }

}