<?php

class Eataly_ETPhoneHome_Model_Observer
{
    public function onNoRoute($observer)
    {
        if (!Mage::helper('eataly_etphonehome')->getRedirectConfig()) {
            return;
        }
        
        /** @var Varien_Object $status */
        $status = $observer->getEvent()->getStatus();

        $status->setLoaded(true);
        $status->setForwardAction('index');
        $status->setForwardController('index');
        $status->setForwardModule('eataly_etphonehome');
    }
}