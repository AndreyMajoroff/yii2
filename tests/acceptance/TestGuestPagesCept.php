<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('Open home/join/login pages');
$I->amOnPage('/web/');
$I->see('Welcome', 'h1');

$I->seeLink('Join', '/web/user/join');
$I->seeLink('Login', '/web/user/login');

$I->amOnPage('/web/user/join');
$I->see('Join', 'h1');

$I->amOnPage('/web/user/login');
$I->see('Login', 'h1');