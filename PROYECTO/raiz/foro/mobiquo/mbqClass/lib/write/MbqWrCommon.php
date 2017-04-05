<?php

defined('MBQ_IN_IT') or exit;

MbqMain::$oClk->includeClass('MbqBaseWrCommon');


Class MbqWrCommon extends MbqBaseWrCommon {
    
    public function __construct() {
    }
    public function setApiKey($apiKey)
    {
        global $config;
        $config->set('tapatalk_push_key', $apiKey);
        return true;
    }
  
}

?>