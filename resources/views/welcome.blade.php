<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Add Tailwind CSS (Example using CDN) -->
<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

        <!-- Styles -->
        <style>
            /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, sans-serif;font-feature-settings:normal}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::-webkit-backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.relative{position:relative}.mx-auto{margin-left:auto;margin-right:auto}.mx-6{margin-left:1.5rem;margin-right:1.5rem}.ml-4{margin-left:1rem}.mt-16{margin-top:4rem}.mt-6{margin-top:1.5rem}.mt-4{margin-top:1rem}.-mt-px{margin-top:-1px}.mr-1{margin-right:0.25rem}.flex{display:flex}.inline-flex{display:inline-flex}.grid{display:grid}.h-16{height:4rem}.h-7{height:1.75rem}.h-6{height:1.5rem}.h-5{height:1.25rem}.min-h-screen{min-height:100vh}.w-auto{width:auto}.w-16{width:4rem}.w-7{width:1.75rem}.w-6{width:1.5rem}.w-5{width:1.25rem}.max-w-7xl{max-width:80rem}.shrink-0{flex-shrink:0}.scale-100{--tw-scale-x:1;--tw-scale-y:1;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.grid-cols-1{grid-template-columns:repeat(1, minmax(0, 1fr))}.items-center{align-items:center}.justify-center{justify-content:center}.gap-6{gap:1.5rem}.gap-4{gap:1rem}.self-center{align-self:center}.rounded-lg{border-radius:0.5rem}.rounded-full{border-radius:9999px}.bg-gray-100{--tw-bg-opacity:1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-red-50{--tw-bg-opacity:1;background-color:rgb(254 242 242 / var(--tw-bg-opacity))}.bg-dots-darker{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E")}.from-gray-700\/50{--tw-gradient-from:rgb(55 65 81 / 0.5);--tw-gradient-to:rgb(55 65 81 / 0);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-transparent{--tw-gradient-to:rgb(0 0 0 / 0);--tw-gradient-stops:var(--tw-gradient-from), transparent, var(--tw-gradient-to)}.bg-center{background-position:center}.stroke-red-500{stroke:#ef4444}.stroke-gray-400{stroke:#9ca3af}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.text-center{text-align:center}.text-right{text-align:right}.text-xl{font-size:1.25rem;line-height:1.75rem}.text-sm{font-size:0.875rem;line-height:1.25rem}.font-semibold{font-weight:600}.leading-relaxed{line-height:1.625}.text-gray-600{--tw-text-opacity:1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity:1;color:rgb(107 114 128 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-2xl{--tw-shadow:0 25px 50px -12px rgb(0 0 0 / 0.25);--tw-shadow-colored:0 25px 50px -12px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.shadow-gray-500\/20{--tw-shadow-color:rgb(107 114 128 / 0.2);--tw-shadow:var(--tw-shadow-colored)}.transition-all{transition-property:all;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.selection\:bg-red-500 *::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-red-500::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-gray-900:hover{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.hover\:text-gray-700:hover{--tw-text-opacity:1;color:rgb(55 65 81 / var(--tw-text-opacity))}.focus\:rounded-sm:focus{border-radius:0.125rem}.focus\:outline:focus{outline-style:solid}.focus\:outline-2:focus{outline-width:2px}.focus\:outline-red-500:focus{outline-color:#ef4444}.group:hover .group-hover\:stroke-gray-600{stroke:#4b5563}.z-10{z-index: 10}@media (prefers-reduced-motion: no-preference){.motion-safe\:hover\:scale-\[1\.01\]:hover{--tw-scale-x:1.01;--tw-scale-y:1.01;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}}@media (prefers-color-scheme: dark){.dark\:bg-gray-900{--tw-bg-opacity:1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:bg-gray-800\/50{background-color:rgb(31 41 55 / 0.5)}.dark\:bg-red-800\/20{background-color:rgb(153 27 27 / 0.2)}.dark\:bg-dots-lighter{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E")}.dark\:bg-gradient-to-bl{background-image:linear-gradient(to bottom left, var(--tw-gradient-stops))}.dark\:stroke-gray-600{stroke:#4b5563}.dark\:text-gray-400{--tw-text-opacity:1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:shadow-none{--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.dark\:ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.dark\:ring-inset{--tw-ring-inset:inset}.dark\:ring-white\/5{--tw-ring-color:rgb(255 255 255 / 0.05)}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.group:hover .dark\:group-hover\:stroke-gray-400{stroke:#9ca3af}}@media (min-width: 640px){.sm\:fixed{position:fixed}.sm\:top-0{top:0px}.sm\:right-0{right:0px}.sm\:ml-0{margin-left:0px}.sm\:flex{display:flex}.sm\:items-center{align-items:center}.sm\:justify-center{justify-content:center}.sm\:justify-between{justify-content:space-between}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width: 768px){.md\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}}@media (min-width: 1024px){.lg\:gap-8{gap:2rem}.lg\:p-8{padding:2rem}}
        #map {
            height: 400px;
            width: 100%;
        }
        </style>


    </head>
    <body class="antialiased">
        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">

                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/home') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a>
                    @else
                        <a href="{{  url('/admin') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Admin</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
            <div class="sm:w-64 bg-white dark:bg-gray-800 h-screen fixed left-0 top-0 overflow-y-auto">
                <div class="p-6">
                    <!-- Sidebar content -->
                    <div class="mb-6">
                        <div class="col-span-4">
                            <div class="bg-white rounded-lg shadow-md p-6">
                                <h4 class="text-xl font-semibold mb-4">Pencarian Lokasi</h4>
                                <div class="mb-4">
                                    <label for="form_start" class="block">Lokasi Awal</label>
                                    <input type="text" name="form_start" id="form_start" class="form-input w-full">
                                </div>
                                <div class="mb-4">
                                    <label for="form_end" class="block">Lokasi Akhir</label>
                                    <input type="text" name="form_end" id="form_end" class="form-input w-full">
                                </div>
                                <a class="btn btn-default inline-flex items-center" id="search_form" onclick="calculateAndDisplayRouteForm()" href="#">
                                    <i class="fas fa-search mr-2"></i>Cari
                                </a>
                                <button class="btn btn-default inline-flex items-center ml-2" onclick="resetMap()">
                                    <i class="fas fa-sync-alt mr-2"></i>Reset
                                </button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="max-w-7xl mx-auto p-6 lg:p-8">

                <div class="flex justify-center">
                </div>

                <div class="mt-16">
                    
                        <!-- Your Google Map div -->
                        <div id="map_canvas" style="height: 400px; width:1200px;"></div>
                        <div id="sidebar" style="height: 400px; overflow-y: auto; float: right; width: 30%;">
                            <h4 class="text-xl font-semibold mb-4">Daftar Markers</h4>
                            <ul id="markersList"></ul>
                        </div>
                    <!-- </div> -->
                </div>

                <div class="flex justify-center mt-16 px-0 sm:items-center sm:justify-between">
                    <div class="text-center text-sm sm:text-left">
                        &nbsp;
                    </div>
                </div>
            </div>
        </div>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
 <script type="text/javascript" src="https://maps.google.com/maps/api/js?key=AIzaSyAAgY3Vew0LpTLCBR_Sg98TKXrW_8Yk_4o"></script>

<script type='text/javascript'>
    $(window).resize(function () {
      var h = $(window).height(),
        offsetTop = 170; // Calculate the top offset
    
      $('#map_canvas').css('height', (h - offsetTop));
    }).resize();
    
    var map, infoWindow, marker, myMarker;
    var gmarkers = []; 
    var map = null;
    var circle = null;
    var geocoder = new google.maps.Geocoder(); //geocoding
    var bounds = new google.maps.LatLngBounds();
    var infoWindow = new google.maps.InfoWindow;
    
    //--------------
    var warna = [];
    var lokasi = [];
    var myPolygons = [];
    var myPolygon;
    
    var wStrokecolor;
    var wFillcolor;
    var myWarna;
    //---------------
    
    var customIcons = {
        hospital: {
            iconku: 'img/icon/hospital.png'
        },
        hotel: {
            iconku: 'img/icon/hotel.png'
        },
        university: {
            iconku: 'img/icon/university.png'
        }
    };
    
    $(function() {              
        //---> mengatasi multiple load Google Maps API
        if(!window.google||!window.google.maps){
            var script = document.createElement('script');
            script.type = 'text/javascript';
            script.src = 'https://maps.googleapis.com/maps/api/js?key=AIzaSyAAgY3Vew0LpTLCBR_Sg98TKXrW_8Yk_4o&callback=initMap';
            document.body.appendChild(script);
        }
        else{
            initMap();
        }
    });
    
    //---> membuat marker dan push to gmarkers (array)
    function createMarker(latlng, name, icon, html) {
        var contentString = html;
        var marker = new google.maps.Marker({
            position: latlng,
            title: name,
            icon: (icon && icon.iconku) ? icon.iconku : null,
            animation: google.maps.Animation.DROP
        });
        
        //menempatkan dan menampilkan info window untuk marker
        google.maps.event.addListener(marker, 'click', function() {
            infoWindow.setContent(contentString); 
            infoWindow.open(map,marker);
        });
        
        gmarkers.push(marker);
        //alert(gmarkers.length);
        map.setCenter(marker.position);
    }
    
    //---> mendefinisikan fungsi initMap()
    function initMap(){
            map = new google.maps.Map(document.getElementById('map_canvas'), {
               center: new google.maps.LatLng(-8.676488,115.211177),
               zoom: 8,
               mapTypeId: google.maps.MapTypeId.ROADMAP
            });

            directionsService = new google.maps.DirectionsService();
            directionsRenderer = new google.maps.DirectionsRenderer();
            directionsRenderer.setMap(map);
            
            // Bagian ini digunakan untuk mendapatkan data format JSON yang dibentuk dalam getmarker.php
            // berbasis Ajax
            $.ajax({
                url: "{{ url('/getMarkers') }}",
                type: "GET",
                dataType: "json",
                //cache: true,
                success: function(result){
                    for(i=0; i < result.data.marker.length;i++){
                        var point = new google.maps.LatLng(parseFloat(result.data.marker[i].lat),parseFloat(result.data.marker[i].lng));
                    
                        var content = '<h4>'+result.data.marker[i].name+'</h4>' +
                          '<b>Lokasi</b>' +
                          '<p>'+result.data.marker[i].address+'</p>'+
                          '<p>Lat: '+result.data.marker[i].lat+'<br/>Lng: '+result.data.marker[i].lng+'</p>'+
                          '<b>Direction</b>' +
                            '<select id="mode-select">'+
                                '<option value="DRIVING">Driving</option>'+
                                '<option value="WALKING">Walking</option>'+
                                '<option value="TRANSIT">Transit</option>'+
                                '<option value="BICYCLING">Bicycling</option>'+
                            '</select>'+
                          '<p><input type="button" value="Rute ke Lokasi ini" id="akhir" />'+
                          '<input type="hidden" value='+result.data.marker[i].lat+' id="latku" />'+
                          '<input type="hidden" value='+result.data.marker[i].lng+' id="longku" /></p>';
                        
                        var type = result.data.marker[i].category;
                        //membuat marker
                        createMarker(point,result.data.marker[i].name,customIcons[type],content);
                    }
            
                    if (gmarkers.length > 0){
                        for (var i=0; i<gmarkers.length;i++) {
                            bounds.extend(gmarkers[i].getPosition());
                            gmarkers[i].setMap(map);
                        }
                        //now fit the map to the newly inclusive bounds
                        map.fitBounds(bounds);
                    }
                }
            });
            
            google.maps.event.addListener(map, 'click', function() {
                infoWindow.close();
            });
            
            //menampilkan traffic layer pada peta
            var trafficLayer = new google.maps.TrafficLayer(); 
            trafficLayer.setMap(map);
            
            setDefaultMarker();
            
        }
    function calculateAndDisplayRouteForm() {
        var start = document.getElementById('form_start').value;
        var end = document.getElementById('form_end').value;

        var request = {
            origin: start,
            destination: end,
            travelMode: google.maps.TravelMode.TRANSIT
        };

        directionsService.route(request, function(response, status) {
            if (status === 'OK') {
                directionsRenderer.setDirections(response);
                showMarkersOnRoute(response.routes[0]);
            } else {
                window.alert('Directions request failed due to ' + status);
            }
        });
    }

    function showMarkersOnRoute(route) {
        var bounds = new google.maps.LatLngBounds();
        var path = route.overview_path;

        // Reset visibility of all markers
        for (var i = 0; i < gmarkers.length; i++) {
            gmarkers[i].setVisible(false);
        }

        // Iterate over each marker and check if it lies within a certain radius of the route path
        for (var i = 0; i < gmarkers.length; i++) {
            var markerPosition = gmarkers[i].getPosition();
            var markerVisible = false;

            for (var j = 0; j < path.length; j++) {
                var routePoint = path[j];
                var distance = google.maps.geometry.spherical.computeDistanceBetween(markerPosition, routePoint);

                // Adjust this threshold value as needed to capture markers near the route
                if (distance < 50) { // Example: Show markers within 1000 meters of the route
                    markerVisible = true;
                    break;
                }
            }

            if (markerVisible) {
                gmarkers[i].setVisible(true);
                bounds.extend(markerPosition);
            }
        }

        map.fitBounds(bounds);
    }

    function resetMap() {
    // Clear the route
    directionsRenderer.setMap(null); // Remove the directions from the map
    directionsRenderer = new google.maps.DirectionsRenderer(); // Reset the DirectionsRenderer
    directionsRenderer.setMap(map); // Set the new DirectionsRenderer to the map

    // Reset visibility of all markers
    for (var i = 0; i < gmarkers.length; i++) {
        gmarkers[i].setVisible(true); // Set markers visible again
    }

    // Fit the map to show all markers
    map.fitBounds(bounds);
}
function zoomToMarker(index) {
        var marker = gmarkers[index];
        map.setZoom(15);
        map.setCenter(marker.getPosition());
        google.maps.event.trigger(marker, 'click'); // Open info window
    }


    
</script>  

    </body>
</html>

