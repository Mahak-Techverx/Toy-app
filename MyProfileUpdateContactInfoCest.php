<?php

use Codeception\Util\Locator;
class MyProfileUpdateContactInfoCest
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
    {
        $I->amOnPage('/customer/account');
        $I->wait('5');
        $I->click('//*[@id="contact-info-link"]/a');
        $I->wait('5');
        $I->click('//*[@id="contact-info"]/div[2]/div[1]/div[3]/a');
        $I->wait('5');
        $I->executeJS('jQuery(".modal-content")');
        $I->wait('5');
        $I->fillField('#edit-contact-information #contact_name','Test User');
        $I->fillField('#edit-contact-information #contact_title','Test Tile');
        $I->fillField('#edit-contact-information #contact_phone','8887832442 ');
        $I->fillField('#edit-contact-information #contact_email','test@mailinator.com');
        $I->click('//*[@id="edit-contact-information"]/div/div/div[1]/form/div/div/button');
        $I->wait('5');
    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
    }
}
