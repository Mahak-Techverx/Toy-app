<?php

use Codeception\Util\Locator;
class RetailCheckoutUsingGiftCreditCest
{
    public function _before(AcceptanceTester $I)
    {
      $I->maximizeWindow();
      $I->amOnPage('/customer/account/login/');
      $I->see('Welcome');
      $I->wait(5);
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
      $I->amOnPage('/all-products/home-decor/table/cocktail-napkins/spring-blossoms-cocktail-napkin-set-of-4-spring-blossoms-cocktail-napkin-set-of-4');
      $I->see('ADD TO CART');
      $I->click('//*[@id="product-addtocart-button"]');
      $I->wait(5);
      $I->click('//*[@id="header"]/div/div[4]/div[4]/ul/li[3]/div/a');
      $I->click('//*[@id="top-cart-btn-checkout"]');
      $I->wait(10);
      $I->scrollTo(['css'=>'.form-login'],20,320);
      $I->wait(5);
      $I->click('//*[@id="label_method_cntstandard_codecntcarrier"]');
      $I->click('//*[@id="shipping-method-buttons-container"]/div/button');
      $I->wait(5);
      $I->scrollTo(['css'=>'.form-login'],20,70);
      $I->wait(5);
      $I->click('//*[@id="giftvoucher_container"]/dt[1]/label');
      $I->wait(5);
      $I->click('//*[@id="checkout-payment-method-load"]/div/div[1]/div[1]/label/img');
      $I->wait(5);
      $I->scrollTo(['css'=>'.form-login'],20,150);
      $I->click('//*[@id="order-review-step"]/div[2]/div[3]/div/button');
      $I->wait(5);
      $I->see('Thank You');
      $I->wait(5);
    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
    }
}