<?php
/*
//CREATE Connection
$conn = new mysqli("localhost","root","");

if($conn->connect_errno){
    echo "Can't established database";
}

$createdatabasecmd = "CREATE DATABASE mydb";

if($conn->query($createdatabasecmd)){
    echo "Database Created";
}
else{
    echo "Database is not created";
}

$conn->close()*/

/*
 * Procedural Form
 */

//Create connection

$host = "localhost";
$username = "root";
$password = "";

$databaseName = "myDb";
$tableName = "myGuests";

$conn = mysqli_connect($host,$username,$password,$databaseName);

if(!$conn){
    die("Database not created ".mysqli_connect_error());
}

//Create Table

/*$createMyGuestsTable = "CREATE TABLE ".$tableName." (
id int PRIMARY KEY AUTO_INCREMENT,
firstName VARCHAR(30) NOT NULL,
lastName VARCHAR(30) NOT NULL,
email VARCHAR(30) NOT NULL)";*/

//Insert data
/*$insert_data = "INSERT INTO ".$tableName.
               "(firstName,lastName,email)
                VALUES
                ('Rafiqul','ISLAM','rfq45@gmail.com')";*/

//Insert Multiple records

$sql = "INSERT INTO ".$tableName." (firstName,lastName,email)
        VALUES 
        ('ABir','Hasan','abir@gmail.com');";

$sql .= "INSERT INTO ".$tableName." (firstName,lastName,email)
         VALUES
         ('rahim','rahman','rahim@yahoo.com');";

/*if(mysqli_query($conn,$insert_data)){
    //GEt the id of last inserted row
    $inserted_id = mysqli_insert_id($conn);
    echo "The id of last Inserted data is  ".$inserted_id;
}
else{
    echo "NOT INSERTED";
}*/

//For inserting Multiple ROWs
/*
if(mysqli_multi_query($conn,$sql)){
    $insert_id = mysqli_insert_id($conn);

    echo "values Inserted Successfully ".$insert_id;
}
else{
    echo "Not Inserted";
}
*/

//Fetch Data From Table
$selctData = "SELECT id,firstName,lastName,email FROM ".$tableName;

$result = mysqli_query($conn,$selctData);

if(mysqli_num_rows($result)>0){
    while ($row = mysqli_fetch_assoc($result)){
        echo $row["id"]." ".$row["firstName"]." ".$row["lastName"]." ".$row["email"]."</br>";
    }
}

//DELETE DATA FROM DATABASE

$sqlDelete = "DELETE FROM ".$tableName." WHERE id = 3";

if(mysqli_query($conn,$sqlDelete)){
    echo "ROW DELETED SUCCESSFULLY";
}
else{
    echo "NOT DELETED ".mysqli_error($conn);
}

//Update Data

$updateSql = "UPDATE ".$tableName." SET firstName = 'SHAKIB' WHERE id = 14";
$result = mysqli_query($conn,$selctData);
if(mysqli_query($conn,$updateSql)){
    echo "Table UpDated..After Updating </br>";

    if(mysqli_num_rows($result)>0){
        while ($row = mysqli_fetch_assoc($result)){
            echo $row["id"]." ".$row["firstName"]." ".$row["lastName"]." ".$row["email"]."</br>";
        }
    }
}

echo "</br>";

//LIMIT

//$sqlLImit = "SELECT * FROM ".$tableName." LIMIT 7";
$sqlLImit = "SELECT * FROM ".$tableName." LIMIT 7 OFFSET 2";

$result = mysqli_query($conn,$sqlLImit);

if(mysqli_num_rows($result)>0){
    while ( $row = mysqli_fetch_assoc($result)){
        echo $row["id"]." ".$row["firstName"]." ".$row["lastName"]." ".$row["email"]."</br>";

    }
}

mysqli_close($conn);
?>