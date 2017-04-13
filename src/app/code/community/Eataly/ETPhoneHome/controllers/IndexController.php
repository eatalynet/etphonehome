<?php

class Eataly_ETPhoneHome_IndexController extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    {
        $code = $this->getRequest()->getParam('code', 302);
        $this->getResponse()->setRedirect('/', $code);
    }
}