<?php
/**
 *
 *
 * @author Robert Allen <rallen@ifbyphone.com>
 * @package CtaTracker
 * @subpackage
 *
 *
 */
class CtaTrack_Arrival
{
    /**
     *Numeric GTFS parent station ID which this prediction is for (five digits 
     *in 4xxxx range) (matches “mapid” specified by requestor in query)
     * @var integer
     */
    protected $_staId;
    /**
     * Numeric GTFS unique stop ID within station which this prediction is for
     * (five digits in 3xxxx range)
     * @var integer
     */
    protected $_stpId;
    /**
     * Textual proper name of parent station
     * @var string
     */
    protected $_staNm;
    /**
     * Textual description of platform for which this prediction applies
     * @var string
     */
    protected $_stpDe;
    /**
     * Run number of train being predicted for
     * @var integer
     */
    protected $_rn;
    /**
     * Textual, abbreviated route name of train being predicted for (matches 
     * GTFS routes)
     * @var string
     */
    protected $_rt;
    /**
     * GTFS unique stop ID where this train is expected to ultimately end its
     * service run (experimental and supplemental only
     * @var string
     */
    protected $_destSt;
    /**
     * Friendly destination description 
     * @var string
     */
    protected $_destNm;
    /**
     * Numeric train route direction code
     * @var string
     */
    protected $_trDr;
    /**
     * Date-time format stamp for when the prediction was generated: 
     * yyyyMMdd HH:mm:ss (24-hour format, time local to Chicago)
     * @var string
     */
    protected $_prdt;
    /**
     * Date-time format stamp for when a train is expected to arrive/depart:
     * yyyyMMdd HH:mm:ss (24-hour format, time local to Chicago)
     * @var string
     */
    protected $_arrT;
    /**
     * Indicates that Train Tracker is now declaring “Approaching” or “Due” on
     * site for this train
     * @var string
     */
    protected $_isApp;
    /**
     * Boolean flag to indicate whether this is a live prediction or based on
     * schedule in lieu of live data
     * @var boolean
     */
    protected $_isSch;
    /**
     * Boolean flag to indicate whether a train is considered “delayed” in Train
     * Tracker
     * @var boolean
     */
    protected $_isDly;
    /**
     * Boolean flag to indicate whether a potential fault has been detected (see
     * note below)
     * @var boolean
     */
    protected $_isFlt;
}