<?php 

require_once 'database.php';

$search = $_POST['search'];


if(!empty($search)){
    $sql = "SELECT * FROM tasks WHERE name LIKE '%$search%'";
    
    $result = Database::connect()->query($sql);
    
    if(!$result){
        die('Query Error'. Database::connect()->error);
    }

    $json = array();
    while($row = $result->fetch_object()){
        $json[] = array(
            'id' => $row->id,
            'name' => $row->name,
            'description' => $row->description
        );
    }

    $jsonstring = json_encode($json);
    echo $jsonstring;
}

?>