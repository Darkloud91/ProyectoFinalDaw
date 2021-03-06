<?php

defined('MBQ_IN_IT') or exit;

/**
 * get_thread_by_unread action
 * 
 * @since  2013-8-1
 * @author Wu ZeTao <578014287@qq.com>
 */
Abstract Class MbqBaseActGetThreadByUnread extends MbqBaseAct {
    
    public function __construct() {
        parent::__construct();
    }
    
    function getInput()
    {
        $in = new stdClass();
        if(MbqMain::isJsonProtocol())
        {
            $in->topicId = $this->getInputParam('topicId');
            $in->postsPerRequest = (int) $this->getInputParam('perPage');
            $in->postsPerRequest = $in->postsPerRequest ? $in->postsPerRequest : 20;
            $in->returnHtml = (boolean) $this->getInputParam('returnHtml');
         }
        else
        {
            $in->topicId = $this->getInputParam(0);
            $in->postsPerRequest = (int) $this->getInputParam(1);
            $in->postsPerRequest = $in->postsPerRequest ? $in->postsPerRequest : 20;
            $in->returnHtml = (boolean) $this->getInputParam(2);
        }
        return $in;
    }
    
    /**
     * action implement
     */
    protected function actionImplement($in) {
        if (!MbqMain::$oMbqConfig->moduleIsEnable('forum')) {
            MbqError::alert('', "Not support module forum!", '', MBQ_ERR_NOT_SUPPORT);
        }
        $oMbqDataPage = MbqMain::$oClk->newObj('MbqDataPage');
        $oMbqRdEtForumTopic = MbqMain::$oClk->newObj('MbqRdEtForumTopic');
        if ($oMbqEtForumTopic = $oMbqRdEtForumTopic->initOMbqEtForumTopic($in->topicId, array('case' => 'byTopicId', 'requireUnreadPosition'=>true))) {
            $firstUnreadPosition = $oMbqEtForumTopic->firstUnreadPosition->oriValue;
            $oMbqDataPage->initByPositionAndPerPage($firstUnreadPosition, $in->postsPerRequest);
            $in->oMbqDataPage = $oMbqDataPage;
            $oMbqAclEtForumTopic = MbqMain::$oClk->newObj('MbqAclEtForumTopic');
            $aclResult = $oMbqAclEtForumTopic->canAclGetThread($oMbqEtForumTopic);
            if ($aclResult === true) {    //acl judge
                $oMbqRdEtForumPost = MbqMain::$oClk->newObj('MbqRdEtForumPost');
                $in->oMbqDataPage = $oMbqRdEtForumPost->getObjsMbqEtForumPost($oMbqEtForumTopic, array('case' => 'byTopic', 'oMbqDataPage' => $in->oMbqDataPage));
                $this->data = $oMbqRdEtForumTopic->returnApiDataForumTopic($oMbqEtForumTopic);
                $this->data['position'] = (int)$firstUnreadPosition; 
                $this->data['forum_name'] = (string) $oMbqEtForumTopic->oMbqEtForum->forumName->oriValue;
                $this->data['can_upload'] = (boolean) $oMbqEtForumTopic->oMbqEtForum->canUpload->oriValue;
                $this->data['posts'] = $oMbqRdEtForumPost->returnApiArrDataForumPost($in->oMbqDataPage->datas, $in->returnHtml);
                $oMbqWrEtForumTopic = MbqMain::$oClk->newObj('MbqWrEtForumTopic');
                /* add forum topic view num */
                $oMbqWrEtForumTopic->addForumTopicViewNum($oMbqEtForumTopic);
                /* mark forum topic read */
                $oMbqWrEtForumTopic->markForumTopicRead($oMbqEtForumTopic);
                /* reset forum topic subscription */
                $oMbqWrEtForumTopic->resetForumTopicSubscription($oMbqEtForumTopic);
            } else {
                MbqError::alert('', $aclResult, '', MBQ_ERR_APP);
            }
        } else {
            MbqError::alert('', "Need valid topic id!", '', MBQ_ERR_APP);
        }
    }
  
}

?>