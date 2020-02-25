<template>
    <section>
        <div style="padding-bottom: 2%">
            <a class="btn" v-on:click="createRoute">Проложить маршрут</a>
        </div>
        <div class="map-wrapper">
            <div id="map" class="map"></div>
        </div>
    </section>
</template>

<script>
    export default {
        name: "YandexMapComponent",
        props: ['coordinates'],
        data: () => ({
            geolocation: null,
            userLocation: null,
            brightParkLocation: null,
            map: null,
            routeExist: false
        }),
        methods: {
            createRoute () {

                if(!this.routeExist){
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
                                    _self.brightParkLocation
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
            }
        },

        mounted() {
            ymaps.ready(() => {
                let geolocation = ymaps.geolocation,
                    myMap = new ymaps.Map('map', {
                        center: this.coordinates,
                        zoom: 15,
                        controls: ['geolocationControl', 'zoomControl']
                    }, {
                        searchControlProvider: 'yandex#search'
                    }),

                    // Создаем геообъект с типом геометрии "Точка".
                    brightParkLocation = new ymaps.GeoObject({
                        // Описание геометрии.
                        geometry: {
                            type: "Point",
                            coordinates: this.coordinates
                        },
                        // Свойства.
                        properties: {
                            // Контент метки.
                        }
                    }, {
                        // Опции.
                        // Иконка метки будет растягиваться под размер ее содержимого.
                        // Метку можно перемещать.
                        draggable: false
                    });

                myMap.geoObjects.add(brightParkLocation);

                this.brightParkLocation = brightParkLocation;
                this.geolocation = geolocation;
                this.map = myMap;
            });
        },
    }
</script>

<style lang="scss" scoped>

</style>
