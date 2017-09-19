<!DOCTYPE html>
<html>
<head>
  <title>GeoMapa</title>
  <link rel="stylesheet" href="https://openlayers.org/en/v4.3.3/css/ol.css" type="text/css">
  <!-- The line below is only needed for old environments like Internet Explorer and Android 4.x -->
  <script src="https://cdn.polyfill.io/v2/polyfill.min.js?features=requestAnimationFrame,Element.prototype.classList,URL"></script>
  <script src="https://openlayers.org/en/v4.3.3/build/ol.js"></script>
  <style>
  /**
  * The zoomslider in the second map shall be placed between the zoom-in and
  * zoom-out buttons.
  */
  #map2 .ol-zoom .ol-zoom-out {
    margin-top: 204px;
  }
  #map2 .ol-zoomslider {
    background-color: transparent;
    top: 2.3em;
  }

  #map2 .ol-touch .ol-zoom .ol-zoom-out {
    margin-top: 212px;
  }
  #map2 .ol-touch .ol-zoomslider {
    top: 2.75em;
  }

  #map2 .ol-zoom-in.ol-has-tooltip:hover [role=tooltip],
  #map2 .ol-zoom-in.ol-has-tooltip:focus [role=tooltip] {
    top: 3px;
  }

  #map2 .ol-zoom-out.ol-has-tooltip:hover [role=tooltip],
  #map2 .ol-zoom-out.ol-has-tooltip:focus [role=tooltip] {
    top: 232px;
  }

  /**
  * The zoomslider in the third map shall be horizontal, placed in the top-right
  * corner, smaller and orange.
  */
  #map3 .ol-zoomslider {
    top: 8px;
    left: auto;
    right: 8px;
    background-color: rgba(255,69,0,0.2);
    width: 200px;
    height: 15px;
    padding: 0;
    box-shadow: 0 0 5px rgb(255,69,0);
    border-radius: 20px;
  }

  #map3 .ol-zoomslider:hover {
    background-color: rgba(255,69,0,0.3);
  }

  #map3 .ol-zoomslider-thumb {
    height: 15px;
    width: 15px;
    margin: 0;
    filter: none;
    background-color: rgba(255,69,0,0.6);
    border-radius: 20px;
  }
  #map3 a.ol-zoomslider-handle:hover {
    background-color: rgba(255,69,0,0.7);
  }
  </style>
</head>
<body>
  <h4>Mapa Muito Loco</h4>
  <div id="map2" class="map"></div>

  <!--<h4>Placed between zoom controls</h4>
  <div id="map2" class="map"></div>

  <h4>Horizontal and completely re-styled</h4>
  <div id="map3" class="map"></div>
  -->
  <script>

  /**
  * Helper method for map-creation.
  *
  * @param {string} divId The id of the div for the map.
  * @return {ol.Map} The ol.Map instance.
  */
  var createMap = function(divId) {
    var source, layer, map, zoomslider;

    source = new ol.source.OSM();
    layer = new ol.layer.Tile({
      source: source
    });
    map = new ol.Map({
      layers: [layer],
      target: divId,
      view: new ol.View({
        center: [0, 0],
        zoom: 2
      })
    });
    zoomslider = new ol.control.ZoomSlider();
    map.addControl(zoomslider);
    return map;
  };

  var map2 = createMap('map2');
  //  var map2 = createMap('map2');
  //  var map3 = createMap('map3');
  </script>
</body>
</html>
