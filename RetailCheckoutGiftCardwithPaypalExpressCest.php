<?php

use Codeception\Util\Locator;

class RetailCheckoutGiftCardwithPaypalExpressCest
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
      $I->amOnPage('/all-products/gift-cards/e-gift-card-parakeet'); // on giftcard page
      $I->wait(5);
      $I->fillField('//*[@id="recipient_name"]', 'Test'); //add recipient name
      $I->fillField('//*[@id="recipient_email"]', 'test@gmail.com');  //add email 
      $I->fillField('//*[@id="message"]', 'Test Message'); // add message 
      $I->click('//*[@id="day_to_send_content"]/button'); //click calendar icon
      $I->click('//*[@id="ui-datepicker-div"]/div[2]/button[1]'); //select Today
      $I->scrollTo(['css'=>'.product-info-main'],-20,-450); //scroll up
      $I->click('//*[@id="product-addtocart-button"]'); //Add to cart
      $I->wait(5);
      $I->click('//*[@id="header"]/div/div[4]/div[4]/ul/li[3]/div/a');
      $I->click('//*[@id="top-cart-btn-checkout"]');
      $I->wait(15);
      $I->scrollTo(['css'=>'.form-login'],20,50);
      $I->click('//*[@id="checkout-payment-method-load"]/div/div[4]/div[1]/label/img');
      $I->wait(5);
      $I->scrollTo(['css'=>'.form-login'],20,150);
      $I->click('//*[@id="order-review-step"]/div[2]/div[3]/div/button');
      $I->wait(5);
      $I->click('//*[@id="loadLogin"]');
      $I->wait(5);
      $I->fillField('//*[@id="login_email"]', 'allen@xoho.tech');
      $I->fillField('//*[@id="login_password"]', 'xoho@123');
      $I->click('//*[@id="submitLogin"]');
      $I->wait(25);
      $I->click('//*[@id="continue_abovefold"]');
      $I->wait(15);
    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
    }
}
