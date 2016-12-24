<?php
    $searchTerm = $_POST['g'];
    //get matched data from skills table
    $query =  mysql_fetch_array(mysql_query("select video_game.name FROM video_game WHERE name LIKE '%".$searchTerm."%' ORDER BY name ASC;"));
    
    //return json data
    echo json_encode($query);
?>