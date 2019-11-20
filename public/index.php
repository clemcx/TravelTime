Quete Time Travel
<?php
require_once('../src/class/Autoloader.php');
Autoloader::register();
const BR = '<br>';
echo BR;
$travel = new TimeTravel(new DateTime('1985-12-31'), new DateTime());
//var_dump($travel);
echo $travel->getTravelInfo();
echo BR;
echo 'date à trouver' . $travel->findDate(1000000000);
echo BR;
$travelTwo = new TimeTravel( new DateTime('1954-04-23'), new DateTime('1985-12-31'));
$travelTwo->backToFutureStepByStep(new DateInterval("P1M1W1D"));
