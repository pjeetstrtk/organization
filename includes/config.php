<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'organization';

$conn = new mysqli( $server, $user, $pass, $dbname );

if ( $conn->connect_error ) {
    die( 'connection failed:' .$conn->connect_error );
}

