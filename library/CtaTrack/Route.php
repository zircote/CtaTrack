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
class CtaTrack_Route extends CtaTrack_AbstractCtaTrack
{
    /**
     * Name of route being described
     * @var string
     */
    protected $_route;
    /**
     * Hexadecimal RGB color value for route’s color, as rrggbb
     * @var string
     */
    protected $_routeColorCode;
    /**
     * Hexadecimal RGB color value of suggested text if placed on background of
     * route color code
     * @var string
     */
    protected $_routeTextColor;
    /**
     * Unique routeid or stationid, as appropriate. Matches Google Transit Feed 
     * Specification codes. 
     * @var string
     */
    protected $_serviceId;
    /**
     * URL of the route or station’s “home page” on transitchicago.com
     * @var string
     */
    protected $_routeUrl;
    /**
     * 
     * @var The route’s ultimate status, described in text (Normal service, 
     * Planned work, Minor delays, etc.)
     */
    protected $_routeStatus;
    /**
     * A suggested color associated with this status
     * @var string
     */
    protected $_routeStatusColor;
}