<?php

use Codeception\Util\Locator;
class MyProfileUpdateCompanyInfoCest
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
        $I->click('//*[@id="company-info"]/div/div[4]/a');
        $I->wait('5');
        $I->fillField('//*[@id="current_resale"]','Test User');
        $I->fillField('//*[@id="current_website"]','wstaging.coralandtusk.com');
        $I->fillField('//*[@id="current_social"]','www.facebook.com');
        $I->click('//*[@id="edit-office-information"]/div/div/div[1]/form/div/div/button');
        $I->wait('5');
    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
    }
}
