<?php

use Codeception\Util\Locator;
class MyProfileAddContactInfoCest
{
    public function _before(AcceptanceTester $I)
    {
        $I->maximizeWindow();
        $I->amOnPage('/customer/account/login/');
        $I->see('Trade Accounts');
        $I->wait(5);
        $I->fillField(Locator::elementAt('//*[@id="email"]', -1), 'noumantayyab@gmail.com');
        $I->fillField(Locator::elementAt('//*[@id="pass"]', -1), 'xoho@123');
        $I->click(Locator::elementAt('//*[@id="send2"]',-1));  
        $I->wait(5);
    }

    public function _after(AcceptanceTester $I)
    {$I->amOnPage('/customer/account');
        $I->wait('5');
        $I->click('//*[@id="contact-info-link"]/a');
        $I->wait('5');
        $I->click('//*[@id="contact-info"]/div[2]/div[2]/a[1]');
        $I->wait('5');
        $I->fillField('//*[@id="contact_name"]','Test User');
        $I->fillField('//*[@id="contact_title"]','Test Tile');
        $I->fillField('//*[@id="contact_phone"]','8887837652 ');
        $I->fillField('//*[@id="contact_email"]','test1@mailinator.com');
        $I->click('//*[@id="add-contact-information"]/div/div/div[1]/form/div/div/button');
        $I->wait('5');
    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
    }
}
