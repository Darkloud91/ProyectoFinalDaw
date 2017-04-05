<?php

defined('MBQ_IN_IT') or exit;

/**
 * common method class
 */
Class MbqCm extends MbqBaseCm {
    
    public function __construct() {
        parent::__construct();
    }

    /**
     * transform timestamp to iso8601 format
     *
     * @param  Integer  $timeStamp
     * TODO:need to be made more general.
     */
    public function datetimeIso8601Encode($timeStamp) {
           global $user;
	    static $zone_offset;
    
	    if (empty($zone_offset))
	    {
	        $zone_offset = $user->create_datetime()->getOffset();
	    }
	    return parent::datetimeIso8601Encode($timeStamp + $zone_offset);
    }
}

