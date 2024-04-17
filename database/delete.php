<?php

require_once 'conn.php' ;

$query = "DELETE FROM `doctor`
WHERE `id` > 4 " ;

mysqli_query($conn , $query) ;
mysqli_close($conn) ;