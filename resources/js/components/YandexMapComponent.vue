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
                if(!this.routeExist){
                    this.geolocation.get({
                        provider: 'browser',
                        mapStateAutoApply: true
                    }).then((result) => {
                        result.geoObjects.options.set('preset', 'islands#redCircleIcon');
                        result.geoObjects.get(0).properties.set({
                            balloonContentBody: 'Мое местоположение'
                        });
                        this.map.geoObjects.add(result.geoObjects);

                        var multiRoute = new ymaps.multiRouter.MultiRoute({
                            referencePoints: [result.geoObjects.get(0).geometry.getCoordinates(),
                                this.brightParkLocation
                            ],
                            params: {
                                routingMode: 'driving'
                            }
                        },
                            {
                                boundsAutoApply: true
                            }
                        );

                        this.map.geoObjects.add(multiRoute);
                        this.routeExist = true;
                    });
                }
            }
        },

        mounted() {
            ymaps.ready(()=>{
                let geolocation = ymaps.geolocation,
                    myMap = new ymaps.Map('map', {
                        center: this.coordinates,
                        zoom: 10
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
                            iconContent: 'Брайт Парк',
                        }
                    }, {
                        // Опции.
                        // Иконка метки будет растягиваться под размер ее содержимого.
                        preset: 'islands#redStretchyIcon',
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
