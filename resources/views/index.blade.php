
<!doctype html>
<html class="no-js" lang="en">


<head>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script><link rel="stylesheet" href="vendor/countdown/jquery.countdown.css">
    @include('layout.head')
     <link rel="shortcut icon" href="images/favicon.ico">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- ========== MINIFIED VENDOR CSS ========== -->
    <link rel="stylesheet" href="styles/vendor.css">

    <link rel="stylesheet" href="vendor/countdown/jquery.countdown.css">

    <!-- ========== MAIN CSS ========== -->
    <link rel="stylesheet" href="styles/main.css">

    <script src="scripts/vendor/modernizr.js"></script>
</head>


<body class="header-shadow" data-spy="scroll" data-target="#navbar" data-offset="60">
    <script type="text/javascript">
        var checkLog = 0;
    </script>
    <!-- ========== LOADER ========== -->
    <div class="page-loader">
        <div class="spinner"></div>
    </div>

    @include('layout.header')

    <!-- ========== MAIN ========== -->
    <div class="main">

        @include('layout.slider')
        
        @include('layout.videos')

    </div> <!-- end main -->

    <!-- ==================================================
    Footer: Classes
    footer - Default footer
    dark-footer - Dark footer [Use with .footer]
    sticky-footer - Reveal footer on scroll
    ================================================== -->
    <footer class="footer footer-style-4" id="footer">

     

        <!-- ========== Footer - last section ========== -->
        <div class="footer-last">
            <div class="container">
                
                    <div style="text-align: center;">
                        &copy; 2018 Sports & Recreation
                    </div>
                    
            </div> <!-- end container -->
        </div> <!-- end footer-last -->

        <!-- ========== Scroll to top button ========== -->
        <div class="scroll-to-top trans"><i class="fa fa-angle-up"></i></div>
    </footer>


    <script src="js/timer.js"></script>
    <script src="scripts/vendor.js"></script>
    <script src="scripts/plugins.js"></script>
    <script src="vendor/jquery-form/jquery.form.js"></script>
    <script src="vendor/sweetalert2/dist/sweetalert2.min.js"></script>
    <script src="vendor/jQuery.equalHeights/jquery.equalheights.min.js"></script>
    <script src="scripts/main.js"></script>
    <script src="scripts/init-portfolio-style-2.js"></script>
    <script src="scripts/init-portfolio-default.js"></script>

    <script src="scripts/init-cube-home-2.js"></script>
    <script src='../../../../maps.googleapis.com/maps/api/js7614?key=AIzaSyCUAEhzqYMtZeVDTLtTFb23wHpHBbpo4lI&amp;sensor=false&amp;extension=.js'></script>

    <script type="text/javascript">
        var tpj = jQuery;
        tpj(document).ready(function() {
            if(tpj("#rev_slider_20_1").revolution === undefined){
                revslider_showDoubleJqueryError("#rev_slider_20_1");
            }else{
                tpj("#rev_slider_20_1").show().revolution({
                    sliderType: "hero",
                    jsFileLocation: "../../revolution/js/",
                    sliderLayout: "fullscreen",
                    dottedOverlay: "none",
                    delay: 9000,
                    navigation: {
                    },
                    responsiveLevels: [1240, 1024, 778, 480],
                    gridwidth: [1240, 1024, 778, 480],
                    gridheight: [600, 500, 400, 300],
                    lazyType: "none",
                    parallax: {
                        type: "mouse",
                        origo: "slidercenter",
                        speed: 2000,
                        levels: [2, 3, 4, 5, 6, 7, 12, 16, 10, 50]
                    },
                    shadow: 0,
                    spinner: "off",
                    autoHeight: "off",
                    fullScreenOffset: "70px",
                    disableProgressBar: "on",
                    hideThumbsOnMobile: "off",
                    hideSliderAtLimit: 0,
                    hideCaptionAtLimit: 0,
                    hideAllCaptionAtLilmit: 0,
                    debugMode: false,
                    fallbacks: {
                        simplifyAll: "off",
                        disableFocusListener: false
                    }
                });
            }
        });
    </script>

    <script type="text/javascript">
        $(function($) {

            // For Modals
            $('.open-modal').magnificPopup({
                type: 'inline',
                fixedContentPos: false,
                fixedBgPos: true,
                overflowY: 'auto',
                closeBtnInside: true,
                preloader: false,
                midClick: true,
                removalDelay: 300,
                mainClass: 'my-mfp-slide-bottom'
            });

            // For Equal Height columns
            $('.feature-box-5').equalHeights();

            // For Contact form
            var options = {
                success: function() {
                    $("#form").clearForm();
                    swal("Thank You!", "We will get back to you as soon as possible!", "success");
                }
            };
            $("#form").ajaxForm(options);

            // For Google Map
            google.maps.event.addDomListener(window, 'load', init);
            var map;
            function init() {
                var mapOptions = {
                    center: new google.maps.LatLng(40.740697, -73.988786),
                    zoom: 16,
                    zoomControl: true,
                    zoomControlOptions: {
                        style: google.maps.ZoomControlStyle.DEFAULT,
                    },
                    disableDoubleClickZoom: true,
                    mapTypeControl: true,
                    mapTypeControlOptions: {
                        style: google.maps.MapTypeControlStyle.HORIZONTAL_BAR,
                    },
                    scaleControl: true,
                    scrollwheel: false,
                    panControl: true,
                    streetViewControl: true,
                    draggable : true,
                    overviewMapControl: true,
                    overviewMapControlOptions: {
                        opened: false,
                    },
                    mapTypeId: google.maps.MapTypeId.ROADMAP,
                    styles: [
                          {
                            "featureType": "water",
                            "elementType": "geometry.fill",
                            "stylers": [
                              { "color": "#d3d3d3" }
                            ]
                          },{
                            "featureType": "transit",
                            "stylers": [
                              { "color": "#808080" },
                              { "visibility": "off" }
                            ]
                          },{
                            "featureType": "road.highway",
                            "elementType": "geometry.stroke",
                            "stylers": [
                              { "visibility": "on" },
                              { "color": "#b3b3b3" }
                            ]
                          },{
                            "featureType": "road.highway",
                            "elementType": "geometry.fill",
                            "stylers": [
                              { "color": "#ffffff" }
                            ]
                          },{
                            "featureType": "road.local",
                            "elementType": "geometry.fill",
                            "stylers": [
                              { "visibility": "on" },
                              { "color": "#ffffff" },
                              { "weight": 1.8 }
                            ]
                          },{
                            "featureType": "road.local",
                            "elementType": "geometry.stroke",
                            "stylers": [
                              { "color": "#d7d7d7" }
                            ]
                          },{
                            "featureType": "poi",
                            "elementType": "geometry.fill",
                            "stylers": [
                              { "visibility": "on" },
                              { "color": "#ebebeb" }
                            ]
                          },{
                            "featureType": "administrative",
                            "elementType": "geometry",
                            "stylers": [
                              { "color": "#a7a7a7" }
                            ]
                          },{
                            "featureType": "road.arterial",
                            "elementType": "geometry.fill",
                            "stylers": [
                              { "color": "#ffffff" }
                            ]
                          },{
                            "featureType": "road.arterial",
                            "elementType": "geometry.fill",
                            "stylers": [
                              { "color": "#ffffff" }
                            ]
                          },{
                            "featureType": "landscape",
                            "elementType": "geometry.fill",
                            "stylers": [
                              { "visibility": "on" },
                              { "color": "#efefef" }
                            ]
                          },{
                            "featureType": "road",
                            "elementType": "labels.text.fill",
                            "stylers": [
                              { "color": "#696969" }
                            ]
                          },{
                            "featureType": "administrative",
                            "elementType": "labels.text.fill",
                            "stylers": [
                              { "visibility": "on" },
                              { "color": "#737373" }
                            ]
                          },{
                            "featureType": "poi",
                            "elementType": "labels.icon",
                            "stylers": [
                              { "visibility": "off" }
                            ]
                          },{
                            "featureType": "poi",
                            "elementType": "labels",
                            "stylers": [
                              { "visibility": "off" }
                            ]
                          },{
                            "featureType": "road.arterial",
                            "elementType": "geometry.stroke",
                            "stylers": [
                              { "color": "#d6d6d6" }
                            ]
                          },{
                            "featureType": "road",
                            "elementType": "labels.icon",
                            "stylers": [
                              { "visibility": "off" }
                            ]
                          },{
                          },{
                            "featureType": "poi",
                            "elementType": "geometry.fill",
                            "stylers": [
                              { "color": "#dadada" }
                            ]
                          }
                        ],
                    }
                    var mapElement = document.getElementById('contact');
                    var map = new google.maps.Map(mapElement, mapOptions);
                    var locations = [
['Salt', 'undefined', 'undefined', 'undefined', 'undefined', 40.740697,  -73.988786, 'https://mapbuildr.com/assets/img/markers/solid-pin-black.png']
    ];
                    for (i = 0; i < locations.length; i++) {
                        if (locations[i][1] =='undefined'){ description ='';} else { description = locations[i][1];}
                        if (locations[i][2] =='undefined'){ telephone ='';} else { telephone = locations[i][2];}
                        if (locations[i][3] =='undefined'){ email ='';} else { email = locations[i][3];}
                       if (locations[i][4] =='undefined'){ web ='';} else { web = locations[i][4];}
                       if (locations[i][7] =='undefined'){ markericon ='';} else { markericon = locations[i][7];}
                        marker = new google.maps.Marker({
                            icon: markericon,
                            position: new google.maps.LatLng(locations[i][5], locations[i][6]),
                            map: map,
                            title: locations[i][0],
                            desc: description,
                            tel: telephone,
                            email: email,
                            web: web
                        });
            link = '';     }

            }
        });
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


    
 <!-- jQuery -->
        <script src="assets/plugins/jQuery/jquery-1.12.4.min.js" type="text/javascript"></script>
        <script src="assets/plugins/bootstrap-wizard/jquery.backstretch.min.js" type="text/javascript"></script>
        <script src="assets/plugins/bootstrap-wizard/form.scripts.js" type="text/javascript"></script>
   





</body>


</html>
