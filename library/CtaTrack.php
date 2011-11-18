<?php
/**
 *
 *
 * @author Robert Allen <rallen@ifbyphone.com>
 * @package CtaTracker
 *
 *
 */
class CtaTrack extends Zend_Service_Abstract
{
    const CTA_BUS_ENDPOINT = 'http://www.ctabustracker.com/bustime/api/v1';
    const CTA_TRAIN_ENDPOINT = 'lapi.transitchicago.com/api/1.0/ttarrivals.aspx';
    /**
     * Your unique API key, assigned to you after agreeing to DLA and requesting
     * a key be generated for you.
     * @var string
     */
    protected $_key;
    /**
     * @return CtaTrack_Time
     */
    public function getTime()
    {

    }
    /**
     *
     * @param array $routeId
     * @return ArrayIterator[CtaTrack_Vehicle]
     */
    public function getVehiclesByRoute(array $routeId)
    {

    }
    /**
     *
     * @param array $vehicleIds
     * @return ArrayIterator[CtaTrack_Vehicle]
     */
    public function getVehiclesById(array $vehicleIds)
    {

    }
    /**
     * @return ArrayIterator[CtaTrack_Route]
     */
    public function getRoutes()
    {

    }
    /**
     *
     * @param mixed $routeId
     * @return ArrayIterator[CtaTrack_Direction]
     */
    public function getDirections($routeId)
    {

    }
    /**
     *
     * @param string $routeId
     * @param string $direction
     * @return ArrayIterator[CtaTrack_Stop]
     */
    public function getStops($routeId, $direction)
    {

    }
    /**
     *
     * @param array $patternId
     * @return ArrayIterator[CtaTrack_Pattern]
     */
    public function getPatternsByPatternId(array $patternId)
    {

    }
    /**
     *
     * @param string $routeId
     * @return ArrayIterator[CtaTrack_Pattern]
     */
    public function getPatternsByRoute($routeId)
    {

    }
    /**
     *
     * @param string $stopId
     * @param string $routeId
     * @param integer $max
     * @return ArrayIterator[CtaTrack_Prediction]
     */
    public function getPredictionsByStopId($stopId, $routeId = null, $max = null)
    {

    }
    /**
     *
     * @param string $vehicleId
     * @param integer $max
     * @return ArrayIterator[CtaTrack_Prediction]
     */
    public function getPredictionByVehicleId($vehicleId, $max = null){

    }
    /**
     *
     * @param string $routeId
     * @param string $routeDirection
     * @return ArrayIterator[CtaTrack_ServiceBulletin]
     */
    public function getServiceBulletinsByRoute($routeId, $routeDirection = null)
    {

    }
    /**
     *
     * @param string $stopId
     * @return ArrayIterator[CtaTrack_ServiceBulletin]
     */
    public function getServiceBulletinsStop($stopId)
    {

    }
    /**
     * A single five-digit code to tell the server which station you'd like to
     * receive predictions for. See appendix for information about valid station
     * codes.
     *
     * @param integer $mapId
     */
    public function getArrivalsByMapId($mapId)
    {

    }
    /**
     *
     * @param integer $stopId
     * @param integer|null $max
     * @param string|integer $route
     */
    public function getArrivalsByStopId($stopId, $max = null, $route = null)
    {

    }
    /**
     * @return CtaTrack_RouteInfo
     */
    public function getRouteInfo()
    {
        
    }
}