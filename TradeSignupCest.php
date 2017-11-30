<?php


class TradeSignupCest
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







      $I->amOnPage('//trade-application/');
      $I->wait(5);
      $I->see('Welcome');
      $I->click('//*[@id="newsletter-popup"]/div/div/div[1]/button');
      $I->fillField('//*[@id="field_33"]', 'First');
      $I->fillField('//*[@id="field_34"]', 'Last');
      $I->fillField('//*[@id="field_36"]', 'company');
      $I->fillField('//*[@id="field_37"]', '4787 Blackwell Street');
      $I->fillField('//*[@id="field_39"]', 'Dry Creek');
      $I->click('//*[@id="state_select"]/option[3]');
      $I->fillField('//*[@id="field_41"]', '99737');
      $I->fillField('//*[@id="field_43"]', '907-323-6503');
      $I->fillField('//*[@id="field_44"]', generateEmailAddress());
      $I->click('//*[@id="form_4"]/div/div/button');
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
