//javascript functions
//$.noConflict(); //jquery $ sign doesn't conflict with other javascript functions

/*grid row cards START*/
$(function() {
    var selectedClass = "";
    $(".filter").click(function(){
        selectedClass = $(this).attr("data-rel");
        $("#gallery").fadeTo(100, 0.1);
        $("#gallery div").not("."+selectedClass).fadeOut().removeClass('animation');
        setTimeout(function() {
            $("."+selectedClass).fadeIn().addClass('animation');
            $("#gallery").fadeTo(300, 1);
        }, 300);
    });
});

/* grid row cards END*/



/*#id map GOOGLE MAPS START
function initMap() {
	var location = {lat: 54.892813, lng: 23.916402};
	var map = new google.maps.Map(document.getElementById("map"), {
		zoom: 17,
		center: location
	});
	
	var marker = new google.maps.Marker({ position: new google.maps.LatLng(54.892813, 23.916402), title: 'Gimnastikos centras', map:map});
	var marker = new google.maps.Marker();
		marker.setPosition(new google.maps.LatLng(54.892813, 23.916402));
		marker.setMap(map);
};
//*#id map GOOGLE MAPS END*/