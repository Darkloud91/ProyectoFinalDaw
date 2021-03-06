<?php

defined('MBQ_IN_IT') or exit;

MbqMain::$oClk->includeClass('MbqBaseAclEtUser');

/**
 * user acl class
 */
Class MbqAclEtUser extends MbqBaseAclEtUser {
    
    public function __construct() {
    }
    
    /**
     * judge can get online users
     *
     * @return  Boolean
     */
    public function canAclGetOnlineUsers() {
        global $auth;
        return $auth->acl_gets('u_viewprofile', 'a_user', 'a_useradd', 'a_userdel') == 1;
    }
    
    /**
     * judge can m_ban_user
     *
     * @param  Object  $oMbqEtUser
     * @param  Integer  $mode
     * @return  Boolean
     */
    public function canAclMBanUser($oMbqEtUser, $mode) {
    	global $auth;
    	
    	$mode = intval($mode);
    	if($mode == 1) return $auth->acl_get('m_ban') == 1;
    	else return $auth->acl_get('m_ban') && $auth->acl_getf_global('m_');
    }
    
    /**
     * judge can update_password
     *
     * @return Boolean
     */
    public function canAclUpdatePassword() {
        global $user, $config;
        if (!$user->data['is_registered']) return false;
        return true;
    }
    
    /**
     * judge can update_email
     *
     * @return Boolean
     */
    public function canAclUpdateEmail() {
        global $user, $config;
        if (!$user->data['is_registered']) return false;
        return true;
    }
    
    /**
     * judge can upload avatar
     *
     * @return Boolean
     */
    public function canAclUploadAvatar() {
        global $user, $auth, $config;
        if (!$user->data['is_registered']) return false;
        return $config['allow_avatar'] && $auth->acl_get('u_chgavatar');
    }
    
    /**
     * judge can searc_user
     *
     * @return Boolean
     */
    public function canAclSearchUser() {
        global $user, $config, $auth;      
        
        if(!$auth->acl_gets('u_viewprofile', 'a_user', 'a_useradd', 'a_userdel')) return false;
        
        if (!($config['load_search'] && $auth->acl_get('a_'))) return false;
        
        return true;
    }
    
    /**
     * judge can get_recommended_user
     *
     * @return Boolean
     */
    public function canAclGetRecommendedUser() {
        global $user, $config;
        if (!$user->data['is_registered']) return false;
        return true;
    }
    
    public function canAclIgnoreUser($oMbqEtUser, $mode) {
    	global $user;
    	if (!$user->data['is_registered']) return false;
    	return true;
    }
    
    public function canAclMUnbanUser($oMbqEtUser) {
        global $user, $auth;
        
    	return $auth->acl_get('m_ban') == 1;
    }
}

?>