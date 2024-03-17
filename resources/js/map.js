const map = L.map('map').setView([36.00000000, 138.00000000], 10);
// const map = L.map('map').setView([-6.91806000, 106.92667000], 13);
L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
}).addTo(map);
