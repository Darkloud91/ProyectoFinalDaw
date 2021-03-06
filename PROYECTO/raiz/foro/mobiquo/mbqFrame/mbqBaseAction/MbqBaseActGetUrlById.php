<?php

defined('MBQ_IN_IT') or exit;

/**
 * get_url_by_id
 */
Abstract Class MbqBaseActGetUrlById extends MbqBaseAct {
    
    public function __construct() {
        parent::__construct();
    }
    
    function getInput()
    {
        $in = new stdClass();
        if(MbqMain::isJsonProtocol())
        {
            $in->mode = $this->getInputParam('mode');
            $in->id = $this->getInputParam('id');
        }
        else
        {
            $in->mode = $this->getInputParam(0);
            $in->id = $this->getInputParam(1);
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
        switch($in->mode)
        {
            case 'forum':
                {
                    $oMbqRdEtForum = MbqMain::$oClk->newObj('MbqRdEtForum');
                    if ($oMbqEtForum = $oMbqRdEtForum->initOMbqEtForum($in->id, array('case' => 'byForumId'))
                        ) {
                            $this->data['result'] = true;
                            $this->data['url'] = $oMbqRdEtForum->getUrl($oMbqEtForum);
                        }
                    else
                    {
                        MbqError::alert('', "Need valid forum id!", '', MBQ_ERR_APP);
                    }
                    break;
                }
            case 'topic':
                {
                    $oMbqRdEtForumTopic = MbqMain::$oClk->newObj('MbqRdEtForumTopic');
                    if ($oMbqEtForumTopic = $oMbqRdEtForumTopic->initOMbqEtForumTopic($in->id, array('case' => 'byTopicId'))
                        ) {
                            $this->data['result'] = true;
                            $this->data['url'] = $oMbqRdEtForumTopic->getUrl($oMbqEtForumTopic);
                        }
                    else
                    {
                        MbqError::alert('', "Need valid topic id!", '', MBQ_ERR_APP);
                    }
                    break;
                }
            case 'post':
                {
                    $oMbqRdEtForumPost = MbqMain::$oClk->newObj('MbqRdEtForumPost');
                    if ($oMbqEtForumPost = $oMbqRdEtForumPost->initOMbqEtForumPost($in->id, array('case' => 'byPostId'))) {
                        $this->data['result'] = true;
                        $this->data['url'] = $oMbqRdEtForumPost->getUrl($oMbqEtForumPost);
                    }
                    else
                    {
                        MbqError::alert('', "Need valid post id!", '', MBQ_ERR_APP);
                    }
                    break;
                }
            case 'pm':
                {
                    $oMbqRdEtPm = MbqMain::$oClk->newObj('MbqRdEtPm');
                    if ($oMbqEtPm = $oMbqRdEtPm->initOMbqEtPm(array('msgId'=> $in->id), array('case' => 'byMsgId'))
                        ) {
                            $this->data['result'] = true;
                            $this->data['url'] = $oMbqRdEtPm->getUrl($oMbqEtPm);
                        }
                    else
                    {
                        MbqError::alert('', "Need valid pcmsg id!", '', MBQ_ERR_APP);
                    }
                    break;
                }
            case 'conv':
                {
                    $oMbqRdEtPcMsg = MbqMain::$oClk->newObj('MbqRdEtPcMsg');
                    if ($oMbqEtPcMsg = $oMbqRdEtPcMsg->initOMbqEtPcMsg($in->id, array('case' => 'byPcMsgId'))
                        ) {
                            $this->data['result'] = true;
                            $this->data['url'] = $oMbqRdEtPcMsg->getUrl($oMbqEtPcMsg);
                        }
                    else
                    {
                        MbqError::alert('', "Need valid pcmsg id!", '', MBQ_ERR_APP);
                    }
                    break;
                }
            default:
                {
                    MbqError::alert('', "Need valid mode. Valid mode values are 'forum','topic','post','pm','conv'", '', MBQ_ERR_APP);
                }
        }
    }
}

?>