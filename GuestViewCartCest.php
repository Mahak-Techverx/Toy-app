<?php


class GuestViewCartCest
{
    public function _before(AcceptanceTester $I)
    {
         $I->maximizeWindow();
         $I->amOnPage('/all-products/home-decor/tea-towels/fox-love-tea-towel');
         $I->see('Welcome');
         $I->click('//*[@id="newsletter-popup"]/div/div/div[1]/button');
         $I->wait(5);
         $I->see('ADD TO CART');
         $I->click('//*[@id="product-addtocart-button"]'); //add to cart 
         $I->wait(5);
         $I->click('//*[@id="header"]/div/div[4]/div[4]/ul/li[3]/div/a');//click header 
         $I->click('//*[@id="minicart-content-wrapper"]/div[2]/div[1]/a');//click view button
         $I->wait(5);
    }

    public function _after(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
    }
}
