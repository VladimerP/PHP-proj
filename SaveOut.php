<?php
     class SaveOut{
         //добавление сообщения
         function savePeople($Name,$Email,$Area){
            global $link;
            //формирование имени пользователся, почты и сообщения
            $save="INSERT INTO information(Names, Mail, Area) VALUES ('".$Name."','".$Email."','".$Area."')";
            
            //выполнение запроса и его проверка
            if (mysqli_query($link, $save)) {
                echo "New record created successfully";
            } 
            else{
                echo "Error: " . $select . "<br>" . mysqli_error($link);
            }
            
         }
         //вывод всей иформации
         function output(){
            global $link;
            $select = "SELECT * FROM information";
            $result=mysqli_query($link, $select);
            echo"<div class='container' id='info'>";
            echo "<h2>Info update</h2>";
            while($row = $result->fetch_assoc()) {
                echo "<p>Name: " . $row["Names"]. " - Mail: " . $row["Mail"]. "</p><p>".$row["Area"]."</p>";
            } 
            echo"</div>";
         } 
     } 
    
 
?>


