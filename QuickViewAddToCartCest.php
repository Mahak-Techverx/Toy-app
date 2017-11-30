<?php

use Codeception\Util\Locator;

class QuickViewAddToCartCest
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
         $I->amOnPage('/all-products/home-decor/table/cocktail-napkins'); // on product listing page
         $I->scrollTo(['css'=>'.products-grid'],5,10); //scroll down
         $I->wait(5);
         $I->moveMouseOver('//*[@id="maincontent"]/div[2]/div[3]/div[9]/ol/li[8]/div[1]/a');
         $I->click('//*[@id="amquickview-link-3634"]'); //click on quick view
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
