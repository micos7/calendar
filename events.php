<link href="calCss.css" rel="stylesheet" type="text/css">
<?php
$deets=$_POST['deets'];
$deets=preg_replace('#[^0-9/]#i', '', $deets);

include("connection.php");

$events='';
$ps = $pdo->prepare('SELECT description FROM events WHERE evdate = "'.$deets.'"');
		$ps->execute();

		if($status = $ps->fetchAll()){
				$events .= '<div id="eventControl"><button onMouseDown="overlay()">Close</button><br /><br /><b> ' . $deets . '</b><br /><br /></div>';
                foreach($status as $fs){
						$desc = $fs['description'];
						$events .= '<div class="eventBody">' . $desc .'<br /><hr><br /></div>';
					}
			}
echo $events;
?>