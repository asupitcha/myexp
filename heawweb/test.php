<?php
date_default_timezone_set("Asia/Bangkok");
$ThatTime ="14:08:10";
$ThatTime2 ="5:08:10";
$todaydate = date('Y-m-d');
$time_now=mktime(date('G'),date('i'),date('s'));
$NowisTime=date('G:i:s',$time_now);
echo $ThatTime;
echo '<br>';
echo $NowisTime;
echo '<br>';
echo $ThatTime2;
if($NowisTime >= $ThatTime AND $NowisTime <$ThatTime2) {
    echo "ok";
}

 ?>
