<?php

defined('MBQ_IN_IT') or exit;

/**
 * subscribe_forum action
 * 
 * @since  2012-9-14
 * @author Wu ZeTao <578014287@qq.com>
 */
Abstract Class MbqBaseActSubscribeForum extends MbqBaseAct {
    
    public function __construct() {
        parent::__construct();
    }
    
    function getInput()
    {
        $in = new stdClass();
        if(MbqMain::isJsonProtocol())
        {
            $in->forumId = $this->getInputParam('forumId');
        }
        else
        {
            $in->forumId = $this->getInputParam(0);
        }
        return $in;
    }
    
    /**
     * action implement
     */
    protected function actionImplement($in) {
        if (!MbqMain::$oMbqConfig->moduleIsEnable('subscribe')) {
            MbqError::alert('', "Not support module subscribe!", '', MBQ_ERR_NOT_SUPPORT);
        }
        if (!MbqMain::$oMbqConfig->moduleIsEnable('forum')) {
            MbqError::alert('', "Not support module forum!", '', MBQ_ERR_NOT_SUPPORT);
        }
        
        $oMbqRdEtForum = MbqMain::$oClk->newObj('MbqRdEtForum');
        if ($oMbqEtForum = $oMbqRdEtForum->initOMbqEtForum($in->forumId, array('case' => 'byForumId'))) {
            $oMbqAclEtForum = MbqMain::$oClk->newObj('MbqAclEtForum');
            $aclResult = $oMbqAclEtForum->canAclSubscribeForum($oMbqEtForum);
            if ($aclResult === true) {  //acl judge
                $oMbqWrEtForum = MbqMain::$oClk->newObj('MbqWrEtForum');
                $result = $oMbqWrEtForum->subscribeForum($oMbqEtForum);
                if($result === true)
                {
                    $this->data['result'] = true;
                }
                else
                {
                    $this->data['result'] = false;
                    $this->data['result_text'] = $result;
                }
            } else {
                MbqError::alert('', $aclResult, '', MBQ_ERR_APP);
            }
        } else {
            MbqError::alert('', "Need valid forum id!", '', MBQ_ERR_APP);
        }
    }
  
}

?>