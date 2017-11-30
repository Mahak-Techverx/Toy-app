<?php

use Codeception\Util\Locator;

class UpdateCartAddorRemoveCest
{
    public function _before(AcceptanceTester $I)
    {
        $I->maximizeWindow();
        $I->amOnPage('/customer/account/login/');
        $I->see('Trade Accounts');
        $I->wait(5);
        $I->fillField(Locator::elementAt('//*[@id="email"]', -1), 'noumantayyab@gmail.com');
        $I->fillField(Locator::elementAt('//*[@id="pass"]', -1), 'xoho@123');
        $I->click(Locator::elementAt('//*[@id="send2"]',-1));  
        $I->wait(5);
    }

    public function _after(AcceptanceTester $I)
    {
        $I->amOnPage('/all-products/home-decor/table/cocktail-napkins/spring-blossoms-cocktail-napkin-set-of-4-spring-blossoms-cocktail-napkin-set-of-4');
         $I->see('ADD TO CART');
         $I->click('//*[@id="product-addtocart-button"]');
         $I->wait(25);
         $I->click('//*[@id="header"]/div/div[4]/div[2]/ul/li[3]/div/a');
         $I->wait(5);
         $I->click('//*[@id="minicart-content-wrapper"]/div[3]/div[1]');//click view cart
         $I->wait(5);
         $I->fillField('//*[@id="maincontent"]/div/div[2]/div[7]/div[3]/div[1]/form/div/div[1]/div/input' ,'Test');//add order name
         $I->fillField('//*[@id="maincontent"]/div/div[2]/div[7]/div[3]/div[1]/form/div/div[3]/div/input' ,'123');//add po number
         $I->wait(5);
         $I->click('//*[@id="shopping-cart-table"]/div/div/div[1]/div/div[1]/div[3]/a');//collapse
         $I->wait(5);
         $I->click('//*[@id="accordion-403"]/div/div/div[3]/div[1]/div/div[2]');// update qty 
         $I->click('//*[@id="accordion-403"]/div/div/div[3]/div[2]/button'); //click update button
         $I->wait(5);
         $I->click('//*[@id="shopping-cart-table"]/div/div/div[1]/div/div[1]/div[3]/a');//collapse
         $I->wait(5);
         $I->click('//*[@id="accordion-403"]/div/div/div[3]/div[1]/div/div[1]');// decrease qty 
         $I->click('//*[@id="accordion-403"]/div/div/div[3]/div[2]/button'); //click update button
         $I->wait(5);
         $I->click('//*[@id="shopping-cart-table"]/div/div/div[1]/div/div[1]/div[3]/a');//collapse
         $I->wait(5);
         $I->click('//*[@id="accordion-403"]/div/div/div[3]/div[2]/a'); //remove item
         $I->wait(5);
    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
    }
}
