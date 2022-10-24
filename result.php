<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMI計算結果</title>

    <style>
        .er0 {
            font-size: 24px;
            color: lightcoral;
        }

        .er {
            font-size: 24px;
            color: red;
        }

        .er1 {
            font-size: 24px;
            color: red;
        }

        .er2 {
            font-size: 26px;
            color: red;
        }

        .er3 {
            font-size: 28px;
            color: red;
        }

        .er4 {
            font-size: 30px;
            color: red;
        }
    </style>
</head>

<body>
    <?php
    if (!empty($_GET)) 
    {
        $height = $_GET['height'];
        $weight = $_GET['weight'];
        $isOK=true;
    } else if (!empty($_POST)) {
        $height = $_POST['height'];
        $weight = $_POST['weight'];
        if(empty($height) || empty($weight)){
            echo "資料輸入錯誤，請回表單重新輸入";
            echo "<a href='bmi.php' >回表單</a>";
            $isOK=false;
            exit();
        }else{            
            $isOK=true;
        }
    }else{
        echo "資料輸入錯誤，請回表單重新輸入";
        echo "<a href='bmi.php' >回表單</a>";
        $isOK=false;
        exit();
    }

    if($isOK){

        // BMI值計算公式:    BMI = 體重(公斤) / 身高2(公尺2)
        $bmi = round($weight / (($height / 100) * ($height / 100)), 2);
        
        
        echo "身高為" . $height . "<br>";
        echo "體重為" . $weight . "<br>";
        echo "你的BMI為" . $bmi . "<br>";
        
        ?>

<h3>你的bmi計算結果為<?php echo $bmi ?></h3>
<hr>
<div></div>
<div>你的體位判定為：
    <?php
        if ($bmi < 18.5) {
            echo "<strong class='er0'>體重過輕</strong>";
        } elseif ($bmi >= 18.5 && $bmi < 24) {
            echo "健康體位";
        } else {
            echo "<strong class='er'>體位異常=></strong>";
            if ($bmi >= 24 && $bmi < 27) {
                echo "<strong class='er1'>過重</strong>";
            } elseif ($bmi >= 27 && $bmi < 30) {
                echo "<strong class='er2'>輕度肥胖</strong>";
            } elseif ($bmi >= 30 && $bmi < 35) {
                echo "<strong class='er3'>中度肥胖</strong>";
            } else {
                echo "<strong class='er4'>重度肥胖</strong>";
            }
        }
        
        ?>
        <hr>
        <a href='bmi.php'> BMI 重新計算</a>
    </div>
<?php }?>
    
</body>

</html>