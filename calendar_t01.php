<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>萬年曆</title>
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        table{
            border-collapse: collapse;
        }
        table td{
            border:1px solid #ccc;
            padding:3px 9px;
        }
    </style>
</head>
<body>
<a href='index.php'>回首頁</a><br>
<?php
$cal=[];

$month=(isset($_GET['m']))?$_GET['m']:date("n");//本月份
$year=(isset($_GET['y']))?$_GET['y']:date("Y");//本年份

$nextMonth=$month+1;//下個月
$prevMonth=$month-1;//上個月


$firstDay=$year."-".$month."-1";
$firstDayWeek=date("N",strtotime($firstDay)); //星期一到星期天  (1-7)
$monthDays=date("t",strtotime($firstDay)); //指定月份的天數
$lastDay=$year.'-'.$month.'-'.$monthDays;//指定月份的最後一天日期
$spaceDays=$firstDayWeek-1;//指定月份前面空的天數
$weeks=ceil(($monthDays+$spaceDays)/7);

for($i=0;$i<$spaceDays;$i++){
    $cal[]='';
}

for($i=0;$i<$monthDays;$i++){
    $cal[]=date("Y-m-d",strtotime("+$i days",strtotime($firstDay)));
}

/* echo "<pre>";
print_r($cal);
echo "</pre>"; */

echo "第一天".$firstDay."星期".$firstDayWeek;
echo "<br>";
echo "該月共".$monthDays."天,最後一天是".$lastDay;
echo "<br>";
echo "月曆天數共".($monthDays+$spaceDays)."天，".$weeks."周";

?>

<div style="display:flex;width:80%;justify-content:space-between;align-items:center">
    <a href="?y=2022&m=<?=$prevMonth;?>">上一個月</a>
    <h1><?=$year;?> 年 <?=$month;?> 月份</h1>
    <a href="?y=2022&m=<?=$nextMonth;?>">下一個月</a>
</div>

<table>
<?php
foreach($cal as $i => $day){
    if($i%7==0){
        echo "<tr>";
    }
        echo "<td>$day</td>";

    if($i%7==6){
        echo "</tr>";
    }
}

?>

</table>
</body>
</html>