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
            createRoute: function () {

                ymaps.geolocation.get({
                    provider: 'yandex'
                }).then((result) => {

                    if (!this.routeExist) {
                        let userLocation = new ymaps.GeoObject({
                            // Описание геометрии.
                            geometry: {
                                type: "Point",
                                coordinates: result.geoObjects.position
                            },
                        }, {
                            draggable: true
                        });

                        let Route = new ymaps.multiRouter.MultiRoute({
                                referencePoints: [userLocation,
                                    this.brightParkLocation
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

                        this.map.geoObjects.add(Route);
                        this.map.geoObjects.remove(this.brightParkLocation);
                        this.routeExist = true;
                    }
                }).catch((e) => {
                    console.log(e)
                });
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
