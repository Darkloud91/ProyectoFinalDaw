<?php

defined('MBQ_IN_IT') or exit;

/**
 * get_config action
 * 
 * @since  2012-7-30
 * @author Wu ZeTao <578014287@qq.com>
 */
Abstract Class MbqBaseActGetConfig extends MbqBaseAct {
    
    public function __construct() {
        parent::__construct();
    }
    
    function getInput()
    {
        $in = new stdClass();
        if(MbqMain::isJsonProtocol())
        {
            
        }
        else
        {
        }
        return $in;
    }
    
    /**
     * action implement
     */
    protected function actionImplement($in) {
        $cfg = MbqMain::$oMbqConfig->getAllCfg();
        
        $isTTServerCall = false;
        if(isset($_COOKIE['X-TT']))
        {
            $code = trim($_COOKIE['X-TT']);
        }
        else if(isset($_SERVER['HTTP_X_TT']))
        {
            $code = trim($_SERVER['HTTP_X_TT']);
        }
        if(isset($code))
        {
            if (!class_exists('classTTConnection')){
                require_once(MBQ_3RD_LIB_PATH.'classTTConnection.php');
            }
            $connection = new classTTConnection();
            $response = $connection->actionVerification($code,'get_config');
            if($response)
            {
                $isTTServerCall = true;
            }
        }
        if($isTTServerCall)
        {
            $this->data['mbqframe_version'] = '1.4.5';
            $this->data['php_version'] = phpversion();
        }
        foreach ($cfg as $moduleName => $module) {
            foreach ($module as $k => $v) {
                if ($k !== 'module_name' && $k != 'module_version' && $k != 'module_enable') {
                    if (isset($this->data[$k])) {
                        MbqError::alert('', "Find repeat config $k!");
                    } else {
                        if (!$v->isAdvCfgValueType()) {
                            if ($v->hasSetOriValue()) {
                                if ($k == 'is_open' || $k == 'guest_okay' || $k == 'min_search_length') {
                                    $this->data[$k] = $v->oriValue;
                                } else {
                                    if(!$isTTServerCall)
                                    {
                                        if($k == 'version')
                                        {
                                            $v->setOriValue(substr($v->oriValue, 0,strpos($v->oriValue, '_')));
                                        }
                                        if($k == 'sys_version' || $k == 'stats' || $k == 'api_key')
                                        {
                                            continue;
                                        }
                                    }
                                    $this->data[$k] = (string) $v->oriValue;
                                }
                            } else {
                                MbqError::alert('', "Need set config $k!");
                            }
                        }
                    }
                }
            }
        }
    }
  
}

?>