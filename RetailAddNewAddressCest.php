<?php

use Codeception\Util\Locator;
class RetailAddNewAddressCest
{
    public function _before(AcceptanceTester $I)
    {
      $I->maximizeWindow();
      $I->amOnPage('/customer/account/login/');
      $I->wait('5');
      $I->see('Welcome');
      $I->click('//*[@id="newsletter-popup"]/div/div/div[1]/button');
      $I->wait(5);
      $I->moveMouseOver('//*[@id="header"]/div/div[2]/div[4]/ul/li[2]/a');
      $I->fillField('//*[@id="email"]', 'test@mailinator.com');
      $I->fillField('//*[@id="pass"]', 'Xoho@123');
      $I->click('//*[@id="send2"]'); 
      $I->wait(5);
    }

    public function _after(AcceptanceTester $I)
    {
        $I->amOnPage('/customer/account/');
        $I->scrollTo(['css'=>'.actions-toolbar'],20,50);
        $I->wait('5');
        $I->click('//*[@id="maincontent"]/div[2]/div[3]/div[11]/div/a');
        $I->wait('5');
        $I->executeJS('jQuery("#add-address-information iframe").attr("name", "firstname")'); 
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
