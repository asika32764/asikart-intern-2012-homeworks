<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8"> 
		<title>Christmas Tree</title>
	</head>
	<body>
<?php	 	

// 設定要用什麼字元組合成聖誕樹
$unit = '*' ;

// 設定起始單位數
$begin = 1 ;

// 設定每排增加單位數
$add = 2 ;

// 設定聖誕樹層數
$floor = 6 ;

// 設定每層高度
$height = 4 ;

// 設定每層寬度增加多少單位
$gain = 2 ;

// 設定樹幹寬度
$trunk_w = 5 ;

// 設定樹幹高度
$trunk_h = 7 ;


// 計算最高的寬度
$max_width = $begin + ( $add * ( $height - 1 ) ) + ( $gain * ( $floor - 1 ) ) ;

// 用等寬字型

echo '<div style="font-family: consolas;" >' ;

for( $i = 1 ; $i <= $floor ; $i++ ) {
	
	for( $k = 1 ; $k <= $height ; $k++ ){
		$num = $begin + ( $add * ( $k - 1 ) ) + ($gain * ($i - 1)) ;
		
		$space = ( $max_width - $num ) / 2 ;
		
		for( $s = 1 ; $s <= $space ; $s++ ){
			echo '&nbsp' ;
		}
		
		for( $n = 1 ; $n <= $num ; $n++ ){
			echo $unit ;
		}
		
		for( $s = 1 ; $s <= $space ; $s++ ){
			echo '&nbsp' ;
		}
		
		echo "<br />\n";
	}
	
}

for( $i = 1 ; $i <= $trunk_h ; $i++ ){
	
	for( $k = 1 ; $k <= $max_width ; $k++ ) {
		
		$space = ( $max_width - $trunk_w ) / 2 ;
		
		if( $k <= $space || $k > $space + $trunk_w ){
			echo '&nbsp' ;
		}else{
			echo $unit ;
		}
		
	}
	
	echo "<br />\n";
}

echo '</div>' ;
?>
<br />
<br />
<p>
	字體：consolas
</p>
	</body>
</html>