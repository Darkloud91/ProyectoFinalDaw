<?php

defined('MBQ_IN_IT') or exit;

/**
 * upload_attach action
 * 
 * @since  2012-9-11
 * @author Wu ZeTao <578014287@qq.com>
 */
Abstract Class MbqBaseActUploadAttach extends MbqBaseAct {
    
    public function __construct() {
        parent::__construct();
    }
    
    function getInput()
    {
        $in = new stdClass();
        $in->forumId = $this->getInputParam('forum_id');
        $in->messageId = $this->getInputParam('message_id');
        $in->groupId = $this->getInputParam('group_id');
        $in->type = $this->getInputParam('type', 'post');
        return $in;
    }
    
    /**
     * action implement
     */
    protected function actionImplement($in) {
        if (!MbqMain::$oMbqConfig->moduleIsEnable('forum')) {
            MbqError::alert('', "Not support module forum!", '', MBQ_ERR_NOT_SUPPORT);
        }
        if($in->type == 'post')
        {
            $oMbqRdEtForum = MbqMain::$oClk->newObj('MbqRdEtForum');
            if ($oMbqEtForum = $oMbqRdEtForum->initOMbqEtForum($in->forumId, array('case' => 'byForumId'))) {
                $oMbqAclEtAtt = MbqMain::$oClk->newObj('MbqAclEtAtt');
                $aclResult = $oMbqAclEtAtt->canAclUploadAttach($oMbqEtForum, $in->groupId,  $in->type);
                if ($aclResult === true) {    //acl judge
                    $oMbqWrEtAtt = MbqMain::$oClk->newObj('MbqWrEtAtt');
                    $oMbqEtAtt = $oMbqWrEtAtt->uploadAttachment($oMbqEtForum, $in->groupId,  $in->type);
                    if(is_a($oMbqEtAtt,'MbqEtAtt'))
                    {
                        $oMbqRdEtAtt = MbqMain::$oClk->newObj('MbqRdEtAtt');
                        $this->data['result'] = true;
                        $data1 = $oMbqRdEtAtt->returnApiDataAttachment($oMbqEtAtt);
                        MbqMain::$oMbqCm->mergeApiData($this->data, $data1);
                    }
                    else
                    {
                        $this->data['result'] = false;
                        $this->data['result_text'] = $oMbqEtAtt;
                    }
                } else {
                    MbqError::alert('', $aclResult, '', MBQ_ERR_APP);
                }
            } else {
                MbqError::alert('', "Need valid forum id!", '', MBQ_ERR_APP);   
            }
        }
        else
        {
            $oMbqAclEtAtt = MbqMain::$oClk->newObj('MbqAclEtAtt');
            $aclResult = $oMbqAclEtAtt->canAclUploadAttach($in->messageId, $in->groupId,  $in->type);
            if ($aclResult === true) {    //acl judge
                $oMbqWrEtAtt = MbqMain::$oClk->newObj('MbqWrEtAtt');
                $oMbqEtAtt = $oMbqWrEtAtt->uploadAttachment($in->messageId, $in->groupId,  $in->type);
                $oMbqRdEtAtt = MbqMain::$oClk->newObj('MbqRdEtAtt');
                $this->data['result'] = true;
                $data1 = $oMbqRdEtAtt->returnApiDataAttachment($oMbqEtAtt);
                MbqMain::$oMbqCm->mergeApiData($this->data, $data1);
            } else {
                MbqError::alert('', $aclResult, '', MBQ_ERR_APP);
            }
        }
    }
  
}

?>