<!-- php不是有內建function嗎
https://www.startutorial.com/articles/view/how-to-build-a-web-calendar-in-php

曆法從來就不是簡單的事情, 這個不知道有沒有幫助: https://gist.github.com/eagleon/1702129 -->

<?php
$cal = []; //指定月份的日期表

$year = date('Y'); //年=>年份完整数字表示
$month = date('n'); //月=>数字表示几月份，不补零

$year = (isset($_GET['y'])) ? $_GET['y'] : date("Y"); //本年份
$month = (isset($_GET['m'])) ? $_GET['m'] : date("n"); //本月份

if ($month <= 0) {
    $month = 12;
    $year = $year - 1;
} elseif ($month > 12) {
    $month = 1;
    $year = $year + 1;
}

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

// 依月份讀出圖片檔名
$imgfiles=$month.".jpg";
// 指定月份 ，1號前面放的空白天數
for ($i = 1; $i <= $space_day; $i++) {
    $cal[] = '';
}
// 指定月份，當月的日期表
for ($i = 1; $i <= $monthDays; $i++) {
    $cal[] = $i;
}

?>
<!-- html -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>萬年曆-作業 (23號)</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.2/css/bootstrap.min.css"
        integrity="sha512-CpIKUSyh9QX2+zSdfGP+eWLx23C8Dj9/XmHjZY2uDtfkdLGo0uY12jgcnkX9vXOgYajEKb/jiw67EYm+kBf+6g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="/css/style.css">
</head>

<body class="main">
    <!-- header -->

    <!-- <a href='index.php'>回首頁</a><br> -->
        <!-- A grey horizontal navbar that becomes vertical on small screens -->
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><i class="fa-brands fa-twitter"></i>萬年曆</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="index.php">回首頁</a>
                    </li> -->
                    <li class="nav-item">
                        <a class="nav-link" href="calendar.php">簡易萬年曆</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">萬年曆</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="" role="button"
                            data-bs-toggle="dropdown">課程</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="">課程1</a></li>
                            <li><a class="dropdown-item" href="">課程2</a></li>
                            <li><a class="dropdown-item" href="">課程3</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <hr>



    <!-- 中間 left-->


    <!-- 中間 right -->


    <div class="container">
        <div class="row">
            <div class="col-sm-5" >

            <img width="640px" height="800px" src="./images/kimono/<?=$imgfiles;?>" class="rounded" alt="Cinque Terre">
                <!-- <img src="./images/kimono/01.jpg" class="img-thumbnail" alt="Cinque Terre"> -->
            </div>
            <div class="col-sm-7">

                <table class="table">
                    <tr>
                        <td colspan="2"><a href="?y=<?= $year; ?>&m=<?= $prevMonth; ?>">上一個月</a></td>

                        <td colspan="3">
                            <h1><?= $showYearMonth; ?></h1>
                        </td>
                        <td colspan="2"><a href="?y=<?= $year; ?>&m=<?= $nextMonth; ?>">下一個月</a></td>
                    </tr>
                    <tr class="table-primary">
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

                        if ($i % 7 >= 5) {
                            echo "<td style=' background-color: pink;'>$day</td>";
                        } else {
                            echo "<td >$day</td>";
                        }

                        if ($i % 7 == 6) {
                            echo "</tr>";
                        }
                    }
                    ?>

                </table>
            </div>
        </div>




        <!-- footer -->
        <footer class="footer">萬年曆 ：023 白育菁</footer>

</body>

</html>