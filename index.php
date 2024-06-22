<?php

include( 'includes/config.php' );

if ( $_SERVER[ 'request_method' ] == [ 'post' ] ) {
    
    if ( isset( $_POST[ 'login' ] ) ) {
        $email = $_POST[ 'email' ];
        $password = $_POST[ 'password' ];

        if ( empty( $email ) || empty( $password ) ) {
            echo'email and password are required';
        }
        else {

            $sql='select * from users ';
    
        }

    }    
}

