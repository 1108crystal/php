<?php
$acc='crystal';
$pw='1234';
$formacc=$_POST['acc'];
$formpw=$_POST['pw'];


if($acc==$formacc && $pw==$formpw){
    header('Location:login.php?result=success');
}else{
    header('Location:login.php?result=fail');
}


?>