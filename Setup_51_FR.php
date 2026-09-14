<?php
/*
11 	3D 	(1 distance)

$TourId is the ID of the tournament!
$SubRule is the eventual subrule (see sets.php for the order)
$TourType is the Tour Type (51)

*/

$TourType=51;

$tourDetTypeName		= 'Type_FR_Nature';
$tourDetNumDist			= '1';
$tourDetNumEnds			= '21';
$tourDetMaxDistScore	= '735'; // 21 ends * 35 (20+15) points
$tourDetMaxFinIndScore	= '0'; // No match
$tourDetMaxFinTeamScore	= '0'; // No match
$tourDetCategory		= '8'; // 0: Other, 1: Outdoor, 2: Indoor, 4:Field, 8:3D
$tourDetElabTeam		= '2'; // 0:Standard, 1:Field, 2:3DI
$tourDetElimination		= '0'; // 0: No Eliminations, 1: Elimination Allowed
$tourDetGolds			= '20';
$tourDetXNine			= '15';
$tourDetGoldsChars		= 'V'; // Need to be checked ArrTargets.inc.php
$tourDetXNineChars		= '9'; // Need to be checked/created ArrTargets.inc.php
$tourDetDouble			= '0';
$DistanceInfoArray=array(array(21, 2));

require_once('Setup_Nature.php');
