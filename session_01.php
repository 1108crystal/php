<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>會員中心</title>
</head>
<body>
<?php
session_start();
echo "HI ";
echo $_SESSION['name'];

?>
    
</body>
</html>