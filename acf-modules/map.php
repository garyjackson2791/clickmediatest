<script src='https://api.mapbox.com/mapbox-gl-js/v2.9.1/mapbox-gl.js'></script>
<link href='https://api.mapbox.com/mapbox-gl-js/v2.9.1/mapbox-gl.css' rel='stylesheet' />

<section class="map">
  <div id='map' style='width: 100%; height: 596px;'></div>
  <script>
    mapboxgl.accessToken = 'pk.eyJ1IjoiZ2FyeWphY2tzb24iLCJhIjoiY2xpM2hkbDNuMHc2ZzN2bHBzZDllajRlYSJ9.xJAAWlb16rIqZ4WYFFOlKQ';
    var map = new mapboxgl.Map({
      container: 'map',
      style: 'mapbox://styles/mapbox/streets-v11',
      center: [-2.8916144, 53.1946689], // starting position [lng, lat]
      zoom: 16 // starting zoom
    });

    const marker = new mapboxgl.Marker({
      color: "#FFFFFF",
      draggable: true
      }).setLngLat([-2.8916144, 53.1946689])
      .addTo(map);
    map.scrollZoom.disable();
  </script>
</section>