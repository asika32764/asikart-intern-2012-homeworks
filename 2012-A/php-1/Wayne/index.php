<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8"> 
		<title>洗牌程式</title>
	</head>
	<body>
<?php	 	
    $signs = array (' ♣ 梅花 ',' ♦ 紅磚 ',' ♥ 愛心 ',' ♠ 黑桃 ');
    $colors= array ('black','red','red','black');
    $numbers = array ('1','2','3','4','5','6','7','8','9','10','J','Q','K');
    
    $rand = rand(0 , 51);
    $signIndex = (int)($rand/13);
    $numberIndex = $rand%13;
    
    $sign = $signs[$signIndex];
    $color = $colors[$signIndex];
    $number = $numbers[$numberIndex];
    
    echo  '<h1 style="color: blue;">您抽到的牌是:</h1>';
    echo  "<p style='font-size:26px; color:$color'>" . $sign .' '. $number. '</p>';
?>