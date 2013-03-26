<?php


class FeatureContext extends Behat\MinkExtension\Context\MinkContext
{
    
   
    /**
     * @Given /^I wait for result$/
     */
    public function iWaitForResult()
    {
        sleep(5);
    }



}

