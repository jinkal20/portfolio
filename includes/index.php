<?php
include 'function.php';

    // pass the connection and the movie id to a function
    $data = get_about($conn);
    $work = get_work($conn);
    $table = array($data,$work);
    echo json_encode($table);

?>