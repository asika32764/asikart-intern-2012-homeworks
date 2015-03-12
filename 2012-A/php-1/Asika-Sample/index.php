<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8"> 
		<title>洗牌程式</title>
	</head>
	<body>
<?php	 	

// 設定牌號
$num_list = array( 'A', 2, 3, 4, 5, 6, 7, 8, 9, 10, 'J', 'Q', 'K' );

// 設定花色
$suit_list = array('spades', 'hearts', 'clubs', 'diamonds' );

$suit_to_txt = array(
			'spades' 	=> '♠ 黑桃',
			'hearts' 	=> '♥ 紅心',
			'clubs' 	=> '♣ 梅花',
			'diamonds' 	=> '♦ 方塊'
		);
		
// 設定隨機牌號
$rand_num = rand(0, 12);
$rand_suit = rand(0, 3);

// 取得花色英文名稱
$suit = $suit_list[$rand_suit] ;

// 判定要用紅色還是黑色
if( $suit == 'hearts' || $suit == 'diamonds' ){
	$color = 'red' ;
}else{
	$color = 'black' ;
}

// 將花色英文對應的中文取出來
$suit = $suit_to_txt[$suit] ;

// 取得牌號
$num = $num_list[$rand_num] ;

?>
		<p>
			<?php	 	
				echo '<span style="color: grey;">抽到的牌是: </span>' ;
				echo '<h2 style="color: '.$color.';">'.$suit.$num.'</h2>' ;
			?>
		</p>
		<hr />
		<a href="">重新整理</a>

	</body>
</html>

