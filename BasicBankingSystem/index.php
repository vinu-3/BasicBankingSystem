<?php
         $dbhost = 'localhost:3306';
         $dbuser = 'root';
         $dbpass = '';
	 $dbname = 'basic_bank_system';
         $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
         echo "Connected Successfully";
         if(! $conn ) {
            die('Could not connect: ' . mysql_error());
         }
         
        
         
         ?>