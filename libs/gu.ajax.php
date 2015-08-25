<?php

include('../libs/ical.class.php');

$ical = new icaltest();
$ical->parse("http://webdav.cdrflorac.fr/guichet-unique.ics");

$curTime = time();

$isFind = false;

foreach ($ical->get_sort_event_list() as $events) {
	// Gestion des DTXXX qui ne sont pas des tableaux
	// Dans les calendriers édités avec google ce ne sont pas des tableaux
	// Alors que dans ceux avec thunderbird c'est le cas.
	// --> On met tout le monde d'accord avec des tableaux...

	if (!is_array($events["DTSTART"])) {
		//$ts = $events["DTSTART"];
		$events["DTSTART"] = array(
			"unixtime" => $events["DTSTART"],
			"TZID" => "Europe/Paris",);
	}

	// Bug du calendrier, dis bug de Corinne,
	// Champione toute catégorie confondu de l'evenement sans fin.
	if (isset($events["DTEND"])) {

		//Suite des pb de format (tableau / pas tableau)
		if (!is_array($events["DTEND"])) {
			//$ts = $events["DTEND"];
			$events["DTEND"] = array(
								"unixtime" => $events["DTEND"],
								"TZID" => "Europe/Paris",);
		}

		//Recherche de l'evenement actuel
		if (($curTime >= $events["DTSTART"]["unixtime"] )
						&& ($curTime <= $events["DTEND"]["unixtime"])) {
			// trouvé !
			$format = 'H:i:s';
			$data = $events['SUMMARY'];
      $isFind = true;

      break;

		}
	}
}

if(!$isFind) 
	$data = "Fermé";

print($data);
