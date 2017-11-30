<?php

use Codeception\Util\Locator;
class StartNewOrderCest
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
        $I->amOnPage('/ordermanager/create/order'); // Create order 
        $I->wait(5);
        $I->fillField('//*[@id="maincontent"]/div[2]/div[3]/div[7]/div/div[2]/form/div/div[1]/input', 'test'); //order name
        $I->fillField('//*[@id="maincontent"]/div[2]/div[3]/div[7]/div/div[2]/form/div/div[2]/input', '12345'); //PO number
        $I->click('//*[@id="maincontent"]/div[2]/div[3]/div[7]/div/div[2]/form/div/input'); //begin new order
        $I->wait(5);
    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
    }
}
