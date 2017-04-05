<?php

defined('MBQ_IN_IT') or exit;

MbqMain::$oClk->includeClass('MbqBaseRdEtForumPost');

/**
 * forum post read class
 * 
 * @since  2012-8-13
 * @author Wu ZeTao <578014287@qq.com>
 */
Class MbqRdEtForumPost extends MbqBaseRdEtForumPost {
    
    public function __construct() {
    }
    
    public function makeProperty(&$oMbqEtForumPost, $pName, $mbqOpt = array()) {
        switch ($pName) {
            default:
            MbqError::alert('', __METHOD__ . ',line:' . __LINE__ . '.' . MBQ_ERR_INFO_UNKNOWN_PNAME . ':' . $pName . '.');
            break;
        }
    }
    /**
     * get forum post objs
     *
     * @param  Mixed  $var
     * @param  Array  $mbqOpt
     * $mbqOpt['case'] = 'byTopic' means get data by forum topic obj.$var is the forum topic obj.
     * $mbqOpt['case'] = 'byPostIds' means get data by post ids.$var is the ids.
     * $mbqOpt['case'] = 'byReplyUser' means get data by reply user.$var is the MbqEtUser obj.
     * @return  Mixed
     */
    public function getObjsMbqEtForumPost($var, $mbqOpt) {
        switch($mbqOpt['case'])
        {
            case 'byTopic':
                {
                    global $request, $template, $user, $auth, $phpbb_home, $config, $attachment_by_id, $forum_id, $topic_id, $support_post_thanks, $topic_data, $total_posts, $can_subscribe, $post_data;
                    $topic_data = null;
                    $post_data = null;
                    $oMbqEtForumTopic = $var;
                    $oMbqDataPage = $mbqOpt['oMbqDataPage'];
                    $request_file = 'viewtopic';
                    $request->overwrite('st',0);
                    $request->overwrite('sk','t');
                    $request->overwrite('sd','a');
                    $request->overwrite('t', $oMbqEtForumTopic->topicId->oriValue);
                    $request->overwrite('start',$oMbqDataPage->startNum);
                    $request->overwrite('limit',$oMbqDataPage->numPerPage);
                    require(MBQ_APPEXTENTION_PATH . 'viewtopic_clone.php');
                    $newMbqOpt['case'] = 'byRow';
                    $newMbqOpt['oMbqEtForum'] = true;
                    $newMbqOpt['oMbqEtForumTopic'] = true;
                    $newMbqOpt['oMbqEtUser'] = true;
                    $newMbqOpt['oMbqDataPage'] = $oMbqDataPage;
                    $objsMbqEtForumPost = array();
                    foreach($post_data as $item)
                    {
                        $objsMbqEtForumPost[] = $this->initOMbqEtForumPost($item, $newMbqOpt);
                    }
                    if (isset($mbqOpt['oMbqDataPage'])) {
                        $oMbqDataPage = $mbqOpt['oMbqDataPage'];
                        $oMbqDataPage->datas = $objsMbqEtForumPost;
                        return $oMbqDataPage;
                    } else {
                        return $objsMbqEtForumPost;
                    }
                 
                    break;
                }
            case 'byPostId':
                {
                    $id = $var;
                    global $request, $template, $user, $auth, $phpbb_home, $config, $attachment_by_id, $forum_id, $topic_id, $support_post_thanks, $topic_data, $post_data, $total_posts, $can_subscribe, $last_error;
                    $topic_data = null;
                    $post_data = null;
                    $oMbqEtForumTopic = $var;
                    $oMbqDataPage = $mbqOpt['oMbqDataPage'];
                    $request_file = 'viewtopic';
                    $request->overwrite('st', 0);
                    $request->overwrite('sk', 't');
                    $request->overwrite('sd', 'a');
                    $request->overwrite('p', $id);
                    $request->overwrite('limit', $oMbqDataPage->perPage);
                    require(MBQ_APPEXTENTION_PATH . 'viewtopic_clone.php');
                    $newMbqOpt['case'] = 'byRow';
                    $newMbqOpt['oMbqEtForum'] = true;
                    $newMbqOpt['oMbqEtForumTopic'] = true;
                    $newMbqOpt['oMbqEtUser'] = true;
                    $newMbqOpt['oMbqDataPage'] = $oMbqDataPage;
                    $objsMbqEtForumPost = array();
                    foreach($post_data as $item)
                    {
                        $objsMbqEtForumPost[] = $this->initOMbqEtForumPost($item, $newMbqOpt);
                    }
                    if (isset($mbqOpt['oMbqDataPage'])) {
                        $oMbqDataPage = $mbqOpt['oMbqDataPage'];
                        $oMbqDataPage->datas = $objsMbqEtForumPost;
                        return $oMbqDataPage;
                    } else {
                        return $objsMbqEtForumPost;
                    }
                    
                    break;
                }
            case 'byReplyUser':
                {
                    $oMbqEtUser = $var;
                    $oMbqDataPage = $mbqOpt['oMbqDataPage'];
                    global $request, $db, $template, $user, $auth, $config, $can_subscribe, $show_results, $include_topic_num, $total_match_count, $request_method, $searchResults;
                    $request_method = 'search';
                    $include_topic_num = true;
                    
                    $request->overwrite('page', $oMbqDataPage->curPage);
                    $request->overwrite('perpage', $oMbqDataPage->numPerPage);
                    $request->overwrite('submit', 'Search');
                    $request->overwrite('sr', 'posts');
                   
                   
                    $request->overwrite('sf', 'all');
                  
                    $request->overwrite('author', $oMbqEtUser->userName->oriValue);
                    $request->overwrite('author_id', $oMbqEtUser->userId->oriValue);
                    
                    require(MBQ_APPEXTENTION_PATH . 'search_clone.php');
                    $oMbqRdEtForumTopic = MbqMain::$oClk->newObj('MbqRdEtForumTopic');
                    $oMbqRdEtForumPost = MbqMain::$oClk->newObj('MbqRdEtForumPost');
                    $newMbqOpt['case'] = 'byRow';
                    $newMbqOpt['oMbqEtForum'] = true;
                    $newMbqOpt['oMbqEtUser'] = true;
                    $newMbqOpt['oMbqDataPage'] = $oMbqDataPage;
                   
                        $newMbqOpt['oMbqEtForumTopic'] = true;
                        $newMbqOpt['oMbqEtUser'] = true;
                        foreach($searchResults as $item)
                        {
                            $oMbqDataPage->datas[] = $oMbqRdEtForumPost->initOMbqEtForumPost($item, $newMbqOpt);
                        }
                        $oMbqDataPage->totalNum = $total_match_count ? $total_match_count : 0;
                   
                    return $oMbqDataPage;
                }
            case 'awaitingModeration':
                {
                    global $user,$phpbb_root_path, $phpEx, $template, $request, $db, $phpbb_container,$config;
                    require_once(MBQ_APPEXTENTION_PATH . 'fake_template.' . $phpEx);
                    $template = new fake_template();
                    $oMbqDataPage = $mbqOpt['oMbqDataPage'];
                    
                    $request->overwrite('mode', 'unapproved_posts');
                    $request->overwrite('start',$oMbqDataPage->startNum);
                    $currentTopicsPerPage = $config['topics_per_page'];
                    $config['topics_per_page'] = $oMbqDataPage->numPerPage;
                    
                    include_once($phpbb_root_path . 'includes/mcp/mcp_queue.' . $phpEx);
                    include_once($phpbb_root_path . 'includes/functions_admin.' . $phpEx);
                    include_once($phpbb_root_path . 'includes/functions_mcp.' . $phpEx);
                    include_once($phpbb_root_path . 'includes/functions_module.' . $phpEx);
                    
                    $user->setup('mcp');
                    $mcp_queue = new mcp_queue(new p_master());
                    
                    $mcp_queue->main(0,'unapproved_posts');
                    
                    $config['topics_per_page'] = $currentTopicsPerPage;
                    
                    $error = $template->getTemplateVar('ERROR');
                    if(isset($error) && !empty($error))
                    {
                            $errors = explode('<br />', $error);
                            if(is_array($errors))
                            {
                                    return $errors[0];
                                }
                            return $error;
                        }
                    $postRows = $template->getTemplateBlockVar('postrow');
                    
                    $oMbqRdEtForumPost = MbqMain::$oClk->newObj('MbqRdEtForumPost');
                    $newMbqOpt['case'] = 'byPostId';
                    $newMbqOpt['oMbqEtForum'] = true;
                    $newMbqOpt['oMbqEtUser'] = true;
                    $newMbqOpt['oMbqDataPage'] = $oMbqDataPage;
                    foreach($postRows as $postRow)
                    {
                        $oMbqDataPage->datas[] = $oMbqRdEtForumPost->initOMbqEtForumPost($postRow['POST_ID'], $newMbqOpt);
                    }
                    $vars = $template->getTemplateVars();
                    $oMbqDataPage->totalNum =  $template->pagination->total;
                    return $oMbqDataPage;
                }
            case 'deleted':
                {
                    global $user,$phpbb_root_path, $phpEx, $template, $request, $db, $phpbb_container,$config;
                    require_once(MBQ_APPEXTENTION_PATH . 'fake_template.' . $phpEx);
                    $template = new fake_template();
                    $oMbqDataPage = $mbqOpt['oMbqDataPage'];
                    $request->overwrite('mode', 'deleted_posts');
                    $request->overwrite('start',$oMbqDataPage->startNum);
                    $currentTopicsPerPage = $config['topics_per_page'];
                    $config['topics_per_page'] = $oMbqDataPage->numPerPage;
                    
                    include_once($phpbb_root_path . 'includes/mcp/mcp_queue.' . $phpEx);
                    include_once($phpbb_root_path . 'includes/functions_admin.' . $phpEx);
                    include_once($phpbb_root_path . 'includes/functions_mcp.' . $phpEx);
                    include_once($phpbb_root_path . 'includes/functions_module.' . $phpEx);
                    
                    $user->setup('mcp');
                    $mcp_queue = new mcp_queue(new p_master());
                    
                    $mcp_queue->main(0,'deleted_posts');
                    
                    $config['topics_per_page'] = $currentTopicsPerPage;
                    
                    $error = $template->getTemplateVar('ERROR');
                    if(isset($error) && !empty($error))
                    {
                            $errors = explode('<br />', $error);
                            if(is_array($errors))
                            {
                                    return $errors[0];
                                }
                            return $error;
                        }
                    $postRows = $template->getTemplateBlockVar('postrow');
                    
                    $oMbqRdEtForumPost = MbqMain::$oClk->newObj('MbqRdEtForumPost');
                    $newMbqOpt['case'] = 'byPostId';
                    $newMbqOpt['oMbqEtForum'] = true;
                    $newMbqOpt['oMbqEtUser'] = true;
                    $newMbqOpt['oMbqDataPage'] = $oMbqDataPage;
                    if(isset($postRows))
                    {
                        foreach($postRows as $postRow)
                        {
                            $oMbqDataPage->datas[] = $oMbqRdEtForumPost->initOMbqEtForumPost($postRow['POST_ID'], $newMbqOpt);
                        }
                        $vars = $template->getTemplateVars();
                    }
                    $oMbqDataPage->totalNum =  $template->pagination->total > sizeof($oMbqDataPage->datas) ? $template->pagination->total : sizeof($oMbqDataPage->datas);
                    return $oMbqDataPage;
                }
            case 'reported':
                {
                    global $user,$phpbb_root_path, $phpEx, $template, $request, $db, $phpbb_container,$config;
                    require_once(MBQ_APPEXTENTION_PATH . 'fake_template.' . $phpEx);
                    $template = new fake_template();
                    $oMbqDataPage = $mbqOpt['oMbqDataPage'];
                    $request->overwrite('mode', 'reports');
                    $request->overwrite('start',$oMbqDataPage->startNum);
                    $currentTopicsPerPage = $config['topics_per_page'];
                    $config['topics_per_page'] = $oMbqDataPage->numPerPage;
                    
                    include_once($phpbb_root_path . 'includes/mcp/mcp_reports.' . $phpEx);
                    include_once($phpbb_root_path . 'includes/functions_admin.' . $phpEx);
                    include_once($phpbb_root_path . 'includes/functions_mcp.' . $phpEx);
                    include_once($phpbb_root_path . 'includes/functions_module.' . $phpEx);
                    
                    $user->setup('mcp');
                    $mcp_queue = new mcp_reports(new p_master());
                    
                    $mcp_queue->main(0,'reports');
                    
                    $config['topics_per_page'] = $currentTopicsPerPage;
                    
                    $error = $template->getTemplateVar('ERROR');
                    if(isset($error) && !empty($error))
                    {
                            $errors = explode('<br />', $error);
                            if(is_array($errors))
                            {
                                    return $errors[0];
                                }
                            return $error;
                        }
                    $postRows = $template->getTemplateBlockVar('postrow');
                    
                    $oMbqRdEtForumPost = MbqMain::$oClk->newObj('MbqRdEtForumPost');
                    $newMbqOpt['case'] = 'byPostId';
                    $newMbqOpt['oMbqEtForum'] = true;
                    $newMbqOpt['oMbqEtUser'] = true;
                    $newMbqOpt['oMbqDataPage'] = $oMbqDataPage;
                    foreach($postRows as $postRow)
                    {
                        $oMbqDataPage->datas[] = $oMbqRdEtForumPost->initOMbqEtForumPost($postRow['POST_ID'], $newMbqOpt);
                    }
                    $vars = $template->getTemplateVars();
                    $oMbqDataPage->totalNum =  $template->pagination->total;
                    return $oMbqDataPage;
                }
            case 'byObjs':
                {
                    $postList = $var;
                    $objsMbqEtForumPost = array();
                    $authorUserIds = array();
                    $forumIds = array();
                    $topicIds = array();
                    foreach ($postList as $postNode) {
                            $objsMbqEtForumPost[] = $postNode;
                    }
                    foreach ($objsMbqEtForumPost as $oMbqEtForumPost) {
                        $authorUserIds[$oMbqEtForumPost->postAuthorId->oriValue] = $oMbqEtForumPost->postAuthorId->oriValue;
                        $forumIds[$oMbqEtForumPost->forumId->oriValue] = $oMbqEtForumPost->forumId->oriValue;
                        $topicIds[$oMbqEtForumPost->topicId->oriValue] = $oMbqEtForumPost->topicId->oriValue;
                    }
                    /* load oMbqEtForum property */
                    $oMbqRdEtForum = MbqMain::$oClk->newObj('MbqRdEtForum');
                    $objsMbqEtForum = $oMbqRdEtForum->getObjsMbqEtForum($forumIds, array('case' => 'byForumIds'));
                    foreach ($objsMbqEtForum as $oNewMbqEtForum) {
                        foreach ($objsMbqEtForumPost as &$oMbqEtForumPost) {
                            if ($oNewMbqEtForum->forumId->oriValue == $oMbqEtForumPost->forumId->oriValue) {
                                $oMbqEtForumPost->oMbqEtForum = $oNewMbqEtForum;
                            }
                        }
                    }
                    /* load oMbqEtForumTopic property */
                    $oMbqRdEtForumTopic = MbqMain::$oClk->newObj('MbqRdEtForumTopic');
                    $objsMbqEtFroumTopic = $oMbqRdEtForumTopic->getObjsMbqEtForumTopic($topicIds, array('case' => 'byTopicIds', 'oFirstMbqEtForumPost' => false));  /* must set 'oFirstMbqEtForumPost' to false,otherwise will cause infinite recursion call for get oMbqEtForumTopic and oFirstMbqEtForumPost and make memory depleted!!! */
                    foreach ($objsMbqEtFroumTopic as $oNewMbqEtFroumTopic) {
                        foreach ($objsMbqEtForumPost as &$oMbqEtForumPost) {
                            if ($oNewMbqEtFroumTopic->topicId->oriValue == $oMbqEtForumPost->topicId->oriValue) {
                                $oMbqEtForumPost->oMbqEtForumTopic = $oNewMbqEtFroumTopic;
                            }
                        }
                    }
                    /* load post author */
                    $oMbqRdEtUser = MbqMain::$oClk->newObj('MbqRdEtUser');
                    $objsAuthorMbqEtUser = $oMbqRdEtUser->getObjsMbqEtUser($authorUserIds, array('case' => 'byUserIds'));
                    $postIds = array();
                    foreach ($objsMbqEtForumPost as &$oMbqEtForumPost) {
                        $postIds[] = $oMbqEtForumPost->postId->oriValue;
                        foreach ($objsAuthorMbqEtUser as $oAuthorMbqEtUser) {
                            if ($oMbqEtForumPost->postAuthorId->oriValue == $oAuthorMbqEtUser->userId->oriValue) {
                                $oMbqEtForumPost->oAuthorMbqEtUser = $oAuthorMbqEtUser;
                                break;
                            }
                        }
                    }
                    ///* load attachment */
                    //$oMbqRdEtAtt = MbqMain::$oClk->newObj('MbqRdEtAtt');
                    //$objsMbqEtAtt = $oMbqRdEtAtt->getObjsMbqEtAtt($postIds, array('case' => 'byForumPostIds'));
                    //foreach ($objsMbqEtAtt as $oMbqEtAtt) {
                    //    foreach ($objsMbqEtForumPost as &$oMbqEtForumPost) {
                    //        if ($oMbqEtAtt->isForumPostAtt() && ($oMbqEtAtt->postId->oriValue == $oMbqEtForumPost->postId->oriValue)) {
                    //            $oMbqEtForumPost->objsMbqEtAtt[] = $oMbqEtAtt;
                    //            break;
                    //        }
                    //    }
                    //}
                    ///* load objsNotInContentMbqEtAtt */
                    //foreach ($objsMbqEtForumPost as &$oMbqEtForumPost) {
                    //    $this->makeProperty($oMbqEtForumPost, 'objsNotInContentMbqEtAtt');
                    //}
                    //foreach ($objsMbqEtForumPost as &$oMbqEtForumPost) {
                    //    $this->makeProperty($oMbqEtForumPost, 'byOAuthorMbqEtUser');
                    //}
                    ///* load objsMbqEtThank property and make related properties/flags */
                    //$oMbqRdEtThank = MbqMain::$oClk->newObj('MbqRdEtThank');
                    //$objsMbqEtThank = $oMbqRdEtThank->getObjsMbqEtThank($postIds, array('case' => 'byForumPostIds'));
                    //foreach ($objsMbqEtThank as $oMbqEtThank) {
                    //    foreach ($objsMbqEtForumPost as &$oMbqEtForumPost) {
                    //        if ($oMbqEtThank->key->oriValue == $oMbqEtForumPost->postId->oriValue) {
                    //            $oMbqEtForumPost->objsMbqEtThank[] = $oMbqEtThank;
                    //            break;
                    //        }
                    //    }
                    //}
                    //foreach ($objsMbqEtForumPost as &$oMbqEtForumPost) {
                    //    $oMbqEtForumPost->thankCount->setOriValue(count($oMbqEtForumPost->objsMbqEtThank));
                    //    $isThankedByMe = false;
                    //    if (MbqMain::hasLogin()) {
                    //        foreach ($oMbqEtForumPost->objsMbqEtThank as $oMbqEtThank) {
                    //            if ($oMbqEtThank->userId->oriValue == MbqMain::$oCurMbqEtUser->userId->oriValue) {
                    //                $isThankedByMe = true;
                    //            }
                    //        }
                    //    }
                    //    if ($oMbqEtForumPost->mbqBind['oKunenaForumMessage']->authorise('thankyou') && !$isThankedByMe) {
                    //        $oMbqEtForumPost->canThank->setOriValue(MbqBaseFdt::getFdt('MbqFdtForum.MbqEtForumPost.canThank.range.yes'));
                    //    } else {
                    //        $oMbqEtForumPost->canThank->setOriValue(MbqBaseFdt::getFdt('MbqFdtForum.MbqEtForumPost.canThank.range.no'));
                    //    }
                    //}
                    /* common end */
                    if (isset($mbqOpt['oMbqDataPage'])) {
                        $oMbqDataPage = $mbqOpt['oMbqDataPage'];
                        $oMbqDataPage->datas = $objsMbqEtForumPost;
                        return $oMbqDataPage;
                    } else {
                        return $objsMbqEtForumPost;
                    }
                    break;
                }
        }
    }
    /**
     * init one forum post by condition
     *
     * @param  Mixed  $var
     * @param  Array  $mbqOpt
     * $mbqOpt['case'] = 'byObj' means init forum post by obj from viewtopic.php page
     * $mbqOpt['case'] = 'byPostId' means init forum post by post id
     * $mbqOpt['withAuthor'] = true means load post author,default is true
     * $mbqOpt['withAtt'] = true means load post attachments,default is true
     * $mbqOpt['withObjsNotInContentMbqEtAtt'] = true means load the attachement objs not in the content,default is true
     * $mbqOpt['oMbqEtForum'] = true means load oMbqEtForum property of this post,default is true
     * $mbqOpt['oMbqEtForumTopic'] = true means load oMbqEtForumTopic property of this post,default is true
     * $mbqOpt['objsMbqEtThank'] = true means load objsMbqEtThank property of this post,default is true
     * @return  Mixed
     */
    public function initOMbqEtForumPost($var, $mbqOpt) {
        global $db, $auth, $user, $config, $template, $cache, $phpEx, $phpbb_root_path, $phpbb_home, $topic_data;
        if($mbqOpt['case'] == 'byPostId') {
            global $request, $template, $user, $auth, $phpbb_home, $config, $attachment_by_id, $forum_id, $topic_id, $support_post_thanks, $topic_data, $total_posts, $can_subscribe, $post_data;
            $topic_data = null;
            $post_data = null;
            $postId = $var;
            $request_file = 'viewtopic';
            $request->overwrite('p', $postId);
            $request->overwrite('onlyOnePost', true);
            require(MBQ_APPEXTENTION_PATH . 'viewtopic_clone.php');
            $newMbqOpt['case'] = 'byRow';
            $newMbqOpt['oMbqEtForum'] = true;
            $newMbqOpt['oMbqEtForumTopic'] = true;
            $newMbqOpt['oMbqEtUser'] = true;
            $posts = array();
            $oMbqEtForumPost = null;
            if(isset($post_data))
            {
                foreach($post_data as $item)
                {
                    if($item['POST_ID'] == $postId)
                    {
                        $oMbqEtForumPost = $this->initOMbqEtForumPost($item, $newMbqOpt);
                        break;
                    }
                }
            }
            if(isset($oMbqEtForumPost) && isset($topic_data))
            {
                $oMbqEtForumPost->position->setOriValue($topic_data['prev_posts'] + 1);
            }
            return $oMbqEtForumPost;
        }
        else if($mbqOpt['case'] == 'byRow') {
            
            $row = $var;     
            

            if (isset($row['S_IGNORE_POST']) && $row['S_IGNORE_POST'])
            {
                $row['MESSAGE'] =  $row['L_IGNORE_POST'] . "[spoiler]{$row[MESSAGE]}[/spoiler]";
            }

            $can_ban_user = $auth->acl_get('m_ban') && $row['POST_AUTHOR_ID'] != $user->data['user_id'];
            
         
            $forum_id = $row['bind']['forum_id'];
            $topic_id = $row['bind']['topic_id'];
            
            $oMbqEtForumPost = MbqMain::$oClk->newObj('MbqEtForumPost');
            $oMbqEtForumPost->postId->setOriValue($row['POST_ID']);
            if(isset($row['PARENT_POST_ID']))
            {
                $oMbqEtForumPost->parentPostId->setOriValue($row['PARENT_POST_ID']);
            }
            $oMbqEtForumPost->forumId->setOriValue($row['bind']['forum_id']);
            $oMbqEtForumPost->topicId->setOriValue($row['bind']['topic_id']);
            $oMbqEtForumPost->postTitle->setOriValue(basic_clean($row['POST_SUBJECT']));
            $message = $row['MESSAGE'];
            $message =  preg_replace('/\x1A/', '', $message);

            $oMbqEtForumPost->postContent->setOriValue($message);
            $oMbqEtForumPost->postContent->setAppDisplayValue($message);
            $oMbqEtForumPost->postContent->setTmlDisplayValue($message);
            $oMbqEtForumPost->postContent->setTmlDisplayValueNoHtml(post_html_clean($message, false));

            $oMbqEtForumPost->shortContent->setOriValue(basic_clean(process_short_content($message)));
            $oMbqEtForumPost->postAuthorId->setOriValue(isset($row['POST_AUTHOR_ID']) ? $row['POST_AUTHOR_ID'] : $row['bind']['user_id']);
            //$oMbqEtForumPost->attachmentIdArray->setOriValue($var['post_author_id']);
            //$oMbqEtForumPost->groupId->setOriValue($var['post_author_id']);
            $oMbqEtForumPost->state->setOriValue(isset($var['S_POST_UNAPPROVED']) && $var['S_POST_UNAPPROVED'] ? 1 : 0);
            $oMbqEtForumPost->isOnline->setOriValue(isset($row['S_ONLINE']) && $row['S_ONLINE']);
            $oMbqEtForumPost->canEdit->setOriValue(isset($row['U_EDIT']) && $row['U_EDIT']);
            $oMbqEtForumPost->postTime->setOriValue($row['bind']['post_time']);
            $oMbqEtForumPost->allowSmilies->setOriValue($row['bind']['enable_smilies'] ? true : false);
            //$oMbqEtForumPost->position->setOriValue($row['prev_posts'] + 1);
            $oMbqEtForumPost->canThank->setOriValue(isset($row['bind']['can_thank']) && $row['bind']['can_thank']);
            //$oMbqEtForumPost->thankCount->setOriValue($row['bind']['post_author_id']);
            //$oMbqEtForumPost->canLike->setOriValue($var['post_author_id']);
            //$oMbqEtForumPost->isLiked->setOriValue($var['post_author_id']);
            $oMbqEtForumPost->isThanked->setOriValue(isset($row['bind']['thanks_info']));
            //$oMbqEtForumPost->likeCount->setOriValue($var['post_author_id']);
            $oMbqEtForumPost->isDeleted->setOriValue($row['bind']['post_visibility'] == ITEM_DELETED);
            $oMbqEtForumPost->canDelete->setOriValue($auth->acl_get('m_delete', $forum_id));
            $oMbqEtForumPost->isApproved->setOriValue(isset($row['S_POST_UNAPPROVED']) && !$row['S_POST_UNAPPROVED']);
            $oMbqEtForumPost->canApprove->setOriValue($auth->acl_get('m_approve', $forum_id));
            $oMbqEtForumPost->canMove->setOriValue($auth->acl_get('m_split', $forum_id));
            $oMbqEtForumPost->canReport->setOriValue($auth->acl_get('f_report', $oMbqEtForumPost->forumId->oriValue));
            //$oMbqEtForumPost->modByUserId->setOriValue($var['post_author_id']);
            //$oMbqEtForumPost->deleteByUserId->setOriValue($var['post_author_id']);
            //$oMbqEtForumPost->deleteReason->setOriValue($var['post_author_id']);
            //$oMbqEtForumPost->authorIconUrl->setOriValue($row['POSTER_AVATAR']);
            //$oMbqEtForumPost->canUnlike->setOriValue($var['post_author_id']);
            //$oMbqEtForumPost->canUnthank->setOriValue($var['post_author_id']);
           
            if(!empty($row['EDITER_UID']) && $config['display_last_edited'])
            {
                $oMbqEtForumPost->modByUserId->setOriValue($row['EDITER_UID']);
            }

            if (isset($row['S_HAS_ATTACHMENTS']) && $row['S_HAS_ATTACHMENTS'])
            {
                foreach($row['bind']['post_attachments'] as $attachment)
                {
                    $oMbqRdAtt = MbqMain::$oClk->newObj('MbqRdEtAtt');
                    $attachment['forum_id'] = $row['bind']['forum_id'];
                    $oMbqEtAtt = $oMbqRdAtt->initOMbqEtAtt($attachment, array('case' => 'byRow'));
                    $oMbqEtAtt->forumId->setOriValue( $oMbqEtForumPost->forumId->oriValue);
                    $oMbqEtForumPost->objsNotInContentMbqEtAtt[] = $oMbqEtAtt;
                }
            }
            //if ($support_post_thanks)
            //{
            //    if (
            //        !$row['S_GLOBAL_POST_THANKS']
            //        && !$row['S_POST_ANONYMOUS']
            //        && $auth->acl_get('f_thanks', $forum_id)
            //        && $user->data['user_id'] != ANONYMOUS
            //        && $user->data['user_id'] != $row['POSTER_ID']
            //        && !$row['S_ALREADY_THANKED']
            //    ) {
            //        if(!empty($config['thanks_only_first_post']) && $key == 0)
            //        {
                        
            //            $postNode['can_thank'] = true;
            //        }
            //        else if(!empty($config['thanks_only_first_post']))
            //        {
            //            $postNode['can_thank'] = false;
            //        }
            //        else 
            //        {
            //            $postNode['can_thank'] = true;
            //        }
                    
                    
            //    }
            //    if ($row['THANKS'] && $row['THANKS_POSTLIST_VIEW'] && !$row['S_POST_ANONYMOUS'] && empty($user->data['is_bot']))
            //    {
            //        global $thankers;

            //        $count = 0;
            //        $thank_list = array();
            //        $maxcount = isset($config['thanks_number_post']) ? $config['thanks_number_post'] : (
            //                    isset($config['thanks_number']) ? $config['thanks_number'] : 10);
            //        foreach($thankers as $thanker)
            //        {
            //            if ($count >= $maxcount) break;

            //            if ($thanker['post_id'] == $row['POST_ID'])
            //            {
            //                $thank_list[] = array(
            //                    'userid'    => $thanker['user_id'],
            //                    'username'  => basic_clean($thanker['username']),
            //                    'user_type' => check_return_user_type($thanker['user_id']),
            //                    //'tapatalk'  => new xmlrpcval(is_tapatalk_user($row['user_id']), 'string'),
            //                );

            //                $count++;
            //            }
            //        }

            //        if (!empty($thank_list))
            //            $postNode['thanks_info'] = $thank_list;
            //    }
            //}
            if($mbqOpt['oMbqEtForum'])
            {
                $oMbqRdEtForum = MbqMain::$oClk->newObj('MbqRdEtForum');
                $oMbqEtForumPost->oMbqEtForum = $oMbqRdEtForum->initOMbqEtForum($forum_id, array('case' => 'byForumId'));
            }
            if($mbqOpt['oMbqEtForumTopic'])
            {
                $oMbqRdEtForumTopic = MbqMain::$oClk->newObj('MbqRdEtForumTopic');
                if ($objsMbqEtForumTopic = $oMbqRdEtForumTopic->getObjsMbqEtForumTopic(array($topic_id), array('case' => 'byTopicIds'))) {
                    $oMbqEtForumPost->oMbqEtForumTopic = $objsMbqEtForumTopic[0];
                }
            }
            if($mbqOpt['oMbqEtUser'])
            {
                $oMbqRdEtUser = MbqMain::$oClk->newObj('MbqRdEtUser');
               if($objsAuthorMbqEtUser = $oMbqRdEtUser->getObjsMbqEtUser(array($oMbqEtForumPost->postAuthorId->oriValue), array('case' => 'byUserIds')))
               {
                   $oMbqEtForumPost->oAuthorMbqEtUser = $objsAuthorMbqEtUser[0];
               }
            }
            $oMbqEtForumPost->mbqBind = $row;
            return $oMbqEtForumPost;
        }
        
    }
    /**
     * return raw post content
     *
     * @return  String
     */
    public function getRawPostContent($oMbqEtForumPost) {
        global $phpbb_root_path, $phpEx;
        $post_data = $oMbqEtForumPost->mbqBind['bind'];
        include_once($phpbb_root_path . 'includes/message_parser.' . $phpEx);
        
        $message_parser = new parse_message();
        $message_parser->message = $post_data['post_text'];
        $message_parser->decode_message($post_data['bbcode_uid']);
        return html_entity_decode($message_parser->message);
    }
     /**
     * return raw post content
     *
     * @return  String
     */
    public function getQuotePostContent($oMbqEtForumPost) {
        global $phpbb_root_path, $phpEx;
        $post_data = $oMbqEtForumPost->mbqBind['bind'];
        include_once($phpbb_root_path . 'includes/message_parser.' . $phpEx);
        // Determine some vars
        if (isset($post_data['user_id']) && $post_data['user_id'] == ANONYMOUS)
        {
            $post_data['quote_username'] = (!empty($post_data['username'])) ? $post_data['username'] : $user->lang['GUEST'];
        }
        else
        {
            $post_data['quote_username'] = isset($post_data['username']) ? $post_data['username'] : '';
        }
        
        $message_parser = new parse_message();
        
        $message_parser->message = $post_data['post_text'];
        $message_parser->decode_message($post_data['bbcode_uid']);
        $message_parser->message = str_replace("&quot;", '"', $message_parser->message);
        $message_parser->message = '[quote="' . $post_data['quote_username'] . '"]' . censor_text(trim(html_entity_decode($message_parser->message))) . "[/quote]";
        return  $message_parser->message;
    }
    
    public function getUrl($oMbqEtForumPost)
    {
        global $phpbb_home,$phpEx;
        $forumId = $oMbqEtForumPost->forumId->oriValue;
        $topicId = $oMbqEtForumPost->topicId->oriValue;
        $postId = $oMbqEtForumPost->postId->oriValue;
        return append_sid("{$phpbb_home}viewtopic.$phpEx", "f=$forumId&t=$topicId&p=$postId#p$postId");
    }
  
}

?>