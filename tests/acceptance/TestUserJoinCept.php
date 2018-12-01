<?php

use Step\Acceptance\TestUserJoin;

$I = new TestUserJoin($scenario);
$I->wantTo('New user join & login');

$user1 = $I->imagineUser();
$user2 = $I->imagineUser();

$I->loginUser($user1);
$I->see('This email does not registered');

$I->joinUser($user1);
$I->joinUser($user2);

$I->joinUser($user1);
$I->see('This email already exists');

$I->loginUser($user1);
$I->isUserLogged($user1);
$I->noUserLogged($user2);
$I->logoutUser();

$I->loginUser($user2);
$I->isUserLogged($user2);
$I->noUserLogged($user1);
$I->logoutUser();

$user['password'] = 'wrong password';
$I->loginUser($user1);
$I->see('Wrong Password');
