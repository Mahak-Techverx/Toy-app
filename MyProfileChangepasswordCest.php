<?php

use Codeception\Util\Locator;

class MyProfileChangepasswordCest
{
    public function _before(AcceptanceTester $I)
    {
        $I->maximizeWindow();
        $I->amOnPage('/customer/account/login/');
        $I->see('Wholesale Accounts');
        $I->wait(5);
        $I->fillField(Locator::elementAt('//*[@id="email"]', -1), 'noumantayyab@gmail.com');
        $I->fillField(Locator::elementAt('//*[@id="pass"]', -1), 'xoho@123');
        $I->click(Locator::elementAt('//*[@id="send2"]',-1));  
        $I->wait(5);
    }

    public function _after(AcceptanceTester $I)
    {
        $I->amOnPage('/customer/account');
        $I->wait('5');
        $I->click('//*[@id="change-password-link"]/a');
        $I->wait('5');
        $I->fillField('//*[@id="current-password"]','Xoho@123');
        $I->fillField('//*[@id="password"]','Xoho@123');
        $I->fillField('//*[@id="password-confirmation"]','Xoho@123');
        $I->click('//*[@id="form-validate-edit"]/div[2]/div[4]/div/button');
        $I->wait('5');

    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
    }
}
