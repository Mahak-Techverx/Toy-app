<?php


use Codeception\Util\Locator;
class RetailAddProductInWishlistCest
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
        $I->amOnPage('/catalog/product/view/id/3924/s/spring-blossoms-pillow/category/396/');
        $I->wait('5');
        $I->click('//*[@id="maincontent"]/div[2]/div/div[3]/div[5]/div/a/span');
        $I->wait('5');
        $I->click('//*[@id="mwishlist_popup_add"]');
        $I->wait('5');
    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
    }
}
