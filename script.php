<?php 

include_once "database/database.php";


$connection = mysqli_connect("localhost","root","");

if(isset($_POST['submit'])) {
      // echo "<script>console.log('a');</script>";

      $firstname = $_POST['firstname'];
      $lastname = $_POST['lastname'];
      $phone = $_POST['phone'];
      $email = $_POST['email'];
      $education = $_POST['education'];
      $skill_1 = $_POST['skill_1'];
      $skill_2 = $_POST['skill_2'];
      $skill_3 = $_POST['skill_3'];
      $gender = $_POST['gender'];
      $adress = $_POST['adresse'];
      $country = $_POST['country'];
      $experience = $_POST['experience'];
      
      $stmt = $connection->prepare("INSERT INTO CV.INFORMATION (FIRSTNAME, LASTNAME, PHONE, EMAIL, EDUCATION, SKILL1, SKILL2, SKILL3, GENDER, ADRESSE, COUNTRY, EXPERIENCE) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
      $stmt->bind_param("ssssssssisss", $firstname, $lastname, $phone, $email, $education, $skill_1, $skill_2, $skill_3, $gender, $adress, $country, $experience);
      if ($stmt->execute()) {
            session_start();
            
            $_SESSION['firstname'] = $_POST['firstname'];
            $_SESSION['lastname'] = $_POST['lastname'];
            $_SESSION['phone'] = $_POST['phone'];
            $_SESSION['email'] = $_POST['email'];
            $_SESSION['education'] = $_POST['education'];
            $_SESSION['skill_1'] = $_POST['skill_1'];
            $_SESSION['skill_2'] = $_POST['skill_2'];
            $_SESSION['skill_3'] = $_POST['skill_3'];
            $_SESSION['gender'] = $_POST['gender'];
            $_SESSION['adresse'] = $_POST['adresse'];
            $_SESSION['country'] = $_POST['country'];
            $_SESSION['experience'] = $_POST['experience'];

            header("Location: cv.php");
      }
      $stmt->close();
      
}




?>
