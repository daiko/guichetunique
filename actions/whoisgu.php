<?php

if (!defined("WIKINI_VERSION"))
{
        die ("acc&egrave;s direct interdit");
}

$GLOBALS['js'] = (isset($GLOBALS['js']) 
	? $GLOBALS['js'] 
	: '').' <script src="tools/guichetunique/libs/gu.js">'."\n";


$data="<img src='tools/guichetunique/presentation/images/loading.gif' alt='Chargement' \>";

include("tools/guichetunique/presentation/squelette/gu.phtml");

?> 
