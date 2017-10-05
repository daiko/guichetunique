<?php

if (!defined("WIKINI_VERSION")) {
        die ("Accès direct interdit");
}

$GLOBALS['js'] = (isset($GLOBALS['js'])
	? $GLOBALS['js']
	: '').' <script src="tools/guichetunique/libs/gu.js">'."\n";

// Affiche le gif de loading en attendant que le calendrier soir analysé.
$data =
"<img
    src='tools/guichetunique/presentation/images/loading.gif'
    alt='Chargement en cours.'
\>";

// Charge le squelette.
include("tools/guichetunique/presentation/squelette/gu.phtml");
