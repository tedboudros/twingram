<?php



/////////////////////////// INSTALLING ON THE DATABASE
// Name of the file
$filename = 'twingram.sql';

// Connect to MySQL server
$connection = new mysqli(db_host, db_username, db_password, db_database, db_port);

// Temporary variable, used to store current query
$templine = '';
// Read in entire file
$lines = file($filename);
// Loop through each line
foreach ($lines as $line){
    // Skip it if it's a comment
    if (substr($line, 0, 2) == '--' || $line == '')
        continue;
    // Add this line to the current segment
    $templine .= $line;
    // If it has a semicolon at the end, it's the end of the query
    if (substr(trim($line), -1, 1) == ';')
    {
        // Perform the query
        mysqli_query($connection, $templine) or print("MySQL error: <b>" . mysqli_error($connection) . "</b><br/>");
        // Reset temp variable to empty
         $templine = '';
    }
}

?>