<?php 
require_once('database.php');

if(isset($_POST) && !empty($_POST['name']) && !empty($_POST['description'])){

    $taskName = $_POST['name'];
    $taskDesc = $_POST['description'];

    $sql = "INSERT INTO tasks(name, description) VALUES('$taskName', '$taskDesc')";

    $query = Database::connect()->query($sql);

    if($query){
        echo "Task Added";
    }else{
        echo "Task not Added";
    }
}else{
   echo 'Ha ocurrido un error'; 
}

?>