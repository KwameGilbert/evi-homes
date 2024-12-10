<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css">
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet-routing-machine/3.2.12/leaflet-routing-machine.min.js"></script>

<section class="bg-gray-100 py-8">
    <div class="container mx-auto px-4">
        <h2 class="text-2xl font-bold text-center mb-4">Available Properties</h2>
        <div id="map" class="w-full h-96"></div>
    </div>
</section>

<script>
    // Initialize the map
    const map = L.map('map').setView([5.603717, -0.186964], 13); // Centered around Accra International Airport

    // Add OpenStreetMap tiles
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 19,
    }).addTo(map);

    // Properties to display
    const locations = [
        {
            lat: 5.603717,
            lng: -0.186964,
            title: 'Property 1'
        }, // Near Accra International Airport
        {
            lat: 5.605874,
            lng: -0.171478,
            title: 'Property 2'
        }, // Another location near Accra International Airport
    ];

    // Add markers for each property
    locations.forEach(location => {
        L.marker([location.lat, location.lng]).addTo(map)
            .bindPopup(`<b>${location.title}</b>`);
    });

    // Show user's current location
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(position => {
            const userLat = position.coords.latitude;
            const userLng = position.coords.longitude;

            // Add a marker for the user's location
            const userMarker = L.marker([userLat, userLng], {
                    icon: L.icon({
                        iconUrl: 'https://cdn-icons-png.flaticon.com/512/64/64096.png',
                        iconSize: [32, 32],
                    })
                }).addTo(map)
                .bindPopup('You are here')
                .openPopup();

            // Fit the map to show user and properties
            const bounds = L.latLngBounds([
                [userLat, userLng],
                ...locations.map(loc => [loc.lat, loc.lng])
            ]);
            map.fitBounds(bounds);

            // Calculate and display routes to each property
            locations.forEach(location => {
                L.Routing.control({
                    waypoints: [
                        L.latLng(userLat, userLng),
                        L.latLng(location.lat, location.lng),
                    ],
                    routeWhileDragging: true,
                }).addTo(map);
            });
        }, error => {
            alert('Unable to access your location. Please allow location access.');
        });
    } else {
        alert('Geolocation is not supported by your browser.');
    }
</script>