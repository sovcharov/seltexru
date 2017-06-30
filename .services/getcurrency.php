<?php
function getNewCurrency(){
    $json = file_get_contents('http://www.apilayer.net/api/live?access_key=ff3d944a135811ebe4f49bf467a895be&format=1&currencies=RUB');
    $obj = json_decode($json,true);
    return (int)$obj['quotes']['USDRUB'] + 1;
}
function getCurrency(){
    return 70;
    require '../../dbconnect.php';
    $query="call getCurrency";
    $qresult = @mysqli_query($dbc, $query);
    while ($row = mysqli_fetch_array($qresult)) {
        $currency = (int)$row['@res'];
    }
    require '../../dbclose.php';
    if(!$currency){
        $currency=getNewCurrency();
        require '../../dbconnect.php';
        $query="call updateCurrency($currency)";
        $qresult = @mysqli_query($dbc, $query);
        require '../../dbclose.php';
    }
    return $currency;
}
?>
