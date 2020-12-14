![](https://img.shields.io/github/stars/iMuMz/NovaMapCard?&style=flat-square)
![GitHub release (latest by date)](https://img.shields.io/github/v/release/iMuMz/NovaMapCard?color=yellow&style=flat-square)
![Packagist](https://img.shields.io/packagist/dt/imumz/nova-map-card?color=green&logo=testing&style=flat-square)
# NovaMapCard
Custom [Laravel Nova](https://nova.laravel.com/) map card using [Vue2Leaflet](https://korigan.github.io/Vue2Leaflet). Supports Google Maps, marker clustering, height, zoom, latitude and longitude coordinates, GeoJSON, marker popup and custom marker icon.

Looking for a Laravel Nova map field? (https://github.com/iMuMz/NovaLeafletMap)

![image](https://user-images.githubusercontent.com/22936672/102049929-82247100-3dea-11eb-9ec5-3f4adee7bd30.png)

### Installation

```
composer require imumz/nova-map-card
```
### Usage

```
use Imumz\NovaMapCard\NovaMapCard
...
(new NovaMapCard())->width("1/2")
```
### Available Methods

#### Zoom
```
(new NovaMapCard())
->zoom(4)
```
#### Height
```
(new NovaMapCard())
->height('400px') // default is 300px
```
#### Google Maps
By default the provider is OpenStreetMaps.<br> 
You must set your Google Maps API key (https://developers.google.com/maps/documentation/javascript/get-api-key).
```
(new NovaMapCard())
->googleApiKey('')
->googleMapType('roadmap'), // roadmap, satellite or hybrid
```
#### Latitude / Longitude (Point)
The map will automatically center to the coordinates provided.
```
(new NovaMapCard())
->type('LatLon')
->point('-6.081689','145.391881')
```
#### GeoJSON
You have to manually set the GeoJson center.
```
(new NovaMapCard())
->type('GeoJson')
->geoJson('')
->center('-6.081689','145.391881')
```
#### GeoJson Example 
```
{
  "type": "FeatureCollection",
  "features": [
    {
      "type": "Feature",
      "properties": {
        "popup": "I am a Popup"
      },
      "geometry": {
        "type": "Point",
        "coordinates": [
          23.8623046875,
          -30.221101852485987
        ]
      }
    }
  ]
}
```

#### Popup
```
(new NovaMapCard())
->popupName('popup')
```
#### Custom Marker Icon
```
(new NovaMapCard())
->mapIconUrl('/images/marker-icon.png')
```
You can now pass additional parameters to set the icon size and anchor
```
->mapIconUrl('/images/marker-icon.png',[100,100],[50,50])
```
![Screenshot 2020-10-06 at 10 09 14](https://user-images.githubusercontent.com/22936672/102050354-5950ab80-3deb-11eb-8a47-f2b37613c69b.png)

