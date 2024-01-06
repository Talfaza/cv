<?php 
$servername="localhost";
$username="root";
$password="";
$dbName="CV";   

$conn = mysqli_connect($servername,$username,$password);

if(!$conn){
      die("Connection failed: ". mysqli_connect_error());
}else{
      // echo "Connected successfully" . '<br>';
}
$queryDb = "CREATE DATABASE IF NOT EXISTS $dbName"; 

if (mysqli_query($conn, $queryDb)) {
      // echo "Db created successfully". '<br>';

}

$queryTable = "CREATE TABLE IF NOT EXISTS INFORMATION (

      id INT(6) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
      FIRSTNAME VARCHAR(25),
      LASTNAME VARCHAR(25),
      PHONE VARCHAR(25),
      EMAIL VARCHAR(25),
      EDUCATION VARCHAR(25),
      SKILL1 VARCHAR(25),
      SKILL2 VARCHAR(25),
      SKILL3 VARCHAR(25),
      GENDER BOOLEAN,
      ADRESSE VARCHAR(50),
      COUNTRY VARCHAR(30),
      EXPERIENCE VARCHAR(144)





)";
mysqli_select_db($conn,$dbName);

if (mysqli_query($conn, $queryTable)) {
      // echo "Table created successfully". '<br>';

}

?>