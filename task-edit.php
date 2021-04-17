<?php 

require_once 'database.php';

if(isset($_POST['id'])){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $description = $_POST['description'];

    $sql = "UPDATE tasks SET name='$name', description='$description' WHERE id=$id";

    $query = Database::connect()->query($sql);

    if($query){
        echo 'Actualizado papu!';
    }else{
        echo "Query Error: ".Database::connect()->error;
    }
}else{
    echo 'No llegaron datos, puñetas';
}