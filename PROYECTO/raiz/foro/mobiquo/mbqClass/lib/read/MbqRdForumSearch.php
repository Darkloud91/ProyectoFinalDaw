<?php

defined('MBQ_IN_IT') or exit;

MbqMain::$oClk->includeClass('MbqBaseRdForumSearch');

/**
 * forum search class
 * 
 * @since  2012-8-27
 * @author Wu ZeTao <578014287@qq.com>
 */
Class MbqRdForumSearch extends MbqBaseRdForumSearch {
    
    public function __construct() {
    }
    /**
     * forum advanced search
     *
     * @param  Array  $filter  search filter
     * @param  Object  $oMbqDataPage
     * @param  Array  $mbqOpt
     * $mbqOpt['case'] = 'advanced' means advanced search
     * $mbqOpt['participated'] = true means get participated data
     * $mbqOpt['unread'] = true means get unread data
     * @return  Object  $oMbqDataPage
     */
    public function forumAdvancedSearch($filter, $oMbqDataPage, $mbqOpt) {
        global $request, $db, $template, $user, $auth, $config, $can_subscribe, $show_results, $include_topic_num, $total_match_count, $request_method, $searchResults;
        
        if ($mbqOpt['case'] == 'getLatestTopic') {
            
            $request_method = 'get_latest_topic';            
            $include_topic_num = true;
            $request->overwrite('page', $filter['page']);
            $request->overwrite('perpage', $filter['perpage']);
            $request->overwrite('search_id', 'latesttopics');      
            
            if (isset($filter['only_in']) && is_array($filter['only_in']))
            {
                $request->overwrite('fid', array_map('intval', $filter['only_in']));
            }
            
            if (isset($filter['not_in']) && is_array($filter['not_in']))
            {
                $request->overwrite('exclude', array_map('intval', $filter['not_in']));
            }
            require(MBQ_APPEXTENTION_PATH . 'search_clone.php');
            $oMbqRdEtForumTopic = MbqMain::$oClk->newObj('MbqRdEtForumTopic');
            $newMbqOpt['case'] = 'byRow';
            $newMbqOpt['oMbqEtForum'] = true;
            $newMbqOpt['oMbqEtUser'] = true;
            $newMbqOpt['oMbqDataPage'] = $oMbqDataPage;
            
            //get subscribe users
            $user_watch_row = array();
            $sql = 'SELECT * FROM ' . TOPICS_WATCH_TABLE .' WHERE user_id = ' . $user->data['user_id'];
            $result = $db->sql_query($sql);
            while ($row = $db->sql_fetchrow($result))
            {
                $user_watch_row[$row['topic_id']] = $row['notify_status'];
            }
            $db->sql_freeresult($result);
            $newMbqOpt['user_watch_row'] = $user_watch_row;
            
            foreach($searchResults as $item)
            {
               $oMbqDataPage->datas[] = $oMbqRdEtForumTopic->initOMbqEtForumTopic($item['bind'], $newMbqOpt);
            }
            $oMbqDataPage->totalNum = $total_match_count;
            return $oMbqDataPage;
        } 
        elseif ($mbqOpt['case'] == 'getUnreadTopic')
        {
            $request_method = 'get_unread_topic';
            
            $include_topic_num = true;
            $request->overwrite('page', $filter['page']);
            $request->overwrite('perpage', $filter['perpage']);
            $request->overwrite('search_id', 'unreadposts');
            
            if (isset($filter['only_in']) && is_array($filter['only_in']))
            {
                $request->overwrite('fid', array_map('intval', $filter['only_in']));
            }
            
            if (isset($filter['not_in']) && is_array($filter['not_in']))
            {
                $request->overwrite('exclude', array_map('intval', $filter['not_in']));
            }
            require(MBQ_APPEXTENTION_PATH . 'search_clone.php');
            $oMbqRdEtForumTopic = MbqMain::$oClk->newObj('MbqRdEtForumTopic');
            $newMbqOpt['case'] = 'byRow';
            $newMbqOpt['oMbqEtForum'] = true;
            $newMbqOpt['oMbqEtUser'] = true;
            $newMbqOpt['oMbqDataPage'] = $oMbqDataPage;
            
            //get subscribe users
            $user_watch_row = array();
            $sql = 'SELECT * FROM ' . TOPICS_WATCH_TABLE .' WHERE user_id = ' . $user->data['user_id'];
            $result = $db->sql_query($sql);
            while ($row = $db->sql_fetchrow($result))
            {
                $user_watch_row[$row['topic_id']] = $row['notify_status'];
            }
            $db->sql_freeresult($result);
            $newMbqOpt['user_watch_row'] = $user_watch_row;
            if(isset($searchResults))
            {
                foreach($searchResults as $item)
                {
                    $oMbqDataPage->datas[] = $oMbqRdEtForumTopic->initOMbqEtForumTopic($item['bind'], $newMbqOpt);
                }
            }
            $oMbqDataPage->totalNum = $total_match_count;
            return $oMbqDataPage;
        }
        elseif ($mbqOpt['case'] == 'getParticipatedTopic')
        {
            $request_method = 'get_participated_topic';
            
            $include_topic_num = true;
            $request->overwrite('page', $filter['page']);
            $request->overwrite('perpage', $filter['perpage']);
          
            $request->overwrite('sr', 'topics');
            $request->overwrite('submit', 'Search');
            $request->overwrite('search_id', 'getParticipatedTopic');
            
            if (isset($filter['userid']) && $filter['userid']) {
                $request->overwrite('author_id', intval($filter['userid']));
            } else if (isset($filter['searchuser']) && $filter['searchuser']) {
                $request->overwrite('author', $filter['searchuser']);
            } else {
                $request->overwrite('search_id', 'egosearch');
            }
            
            require(MBQ_APPEXTENTION_PATH . 'search_clone.php');
            $oMbqRdEtForumTopic = MbqMain::$oClk->newObj('MbqRdEtForumTopic');
            $newMbqOpt['case'] = 'byRow';
            $newMbqOpt['oMbqEtForum'] = true;
            $newMbqOpt['oMbqEtUser'] = true;
            $newMbqOpt['oMbqDataPage'] = $oMbqDataPage;
            
            //get subscribe users
            $user_watch_row = array();
            $sql = 'SELECT * FROM ' . TOPICS_WATCH_TABLE .' WHERE user_id = ' . $user->data['user_id'];
            $result = $db->sql_query($sql);
            while ($row = $db->sql_fetchrow($result))
            {
                $user_watch_row[$row['topic_id']] = $row['notify_status'];
            }
            $db->sql_freeresult($result);
            $newMbqOpt['user_watch_row'] = $user_watch_row;
            
            foreach($searchResults as $item)
            {
                $oMbqDataPage->datas[] = $oMbqRdEtForumTopic->initOMbqEtForumTopic($item['bind'], $newMbqOpt);
            }
            $oMbqDataPage->totalNum = $total_match_count;
            return $oMbqDataPage;
        }
        elseif ($mbqOpt['case'] == 'getSubscribedTopic')
        {            
            $request_method = 'get_subscribed_topic';
            
            $include_topic_num = true;
            $request->overwrite('page', $filter['page']);
            $request->overwrite('perpage', $filter['perpage']);
            
            $request->overwrite('search_id', 'subscribedtopics');
            
            require(MBQ_APPEXTENTION_PATH . 'search_clone.php');
            $oMbqRdEtForumTopic = MbqMain::$oClk->newObj('MbqRdEtForumTopic');
            $newMbqOpt['case'] = 'byRow';
            $newMbqOpt['oMbqEtForum'] = true;
            $newMbqOpt['oMbqEtUser'] = true;
            $newMbqOpt['oMbqDataPage'] = $oMbqDataPage;
            foreach($template->_tpldata['searchresults'] as $item)
            {
                $oMbqDataPage->datas[] = $oMbqRdEtForumTopic->initOMbqEtForumTopic($item['bind'], $newMbqOpt);
            }
            $oMbqDataPage->totalNum = $total_match_count;
            return $oMbqDataPage;
        }
        elseif ($mbqOpt['case'] == 'searchTopic') 
        {            
            $include_topic_num = true;
            $request->overwrite('page', $oMbqDataPage->curPage);
            $request->overwrite('perpage',  $oMbqDataPage->numPerPage);
            $request->overwrite('submit',  'Search');
            $request->overwrite('sr', 'topics');
            $request->overwrite('sf', 'all');
            $request->overwrite('keywords', $filter['keywords']);
            
            require(MBQ_APPEXTENTION_PATH . 'search_clone.php');
            $oMbqRdEtForumTopic = MbqMain::$oClk->newObj('MbqRdEtForumTopic');
            $newMbqOpt['case'] = 'byRow';
            $newMbqOpt['oMbqEtForum'] = true;
            $newMbqOpt['oMbqEtUser'] = true;
            $newMbqOpt['oMbqDataPage'] = $oMbqDataPage;
            
            //get subscribe users
            $user_watch_row = array();
            $sql = 'SELECT * FROM ' . TOPICS_WATCH_TABLE .' WHERE user_id = ' . $user->data['user_id'];
            $result = $db->sql_query($sql);
            while ($row = $db->sql_fetchrow($result))
            {
                $user_watch_row[$row['topic_id']] = $row['notify_status'];
            }
            $db->sql_freeresult($result);
            $newMbqOpt['user_watch_row'] = $user_watch_row;
            if(isset($searchResults))
            {
                foreach($searchResults as $item)
                {
                    $oMbqDataPage->datas[] = $oMbqRdEtForumTopic->initOMbqEtForumTopic($item, $newMbqOpt);
                }
            }
            $oMbqDataPage->totalNum = $total_match_count;
            return $oMbqDataPage;
        } elseif ($mbqOpt['case'] == 'searchPost') {
            
            $include_topic_num = true;
            $request_file = 'search';
            $request->overwrite('page', $oMbqDataPage->curPage);
            $request->overwrite('perpage', $oMbqDataPage->numPerPage);
            $request->overwrite('submit', 'Search');
            $request->overwrite('sr', 'posts');
            $request->overwrite('sf', 'all');
            $request->overwrite('keywords', $filter['keywords']);
            
            require(MBQ_APPEXTENTION_PATH . 'search_clone.php');
            
            $oMbqRdEtForumPost = MbqMain::$oClk->newObj('MbqRdEtForumPost');
            $newMbqOpt['case'] = 'byRow';
            $newMbqOpt['oMbqDataPage'] = $oMbqDataPage;
            $newMbqOpt['oMbqEtForum'] = true;
            $newMbqOpt['oMbqEtForumTopic'] = true;
            $newMbqOpt['oMbqEtUser'] = true;
            if(isset($searchResults))
            {
                foreach($searchResults as $item)
                {
                    $oMbqDataPage->datas[] = $oMbqRdEtForumPost->initOMbqEtForumPost($item, $newMbqOpt);
                }
            }
            $oMbqDataPage->totalNum = $total_match_count;
            return $oMbqDataPage;
        } elseif ($mbqOpt['case'] == 'search') {
            
            $request_method = 'search';
            $include_topic_num = true;
          
            $request->overwrite('page', $oMbqDataPage->curPage);
            $request->overwrite('perpage', $oMbqDataPage->numPerPage);
            $request->overwrite('submit', 'Search');
            $request->overwrite('sr', $filter->showPosts ? 'posts' : 'topics');
            $request->overwrite('started_by', $filter->startedBy);
            if($filter->titleOnly)
            {
                $request->overwrite('sf', 'titleonly');
            }
            else if(($filter->userId || $filter->searchUser) && $filter->showPosts == false)
            {
                $request->overwrite('sf', 'firstpost');
            }
            else
            {
                $request->overwrite('sf', 'all');
            }
            $request->overwrite('searchid', $filter->searchId);
            $request->overwrite('keywords', $filter->keywords);
            $request->overwrite('author', $filter->searchUser);
            $request->overwrite('author_id', $filter->userId);
            $request->overwrite('fid', isset($filter->forumId) ? array($filter->forumId) : $filter->forumId);
            
            if (!empty($filter->topicId))
            {
                $request->overwrite('t', $filter->topicId);
                $request->overwrite('sf', 'msgonly');
                $request->overwrite('showresults', 'posts');
            }
            
            if (!empty($filter->searchTime) && is_numeric($filter->searchTime))
            {
               $request->overwrite('st', $filter->searchTime/86400);
            }
            
            if (isset($in->onlyIn) && is_array($in->onlyIn))
            {
                $request->overwrite('fid', array_map('intval', $in->onlyIn));
            }
            
            if (isset($in->notIn) && is_array($in->notIn))
            {
                //add for tapatalk
                foreach ($in->notIn as $key=>$value)
                {
                    if($value != 0)
                    {
                        $ex_fid_ary[]=$in->notIn[$key];
                    }
                }
                $request->overwrite('exclude', array_map('intval', $ex_fid_ary));
            }
            require(MBQ_APPEXTENTION_PATH . 'search_clone.php');
            $oMbqRdEtForumTopic = MbqMain::$oClk->newObj('MbqRdEtForumTopic');
            $oMbqRdEtForumPost = MbqMain::$oClk->newObj('MbqRdEtForumPost');
            $newMbqOpt['case'] = 'byRow';
            $newMbqOpt['oMbqEtForum'] = true;
            $newMbqOpt['oMbqEtUser'] = true;
            $newMbqOpt['oMbqDataPage'] = $oMbqDataPage;
            if($filter->showPosts)
            {
                $newMbqOpt['oMbqEtForumTopic'] = true;
                $newMbqOpt['oMbqEtUser'] = true;
                if($searchResults)
                {
                    foreach($searchResults as $item)
                    {
                        $oMbqDataPage->datas[] = $oMbqRdEtForumPost->initOMbqEtForumPost($item, $newMbqOpt);
                    }
                }
                $oMbqDataPage->totalNum = $total_match_count ? $total_match_count : 0;
            }
            else
            {
                //get subscribe users
                $user_watch_row = array();
                $sql = 'SELECT * FROM ' . TOPICS_WATCH_TABLE .' WHERE user_id = ' . $user->data['user_id'];
                $result = $db->sql_query($sql);
                while ($row = $db->sql_fetchrow($result))
                {
                    $user_watch_row[$row['topic_id']] = $row['notify_status'];
                }
                $db->sql_freeresult($result);
                $newMbqOpt['user_watch_row'] = $user_watch_row;
                
                $newMbqOpt['oMbqEtForumTopic'] = true;
                $newMbqOpt['oMbqEtUser'] = true;
                if($searchResults)
                {
                    foreach($searchResults as $item)
                    {
                        $oMbqDataPage->datas[] = $oMbqRdEtForumTopic->initOMbqEtForumTopic($item['bind'], $newMbqOpt);
                    }
                }
                $oMbqDataPage->totalNum =  $total_match_count ? $total_match_count : 0;
            }
                      
            return $oMbqDataPage;
        }
        MbqError::alert('', __METHOD__ . ',line:' . __LINE__ . '.' . MBQ_ERR_INFO_UNKNOWN_CASE);
    }
    
}

?>