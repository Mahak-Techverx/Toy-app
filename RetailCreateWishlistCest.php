<?php


class RetailCreateWishlistCest
{
    public function _before(AcceptanceTester $I)
    {




      function generateRandomString($length = 10) 
      {
         $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
         $charactersLength = strlen($characters);
         $randomString = '';
         for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
       }
         return $randomString;
}





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
        $I->amOnPage('/wishlist/');
        $I->wait('5');
        $I->click('//*[@id="create-new-wishlist"]/a');
        $I->wait('5');
        $I->fillField('//*[@id="mwishlist-create"]', generateRandomString($length = 10));
        $I->wait('5');
        $I->click('//*[@id="mwishlist-tab-create"]/div[1]/button');
        $I->wait('5');
    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
    }
}
