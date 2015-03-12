<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8"> 
		<title>洗牌程式</title>
	</head>
	<body>
		<?php	 	
			function randomNumber(&$bgColor){
				$rand = rand(0,51);         //隨機數
				$color  = (int)($rand/13);  //花色
				$number = ($rand%13)+1;	    //數字								
				checkNumber($number);							
				return findCard($color , $number,$bgColor);				
			}
			function checkNumber(&$number){				
				if($number == 11){
					$number='J';		
				}
				else if ($number == 12){
					$number='Q';						
				}
				else if ($number == 13){
					$number='K';					
				}
			}
			function findCard($color , $number ,&$bgColor){				
				if($color == 0){					
					return ' ♣ 梅花 '.$number;
				}
				else if ($color==1){
					$bgColor=true;
					return ' ♦ 紅磚 '.$number;
				}
				else if ($color==2){
					$bgColor=true;
					return ' ♥ 愛心 '.$number;
				}
				else
					return ' ♠ 黑桃 '.$number;														
			}
			function findColor($bgColor){
				if($bgColor)
					return 'red';
				else
					return 'black';
			}
			$bg = false;
			$result = randomNumber($bg);
			$bgVar = findColor($bg);
		?>	
	
		<p>
			<h1><span style="color: blue;">抽到的牌是:</span></h1><h2 align="left"; style="color: 	<?php	 	 echo $bgVar?>	;" >	<?php	 	 echo $result;?>	</h2>						
		</p>
		<hr/>
		<p><h3>再抽一次</h3></p>
		<a href=""><img src="card.jpg" style="width:100px;height:100px;padding: 5px;"></a>

	</body>
</html>



