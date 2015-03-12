<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php	 	


function Draw_a_card()
{
    $min=0;
    $max=53;
    $randNum=rand($min,$max);
    $kind=($randNum/13)+1;
    settype($kind,"int");
    $num=($randNum%13)+1;
    
    //echo $kind.'@@'.$num."<br>######################<br>"; //test the number
    
    if ($kind==1){
        echo "<p style='font-size: 42px; color: black;'>♠ spades {$num}</p>";
    }
    else if($kind==2){
        echo "<p style='font-size: 42px; color: red;'>♥ hearts {$num}</p>";
    }
    else if($kind==3){
        echo "<p style='font-size: 42px; color: red;'>♦ diamonds {$num}</p>";
    }
    else if($kind==4){
        echo "<p style='font-size: 42px; color: black;'>♣ clubs {$num}</p>";
    }
    else if($kind==5 && $num == 1){
        echo "<p style='font-size: 42px; color: black;'><img src='small.png'>恭喜你抽到鬼牌，請伏地挺身5下XD</p>";
    }
    else if($kind==5 && $num == 2){
        echo "<p style='font-size: 42px; color: black;'><img src='big.png'>恭喜你抽到鬼牌，請伏地挺身10下XD</p>";
    }
}

echo "您抽到的牌是：";
draw_a_card();

/*
for($i=1;$i<=500;$i++) //for test
{
    echo "您抽到的牌是：";
    draw_a_card();
}
*/

?>
