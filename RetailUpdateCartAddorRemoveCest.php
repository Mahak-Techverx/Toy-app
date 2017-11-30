<?php
use Codeception\Util\Locator;

class RetailUpdateCartAddorRemoveCest
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
      $I->amOnPage('/all-products/home-decor/table/cocktail-napkins/spring-blossoms-cocktail-napkin-set-of-4-spring-blossoms-cocktail-napkin-set-of-4'); // on product detail page
      $I->see('ADD TO CART');
      $I->click('//*[@id="product-addtocart-button"]'); // add product to cart
      $I->wait(5);
      $I->click('//*[@id="header"]/div/div[4]/div[4]/ul/li[3]/div/a'); // click header
      $I->click('View Cart'); //click view carts
      $I->wait(5);
      $I->click('//*[@id="shopping-cart-table"]/tbody/tr/td[2]/div[1]/div/div[2]'); //increase qty 
      $I->click('//*[@id="shopping-cart-table"]/tbody/tr/td[2]/div[3]/button'); // update cart 
      $I->wait(10);
      $I->click('//*[@id="shopping-cart-table"]/tbody/tr/td[2]/div[1]/div/div[1]'); //derease qty
      $I->click('//*[@id="shopping-cart-table"]/tbody/tr/td[2]/div[3]/button');  // update cart
      $I->wait(10);
      $I->click('//*[@id="shopping-cart-table"]/tbody/tr/td[2]/div[3]/a'); // remove item
      $I->wait(10);
    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
    }
}
