<?php

use Codeception\Util\Locator;
class GuestCheckoutwithSimpleProductCest
{
    public function _before(AcceptanceTester $I)
    {
         $I->maximizeWindow();
         $I->amOnPage('/catalog/product/view/id/3924/s/spring-blossoms-pillow/category/396/');
         $I->see('Welcome');
         $I->click('//*[@id="newsletter-popup"]/div/div/div[1]/button');
         $I->wait(5);
         $I->see('ADD TO CART');
         $I->click('//*[@id="product-addtocart-button"]'); //add to cart 
         $I->wait(5);
         $I->click('//*[@id="header"]/div/div[4]/div[4]/ul/li[3]/div/a');//click header 
         $I->click('//*[@id="top-cart-btn-checkout"]');//click checkout button
         $I->wait(25);
         $I->click('//*[@id="user-account-signup"]/div/div[2]/input'); //click checkout as guest 
         $I->wait(2);
         $I->click('//*[@id="user-account-signup"]/div/div[3]/button/span');//click continue 
         $I->see('EMAIL ADDRESS');
         $I->fillField('input#customer-email.input-text.valid.new-customer-email','test@gmail.com');// add email 
         $I->click('//*[@id="customer-email-fieldset"]/div[2]/div[1]/button'); //click continue 
         $I->wait(5);
         $I->fillField(Locator::find('input',['name'=>'firstname']),'First'); // add first name 
         $I->fillField(Locator::find('input',['name'=>'lastname']),'Last'); // add last name 
         $I->fillField(Locator::find('input',['name'=>'street[0]']),'4787 Blackwell Street'); // add street address 
         $I->fillField(Locator::find('input',['name'=>'city']),'Dry Creek'); // add city 
         $I->click(Locator::option('Alaska'), ['name' => 'region_id']); //add state

         $I->fillField(Locator::find('input',['name'=>'postcode']),'99737'); //add zip code
         $I->fillField(Locator::find('input',['name'=>'telephone']),'907-323-6503'); //phone number
         $I->click('//*[@id="shipping-info-buttons-container"]/div/button');
         $I->wait('5');
         // $I->click('//*[@id="label_method_cntstandard_codecntcarrier"]');
         // $I->wait('5');
         $I->click('//*[@id="shipping-method-buttons-container"]/div/button');
         $I->wait('5');
         $I->click('//*[@id="checkout-payment-method-load"]/div/div[1]/div[1]/label');
         $I->wait('5');
          // $I->scrollTo(['css'=>'.form-login'],20,100);
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
         $I->scrollTo(['css'=>'.form-login'],20,150);
         $I->wait(5);
         $I->click('//*[@id="billing-address-same-as-shipping-braintree"]');
         $I->click('//*[@id="order-review-step"]/div[2]/div[3]/div/button');
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
