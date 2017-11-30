<?php


use Codeception\Util\Locator;
class CheckoutwithCreditcardCest
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
         $I->wait(5);
         $I->click('//*[@id="header"]/div/div[4]/div[2]/ul/li[3]/div/a');
         $I->click('//*[@id="top-cart-btn-checkout"]');
         $I->wait(10);
         $I->fillField('//*[@id="checkout-ordermanager-form"]/div/div[1]/div/input', 'test'); // order name
         $I->fillField('//*[@id="checkout-ordermanager-form"]/div/div[3]/div/input', '123');
         $I->wait(5);
         $I->click('//*[@id="form-submit-ordermanager"]'); //save order info
         $I->scrollTo(['css'=>'.checkout-container'],5,120);
         $I->wait(10);
         $I->scrollTo(['css'=>'.checkout-container'],5,100);
         $I->wait(5);
         $I->click('//*[@id="shipping-buttons-container"]/div/button'); // Shipping Address
         $I->wait(5);
         $I->scrollTo(['css'=>'.checkout-container'],5,-50);
         $I->wait(5);
         $I->click('//*[@id="label_method_codeflat_codecntcarrier"]');
         $I->wait(5);
         $I->click('//*[@id="shipping-method-buttons-container"]/div/button'); //Shipping method
         $I->wait(5);
         $I->click('//*[@id="checkout-payment-method-load"]/div/div[5]/div[1]/label/span'); //select payment method
         $I->wait(5);
      $I->executeJS('jQuery("iframe#braintree-hosted-field-number").attr("name", "Card number")'); 
      $I->switchToIFrame("Card number");
      $I->fillField('//*[@id="credit-card-number"]', '4242424242424242');
      $I->wait(5);

      $I->executeInSelenium(function (\Facebook\WebDriver\Remote\RemoteWebDriver $webdriver) {
      $handles=$webdriver->getWindowHandles();
      $last_window = end($handles);
      $webdriver->switchTo()->window($last_window);
                                                                                              });
      $I->wait(5);
      $I->executeJS('jQuery("iframe#braintree-hosted-field-expirationMonth").attr("name", "expirationMonth")'); 
      $I->switchToIFrame("expirationMonth");
      $I->fillField('//*[@id="expiration-month"]', '02');
       $I->executeInSelenium(function (\Facebook\WebDriver\Remote\RemoteWebDriver $webdriver) {
      $handles=$webdriver->getWindowHandles();
      $last_window = end($handles);
      $webdriver->switchTo()->window($last_window);
                                                                                              });
      $I->wait(5);
      $I->executeJS('jQuery("iframe#braintree-hosted-field-expirationYear").attr("name", "expirationYear")'); 
      $I->switchToIFrame("expirationYear");
      $I->fillField('//*[@id="expiration-year"]', '20');
       $I->executeInSelenium(function (\Facebook\WebDriver\Remote\RemoteWebDriver $webdriver) {
      $handles=$webdriver->getWindowHandles();
      $last_window = end($handles);
      $webdriver->switchTo()->window($last_window);
                                                                                              });
      $I->wait(5);
      $I->executeJS('jQuery("iframe#braintree-hosted-field-cvv").attr("name", "CVV")'); 
      $I->switchToIFrame("CVV");
      $I->fillField('//*[@id="cvv"]', '123');
      $I->wait(5);
       $I->executeInSelenium(function (\Facebook\WebDriver\Remote\RemoteWebDriver $webdriver) {
      $handles=$webdriver->getWindowHandles();
      $last_window = end($handles);
      $webdriver->switchTo()->window($last_window);
                                                                                                   });

       $I->wait(15);
       $I->scrollTo(['css'=>'.checkout-container'],20,250);
       $I->wait(5);
       $I->click('//*[@id="order-review-step"]/div[2]/div[3]/div[8]/div/button');
       $I->wait(5);
    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
    }
}
