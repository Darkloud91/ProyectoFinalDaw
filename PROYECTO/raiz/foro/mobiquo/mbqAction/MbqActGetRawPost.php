<?php

defined('MBQ_IN_IT') or exit;

MbqMain::$oClk->includeClass('MbqBaseActGetRawPost');

/**
 * get_raw_post action
 * 
 * @since  2012-9-12
 * @author Wu ZeTao <578014287@qq.com>
 */
Class MbqActGetRawPost extends MbqBaseActGetRawPost {
    
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