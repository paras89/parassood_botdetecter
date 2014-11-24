<?php


/**
 * Orderexporter observer model
 *
 * @category    Parassood
 * @package     Parassood_Botdetecter
 * @author      Paras Sood
 */
class Parassood_Botdetecter_Model_Observer
{

    public function filterBot($observer)
    {
        $httpUserAgent = Mage::helper('core/http')->getHttpUserAgent();
        if(preg_match('/robot|bot|spider|crawler|crawl|slurp|curl|^$/i', $httpUserAgent)){
            // Execute Any Custom Logic
            Mage::app()->getResponse()->setBody('Now Allowing BOT through...');
            Mage::app()->getResponse()->sendResponse();
            die();
        }

        return $this;
    }


}