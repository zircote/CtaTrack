<?php

abstract class CtaTrack_AbstractCtaTrack
{
    /**
     *
     * @var ArrayIterator[CtaTrack_Error]
     */
    protected $_error;
    /**
     * @return boolean
     */
    public function isError()
    {
        return count($this->_error) ? true : false;
    }
    /**
     *
     * @return ArrayIterator[CtaTrack_Error]
     */
    public function getErrors()
    {
        return $this->_error;
    }
}