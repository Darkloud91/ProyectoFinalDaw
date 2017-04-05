<?php

defined('MBQ_IN_IT') or exit;

/**
 * create_message action
 * 
 * @since  2012-12-29
 * @author Wu ZeTao <578014287@qq.com>
 */
Abstract Class MbqBaseActCreateMessage extends MbqBaseAct {
    
    public function __construct() {
        parent::__construct();
    }
    
    function getInput()
    {
        $in = new stdClass();
        if(MbqMain::isJsonProtocol())
        {
            $in->usernames = $this->getInputParam('username');
            $in->subject = $this->getInputParam('subject');
            $in->body = $this->getInputParam('body');
            $in->action = $this->getInputParam('action');
            $in->messageId = $this->getInputParam('messageId');
        }
        else
        {
            $in->usernames = (array) $this->getInputParam(0);
            $in->subject = $this->getInputParam(1);
            $in->body = $this->getInputParam(2);
            $in->action = $this->getInputParam(3);
            $in->messageId = (int) $this->getInputParam(4); 
        }
       
        return $in;
    }
    
    /**
     * action implement
     */
    protected function actionImplement($in) {
        if (MbqMain::$oMbqConfig->moduleIsEnable('pm')) {
            $oMbqEtPm = MbqMain::$oClk->newObj('MbqEtPm');
            $oMbqEtPm->userNames->setOriValue($in->usernames);
            $oMbqEtPm->msgTitle->setOriValue($in->subject);
            $oMbqEtPm->msgContent->setOriValue($in->body);
            if($in->action == 1)
            {
                $oMbqEtPm->isReply->setOriValue(true);
                $oMbqEtPm->toMsgId->setOriValue($in->messageId);
            }
            else if($in->action == 2)
            {
                $oMbqEtPm->isForward->setOriValue(true);
                $oMbqEtPm->toMsgId->setOriValue($in->messageId);
            }
            $oMbqAclEtPm = MbqMain::$oClk->newObj('MbqAclEtPm');
            $aclResult = $oMbqAclEtPm->canAclCreateMessage();
	        if ($aclResult === true) {
                $oMbqWrEtPm = MbqMain::$oClk->newObj('MbqWrEtPm');
                $oMbqWrEtPm->addMbqEtPm($oMbqEtPm);
                $this->data['result'] = true;
                $this->data['msg_id'] = (string) $oMbqEtPm->msgId->oriValue;
                $oTapatalkPush = new TapatalkPush();
                $oTapatalkPush->callMethod('doInternalPushNewMessage', array(
                    'oMbqEtPm' => $oMbqEtPm
                ));
            } else {
                MbqError::alert('', $aclResult, '', MBQ_ERR_APP);
            }
        } else {
            MbqError::alert('', "Not support module private message!", '', MBQ_ERR_NOT_SUPPORT);
        }
    }
  
}

?>