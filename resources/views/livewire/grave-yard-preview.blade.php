{{-- Be like water. --}}

<div class="w-full relative">
    <div id="graveMap" style="height: 600px;"></div>

</div>


@push('scripts')
<script>
    const map = L.map('graveMap', {
        minZoom: 15,
        maxZoom: 22,
        zoomControl: true
    }).setView([15.107154, 120.624243], 20);

    // Define different colored icons for each status
    const icons = {
        reserved: new L.Icon({
            iconUrl: 'https://raw.githubusercontent.com/pointhi/leaflet-color-markers/master/img/marker-icon-orange.png',
            shadowUrl: 'https://unpkg.com/leaflet@1.9.4/dist/images/marker-shadow.png',
            iconSize: [25, 41],
            iconAnchor: [12, 41],
            popupAnchor: [1, -34],
            shadowSize: [41, 41]
        }),
        occupied: new L.Icon({
            iconUrl: 'https://raw.githubusercontent.com/pointhi/leaflet-color-markers/master/img/marker-icon-red.png',
            shadowUrl: 'https://unpkg.com/leaflet@1.9.4/dist/images/marker-shadow.png',
            iconSize: [25, 41],
            iconAnchor: [12, 41],
            popupAnchor: [1, -34],
            shadowSize: [41, 41]
        }),
        available: new L.Icon({
            iconUrl: 'https://raw.githubusercontent.com/pointhi/leaflet-color-markers/master/img/marker-icon-green.png',
            shadowUrl: 'https://unpkg.com/leaflet@1.9.4/dist/images/marker-shadow.png',
            iconSize: [25, 41],
            iconAnchor: [12, 41],
            popupAnchor: [1, -34],
            shadowSize: [41, 41]
        })
    };

    const graves = {!! $graves !!};
    graves.forEach(grave => {
    if (grave.latitude && grave.longitude) {
        const icon = icons[grave.status.toLowerCase()] || icons.available;

        const marker = L.marker([grave.latitude, grave.longitude], { icon }).addTo(map);

        const popupContent = `
            <div style="cursor: pointer;" onclick="window.location.href='/graves/${grave.id}'">
                <b>Grave #${grave.grave_number}</b><br>Status: ${grave.status}<br>
                <small><u>View Details</u></small>
            </div>
        `;

        marker.bindPopup(popupContent);
    }
});

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; OpenStreetMap contributors'
    }).addTo(map);
</script>

@endpush