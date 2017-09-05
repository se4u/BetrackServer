<?php

include './BeTrackCrypto.php';

if($result === false) {
    goto endsession;
}

$mood = '';
$social = '';
$bored = '';
$relaxed = '';
$interact = '';
$usedsocial = '';
$socialcomputer = '';
$whichwebsite = '';
$actively = '';
$date = '';
$time = '';

list($mood, $social, $bored, $relaxed, $interact, $usedsocial, $socialcomputer, $whichwebsite, $actively, $date, $time) = explode(chr (30), $plain);

//Check the data
$userid = strip_tags(trim($userid));
$userid = mysqli_real_escape_string($con, $userid);

$mood = strip_tags(trim($mood));
$mood = mysqli_real_escape_string($con, $mood);

$social = strip_tags(trim($social));
$social = mysqli_real_escape_string($con, $social);

$bored = strip_tags(trim($bored));
$bored = mysqli_real_escape_string($con, $bored);

$relaxed = strip_tags(trim($relaxed));
$relaxed = mysqli_real_escape_string($con, $relaxed);

$interact = strip_tags(trim($interact));
$interact = mysqli_real_escape_string($con, $interact);

$usedsocial = strip_tags(trim($usedsocial));
$usedsocial = mysqli_real_escape_string($con, $usedsocial);

$socialcomputer = strip_tags(trim($socialcomputer));
$socialcomputer = mysqli_real_escape_string($con, $socialcomputer);

$whichwebsite = strip_tags(trim($whichwebsite));
$whichwebsite = mysqli_real_escape_string($con, $whichwebsite);

$actively = strip_tags(trim($actively));
$actively = mysqli_real_escape_string($con, $actively);

$date = strip_tags(trim($date));
$date = mysqli_real_escape_string($con, $date);

$time = strip_tags(trim($time));
$time = mysqli_real_escape_string($con, $time);

$result = mysqli_query($con,"INSERT INTO BetrackDailyStatus (UserId, Mood, Social, Bored, Relaxed, Interact, UsedSocial, SocialComputer, WhichWebsite, Actively, Date, Time)
          VALUES ('$userid ', '$mood', '$social', '$bored', '$relaxed', '$interact', '$usedsocial', '$socialcomputer', '$whichwebsite', '$actively', '$date', '$time')");

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
