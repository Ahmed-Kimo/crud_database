<?php 

require_once 'conn.php' ;

$query = " INSERT INTO `doctor` (`name` , `salary` , `degree`) 

VALUES ('kimo' , 3000 , 'master') , 
('ali' , 2000 , 'bachelors')" ;

mysqli_query($conn , $query) ;
mysqli_close($conn) ;