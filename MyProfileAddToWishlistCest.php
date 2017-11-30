<?php

use Codeception\Util\Locator;
class MyProfileAddToWishlistCest
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
        $I->amOnPage('/catalog/product/view/id/4135/s/saguaro-armadillo-pocket-pillow/category/415/');
        $I->wait(5);
        $I->click('//*[@id="maincontent"]/div[2]/div/div[3]/div[5]/div/a');
        $I->wait(5);
        $I->click('//*[@id="mwishlist_popup_add"]');
        $I->wait(5);

    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
    }
}
