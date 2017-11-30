<?php


class RetailUpdateProfileCest
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
         $I->wait('5');
         $I->click('Edit');
         $I->wait('5');
         $I->fillField('//*[@id="firstname"]' , 'First');
         $I->fillField('//*[@id="lastname"]' , 'Last');
         $I->click('//*[@id="change-email"]');
         $I->click('//*[@id="change-password"]');
         $I->fillField('//*[@id="email"]','test@mailinator.com');
         $I->fillField('//*[@id="current-password"]','Xoho@123');
         $I->fillField('//*[@id="password"]','Xoho@123');
         $I->fillField('//*[@id="password-confirmation"]','Xoho@123');
         $I->click('//*[@id="form-validate"]/div/div/button');
         $I->wait('5');
    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
    }
}
