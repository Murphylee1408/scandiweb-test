<?php
$hostname = 'localhost';
$hostusername = 'root';
$hostpassword = '';
$dbname = 'scandiweb_project';

$dbConnect = new mysqli ($hostname, $hostusername, $hostpassword, $dbname);
$errorMessage = $dbConnect->connect_error;
if ($errorMessage)
{
    echo $errorMessage;
}


