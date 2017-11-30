<?php

use Codeception\Util\Locator;
class checkoutsimpleproductCest
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
         $I->amOnPage('/all-products/home-decor/table/cocktail-napkins/spring-blossoms-cocktail-napkin-set-of-4-spring-blossoms-cocktail-napkin-set-of-4');
         $I->see('ADD TO CART');
         $I->click('//*[@id="product-addtocart-button"]');
         $I->wait(5);
         $I->click('//*[@id="header"]/div/div[4]/div[2]/ul/li[3]/div/a');
         $I->click('//*[@id="top-cart-btn-checkout"]');
         $I->wait(10);
         $I->fillField('//*[@id="checkout-ordermanager-form"]/div/div[1]/div/input', 'test'); // order name
         $I->fillField('//*[@id="checkout-ordermanager-form"]/div/div[3]/div/input', '123');
         $I->click('//*[@id="form-submit-ordermanager"]'); //save order info
         $I->wait(5);
         $I->click('//*[@id="shipping-buttons-container"]/div/button'); // Shipping Address
         $I->wait(5);
         $I->click('//*[@id="shipping-method-buttons-container"]/div/button'); //Shipping method
         $I->wait(5);
         $I->click('//*[@id="checkout-payment-method-load"]/div/div[4]/div[1]/label/span'); //payment method
         $I->wait(10);
         $I->click('//*[@id="order-review-step"]/div[2]/div[3]/div[8]/div/button'); //complete order
         $I->wait(5);
         $I->see('Thank You');

           
          
    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
    }
}
