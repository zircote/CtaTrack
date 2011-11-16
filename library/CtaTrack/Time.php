<?php

class CtaTrack_Time extends CtaTrack_AbstractCtaTrack
{
    /**
     * Contains a message if the processing of the request resulted in an error.
     *
     * @var ArrayIterator[CtaTrack_Error]
     */
    protected $_error;
    /**
     * Child element of the root element containing the current system date and
     * (local) time. Date and time is represented in the following format:
     * YYYYMMDD HH:MM:SS. Month is represented as two digits where
     * January is equal to Ò01Ó and December is equal to Ò12Ó. Time is
     * represented using a 24-hour clock.
     *
     * @var string
     */
    protected $_tm;
}