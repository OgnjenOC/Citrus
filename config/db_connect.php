<?php

//Create Connection
   $conn = mysqli_connect('localhost', 'oggy', 'Iphone8.', 'catalog');

   //Check connection
   if(mysqli_connect_errno()){
       //connection failed
       
       echo 'Failed to connect to MySQL' . mysqli_errno();
   }
  
  ?>

