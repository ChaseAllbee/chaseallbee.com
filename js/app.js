var tuesday_data = [
	{
		address: "Buckley's In Belltown",
	},
	{
		address: "The Retro Restaurant & Lounge",
	},
	{
		address:"Queen Anne Beerhall"
	},
	{
		address:"Atlas Kitchen and Lounge",
	},
	{
		address:"Henry's Tavern",
	},
	{
		address:"Flatstick Pub",
	},
	{
		address:"Otter Bar and Burger",
	},
	{
		address:"LTD Bar and Grill",
	},
	{
		address:"College Inn Pub",
	},
	{
		address:"The Park Pub",
	},
	{
		address:"Ballard Loft",
	},
	{
		address:"Lunchbox Laboratory",
	},
	{
		address:"The Whisky West",
	},
	{
		address:"Raconteur",
	},
	{
		address:"Henry's Tavern",
	},
	{
		address:"Resonate Brewery",
	},
	{
		address:"The Three Lions Pub",
	},
	{
		address:"Reds Wine Bar",
	},
	{
		address:"Stacks Burgers and Shakes",
	},
	{
		address:"World of Beer",
	},
	{
		address:"The Forum Tacoma",
	},
	{
		address:"Swiss Restaurant & Pub ",
	},
	{
		address:"Match Coffee and Wine",
	},
];

var wednesday_data = [
	{
		address:"Ozzie's Seattle",
		time: "7:00 PM"
	},
	{
		address:"Little Maria's Pizza",
		time: "8:00 PM"
	},
	{
		address:"Fado Irish Pub",
		time: "6:30 PM"
	},
	{
		address:"Saint John's Bar and Eatery",
		time: "8:00 PM"
	},
	{
		address:"Pyramid Ale House",
		time: "7:00 PM"
	},
	{
		address:"The Canterbury Ale House",
		time: "7:00 PM"
	},
	{
		address:"Magnolia Village Pub",
		time: "7:30 PM"
	},
	{
		address:"Big Time Brewing Company",
		time: "7:00 PM"
	},
	{
		address:"Locust Cider - Ballard Taproom",
		time: "7:00 PM"
	},
	{
		address:"Pecado Bueno",
		time: "7:00 PM"
	},
	{
		address:"Marco Polo Bar & Grill",
		time: "7:00 PM"
	},
	{
		address:"Lamplighter Public House",
		time: "8:00 PM"
	},
	{
		address:"Flatstick Pub",
		time: "8:00 PM"
	},
	{
		address:"Trenchers Kitchen and Tap",
		time: "7:30 PM"
	},
	{
		address:"Redmond Hop House",
		time: "7:30 PM"
	},
	{
		address:"Twisted Lime Pub",
		time: "7:00 PM"
	},
	{
		address:"Geaux Brewing",
		time: "7:00 PM"
	},
	{
		address:"Charlie's Bar and Grill",
		time: "7:30 PM"
	},
];

function buildMarkersForDay(day_data, map){
	var geocoder = new google.maps.Geocoder();
	day_data.forEach(function(data){
		geocoder.geocode({'address': data.address}, function(results, status) {
	      if (status === 'OK') {
	        map.setCenter(results[0].geometry.location);
	        var infowindow = new google.maps.InfoWindow({
              content: data.address + ' ' + data.time,
            });
	        var marker = new google.maps.Marker({
	          map: map,
	          position: results[0].geometry.location,
	          title: data.address,
	        });
	        marker.addListener('click', function() {
	          infowindow.open(map, marker);
	        });
	      }
	    });
	});
}

function initMap() {

    var map = new google.maps.Map(document.getElementById('map'), {
    	zoom: 12
    });

    buildMarkersForDay(wednesday_data, map);
}

$('document').ready(function(){
	console.log(`I bet you're in here looking for secrets aren't you?`);

	if(Cookies.get('visited')){
		var location = window.location.pathname;
		if( location == '/chaseallbee.com/' || location == '/'){
			$('header .bordered').attr('animation-delay', '.1s');
			$('header .bordered').attr('animation', 'slide-in');
			$('.home').attr('animation-delay', '.5s');
			$('.home').attr('animation', 'slide-in');
			$('hr').attr('animation-delay', '.5s');
			$('hr').attr('animation', 'slide-in');
			$('.home-intro hr').attr('animation-delay', '.1s');
			$('.home-intro hr').attr('animation', 'line-grow-from-left');
			$('.pieces-title-line h2').attr('animation-delay', '.5s');
			$('.pieces-title-line h2').attr('animation', 'slide-in');
			$('.piece').attr('animation-delay', '.4s');
			$('.piece').attr('animation', 'slide-in');
		} 
	}
	else{
		Cookies.set('visited', 'true');
	}
	$('body').css('display', 'block');
	var offset = 300;
	$('.piece').click(function(e){
		var new_location = $(this).attr('href');
		window.location.href = new_location;
	});
	$('a.internal').click(function(e){
		console.log(e.target);
		var new_location = $(this).attr('href');
		window.location.href = new_location;
	});
	$("[animation]").each(function(){
		$(this).css('animation-delay', $(this).attr('animation-delay'));
		$(this).addClass($(this).attr('animation'));
	});

	$(window).scroll(function (event) {
		var scroll = $(window).scrollTop() + $(window).height();
		$.each($('[sos]'), function(el, value){
			if(($(value).offset().top - scroll + offset) < 0){
				$(this).addClass('grow-in');
			}
		});
	});

	if($('section').hasClass('portfolio-item')){
		$('body').addClass('portfolio');
	}

	$.each( $('.restrict-height'), function(key, content) {
		var small_el = '';
		$.each( ($(content).children('img')), function(key, el) {
			if(key == 0){
				small_el = el
			}
			else if( $(el).height() < small_el ){
				small_el = el
			}
		});
		$(content).css({'height' : (small_el + 'px'), 'overflow': 'hidden'});

	});

});