<?php

defined('MBQ_IN_IT') or exit;

/**
 * register
 * 
 * @since  2013-10-16
 * @author Wu ZeTao <578014287@qq.com>
 */
Abstract Class MbqBaseActRegister extends MbqBaseAct {
    
    public function __construct() {
        parent::__construct();
    }
    protected $errors = array();
    function getInput()
    {
        $in = new stdClass();
        if(MbqMain::isJsonProtocol())
        {
            $in->username = $this->getInputParam('username');
            $in->password = $this->getInputParam('password');
            $in->email = $this->getInputParam('email');
            $in->token = $this->getInputParam('token');
            $in->code = $this->getInputParam('code');
        }
        else
        {
            $in->username = $this->getInputParam(0);
            $in->password = $this->getInputParam(1);
            $in->email = $this->getInputParam(2);
            $in->token = $this->getInputParam(3);
            $in->code = $this->getInputParam(4);
        }
        return $in;
    }
    
    /**
     * action implement
     */
    protected function actionImplement($in) {
        if (!MbqMain::$oMbqConfig->moduleIsEnable('user')) {
            MbqError::alert('', "Not support module user!", '', MBQ_ERR_NOT_SUPPORT);
        }
        if (MbqMain::$oMbqConfig->getCfg('user.inappreg')->oriValue != MbqBaseFdt::getFdt('MbqFdtConfig.user.inappreg.range.support')) {
            MbqError::alert('', '', '', MBQ_ERR_APP);
        }
        $oMbqWrEtUser = MbqMain::$oClk->newObj('MbqWrEtUser');
        $oMbqRdEtUser = MbqMain::$oClk->newObj('MbqRdEtUser');
        
        
        $oMbqEtUser = $oMbqRdEtUser->initOMbqEtUser($in->email, array('case' => 'byEmail'));
        if(isset($oMbqEtUser))
        {
            $this->data['result'] = false;
            $this->data['result_text'] = 'The email is already in use';
            return;
        }
        $oMbqEtUser = $oMbqRdEtUser->initOMbqEtUser($in->username, array('case' => 'byLoginName'));
        if(isset($oMbqEtUser))
        {
            $this->data['result'] = false;
            $this->data['result_text'] = 'The username is already in use';
            return;
        }
        
        $this->oMbqEtUser  = $oMbqWrEtUser->registerUser($in->username,  $in->password, $in->email, false, array(), array(), $this->errors);
          
        $this->data['result'] = $this->oMbqEtUser != null;
        if(isset($this->errors) && empty($this->errors)== false)
        {
            foreach($this->errors as $key=>$value)
            {
                $this->data['result_text'] = (isset( $this->data['result_text']) ?  $this->data['result_text'] : '') . $value . PHP_EOL;
            }
        }
        if($this->data['result'])
        {
            $oTapatalkPush = new TapatalkPush();
            $oTapatalkPush->callMethod('doAfterAppLogin',$this->oMbqEtUser->userId->oriValue);
        }
    }
  
}

?>