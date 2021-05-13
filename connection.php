<?php
//подключение базы данных
$link= mysqli_connect('localhost', 'root','','store');
if(mysqli_connect_errno()){
    echo'Error('.mysqli_connect_errno().')'.mysqli_connect_error();
    exit();
}
 
?>


