<meta http-equiv="content-type" content="text/html; charset=utf-8">
<h2>你抽到的牌是:</h2>

	<style type="text/css">
	p{
		font-family: "微軟正黑體" ;
	}
	
	.red{
		color: red ;
		font-size: 22px;
	}
	.black{
		color: black ;
		font-size: 22px;
	}
	</style>
<?php	 		

	$color = array( '♠黑桃：' , '♣梅花：' , '♥紅心：' , '♦方塊：' , '★鬼牌') ;
	$index = array( 'A' , '2' , '3' , '4' , '5' , '6' , '7' , '8' , '9' , '10' , 'J' , 'Q' , 'K' ) ;
	$random_num = rand( 0 , 53 ) ;
	$Remainder = $random_num % 13 ;
	$Quotient = floor($random_num / 13) ;
	//echo $random_num . "  " . $Quotient."  " .$Remainder ; //測試用
	switch( $Quotient )
	{		
			
		case 0:
			echo "<p class= black>". $color[0] . $index[$Remainder] . "</p>";
			break ;
		case 1:
			echo "<p class= black>". $color[1] . $index[$Remainder] . "</p>";
			break ;
		case 2:
			echo "<p class= red>".$color[2] . $index[$Remainder] . "</p>";
			break ;
		case 3:
			echo "<p class= red>".$color[3] . $index[$Remainder] . "</p>";
			break ;
		case 4 :
			switch(	$Remainder )
			{
				case 0:
					echo "<p class=red>" . $color[4] . "</p>" ;
					break ;
				case 1:
					echo "<p class= black>" .$color[4] . "</p>" ;
					break ;
				default:
					echo "有出現討厭的蟲蟲唷!" ;
					break ;
			}
			break ;
		default:
			echo "有出現討厭的蟲蟲唷!" ;
			break ;
	}	
?>
<hr />
<a href="index.php">重新整理</a>
