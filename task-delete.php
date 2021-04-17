<?php

require_once 'database.php';

if($_POST['id']){
    $id = $_POST['id'];

    $sql = "DELETE FROM tasks WHERE id = $id";

    $query = Database::connect()->query($sql);

    if($query){
        echo $id.' borrado';
    }else{
        echo 'no se pudo krnal';
    }

}else{
    echo 'No recibimos nada compa B(';
}

