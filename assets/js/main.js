function myMap(){var myCenter=new google.maps.LatLng(48.449075,35.057585),mapCanvas=document.getElementById("map"),mapOptions={center:myCenter,zoom:15,scrollwheel:!1},map=new google.maps.Map(mapCanvas,mapOptions),marker=new google.maps.Marker({position:myCenter});marker.setMap(map),new google.maps.InfoWindow({content:"Днепр, студия «Dzen», проспект Гагарина, 14"}).open(map,marker)}$(document).ready(function(){$(".carousel").slick({dots:!0,infinite:!0,speed:300,slidesToShow:1,adaptiveHeight:!0})});
//# sourceMappingURL=main.js.map
