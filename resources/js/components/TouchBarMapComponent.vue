<template>
    <div class="map-wrapper-bar">
        <div id="touchBarMap" class="map"></div>
    </div>
</template>

<script>
    export default {
        name: "YandexMapComponent",
        props: ['coordinates'],
        methods: {
            createMap: function(coords) {
                ymaps.ready(init);

                let _self = this;

                function init() {
                    var geolocation = ymaps.geolocation,
                        myMap = new ymaps.Map('touchBarMap', {
                            center: coords,
                            zoom: 10,
                            controls: ['zoomControl']
                        }, {
                            searchControlProvider: 'yandex#search'
                        });


                    function success(position){
                        const latitude = position.coords.latitude;
                        const longitude = position.coords.longitude;

                        addUserLocation([latitude, longitude])
                    }

                    async function error(e) {

                        const res = await fetch('https://location.services.mozilla.com/v1/geolocate?key=test').then(el=>el.json());
                        const point = [res.location.lat, res.location.lng];

                        addUserLocation(point);

                   //     console.log('Unable to retrieve your location');
                   //     console.log(e)
                    }

                    if (!navigator.geolocation) {
                    //    console.log('Geolocation is not supported by your browser');
                    } else {
                      //  navigator.geolocation.getCurrentPosition(success, error);
                    }

                    function addUserLocation(coords) {
                        let userLocation = new ymaps.GeoObject({
                            // Описание геометрии.
                            geometry: {
                                type: "Point",
                                coordinates: coords
                            },
                        }, {
                            draggable: true
                        });

                        let Route = new ymaps.multiRouter.MultiRoute({
                                referencePoints: [userLocation,
                                    _self.coordinates
                                ],
                                params: {
                                    routingMode: 'driving',
                                    reverseGeocoding: true
                                }
                            },
                            {
                                boundsAutoApply: true
                            }
                        );

                        myMap.geoObjects.add(Route);
                    }

                }
            },

            createRoute () {

                let _self = this;

                function success(position){
                    const latitude = position.coords.latitude;
                    const longitude = position.coords.longitude;

                    addUserLocation([latitude, longitude])
                }

                async function error(e) {

                    const res = await fetch('https://location.services.mozilla.com/v1/geolocate?key=test').then(el=>el.json());
                    const point = [res.location.lat, res.location.lng];

                    addUserLocation(point);

                    console.log('Unable to retrieve your location');
                    console.log(e)
                }

                if (!navigator.geolocation) {
                    console.log('Geolocation is not supported by your browser');
                } else {
                    navigator.geolocation.getCurrentPosition(success, error);
                }

                function addUserLocation(coords) {
                    let userLocation = new ymaps.GeoObject({
                        // Описание геометрии.
                        geometry: {
                            type: "Point",
                            coordinates: coords
                        },
                    }, {
                        draggable: true
                    });

                    let Route = new ymaps.multiRouter.MultiRoute({
                            referencePoints: [userLocation,
                                coords
                            ],
                            params: {
                                routingMode: 'driving',
                                reverseGeocoding: true
                            }
                        },
                        {
                            boundsAutoApply: true
                        }
                    );

                    _self.map.geoObjects.add(Route);
                    _self.map.geoObjects.remove(_self.brightParkLocation);
                    _self.routeExist = true;
                }
            }
        },
        mounted () {
            this.createMap(this.coordinates);
        },
    }
</script>

<style lang="scss">

</style>
