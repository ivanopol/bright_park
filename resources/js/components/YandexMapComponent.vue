<template>
    <div id="map" class="map"></div>
</template>

<script>
    import axios from 'axios';

    export default {
        name: "YandexMapComponent"
    }

    function getCoords() {
        axios
            .get('/api/get_city_by_ip')
            .then(response => createMap(response.data['coordinates']));
    }

    function createMap(coords) {
        ymaps.ready(init);
        function init() {
            var geolocation = ymaps.geolocation,
                myMap = new ymaps.Map('map', {
                    center: [55, 34],
                    zoom: 10
                }, {
                    searchControlProvider: 'yandex#search'
                }),

                // Создаем геообъект с типом геометрии "Точка".
                myGeoObject = new ymaps.GeoObject({
                    // Описание геометрии.
                    geometry: {
                        type: "Point",
                        coordinates: coords.trim().split(',')
                    },
                    // Свойства.
                    properties: {
                        // Контент метки.
                        iconContent: 'BRIGHT PARK',
                        hintContent: 'Брайт парк ближе, чем кажется'
                    }
                }, {
                    // Опции.
                    // Иконка метки будет растягиваться под размер ее содержимого.
                    preset: 'islands#blackStretchyIcon',
                    // Метку можно перемещать.
                    draggable: false
                });

            myMap.geoObjects.add(myGeoObject);

            geolocation.get({
                provider: 'browser',
                mapStateAutoApply: true
            }).then(function (result) {
                result.geoObjects.options.set('preset', 'islands#redCircleIcon');
                result.geoObjects.get(0).properties.set({
                    balloonContentBody: 'Мое местоположение'
                });
                myMap.geoObjects.add(result.geoObjects);

                var multiRoute = new ymaps.multiRouter.MultiRoute({
                    referencePoints: [result.geoObjects.get(0).geometry.getCoordinates(),
                        myGeoObject
                    ],
                    params: {
                        routingMode: 'driving'
                    }
                });

                myMap.geoObjects.add(multiRoute);
            });
        }
    }
    getCoords();
</script>

<style lang="scss" scoped>

</style>
