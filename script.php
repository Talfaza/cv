<?php
session_start();
include_once "database/database.php";

$connection = mysqli_connect("localhost", "root", "");
mysqli_select_db($connection, "cv");

if (isset($_POST['submit'])) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $education = $_POST['education'];
    $skill_1 = $_POST['skill_1'];
    $skill_2 = $_POST['skill_2'];
    $skill_3 = $_POST['skill_3'];
    $gender = isset($_POST['gender']) ? $_POST['gender'] : null;
    $adress = $_POST['adresse'];
    $country = $_POST['country'];
    $experience = $_POST['experience'];

    $queryPersonal = "INSERT INTO PERSONAL (FIRSTNAME, LASTNAME, PHONE, EMAIL, EDUCATION, ADRESSE, EXPERIENCE) VALUES ('$firstname', '$lastname', '$phone', '$email', '$education', '$adress', '$experience')";
    mysqli_query($connection, $queryPersonal) or die(mysqli_error($connection));

    $personalId = mysqli_insert_id($connection);

    $querySkill = "INSERT INTO SKILL (SKILL1, SKILL2, SKILL3) VALUES ('$skill_1', '$skill_2', '$skill_3')";
    mysqli_query($connection, $querySkill) or die(mysqli_error($connection));

    $skillId = mysqli_insert_id($connection);

    $queryGender = "INSERT INTO GENDER (Gende) VALUES ('$gender')";
    mysqli_query($connection, $queryGender) or die(mysqli_error($connection));
    $genderId = mysqli_insert_id($connection);

    // Fetch the country ID from the COUNTRY table
    $queryCountry = "SELECT id FROM COUNTRY WHERE id = $country";
    $resultCountry = mysqli_query($connection, $queryCountry);

    if ($rowCountry = mysqli_fetch_assoc($resultCountry)) {
        $countryId = $rowCountry['id'];

        $language = isset($_POST['language']) ? $_POST['language'] : '';
        $queryLang = "INSERT INTO LANG (LANG) VALUES ('$language')";
        mysqli_query($connection, $queryLang) or die(mysqli_error($connection));

        $langId = mysqli_insert_id($connection);

        $queryInfo = "INSERT INTO INFORMATION (id_skill, id_personal, id_gender, id_country, id_language) VALUES ('$skillId', '$personalId', '$genderId', '$countryId', '$langId')";
        mysqli_query($connection, $queryInfo) or die(mysqli_error($connection));

        $_SESSION['personal'] = $personalId;
        $_SESSION['skill'] = $skillId;
        $_SESSION['country'] = $countryId; // keep it 
                header("Location: cv.php");
    } else {
        die("Error: Unable to find country with ID $country");
    }
}
?>
