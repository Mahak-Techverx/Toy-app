<?php

use Codeception\Util\Locator;
class RetailQuickViewAddToCartCest
{
    public function _before(AcceptanceTester $I)
    {
      $I->maximizeWindow();
      $I->amOnPage('/customer/account/login/');
      $I->wait(5);
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
         $I->amOnPage('/all-products/home-decor/table/cocktail-napkins'); // on product listing page
         $I->scrollTo(['css'=>'.products-grid'],2,60); //scroll down
         $I->wait(5);
         $I->see('COCKTAIL NAPKINS');
         $I->wait(5);

         $I->moveMouseOver('//*[@id="maincontent"]/div[2]/div[3]/div[9]/ol/li[9]/div[1]/a/img');
         $I->click('//*[@id="amquickview-link-3426"]'); //click on quick view
         $I->wait(10);
         $I->executeJS('jQuery(".fancybox-iframe").attr("name", "Add to Cart")'); 
         $I->switchToIFrame("Add to Cart");
         $I->see("ADD TO CART"); //click on Add to cart 
         $I->click('//*[@id="product-addtocart-button"]');
         $I->wait(5);
    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
    }
}
