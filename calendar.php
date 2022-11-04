<?php
$cal = []; //指定月份的日期表

$year = date('Y'); //年=>年份完整数字表示
$month = date('n'); //月=>数字表示几月份，不补零

$monthDays = date('t'); //指定月份的天數

$showYearMonth = $year . '-' . $month; //顯示本月份
// 
$nextMonth = $month + 1; //下個月
$prevMonth = $month - 1; //上個月
// 
$firstday = $year . '-' . $month . '-1'; //本月的1號
$firdayOFWeek = date('N', strtotime($firstday)); //本月 第一天是星期幾=>1（星期一）到 7（星期天）


$space_day = $firdayOFWeek - 1; //星期幾-1天 ，前面空幾個空白

$lastday = $year . '-' . $month . '-' . $monthDays; //本月最後一天幾號

$weeks = ceil(($monthDays + $space_day) / 7); //指定月份有幾週(月份日期+前面空白天數)/7
// 指定月份 ，1號前面放的空白天數
for ($i = 1; $i <= $space_day; $i++) {
    $cal[] = '';
}
// 指定月份，當月的日期表
for ($i = 1; $i <= $monthDays; $i++) {
    $cal[] = $i;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>萬年曆-作業 (23號)</title>
</head>

<body>
<div style="display:flex;width:80%;justify-content:space-between;align-items:center">
    <a href="?y=2022&m=<?= $prevMonth; ?>">上一個月</a>
    <h1><?= $showYearMonth; ?></h1>
    <a href="?y=2022&m=<?= $nextMonth; ?>">下一個月</a>
</div>  
<div >
    <table>
        <tr>
            <td>一</td>
            <td>二</td>
            <td>三</td>
            <td>四</td>
            <td>五</td>
            <td>六</td>
            <td>日</td>
        </tr>

        <?php
        foreach ($cal as $i => $day) {
            if ($i % 7 == 0) {
                echo "<tr>";
            }
            echo "<td>$day</td>";

            if ($i % 7 == 6) {
                echo "</tr>";
            }
        }

        ?>

    </table>

</div>
</body>

</html>