<?php

/**
 *
 *
 * @author Robert Allen <rallen@ifbyphone.com>
 * @package
 * @subpackage
 *
 * @property protected $_prm string
 * @property protected $_ptr string
 * @property protected $_stop string
 * @property protected $_route string
 * @property protected $_vehicle string
 * @property protected $_tm string
 * @property protected $_rt string
 * @property protected $_rtdir string
 * @property protected $_stpid string
 */
class CtaTrack_Error
{
    /**
     *
     * @var string
     */
    protected $_msg;

    public function getMessages()
    {
        return $this->_msg;
    }
}
