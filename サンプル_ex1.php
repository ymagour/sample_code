<?php
    //dateを1～31まで繰り返し1を加算
    for ($date=1; $date <= 31 ; $date++) { 
        //関数の日付部分にdate指定し繰り返しの都度、日を変更させる
        echo date( 'n/j', mktime(0, 0, 0, 5, $date, 2021) );
        echo '<br>';
    }
?>