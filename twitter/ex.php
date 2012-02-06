<?php
echo 'Hehehe<br>';
require_once 'lib/Arc90/Service/Twitter.php';
echo 'HAhaha<br>';

$username = 'Abhinavkush';
$password = 'ajaykush9211';

$twitter  = new Arc90_Service_Twitter($username, $password);
echo $twitter;
$timeline =  $twitter->getFriendsTimeline('xml');

echo($timeline);
?>
