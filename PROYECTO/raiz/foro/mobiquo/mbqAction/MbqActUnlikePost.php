<?php

defined('MBQ_IN_IT') or exit;

MbqMain::$oClk->includeClass('MbqBaseActUnlikePost');

/**
 * like post
 * 
 * @since  2014-10-30
 * @author Kevin <569980801@qq.com>
 */
Class MbqActUnlikePost extends MbqBaseActUnlikePost {
    
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