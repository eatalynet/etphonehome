<?php

class Eataly_ETPhoneHome_Controller_Router extends Mage_Core_Controller_Varien_Router_Abstract
{
    /**
     * Match if the module is configured to redirect
     * @param Zend_Controller_Request_Http $request
     * @return bool
     */
    public function match(Zend_Controller_Request_Http $request)
    {
        if ($this->_isAdmin()) {
            return false;
        }

        switch ($this->_getETPhoneHomeConfig()) {
            case 301:
                $code = 301;
                break;
            case 302:
                $code = 302;
                break;
            default:
                return false;
        }

        $request->setModuleName('eataly_etphonehome')
            ->setControllerName('index')
            ->setActionName('index')
            ->setParam('code', $code);

        return true;
    }

    /**
     * Retrieve default router config
     *
     * @return string
     */
    protected function _getETPhoneHomeConfig()
    {
        return Mage::app()->getStore()->getConfig('web/default/eataly_etphonehome');
    }

    /**
     * Check if store is admin store
     *
     * @return boolean
     */
    protected function _isAdmin()
    {
        return Mage::app()->getStore()->isAdmin();
    }
}
