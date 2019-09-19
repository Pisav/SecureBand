<?php
require 'functions/functions.php';
require 'models/model.php';
require 'controllers/controllers.php';


/**
 * Deze code werkend maken is de laatste stap in de opdracht, volg eerste alle andere stappen
 * https://hiddebraun-ma.github.io/bap-md1-plantjes/
 */


if ( ! isset( $_GET['page'] ) ) {
	header( 'Status: 404' );
	echo '404 Page Not Found';
	exit;
}

switch ( $_GET['page'] ) {
	case 'homepage':
		homepage();
		break;
	case 'wedstrijden':
		wedstrijden();
		break;
	case 'stadion':
	  stadion();
		break;
}
