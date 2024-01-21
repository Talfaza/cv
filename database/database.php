<?php 
$servername="localhost";
$username="root";
$password="";
$dbName="CV";   

$conn = mysqli_connect($servername,$username,$password);

if(!$conn){
      die("Connection failed: ". mysqli_connect_error());
}else{
      echo "Connected successfully" . '<br>';
}
$queryDb = "CREATE DATABASE IF NOT EXISTS $dbName"; 
$result = mysqli_query($conn, $queryDb);

if ($result) {
      echo "Db created successfully". '<br>';

}

$querySkill = "CREATE TABLE IF NOT EXISTS SKILL(
      id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
      SKILL1 VARCHAR(25),
      SKILL2 VARCHAR(25),
      SKILL3 VARCHAR(25)
      

)";
$queryPersonal = "CREATE TABLE IF NOT EXISTS PERSONAL (
      id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
      FIRSTNAME VARCHAR(25),
      LASTNAME VARCHAR(25),
      PHONE VARCHAR(25),
      EMAIL VARCHAR(25),
      EDUCATION VARCHAR(25),
      ADRESSE VARCHAR(50),
      EXPERIENCE VARCHAR(144)


)";
$queryGender = "CREATE TABLE IF NOT EXISTS GENDER (
      id INT(6)  UNSIGNED AUTO_INCREMENT PRIMARY KEY,
      MALE BOOLEAN NOT NULL,
      FEMALE BOOLEAN NOT NULL
)";
$queryCountry = "CREATE TABLE IF NOT EXISTS COUNTRY (
      id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
      country_code varchar(2) NOT NULL,
      country_name varchar(100) NOT NULL
)";


$queryLang = "CREATE TABLE IF NOT EXISTS LANG(
      id INT(6)  UNSIGNED AUTO_INCREMENT PRIMARY KEY,
      LANG VARCHAR(20) NOT NULL

)"; 

$queryInfo = "CREATE TABLE IF NOT EXISTS INFORMATION (

      id INT(6) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
      id_skill INT(6) UNSIGNED,
      FOREIGN KEY (id_skill) REFERENCES SKILL (id),
      id_personal INT(6) UNSIGNED,
      FOREIGN KEY (id_personal) REFERENCES PERSONAL (id),
      id_gender INT(6) UNSIGNED,
      FOREIGN KEY (id_gender) REFERENCES GENDER (id),
      id_country INT(6) UNSIGNED, 
      FOREIGN KEY (id_country) REFERENCES COUNTRY (id),
      id_language INT(6) UNSIGNED,
      FOREIGN KEY (id_language) REFERENCES LANG (id)
  

)";

mysqli_select_db($conn,$dbName);





mysqli_query($conn, $querySkill) ? print("Table Skill created successfully" . '<br>') : die("Connection failed for Skill: " . mysqli_error($conn));
mysqli_query($conn, $queryPersonal) ? print("Table Personal created successfully" . '<br>') : die("Connection failed for Personal: " . mysqli_error($conn));
mysqli_query($conn, $queryGender) ? print("Table Gender created successfully" . '<br>') : die("Connection failed for Gender: " . mysqli_error($conn));
mysqli_query($conn, $queryCountry) ? include_once("inserCountry.php") : die("Connection failed for Country: " . mysqli_error($conn));
print("Table Country created successfully" . '<br>');
mysqli_query($conn, $queryLang) ? print("Table Lang created successfully" . '<br>') : die("Connection failed for Lang: " . mysqli_error($conn));
mysqli_query($conn, $queryInfo) ? print("Table Info created successfully" . '<br>') : die("Connection failed for Info: " . mysqli_error($conn));

?>