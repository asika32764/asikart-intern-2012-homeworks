<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<html>
<head>
   <meta http-equiv="content-type" content="text/html; charset=utf-8">
     <link rel="stylesheet" type="text/css" href="php.css"/>
  <title>洗牌程式</title>	
</head>
<body>

	<p>
			<span class ="gray">抽到的牌是:</span>
			<?php	 	
			echo '<br/>';
			echo '<br/>';
			function random()
			{
				$card_flower=array('♠黑桃','♥紅心','♦方塊','♣梅花');
				$Min = 1;
				$Max = 52;
				$i = rand($Min,$Max);
				$flower = ($i-1)/13; // 花色, 0~3
				$number = $i%13 ; // 數字, 1~12
				if($number == 0)
				{
					$number ='K';
					
				}
				else if($number == 11)
				{
					$number='J';
				}
				else if($number == 12)
				{
					$number='Q';
				}
				else if ($number == 1)
				{
					$number='A';
				}
				if(3 > $flower && $flower>=1)
				{
					
					echo '<span class="red">'.$card_flower[$flower].$number.'</span>';
					echo '<img src="pcards/'.$i.'.png"/>';
				
				}
				else if (1>$flower && $flower >=0|| 4>$flower && $flower>=3)
				{
					echo '<span class="black">'.$card_flower[$flower].$number.'</span>';
					echo '<img src="pcards/'.$i.'.png"/>';
				
				}
			}	
			random();	
			?>	
	</p>
	<hr/>
	<a href="JavaScript:window.location.reload()">重新整理<a/>
</body>
