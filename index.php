<?php

include( 'includes/config.php' );
  
    if ( isset( $_POST[ 'login' ] ) ) {
        $email = $_POST[ 'email' ];
        $password = $_POST[ 'password' ];

        if ( empty( $email ) || empty( $password ) ) {
            echo'email and password are required';
        } else {

            $sql="select * from users where email='$email' and password ='$password'";
            $result = $conn->query( $sql );

            if ( $result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $_SESSION['user_id'] = $row['id'];
                $_SESSION['email'] = $row['email'];
            }else{
                echo 'invalid email and password';
            } 
    
        }

    }    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ljms </title>
</head>
<body>
    
</body>
</html>
