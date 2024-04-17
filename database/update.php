<?php

require_once 'conn.php' ;

$query = "UPDATE `doctor` SET `salary` = 1000 
WHERE `id` = 1 " ;

mysqli_query($conn , $query) ;
mysqli_close($conn) ;