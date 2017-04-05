<?php

defined('MBQ_IN_IT') or exit;

MbqMain::$oClk->includeClass('MbqBaseActSearch');

/**
 * search_post action
 * 
 * @since  2012-8-27
 * @author Wu ZeTao <578014287@qq.com>
 */
Class MbqActSearch extends MbqBaseActSearch {
    
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