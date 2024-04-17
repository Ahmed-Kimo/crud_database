<?php

require_once 'conn.php' ;

$query = "SELECT * FROM `doctor` " ;

$result = mysqli_query($conn , $query) ;

$doctors = mysqli_fetch_all($result , MYSQLI_ASSOC) ;

foreach($doctors as $doctor){
    echo "my name is " . $doctor['name'] . '<br>' .
    'and my salary is ' . $doctor['salary'] . '<br>' .
    'and my degree is ' . $doctor['degree'] . '<br>' ;
}

mysqli_free_result($result) ;

mysqli_close($conn) ;