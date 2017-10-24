$(function() {

    "use strict";
	
	// REMOVE # FROM URL
	$( 'a[href="#"]' ).click( function(e) {
		e.preventDefault();
	});
	
	// Tool Tip
	$('[data-toggle="tooltip"]').tooltip();

	
	// Menu Card Carousel
	$("#menu-card-carousel").owlCarousel({
		autoPlay: 6000, //Set AutoPlay to 3 seconds
		singleItem : true,
		transitionStyle : "fade", 
		stopOnHover : true,
		navigation : true, // Show next and prev buttons
		navigationText : ["<i class=\"fa fa-chevron-left animation\"></i>","<i class=\"fa fa-chevron-right animation\"></i>"],
		pagination : false
	});
	
	// Special Offers Carousel
	$("#special-offers-carousel").owlCarousel({
		autoPlay: 6000, //Set AutoPlay to 3 seconds
		items : 4,
		stopOnHover : true,
		navigation : true, // Show next and prev buttons
		navigationText : ["<i class=\"fa fa-chevron-left animation\"></i>","<i class=\"fa fa-chevron-right animation\"></i>"],
		pagination : false
	});	
	
	//MAGNIFIC POPUP
	$(".gallery-grid").magnificPopup({
		delegate: 'a.zoom', 
		type: 'image',
		gallery: {
			enabled: true
		}
	});
	
	// Date Picker
	$(".datepickerInput").datepicker({
		format: "dd/mm/yyyy"
	});
	
	// Tabs Google Map Init
	$('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
		initialize();
	});
	
	// GOOGLE MAP
	$(".contact-page-map").height(440);
	function initialize($) {
		var mapOptions = {	
			zoom: 8,
			center: new google.maps.LatLng(17.421306, 78.457553),
			disableDefaultUI: true
		};
		var map = new google.maps.Map(document.querySelector('.map, .contact-page-map'), mapOptions);
	}
	google.maps.event.addDomListener(window, 'load', initialize);
	
});