<?php
            $dir = '../../seltexrudbconnect/';//comment for production
            //require ('../services/getcurrency.php');
            $currency = 1;//getCurrency();
            require ($dir.'log2.php');
            require ($dir.'dbconnect.php');
			if (empty($_GET) || $_GET["part"]=="Поиск в каталоге")
			{
				if(strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE')){
					echo  '<p id="" style="margin:0px; margin-left:3px; padding:0px; height:16px; color:red;">Для Internet Explorer версии 9 и ниже отображается неполный каталог!!! Всего в каталоге 3600+ позиций. Воспользуйтесь поиском!</p>';
					$query="
					SELECT p.ID as ProductID, p.Description AS ProductName, p.Price as ListPrice, p.Numbers AS CategoryName, p.stock as qty, p.ordered as qtyOrdered
					from inventory as p
					where description like '%cat%'
					or description like '%cummins%'
					or description like '%dd%'
					order by p.Description
					LIMIT 300;
					";
				}else{
					$query="
					SELECT p.ID as ProductID, p.Description AS ProductName, p.Price as ListPrice, p.Numbers AS CategoryName, p.stock as qty, p.ordered as qtyOrdered
					from inventory as p
					order by p.Description";
				}
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
            $parts = [];
			if($qtyOfRows = mysqli_num_rows($qresult)){
				while ($row = mysqli_fetch_array($qresult)) {
                    $parts[$xx]['description'] = htmlspecialchars($row['ProductName']);
                    $x = (int)((($row['ListPrice']))*$currency);
					$x = (int)($x - $x%10);//$x = (int)($x - $x%10  +10);
                    $parts[$xx]['price'] = $x;
                    if($row['qty']>12)
                    {
                        $qty = 'больше 12';
                    }
                    else if($row['qty']>6)
                    {
                        $qty = 'больше 6';
                    }
                    else
                    {
                        $qty=$row['qty'];
                    }
                    if($row['qtyOrdered']>12)
                    {
                        $qtyOrdered = 'больше 12';
                    }
                    else if($row['qtyOrdered']>6)
                    {
                        $qtyOrdered = 'больше 6';
                    }
                    else
                    {
                        $qtyOrdered=$row['qtyOrdered'];
                    }
                    $parts[$xx]['qty'] = $qty;
                    $parts[$xx]['qtyOrdered'] = $qtyOrdered;
                    $xx++;
				}
			}
            require ($dir.'dbclose.php');
			?>
