<?php
	function getRecaptchaResponse($getResponse)
	{
		$res=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6LecUQUTAAAAADmoNNspwxbb1fuw2qAt9Sh9B6Bd&response=".$getResponse."&remoteip=".$_SERVER['REMOTE_ADDR']);
		$res=json_decode($res, true);
		return $res['success'];
	}
	$postdata = file_get_contents("php://input");
    $request = json_decode($postdata);
	$email =  $request->email;
	$pass = SHA1((string)$request->pass);
	if(getRecaptchaResponse((string)$request->response)){
		require '../../../seltexrudbconnect/pdodbconnectGuest.php';
		$q=$dbh->query("call checkUser('$email','$pass')");
		$q->setFetchMode(PDO::FETCH_ASSOC);
		while ($row = $q->fetch())
		{
			$user['name'] = $row['firstName'];
		}
		$q->closeCursor();
		$q= null;
		$dbh = null;
		$json=[];
		array_push($json,$email);
		array_push($json,$pass);
		echo json_encode($user);
	}
?>
