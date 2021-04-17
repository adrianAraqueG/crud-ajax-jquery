<?php 

require_once 'database.php';

if(isset($_POST['id'])){
    $id = $_POST['id'];

    $sql = "SELECT * FROM tasks WHERE id = $id";

    $query = Database::connect()->query($sql);

    if($query){
        $json = array();
        while($row = $query->fetch_object()){
            $json[] = array(
                'id' => $row->id,
                'name' => $row->name,
                'description' => $row->description
            );
        }

        $jsonstring = json_encode($json);

        echo $jsonstring;
    }else{
        echo 'Query Error: '.Database::connect()->error;
    }

}