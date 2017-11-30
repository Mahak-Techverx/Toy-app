<?php


class WholesaleSignupCest
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


      $I->amOnPage('//wholesale-application/');
      $I->wait(5);
      $I->see('Welcome');
      $I->click('//*[@id="newsletter-popup"]/div/div/div[1]/button');
      $I->fillField('//*[@id="field_9"]', 'First');
      $I->fillField('//*[@id="field_32"]', 'Last');
      $I->fillField('//*[@id="field_11"]', 'company');
      $I->fillField('//*[@id="field_12"]', '4787 Blackwell Street');
      $I->fillField('//*[@id="field_13"]', '4787 Blackwell Street');
      $I->fillField('//*[@id="field_14"]', 'Dry Creek');
      $I->click('//*[@id="state_select"]/option[3]');
      $I->fillField('//*[@id="field_16"]', '99737');
      $I->fillField('//*[@id="field_18"]', '907-323-6503');
      $I->fillField('//*[@id="field_19"]', generateEmailAddress());
      $I->click('//*[@id="form_3"]/div/div/button');
      $I->wait(15);
      $I->see('Thank you');
    }

    public function _after(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
    }
}
