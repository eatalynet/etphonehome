<?php

class Eataly_ETPhoneHome_Helper_Data extends Mage_Core_Helper_Abstract
{

    /**
     * Retrieve ET Phone Home config
     *
     * @return string
     */
    public function getRedirectConfig()
    {
        return Mage::app()->getStore()->getConfig('web/default/eataly_etphonehome');
    }
}