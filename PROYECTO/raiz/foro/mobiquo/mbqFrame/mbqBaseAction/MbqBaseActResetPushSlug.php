<?php

defined('MBQ_IN_IT') or exit;

/**
 * ResetPushSlug
 * 
 */
Abstract Class MbqBaseActResetPushSlug extends MbqBaseAct {
    
    public function __construct() {
        parent::__construct();
    }
    
    function getInput()
    {
        $in = new stdClass();
        
        if(MbqMain::isRawPostProtocol())
        {
            $in->code = MbqMain::$input['code'];
        }
        include_once(MBQ_3RD_LIB_PATH . 'classTTConnection.php');
        $connection = new classTTConnection();
        $response = $connection->actionVerification($in->code,'reset_push_slug');
        if(!$response)
        {
            MbqError::alert('', __METHOD__ . ',line:' . __LINE__ . '.' . MBQ_ERR_INFO_PARAMS_ERROR);
        }
        return $in;
    }
    
    /**
     * action implement
     */
    protected function actionImplement($in) {
        $TapatalkPush = new \TapatalkPush();
        $result = $TapatalkPush->set_push_slug(0);
        $this->data = array('result' => $result);
    }
  
}

?>