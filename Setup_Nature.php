<?php
/*
11 	3D 	(1 distance)

$TourId is the ID of the tournament!
$SubRule is the eventual subrule (see sets.php for the order)
$TourType is the Tour Type (11)

*/

require_once(dirname(__FILE__).'/lib.php');
require_once(dirname(dirname(__FILE__)).'/lib.php');

// default Divisions
CreateStandardDivisions($TourId, $TourType, $SubRule);

// default Classes
CreateStandardNatureClasses($TourId, $SubRule);

// default Events
CreateStandardNatureEvents($TourId, $SubRule);

// insert class in events
InsertStandardNatureEvents($TourId, $SubRule);

// Finals & TeamFinals
CreateFinals($TourId);

CreateDistanceNew($TourId, $TourType, '%', array(array('Parcours',0)));

// Default Target
CreateTargetFace($TourId, 1, 'Piquet Rouge', 'REG-(U18|U2|S)', '1', 33, 0); // Need to check if "." needed in the regex
CreateTargetFace($TourId, 2, 'Piquet Blanc', 'REG-U1[35]', '1', 33, 0); // Need to check if "." needed in the regex
CreateTargetFace($TourId, 3, 'Piquet Rose', 'CLU11%', '1', 33, 0);
CreateTargetFace($TourId, 4, 'Piquet Découverte', '__DEC', '1', 33, 0);

// create a first distance prototype
CreateDistanceInformation($TourId, $DistanceInfoArray, 42, 5);

$tourDetIocCode='FRA';

// Update Tour details
$tourDetails=array(
	'ToCollation' => $tourCollation,
	'ToTypeName' => $tourDetTypeName,
	'ToNumDist' => $tourDetNumDist,
	'ToNumEnds' => $tourDetNumEnds,
	'ToMaxDistScore' => $tourDetMaxDistScore,
	'ToMaxFinIndScore' => $tourDetMaxFinIndScore,
	'ToMaxFinTeamScore' => $tourDetMaxFinTeamScore,
	'ToCategory' => $tourDetCategory,
	'ToElabTeam' => $tourDetElabTeam,
	'ToElimination' => $tourDetElimination,
	'ToGolds' => $tourDetGolds,
	'ToXNine' => $tourDetXNine,
	'ToGoldsChars' => $tourDetGoldsChars,
	'ToXNineChars' => $tourDetXNineChars,
	'ToDouble' => $tourDetDouble,
	'ToIocCode'	=> $tourDetIocCode,
	);
UpdateTourDetails($TourId, $tourDetails);
