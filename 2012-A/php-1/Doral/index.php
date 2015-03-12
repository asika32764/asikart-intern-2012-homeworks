<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<p>抽到的牌是:</p>

<?php	 	
$poker = array();
//for 迴圈，分別寫入陣列內容
for($i=1; $i <= 13; $i++){
	$a=$i;
	if($a==1){$a=A;}
	if($a==11){$a=J;}
	if($a==12){$a=Q;}
	if($a==13){$a=K;}
	$poker[$i] = "黑桃 $a";
	
}
for($i=14; $i <= 26; $i++){
	$a=$i-13;
	if($a==1){$a=A;}
	if($a==11){$a=J;}
	if($a==12){$a=Q;}
	if($a==13){$a=K;}
	$poker[$i] = "梅花 $a";
}
for($i=27; $i <= 39; $i++){
	$a=$i-26;
	if($a==1){$a=A;}
	if($a==11){$a=J;}
	if($a==12){$a=Q;}
	if($a==13){$a=K;}
	$poker[$i] = "方塊 $a";
}
for($i=40; $i <= 52; $i++){
	$a=$i-39;
	if($a==1){$a=A;}
	if($a==11){$a=J;}
	if($a==12){$a=Q;}
	if($a==13){$a=K;}
	$poker[$i] = "紅心 $a";
}
$Min = 1;
$Max = 52;//皆為整數
$rand = rand($Min,$Max);

//spade="黑桃";
//heart="紅心";
//diamond="方塊";
//club="梅花";


if($rand<=26){
	if($rand<=13){
		$img="spade";
	}else{$img="club";
	}
	$black=$poker[$rand];
	//echo "<h1>".$poker[$rand]."</h1>";
}else{
	if($rand<=39){
		$img="diamond";
	}else{$img="heart";
	}
	$red=$poker[$rand];
}
?>
<img align="left" src="<?php	 	 echo $img;?>.jpg" height="50px"/>
<h1><?php	 	 echo $black;?></h1>

<h1 style="color:red"><?php	 	 echo $red;?></h1>





<br/><br/><br/>
<input type=button value=重新整理 onclick="history.go(0)">
