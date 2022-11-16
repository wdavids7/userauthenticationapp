<?php

class Dbh
{

    protected function connect()
    {
        try {
            $username = "root";
            $password = "";
            $dbh = new PDO('mysql:host=localhost;dbname=library', $username, $password);
            return $dbh;
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }
}




//$dbServername = "localhost";
//$dbUsername = "root";
//$dbPassword = "";
//$dbName = "library";

// CREATE CONNECTION
//$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

// CHECK CONNECTION
//if (!$conn) {
    //die("Connection failed: " . mysqli_connect_error());
//}
