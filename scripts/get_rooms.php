<?php
//get data for rooms
require_once __DIR__ .'/database.php';

//ottieni rooms
$sql = "SELECT `id`, `room_number` FROM `stanze`";
$result = $conn->query($sql);

if($result && $result->num_rows > 0){
    $rooms = [];
    while($row = $result->fetch_assoc()){
        //popolare array rooms
        $rooms[] = $row;
    }
    //var_dump($rooms);
}else{
    echo 'query error';
}
//close DB connection
$conn->close();