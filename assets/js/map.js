ymaps.ready(init);
var myMap;

// Инициализация карты
function init(){
    myMap = new ymaps.Map("map", {
        center: [54.5983, 36.2569],
        zoom: 16,
        controls: []
    });

    myMap.behaviors.disable('scrollZoom'); //Turn off scroll by wheel

    myPlacemark = new ymaps.Placemark([54.5983, 36.2569], {
        hintContent: 'Электрозапчасть', balloonContent: 'Сервис-центр ООО "Электрозапчасть"'
    });

    myMap.geoObjects.add(myPlacemark);
}
