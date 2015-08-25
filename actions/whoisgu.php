<?php

if (!defined("WIKINI_VERSION")) {
        die ("Accès direct interdit");
}

$GLOBALS['js'] = (isset($GLOBALS['js']) 
	? $GLOBALS['js'] 
	: '').' <script src="tools/yeswiki-tool-guichetunique/libs/gu.js">'."\n";

// Affiche le gif de loading en attendant que le calendrier soir analysé.
$data = 
"<img 
    src='tools/yeswiki-tool-guichetunique/presentation/images/loading.gif' 
    alt='Chargement en cours.' 
\>";

// Charge le squelette. 
include("tools/yeswiki-tool-guichetunique/presentation/squelette/gu.phtml");
