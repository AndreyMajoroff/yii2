<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('Open home/join/login pages');
$I->amOnPage('/web/');
$I->see('Welcome', 'h1'); // Why Welcome don't work?

$I->seeLink('Join', '/web/site/join');
$I->seeLink('Login', '/web/site/login');

$I->amOnPage('/web/site/join');
$I->see('Join', 'h1');

$I->amOnPage('/web/site/login');
$I->see('Login', 'h1');