<?php

namespace Imumz\NovaMapCard;

use Laravel\Nova\Card;

class NovaMapCard extends Card
{
    /**
     * The width of the card (1/3, 1/2, or full).
     *
     * @var string
     */
    public $width = '1/3';

    /**
     * Get the component name for the element.
     *
     * @return string
     */
    public function component()
    {
        return 'nova-map-card';
    }

    public function height($height){
        return $this->withMeta([
            'height' => $height
        ]);
    }
    public function zoom($zoom){
        return $this->withMeta([
            'zoom' => $zoom
        ]);
    }
    public function geoJson($geoJson){

        return $this->withMeta([
            'geoJson' => $geoJson
        ]);
    }
    public function mapIconUrl($mapIconUrl,$mapIconSize = null,$mapIconAnchor = null){

        return $this->withMeta([
            'mapIconUrl' => $mapIconUrl,
            'mapIconSize' => $mapIconSize,
            'mapIconAnchor' => $mapIconAnchor
        ]);
    }

    public function type($type){
        return $this->withMeta([
            'type' => $type
        ]);
    }
    public function popupName($popupName){
        return $this->withMeta([
            'popupName' => $popupName
        ]);
    }
    public function point($latitude,$longitude) {
        return $this->withMeta([
            'latitude' => $latitude,
            'longitude' => $longitude
        ]);
    }

    public function center($centerLat,$centerLon) {
        return $this->withMeta([
            'centerLat' => $centerLat,
            'centerLon' => $centerLon
        ]);
    }

    /*public function html($html) {
        return $this->withMeta([
            'html' => $html,
        ]);
    }*/

    public function googleApiKey($googleApiKey) {

        return $this->withMeta([
            'googleApiKey' => $googleApiKey
        ]);
    }

    public function googleMapType($googleMapType) {

        return $this->withMeta([
            'googleMapType' => $googleMapType
        ]);
    }
}
