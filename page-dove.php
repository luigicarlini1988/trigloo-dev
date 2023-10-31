<?php 
/*
Template Name: Pagina Contatti
*/
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package html5blank
 */
get_header();
$detect = new Mobile_Detect;
 ?>
<?php get_template_part( 'includeLayout/postHead' ); ?>
<?php get_template_part( 'includeLayout/sidebar' ); ?>

<?php while ( have_posts() ) :
	the_post();
	?>



<div id="text-plus-form">
    <div id="logo-resp"><img src="<?php echo get_template_directory_uri(); ?>/img/logo-w.png" /></div>
    <div class="cent-contenitore flexy">
        <div class="fifty">
            <h1 class="titoletto white">Contatti</h1>
            <p class="titolone white">Ciao! Raccontaci chi sei e cosa possiamo fare per te</p>

            <p class="white ancheno">usa il form qui a fianco per scriverci una mail oppure utilizza in contatti che trovi di seguito se preferisci contattarci telefonicamente o fare un salto da noi in studio</p>

            <div class="menu-info">
                <p class="loco white"><img src="<?php echo get_template_directory_uri(); ?>/img/loco.png" />Via Felice Cordero di Pamparato 6, Torino</p>
                <p class="mail white"><img src="<?php echo get_template_directory_uri(); ?>/img/mail.png" />info@trigloo.it</p>
            </div>

        </div>

        <div class="fifty sec">
            <?php echo do_shortcode('[formidable id=1]'); ?>
        </div>

    </div>
</div>
<!--
<div id="testo-mappa">
    <div class="cent-contenitore">

        <div class="fifty">
            <div class="divisorio">
                <div class="iconcina red">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/loco.png" />
                </div>
                <div class="lineetta white"></div>
            </div>
            <p class="titolo white">Vieni a trovarci nel nostro studio!</p>
            <p class="white">Ci troviamo in cit Turin, in Piazza Bernini, in un palazzo d’epoca, di cui se volete vi racconteremo la storia, ci piace che ogni cosa possa dire la propria storia, anche il nostro palazzo!</p>
            <div class="menu-info inside">
                <p class="loco"><img src="<?php echo get_template_directory_uri(); ?>/img/loco.png" /><strong>Via Felice Cordero di Pamparato 6, Torino</strong></p>
            </div>
        </div>

        <div id="mappa"></div>
        <script>
        function initMap() {

            // Create a new StyledMapType object, passing it an array of styles,
            // and the name to be displayed on the map type control.
            var styledMapType = new google.maps.StyledMapType(
                [{
                        "featureType": "all",
                        "elementType": "labels",
                        "stylers": [{
                            "visibility": "simplified"
                        }]
                    },
                    {
                        "featureType": "all",
                        "elementType": "labels.text",
                        "stylers": [{
                            "color": "#ffffff"
                        }]
                    },
                    {
                        "featureType": "administrative.country",
                        "elementType": "all",
                        "stylers": [{
                            "visibility": "simplified"
                        }]
                    },
                    {
                        "featureType": "administrative.country",
                        "elementType": "geometry",
                        "stylers": [{
                            "visibility": "simplified"
                        }]
                    },
                    {
                        "featureType": "administrative.province",
                        "elementType": "all",
                        "stylers": [{
                            "visibility": "off"
                        }]
                    },
                    {
                        "featureType": "administrative.locality",
                        "elementType": "all",
                        "stylers": [{
                                "visibility": "simplified"
                            },
                            {
                                "saturation": "-100"
                            },
                            {
                                "lightness": "30"
                            }
                        ]
                    },
                    {
                        "featureType": "administrative.neighborhood",
                        "elementType": "all",
                        "stylers": [{
                            "visibility": "off"
                        }]
                    },
                    {
                        "featureType": "administrative.land_parcel",
                        "elementType": "all",
                        "stylers": [{
                            "visibility": "off"
                        }]
                    },
                    {
                        "featureType": "landscape",
                        "elementType": "all",
                        "stylers": [{
                                "visibility": "simplified"
                            },
                            {
                                "gamma": "0.00"
                            },
                            {
                                "lightness": "74"
                            }
                        ]
                    },
                    {
                        "featureType": "landscape",
                        "elementType": "geometry",
                        "stylers": [{
                                "color": "#f23d57"
                            },
                            {
                                "gamma": "1.00"
                            },
                            {
                                "lightness": "11"
                            }
                        ]
                    },
                    {
                        "featureType": "poi",
                        "elementType": "all",
                        "stylers": [{
                            "visibility": "off"
                        }]
                    },
                    {
                        "featureType": "road",
                        "elementType": "geometry",
                        "stylers": [{
                                "visibility": "simplified"
                            },
                            {
                                "color": "#f23d57"
                            },
                            {
                                "lightness": "34"
                            },
                            {
                                "gamma": "1.00"
                            }
                        ]
                    },
                    {
                        "featureType": "road",
                        "elementType": "labels",
                        "stylers": [{
                            "visibility": "off"
                        }]
                    },
                    {
                        "featureType": "road",
                        "elementType": "labels.text",
                        "stylers": [{
                            "visibility": "on"
                        }]
                    },
                    {
                        "featureType": "road",
                        "elementType": "labels.text.stroke",
                        "stylers": [{
                            "visibility": "off"
                        }]
                    },
                    {
                        "featureType": "transit",
                        "elementType": "labels",
                        "stylers": [{
                            "visibility": "simplified"
                        }]
                    },
                    {
                        "featureType": "transit",
                        "elementType": "labels.icon",
                        "stylers": [{
                            "visibility": "off"
                        }]
                    },
                    {
                        "featureType": "transit.line",
                        "elementType": "geometry",
                        "stylers": [{
                                "color": "#f23d57"
                            },
                            {
                                "lightness": "32"
                            }
                        ]
                    },
                    {
                        "featureType": "transit.station",
                        "elementType": "geometry",
                        "stylers": [{
                                "color": "#f23d57"
                            },
                            {
                                "lightness": "46"
                            }
                        ]
                    },
                    {
                        "featureType": "water",
                        "elementType": "geometry",
                        "stylers": [{
                                "color": "#f23d57"
                            },
                            {
                                "lightness": "46"
                            }
                        ]
                    },
                    {
                        "featureType": "water",
                        "elementType": "labels",
                        "stylers": [{
                            "visibility": "off"
                        }]
                    }
                ], {
                    name: 'Mappa'
                });

            // Create a map object, and include the MapTypeId to add
            // to the map type control.
            var myLatLng = {
                lat: 45.076486,
                lng: 7.6518823
            };

            var map = new google.maps.Map(document.getElementById('mappa'), {
                center: myLatLng,
                zoom: 15,
                zoomControl: true,
                scaleControl: false,
                streetViewControl: false,
                fullscreenControl: false,
                mapTypeControlOptions: {
                    mapTypeIds: ['satellite', 'Mappa']
                }

            });
            var marker = new google.maps.Marker({
                position: myLatLng,
                map: map,
                title: 'Trigloo',
                icon: 'https://www.trigloo.it/dev/wp-content/uploads/2023/10/cropped-fava-32x32.png'
            });

            //Associate the styled map with the MapTypeId and set it to display.
            map.mapTypes.set('Mappa', styledMapType);
            map.setMapTypeId('Mappa');
        }
        </script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAWSibICEy8eKhuLUiiSkyjwrGVfoxX5hA&callback=initMap"
            async defer></script>

    </div>
</div>-->

<div class="faq">
    <div class="cent-contenitore">
        <div class="fifty">
            <div class="divisorio">
                <div class="iconcina red">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/loco.png">
                </div>
                <div class="lineetta white"></div>
            </div>
            <p class="titolo white">Domande e Risposte</p>
        </div>
        <div class="seventy">

            <?php if( get_field('domanda_1') ): ?>
            <div class="question">
                <p class="domanda"><?php the_field('domanda_1')?></p>
                <p><?php the_field('risposta_1')?></p>
            </div>
            <?php endif; ?>

            <?php if( get_field('domanda_2') ): ?>
            <div class="question">
                <p class="domanda"><?php the_field('domanda_2')?></p>
                <p><?php the_field('risposta_2')?></p>
            </div>
            <?php endif; ?>

            <?php if( get_field('domanda_3') ): ?>
            <div class="question">
                <p class="domanda"><?php the_field('domanda_3')?></p>
                <p><?php the_field('risposta_3')?></p>
            </div>
            <?php endif; ?>

            <?php if( get_field('domanda_4') ): ?>
            <div class="question">
                <p class="domanda"><?php the_field('domanda_4')?></p>
                <p><?php the_field('risposta_4')?></p>
            </div>
            <?php endif; ?>

            <?php if( get_field('domanda_5') ): ?>
            <div class="question">
                <p class="domanda"><?php the_field('domanda_5')?></p>
                <p><?php the_field('risposta_5')?></p>
            </div>
            <?php endif; ?>

            <?php if( get_field('domanda_6') ): ?>
            <div class="question">
                <p class="domanda"><?php the_field('domanda_6')?></p>
                <p><?php the_field('risposta_6')?></p>
            </div>
            <?php endif; ?>

            <?php if( get_field('domanda_7') ): ?>
            <div class="question">
                <p class="domanda"><?php the_field('domanda_7')?></p>
                <p><?php the_field('risposta_7')?></p>
            </div>
            <?php endif; ?>

            <?php if( get_field('domanda_8') ): ?>
            <div class="question">
                <p class="domanda"><?php the_field('domanda_8')?></p>
                <p><?php the_field('risposta_8')?></p>
            </div>
            <?php endif; ?>

            <?php if( get_field('domanda_9') ): ?>
            <div class="question">
                <p class="domanda"><?php the_field('domanda_9')?></p>
                <p><?php the_field('risposta_9')?></p>
            </div>
            <?php endif; ?>

            <?php if( get_field('domanda_10') ): ?>
            <div class="question">
                <p class="domanda"><?php the_field('domanda_10')?></p>
                <p><?php the_field('risposta_10')?></p>
            </div>
            <?php endif; ?>

            <?php if( get_field('domanda_11') ): ?>
            <div class="question">
                <p class="domanda"><?php the_field('domanda_11')?></p>
                <p><?php the_field('risposta_11')?></p>
            </div>
            <?php endif; ?>

            <?php if( get_field('domanda_12') ): ?>
            <div class="question">
                <p class="domanda"><?php the_field('domanda_12')?></p>
                <p><?php the_field('risposta_12')?></p>
            </div>
            <?php endif; ?>

            <?php if( get_field('domanda_13') ): ?>
            <div class="question">
                <p class="domanda"><?php the_field('domanda_13')?></p>
                <p><?php the_field('risposta_13')?></p>
            </div>
            <?php endif; ?>
        </div>

    </div>
</div>

<?php
		endwhile;
		?>

<?php get_footer();
unset($detect); ?>