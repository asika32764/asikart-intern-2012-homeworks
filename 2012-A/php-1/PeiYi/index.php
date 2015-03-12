<meta http-equiv="content-type" content="text/html; charset=utf-8">
<h1 ><font face= "華康瘦金體">請抽一張牌：</font><h1>
<br>
<br>
    <style type="text/css">
        .black{
            color : black;
        }
        .red{
            color: red;
        }
    </style>
<?php	 	
    
   
        
        $poker= array('<div class="black">♠黑桃','<div class="red">♥紅心','<div class="red">♦方塊','<div class="black">♣梅花','<div class="black">\Q.Q/','<div class="red">\0.0/' );
        $num1 = 0;
        $num2 = 5;
        $B = rand ($num1,$num2);
         
        
    $Min = 0;
    $Max = 12;
    $num = array('A','2','3','4','5','6','7','8','9','10','J','Q','K');
        $A = rand($Min,$Max);
        
      
    if ($B<4 && $A<13){
            echo $poker[$B].$num[$A];
        }else {
            echo $poker[$B];
        }
    
?>
<br>
<br>
<br>
<br>
<br>
<a href = "index.php"><font size = "4" face = "華康龍門石碑">再抽一次!!</font></a>