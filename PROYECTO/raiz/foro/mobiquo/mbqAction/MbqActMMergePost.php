<?php

defined('MBQ_IN_IT') or exit;

MbqMain::$oClk->includeClass('MbqBaseActMMergePost');

/**
 * m_merge_post action
 * 
 * @since  2012-9-26
 * @author Wu ZeTao <578014287@qq.com>
 */
Class MbqActMMergePost extends MbqBaseActMMergePost {
    
    public function __construct() {
        parent::__construct();
    }
    
    /**
     * action implement
     */
    public function actionImplement($in) {
        parent::actionImplement($in);
    }
  
}

?>