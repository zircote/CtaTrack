<?php

class CtaTrack extends Zend_Service_Abstract
{
    const ENDPOINT = '';

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
     * @return ArrayIterator[CtaTrack_Directions]
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
     */
    public function getServiceBulletinsByRoute($routeId, $routeDirection = null)
    {

    }
    /**
     *
     * @param string $stopId
     */
    public function getServiceBulletinsStop($stopId)
    {

    }
}