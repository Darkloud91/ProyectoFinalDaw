<?php

defined('MBQ_IN_IT') or exit;

MbqMain::$oClk->includeClass('MbqBaseRdEtLike');

/**
 * Like read class
 * 
 * @since  2012-9-24
 * @author Wu ZeTao <578014287@qq.com>
 */
Class MbqRdEtLike extends MbqBaseRdEtLike {
    
    public function __construct() {
    }
    
    public function makeProperty(&$oMbqEtLike, $pName, $mbqOpt = array()) {
        switch ($pName) {
            default:
            MbqError::alert('', __METHOD__ . ',line:' . __LINE__ . '.' . MBQ_ERR_INFO_UNKNOWN_PNAME . ':' . $pName . '.');
            break;
        }
    }
  
}

?>