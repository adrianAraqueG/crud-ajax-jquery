<?php 

class Database{

    public static function connect(){
        $db = new mysqli('bbq5dxgagwfy8nt0h5r0-mysql.services.clever-cloud.com', 'unmcm3s1uouexkbz', 'nbaVpHq8FAAuSYLsb3bX', 'bbq5dxgagwfy8nt0h5r0', 3306);
        return $db;       
    }

}



?>