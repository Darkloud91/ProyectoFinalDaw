<?php

defined('MBQ_IN_IT') or exit;

MbqMain::$oClk->includeClass('MbqBaseActUpdateEmail');

/**
 * update email
 * 
 * @since  2013-10-16
 * @author Wu ZeTao <578014287@qq.com>
 */
Class MbqActUpdateEmail extends MbqBaseActUpdateEmail {
    
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