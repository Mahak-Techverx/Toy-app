<?php

use Codeception\Util\Locator;
class EditUpdateOrderCest
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
        $I->amOnPage('ordermanager/view/orderlist'); // view order list
         $I->wait(5);
         $I->click('//*[@id="maincontent"]/div[2]/div[3]/div[7]/div/div[2]/table/tbody/tr[1]/td[5]/a'); //make an order active
         $I->amOnPage('/all-products/home-decor/table/cocktail-napkins/spring-blossoms-cocktail-napkin-set-of-4-spring-blossoms-cocktail-napkin-set-of-4');
         $I->see('ADD TO CART');
         $I->click('//*[@id="product-addtocart-button"]');
         $I->wait(5);
         $I->amOnPage('ordermanager/view/orderlist'); 
         $I->wait(5);
         $I->click('//*[@id="maincontent"]/div[2]/div[3]/div[7]/div/div[2]/table/tbody/tr[1]/td[6]/a');//edit button
         $I->wait(5);
         $I->fillField('//*[@id="maincontent"]/div[2]/div[3]/div[7]/div/div[2]/form/div/div[1]/div/input', 'New Test'); //order name
         $I->fillField('//*[@id="maincontent"]/div[2]/div[3]/div[7]/div/div[2]/form/div/div[3]/div/input', '0981'); //PO number
         $I->wait(5);
         $I->click('//*[@id="maincontent"]/div[2]/div[3]/div[7]/div/div[2]/form/div/div[10]/div/div[1]/div/div[1]/div[3]/a');
         $I->fillField('//*[@id="accordion-403"]/div/div/div[1]/div[3]/div/input', '3');
         $I->click('//*[@id="maincontent"]/div[2]/div[3]/div[7]/div/div[2]/form/div/div[11]/div/input[2]');
         $I->wait(5);
    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
    }
}
