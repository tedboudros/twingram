<?php

// Name of the file
$filename = 'sm.sql';
// MySQL host
$db_host = 'localhost';
// MySQL username
$db_username = 'root';
// MySQL password
$db_password = '';
// Database name
$db_database = 'sm';
// MySQL port
$db_port = 3306;
// Connect to MySQL server
$connection = new mysqli($db_host, $db_username, $db_password, $db_database, $db_port);
if(mysqli_errno($connection)){
    echo mysqli_error($connection);
}

// Temporary variable, used to store current query
$templine = '';
// Read in entire file
$lines = file($filename);
// Loop through each line
foreach ($lines as $line)
{
// Skip it if it's a comment
if (substr($line, 0, 2) == '--' || $line == '')
    continue;

// Add this line to the current segment
$templine .= $line;
// If it has a semicolon at the end, it's the end of the query
if (substr(trim($line), -1, 1) == ';')
{
    // Perform the query
    mysqli_query($connection, $templine) or print("MySQL: <b>" . mysqli_error($connection) . "</b><br/>");
    // Reset temp variable to empty
    $templine = '';
}
}
 echo "<center><h1><b>Finished Installation!</b></h1></center>";
?>