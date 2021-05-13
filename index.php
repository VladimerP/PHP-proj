<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  </head>
   <?php
    require_once 'connection.php';
    require_once 'SaveOut.php';  
    ?>
<body>

    <h3>Добавление в бд </h3>
    <form method="post">
        <p>Name <input type="input" name="Name" value="" placeholder="Алексей" /></p>
        <p>Mail <input type="input" name="Email" value="" placeholder="nifoqw@mail.ru"/></p>
        <p><textarea name="Area"  cols="40" rows ="10"></textarea></p>
        <input type="submit"  name="Save" value="Save" />
    </form>
    <?php
    
    $SaveOut=new SaveOut();
    //Вывод записей
    $SaveOut->output();
    //Добавитб запись
    if( isset($_POST['Save'] ) ){
        if($_POST['Name']!=NULL && $_POST['Email']!=NULL && $_POST['Area']!=NULL){
            $SaveOut->savePeople($_POST['Name'],$_POST['Email'],$_POST['Area']);}
        else{
            echo "Поля не должны быть пустыми";
        }
    }
    /*
    elseif( isset($_POST['Out'])){
        $SaveOut->output();
    }*/
    

    ?>

</body>

</html>

