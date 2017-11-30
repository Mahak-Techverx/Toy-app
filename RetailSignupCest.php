<?php


class RetailSignupCest
{
    public function _before(AcceptanceTester $I)
    {
       function generateEmailAddress()
{
      $char = "0123456789abcdefghijklmnopqrstuvwxyz";
{
      $ulen = mt_rand(5, 10);
      $a = "";
      for ($i = 1; $i <= $ulen; $i++) 
    {
      $a .= substr($char, mt_rand(0, strlen($char)), 1);
    }
      $a .= "@test.com";
    //echo $a . "\n"
      return $a;
}
      $randemail = generateEmailAddress();
}   




      $I->amOnPage('//customer/account/login/');
      $I->see('Welcome');
      $I->click('//*[@id="newsletter-popup"]/div/div/div[1]/button');
      $I->wait(10);
      $I->fillField('//*[@id="firstname"]', 'First');
      $I->fillField('//*[@id="lastname"]', 'Last');
      $I->fillField('//*[@id="email_address"]', generateEmailAddress());
      $I->fillField('//*[@id="password"]', 'Xoho@123');
      $I->fillField('//*[@id="password-confirmation"]', 'Xoho@123');
      $I->click('//*[@id="form-validate"]/fieldset/div[7]/div/button');
      $I->wait(10);
    }

    public function _after(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
    }
}
