<?php

/*
 * @author     M2E Pro Developers Team
 * @copyright  M2E LTD
 * @license    Commercial use is forbidden
 */

namespace Ess\M2ePro\Model;

class Exception extends \Exception
{
    protected $additionalData = array();
    protected $sendToServer = NULL;

    //########################################

    public function __construct($message = "", $additionalData = array(), $code = 0, $sendToServer = true)
    {
        $this->additionalData = $additionalData;
        $this->sendToServer = $sendToServer;

        parent::__construct($message, $code, null);
    }

    //########################################

    public function getAdditionalData()
    {
        return $this->additionalData;
    }

    public function setAdditionalData($additionalData)
    {
        $this->additionalData = $additionalData;
        return $this;
    }

    //########################################

    public function setSendToServer($value)
    {
        $this->sendToServer = (bool)$value;
    }

    public function isSendToServer()
    {
        return $this->sendToServer;
    }

    //########################################
}