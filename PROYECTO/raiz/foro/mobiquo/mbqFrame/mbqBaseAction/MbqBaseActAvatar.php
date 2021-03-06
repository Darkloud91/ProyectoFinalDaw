<?php

defined('MBQ_IN_IT') or exit;

/**
 * get_user_info action
 * 
 * @since  2012-8-16
 * @author Wu ZeTao <578014287@qq.com>
 */
Abstract Class MbqBaseActAvatar extends MbqBaseAct {
    
    public function __construct() {
        parent::__construct();
    }
    
    function getInput()
    {
        $in = new stdClass();
        $in->userName = isset($_GET['username']) ? $_GET['username'] : "";
        $in->userId = isset($_GET['user_id']) ? $_GET['user_id'] : "";
        return $in;
    }
    /**
     * action implement
     */
    protected function actionImplement($in) {
        if (!MbqMain::$oMbqConfig->moduleIsEnable('user')) {
            MbqError::alert('', "Not support module user!", '', MBQ_ERR_NOT_SUPPORT);
        }
       $oMbqRdEtUser = MbqMain::$oClk->newObj('MbqRdEtUser');
       if ($in->userId) {
           $oMbqEtUser = $oMbqRdEtUser->initOMbqEtUser($in->userId, array('case' => 'byUserId'));
        } else {
            $oMbqEtUser = $oMbqRdEtUser->initOMbqEtUser($in->userName, array('case' => 'byLoginName'));
            if($oMbqEtUser == false)
            {
                $oMbqEtUser = $oMbqRdEtUser->initOMbqEtUser(base64_decode($in->userName), array('case' => 'byLoginName'));
            }
        }
       header('Expires: '.gmdate('D, d M Y H:i:s \G\M\T', time() + (60 * 60 * 12)));
       if (is_a($oMbqEtUser,'MbqEtUser')) {
            $userInfo = $oMbqRdEtUser->returnApiDataUser($oMbqEtUser);
            $url = '';
            if(isset($userInfo['icon_url']))
            {
                $url = $userInfo['icon_url'];
                header("Location: $url", true, 303);
            }
            else 
            {
                $protocol = (isset($_SERVER['SERVER_PROTOCOL']) ? $_SERVER['SERVER_PROTOCOL'] : 'HTTP/1.0');
                header($protocol . ' 204 No content', true, 204);
            }
        } else {
            $protocol = (isset($_SERVER['SERVER_PROTOCOL']) ? $_SERVER['SERVER_PROTOCOL'] : 'HTTP/1.0');
            header($protocol . ' 204 No content', true, 204);
        }
        exit;
    }
  
}

?>