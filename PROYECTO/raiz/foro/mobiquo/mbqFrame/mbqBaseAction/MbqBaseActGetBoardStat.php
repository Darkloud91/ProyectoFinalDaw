<?php

defined('MBQ_IN_IT') or exit;

/**
 * get_online_users action
 * 
 * @since  2012-9-13
 * @author Wu ZeTao <578014287@qq.com>
 */
Abstract Class MbqBaseActGetBoardStat extends MbqBaseAct {
    
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
        $oMbqRdEtSysStatistics = MbqMain::$oClk->newObj('MbqRdEtSysStatistics');
        $oMbqEtSysStatistics = $oMbqRdEtSysStatistics->initOMbqEtSysStatistics();
        $this->data = $oMbqRdEtSysStatistics->returnApiDataSysStatistics($oMbqEtSysStatistics);
        $this->data['result'] = true;
    }
}

?>