<?php
	$postdata = file_get_contents("php://input");
    $request = json_decode($postdata);
	$email =  $request->email;
	$pass = SHA1((string)$request->pass);
	require '../../seltexrudbconnect/pdodbconnectGuest.php';
	$q=$dbh->query("call getLogs()");
	$q->setFetchMode(PDO::FETCH_ASSOC);
	$qty=0;
	while ($row = $q->fetch())
	{
		$line[$qty]['id'] = $row['id'];
		$line[$qty]['referer'] = $row['referer'];
		$line[$qty]['ip'] = $row['ip'];
		$line[$qty]['page'] = $row['page'];
		$line[$qty]['query'] = $row['query'];
		$line[$qty]['date'] = $row['date'];
		$line[$qty]['time'] = $row['time'];
		$line[$qty]['browser'] = $row['browser'];
		$qty++;
	}
	$q->closeCursor();
	$q= null;
	$dbh = null;
	$json=[];
	array_push($json,$email);
	array_push($json,$pass);
	echo json_encode($line);
?>
