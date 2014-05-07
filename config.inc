<?php

$hostname = 'us-cdbr-azure-west-b.cleardb.com';        // Your MySQL hostname.
$dbname   = 'grantyoudb'; 			// Your database name.
$sql_username = 'bccf98af63aeab';             // Your database username.
$sql_password = '54baa72c';         // Your database password. If your database has no password, leave it empty.

// Let's connect to host
mysql_connect($hostname, $sql_username, $sql_password) or DIE('Connection to host is failed, perhaps the service is down!');
// Select the database
mysql_select_db($dbname) or DIE('Database name is not available!');

?> 
