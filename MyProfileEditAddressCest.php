<?php

use Codeception\Util\Locator;
class MyProfileEditAddressCest
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
        $I->click('//*[@id="address-info-link"]/a');
        $I->wait('5');
        $I->click('//*[@id="address-info"]/div[3]/div[2]/div/div[2]/a');
        $I->wait('5');
        $I->executeJS('jQuery("#edit-address-information iframe").attr("name", "firstname")'); 
        $I->switchToIFrame("firstname");
        $I->fillField('//*[@id="firstname"]' , 'First');
        $I->fillField('//*[@id="lastname"]' , 'Last');
        $I->fillField('//*[@id="company"]','test company');
        $I->fillField('//*[@id="telephone"]','847-531-4567');
        $I->fillField('//*[@id="street_1"]','4967 Godfrey Road');
        $I->fillField('//*[@id="city"]','New York');
        $I->click(Locator::option('New York'), ['name' => 'region_id']); //add state
        $I->fillField('//*[@id="zip"]','10003');
        $I->click('//*[@id="form-validate"]/div/div/button');
        $I->wait('5');
    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
    }
}
