<?php

use Codeception\Util\Locator;
class MyProfileCreateWishlistCest
{
    public function _before(AcceptanceTester $I) //function
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
        $I->see('Wholesale Accounts');
        $I->wait(5);
        $I->fillField(Locator::elementAt('//*[@id="email"]', -1), 'noumantayyab@gmail.com');
        $I->fillField(Locator::elementAt('//*[@id="pass"]', -1), 'xoho@123');
        $I->click(Locator::elementAt('//*[@id="send2"]',-1));  
        $I->wait(5);
    }

    public function _after(AcceptanceTester $I)
    {
        $I->amOnPage('/wishlist/');
        $I->wait('5');
        $I->click('//*[@id="create-new-wishlist"]/a');
        $I->wait('5');
        $I->fillField('//*[@id="mwishlist-create"]',generateRandomString($length = 10));
        $I->click('//*[@id="mwishlist-tab-create"]/div[1]/button');
        $I->wait('5');

    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
    }
}
