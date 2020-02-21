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

                function init() {
                    var geolocation = ymaps.geolocation,
                        myMap = new ymaps.Map('touchBarMap', {
                            center: coords,
                            zoom: 10
                        }, {
                            searchControlProvider: 'yandex#search'
                        });

                    geolocation.get({
                        provider: 'yandex',
                        mapStateAutoApply: true
                    }).then(function (result) {
                        result.geoObjects.options.set('preset', 'islands#redCircleIcon');
                        result.geoObjects.get(0).properties.set({
                            balloonContentBody: 'Мое местоположение'
                        });
                        myMap.geoObjects.add(result.geoObjects);

                        var multiRoute = new ymaps.multiRouter.MultiRoute({
                            referencePoints: [result.geoObjects.get(0).geometry.getCoordinates(),
                                coords
                            ],
                            params: {
                                routingMode: 'driving'
                            },
                        },
                            {
                                boundsAutoApply: true
                            }
                        );

                        myMap.geoObjects.add(multiRoute);
                    });
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
