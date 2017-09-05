<?php

include './BeTrackCrypto.php';

if($result === false) {
    goto endsession;
}

$timetobed = '';
$timetosleep = '';
$fallasleep = '';
$howmanywakeup = '';
$howlongwakeup = '';
$whattimelastawaking = '';
$whattimeoutbed = '';
$qualitysleep = '';
$comments = '';
$date = '';
$time = '';

list($timetobed, $timetosleep, $fallasleep, $howmanywakeup, $howlongwakeup, $whattimelastawaking, $whattimeoutbed, $qualitysleep, $comments, $date, $time) = explode(chr (30), $plain);

//Check the data
$userid = strip_tags(trim($userid));
$userid = mysqli_real_escape_string($con, $userid);

$timetobed = strip_tags(trim($timetobed));
$timetobed = mysqli_real_escape_string($con, $timetobed);

$timetosleep = strip_tags(trim($timetosleep));
$timetosleep = mysqli_real_escape_string($con, $timetosleep);

$fallasleep = strip_tags(trim($fallasleep));
$fallasleep = mysqli_real_escape_string($con, $fallasleep);

$howmanywakeup = strip_tags(trim($howmanywakeup));
$howmanywakeup = mysqli_real_escape_string($con, $howmanywakeup);

$howlongwakeup = strip_tags(trim($howlongwakeup));
$howlongwakeup = mysqli_real_escape_string($con, $howlongwakeup);

$whattimelastawaking = strip_tags(trim($whattimelastawaking));
$whattimelastawaking = mysqli_real_escape_string($con, $whattimelastawaking);

$whattimeoutbed = strip_tags(trim($whattimeoutbed));
$whattimeoutbed = mysqli_real_escape_string($con, $whattimeoutbed);

$qualitysleep = strip_tags(trim($qualitysleep));
$qualitysleep = mysqli_real_escape_string($con, $qualitysleep);

$comments = strip_tags(trim($comments));
$comments = mysqli_real_escape_string($con, $comments);

$date = strip_tags(trim($date));
$date = mysqli_real_escape_string($con, $date);

$time = strip_tags(trim($time));
$time = mysqli_real_escape_string($con, $time);

$result = mysqli_query($con,"INSERT INTO BetrackSleepStatus (UserId, TimeToBed, TimeToSleep, FallaSleep, HowManyWakeUp, HowLongWakeUp, WhatTimeLastAwaking, WhatTimeOutBed, QualitySleep, Comments, Date, Time)
          VALUES ('$userid', '$timetobed', '$timetosleep', '$fallasleep', '$howmanywakeup', '$howlongwakeup', '$whattimelastawaking', '$whattimeoutbed', '$qualitysleep', '$comments', '$date', '$time')");

endsession:
if($result === true) {
    echo 'OK';
}
else{
    echo("Error description: " . mysqli_error($con));
	echo PHP_EOL;
	echo 'KO';
}

mysqli_close($con);

?>
