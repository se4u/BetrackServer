<?php
include './BeTrackCrypto.php';

if($result === false) {
    goto endsession;
}

$phoneusage = '';
$surveyfacebook = '';
$surveymessenger = '';
$surveyinstagram = '';
$surveyhangouts = '';
$surveygoogleplus = '';
$surveytwitter = '';
$surveypinterest = '';
$surveysnapchat = '';
$surveywhatsapp = '';
$surveyskype = '';
$study1 = '';
$study2 = '';
$study3 = '';
$researchapp1 = '';
$researchapp2 = '';
$researchapp3 = '';
$averageperiodicity = '';
$standarddeviation = '';
$betrackkilled = '';
$betrackpolling = '';
$date = '';
$time = '';

list($phoneusage, $surveyfacebook, $surveymessenger,
$surveyinstagram, $surveyhangouts, $surveygoogleplus,
$surveytwitter, $surveypinterest, $surveysnapchat,
$surveywhatsapp, $surveyskype,
$study1, $study2, $study3,
$researchapp1, $researchapp2, $researchapp3,
$averageperiodicity, $standarddeviation, $betrackkilled,
$betrackpolling, $date, $time) = explode(chr (30), $plain);

//Check the data
$userid = strip_tags(trim($userid));
$userid = mysqli_real_escape_string($con, $userid);

$phoneusage = strip_tags(trim($phoneusage));
$phoneusage = mysqli_real_escape_string($con, $phoneusage);

$surveyfacebook = strip_tags(trim($surveyfacebook));
$surveyfacebook = mysqli_real_escape_string($con, $surveyfacebook);

$surveymessenger = strip_tags(trim($surveymessenger));
$surveymessenger = mysqli_real_escape_string($con, $surveymessenger);

$surveyinstagram = strip_tags(trim($surveyinstagram));
$surveyinstagram = mysqli_real_escape_string($con, $surveyinstagram);

$surveyhangouts = strip_tags(trim($surveyhangouts));
$surveyhangouts = mysqli_real_escape_string($con, $surveyhangouts);

$surveygoogleplus = strip_tags(trim($surveygoogleplus));
$surveygoogleplus = mysqli_real_escape_string($con, $surveygoogleplus);

$surveytwitter = strip_tags(trim($surveytwitter));
$surveytwitter = mysqli_real_escape_string($con, $surveytwitter);

$surveypinterest = strip_tags(trim($surveypinterest));
$surveypinterest = mysqli_real_escape_string($con, $surveypinterest);

$surveysnapchat = strip_tags(trim($surveysnapchat));
$surveysnapchat = mysqli_real_escape_string($con, $surveysnapchat);

$surveywhatsapp = strip_tags(trim($surveywhatsapp));
$surveywhatsapp = mysqli_real_escape_string($con, $surveywhatsapp);

$surveyskype = strip_tags(trim($surveyskype));
$surveyskype = mysqli_real_escape_string($con, $surveyskype);

$study1 = strip_tags(trim($study1));
$study1 = mysqli_real_escape_string($con, $study1);

$study2 = strip_tags(trim($study2));
$study2 = mysqli_real_escape_string($con, $study2);

$study3 = strip_tags(trim($study3));
$study3 = mysqli_real_escape_string($con, $study3);

$researchapp1 = strip_tags(trim($researchapp1));
$researchapp1 = mysqli_real_escape_string($con, $researchapp1);

$researchapp2 = strip_tags(trim($researchapp2));
$researchapp2 = mysqli_real_escape_string($con, $researchapp2);

$researchapp3 = strip_tags(trim($researchapp3));
$researchapp3 = mysqli_real_escape_string($con, $researchapp3);

$averageperiodicity = strip_tags(trim($averageperiodicity));
$averageperiodicity = mysqli_real_escape_string($con, $averageperiodicity);

$standarddeviation = strip_tags(trim($standarddeviation));
$standarddeviation = mysqli_real_escape_string($con, $standarddeviation);

$betrackkilled = strip_tags(trim($betrackkilled));
$betrackkilled = mysqli_real_escape_string($con, $betrackkilled);

$betrackpolling = strip_tags(trim($betrackpolling));
$betrackpolling = mysqli_real_escape_string($con, $betrackpolling);

$date = strip_tags(trim($date));
$date = mysqli_real_escape_string($con, $date);

$time = strip_tags(trim($time));
$time = mysqli_real_escape_string($con, $time);

$result = mysqli_query($con,"INSERT INTO BetrackEndStudy (UserId, phoneusage, surveyfacebook,
                                                          surveymessenger, surveyinstagram, surveyhangouts,
                                                          surveygoogleplus, surveytwitter, surveypinterest,
                                                          surveysnapchat, surveywhatsapp, surveyskype,
                                                          study1, study2, study3,
                                                          researchapp1, researchapp2, researchapp3,
                                                          averageperiodicity, standarddeviation, betrackkilled, betrackpolling, Date, Time)
                             VALUES (                     '$userid ', '$phoneusage', '$surveyfacebook',
                                                          '$surveymessenger', '$surveyinstagram', '$surveyhangouts',
                                                          '$surveygoogleplus', '$surveytwitter', '$surveypinterest',
                                                          '$surveysnapchat', '$surveywhatsapp', '$surveyskype',
                                                          '$study1', '$study2', '$study3',
                                                          '$researchapp1', '$researchapp2', '$researchapp3',
                                                          '$averageperiodicity', '$standarddeviation', '$betrackkilled', '$betrackpolling', '$date', '$time')");

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
