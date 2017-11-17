<?php

/**** BBuilder child theme defaults start here - don't change ********/

// Defines
define( 'FL_CHILD_THEME_DIR', get_stylesheet_directory() );
define( 'FL_CHILD_THEME_URL', get_stylesheet_directory_uri() );

// Classes
require_once 'classes/class-fl-child-theme.php';

// Actions
add_action( 'wp_enqueue_scripts', 'FLChildTheme::enqueue_scripts', 1000 );
/**** END BBuilder child theme defaults***************** ********/

/**** si invoices filters for izuio ************* ********/
include 'izuio-si-payment-options.php';
include 'izuio-si-localeconv.php';
include 'izuio-si-stripe-maybe-convert-to-cents.php';
include 'izuio-si-css.php';
/* include 'izuio-si-countries-and-states.php'; */
include 'izuio-si-countries-australia-japan.php';

