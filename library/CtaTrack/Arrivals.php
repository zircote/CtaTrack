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
class CtaTrack_Arrivals
{
    /**
     * Shows time when response was generated in format:yyyyMMdd HH:mm:ss 
     * (24-hour format, time local to Chicago)
     * @var string
     */
    protected $_tmst;
    /**
     * Numeric error code
     * @var integer
     */
    protected $_errCd;
    /**
     * Textual error description/message
     * @var string
     */
    protected $_errNm;
    /**
     *
     * @var ArrayIterator[CtaTrack_Arrival]
     */
    protected $_eta;
}