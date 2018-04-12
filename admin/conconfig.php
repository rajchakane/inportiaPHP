<?php

    define('DATABASE_NAME','new-inportia-db' );
    define('DATABASE_USER','root' );
    define('DATABASE_PASSWORD','root' );
    define('DATABASE_HOST','localhost:3306' ); 

/*
    define('DB_NAME','new-inportia-db' );
    define('DB_USER','inportiaaccess' );
    define('DB_PASSWORD','Pl@y2New' );
    define('DB_HOST','182.50.133.92:3306' );
*/

    //$con=mysqli_connect("localhost","my_user","my_password","my_db");
    $link = mysqli_connect(DATABASE_HOST, DATABASE_USER, DATABASE_PASSWORD, DATABASE_NAME);
    //$link = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    
    if(!$link){
        die('Could Not Connect To URL : '.mysqli_errno());
    }
    /*else{
        echo 'DB Connection Succesfull!!';
    }
    */

?>