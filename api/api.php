<?php
require ('../services/getcurrency.php');
$currency = getCurrency();
require '../../dbconnect.php';
if (empty($_GET))
{
    $query="
    SELECT p.ID as ProductID, p.Description AS ProductName, p.Price as ListPrice, p.Numbers AS CategoryName, p.stock as qty, p.ordered as qtyOrdered
    from inventory as p
    where description like '%cat%'
    order by p.Description
    LIMIT 300;
    ";
}
else
{
    $x=$_GET["part"];
    $z=explode(' ',$x);
    $x=$z[0];
    $v="";
    $vv="";
    foreach($z as $key => $value)
    {
        if($key==0)
        {
            $v=$value;
            $vv="(Description like N'%".$value."%' or Numbers like '%".$value."%')";
        }
        else
        {
            $v=$v . " " . $value;
            $vv=$vv." AND "."(Description like N'%".$value."%' or Numbers like '%".$value."%')";
        }
        $isCaterpillar = strlen($value);
        if($isCaterpillar==6 || $isCaterpillar==7 && !strpos($value,'-') && preg_match("/\d{4}/", substr($value, -4))){
            $value = substr($value,0,-4)."-".substr($value, -4);
            $vv=$vv." OR "."(Description like N'%".$value."%' or Numbers like '%".$value."%')";
        }
    }
    $query = "SELECT p.ID as ProductID, p.Description AS ProductName, p.Price as ListPrice, p.Numbers AS CategoryName, p.stock as qty, p.ordered as qtyOrdered
    FROM inventory AS p where " . $vv . "
    order by p.Description
    ";
}
$qresult = @mysqli_query($dbc, $query);
$qtyOfRows=0;
$xx=0;
$myArray = [];
while ($row = mysqli_fetch_array($qresult)) {
    $x = (int)((($row['ListPrice']))*$currency);
    $x = (int)($x - $x%10);
    $myArray[$xx]['description'] = ($row['ProductName']);
    $myArray[$xx]['price'] = $x;
    if($row['qty']>12)
    {
        $myArray[$xx]['available'] = '> 12';
    }
    else if($row['qty']>6)
    {
        $myArray[$xx]['available'] = '> 6';
    }
    else
    {
        $myArray[$xx]['available']=$row['qty'];
    }
    if($row['qtyOrdered']>12)
    {
        $myArray[$xx]['coming'] = '> 12';
    }
    else if($row['qtyOrdered']>6)
    {
        $myArray[$xx]['coming'] = '> 6';
    }
    else
    {
        $myArray[$xx]['coming']=$row['qtyOrdered'];
    }
    $xx++;
}

require '../../dbclose.php';
//THIS PART IS TO ADD INJECTORS TO MAIN CATALOG
require '../../dbconnect.php';
if (empty($_GET))
{
    $query="
    SELECT p.ID as ProductID, p.Description AS ProductName, p.Price as ListPrice, p.Numbers AS CategoryName, p.stock as qty, p.ordered as qtyOrdered
    from inventoryProDiesel as p
    order by p.Description
    ";
}
else
{
    $query = "SELECT p.ID as ProductID, p.Description AS ProductName, p.Price as ListPrice, p.Numbers AS CategoryName, p.stock as qty, p.ordered as qtyOrdered
    FROM inventoryProDiesel AS p where " . $vv . "
    order by p.Description
    ";
}
$qresult = @mysqli_query($dbc, $query);
while ($row = mysqli_fetch_array($qresult)) {
    //$x = number_format(htmlspecialchars($row['ListPrice']),2);
    $x = (int)((($row['ListPrice']))*$currency);
    $x = (int)($x - $x%10);
    $myArray[$xx]['description'] = ($row['ProductName']) . " ProDiesel";
    $myArray[$xx]['price'] = $x;
    if($row['qty']>12)
    {
        $myArray[$xx]['available'] = '> 12';
    }
    else if($row['qty']>6)
    {
        $myArray[$xx]['available'] = '> 6';
    }
    else
    {
        $myArray[$xx]['available']=$row['qty'];
    }
    if($row['qtyOrdered']>12)
    {
        $myArray[$xx]['coming'] = '> 12';
    }
    else if($row['qtyOrdered']>6)
    {
        $myArray[$xx]['coming'] = '> 6';
    }
    else
    {
        $myArray[$xx]['coming']=$row['qtyOrdered'];
    }
    $xx++;
}
require '../../dbclose.php';
echo json_encode($myArray);

?>
