  
<?php
$mysqli = new mysqli("localhost","root","","projekt");
if($mysqli ->connect_errno)
{
    echo "failed to connect to MYSQL : (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
?>