<?php	

require_once( './my_twitter.php' );

$username = 'Abhinavkush';

echo $username .'<br>';
$twitter =  new MyTwitter($username, 'ajaykush9211');

$status = $twitter->userTimeLine();

$total = count($status);
echo $status[0]['id'].'<br>';
echo $total.'<br>';
echo "<p> Status :". $status[0]['text'] ."</p>";	

for ( $i=1; $i < $total ; $i++ )
		{ 
		
		echo "<p>". $status[$i]['text'] ."</p>";
		
		}
		
?>













