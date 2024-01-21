<?php session_start();

ob_start();

include_once "database/database.php";
ob_end_clean();

$countryId = $_SESSION['country'];
$personalId = $_SESSION['personal'];
$skillId = $_SESSION['skill'];
$genderQuery = "SELECT Gende FROM GENDER";
$result = mysqli_query($conn, $genderQuery);

function gender($result) {
    $row = mysqli_fetch_assoc($result);

    if (isset($row['Gende']) && $row['Gende'] == 1) {
        return "Male";
    } else {
        return "Female";
    }
}

$queryCountrySelect = "SELECT * FROM CV.COUNTRY WHERE id = $countryId";
$countryResult  = mysqli_query($conn, $queryCountrySelect);
$row = mysqli_fetch_assoc($countryResult);

$queryPersonalSelect = "SELECT * FROM CV.PERSONAL WHERE id = $personalId";
$personalResult = mysqli_query($conn, $queryPersonalSelect);
$rowPersonal = mysqli_fetch_assoc($personalResult);

$querySkillSelect = "SELECT * FROM CV.SKILL WHERE id = $skillId";
$skillResult = mysqli_query($conn, $querySkillSelect);
$rowSkill = mysqli_fetch_assoc($skillResult);




  

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.9.4/css/bulma.min.css"
        integrity="sha512-HqxHUkJM0SYcbvxUw5P60SzdOTy/QVwA1JJrvaXJv4q7lmbDZCmZaqz01UPOaQveoxfYRv1tHozWGPMcuTBuvQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

    <div class="columns is-gapless">
        <div class="column"></div>
        <div class="column">

            <figure class="image is-128x128">
                <img class="is-rounded" src="img/pfp.jpg">
            </figure>

            <br><br><i class="fa-solid fa-user fa-sm"></i>
            <h1 class="title is-5" style="display: inline-block; margin-left: 10px;">First name :</h1>
            <?php echo $rowPersonal['FIRSTNAME'];?>

            <br><br><i class="fa-solid fa-user fa-sm"></i>
            <h1 class="title is-5" style="display: inline-block; margin-left: 10px;">Last name :</h1>
            <?php echo $rowPersonal['LASTNAME'];?>

            <br><br><i class="fa-solid fa-phone fa-sm"></i>
            <h1 class="title is-5" style="display: inline-block; margin-left: 10px;">Phone :</h1>
            <?php echo $rowPersonal['PHONE'];?>

            <br><br><i class="fa-solid fa-envelope fa-sm"></i>
            <h1 class="title is-5" style="display: inline-block; margin-left: 10px;">Email :</h1>
            <?php echo $rowPersonal['EMAIL'];?>

            <br><br><i class="fa-solid fa-book fa-sm"></i>
            <h1 class="title is-5" style="display: inline-block; margin-left: 10px;">Education :</h1>
            <?php echo $rowPersonal['EDUCATION'];?>

            <br><br><i class="fa-solid fa-lightbulb fa-sm"></i>
            <h1 class="title is-5" style="display: inline-block; margin-left: 10px;">Experience :</h1>
            <?php echo $rowPersonal['EXPERIENCE'];?>

            <br><br><i class="fa-solid fa-gear fa-sm"></i>
            <h1 class="title is-5" style="display: inline-block; margin-left: 10px;">Skill 1 :</h1>
            <?php echo $rowSkill['SKILL1'];?>
            <br><br><i class="fa-solid fa-gear fa-sm"></i>
            <h1 class="title is-5" style="display: inline-block; margin-left: 10px;">Skill 2 :</h1>
            <?php echo $rowSkill['SKILL2'];?>
            <br><br><i class="fa-solid fa-gear fa-sm"></i>
            <h1 class="title is-5" style="display: inline-block; margin-left: 10px;">Skill 3 :</h1>
            <?php echo $rowSkill['SKILL3'];?>
            
            <br><br><i class="fa-solid fa-venus-mars fa-sm"></i>
            <h1 class="title is-5" style="display: inline-block; margin-left: 10px;">Gender :</h1>
            <?php echo gender($result);?>
            


            <br><br><i class="fa-solid fa-globe fa-sm"></i>
            <h1 class="title is-5" style="display: inline-block; margin-left: 10px;">Country :</h1>
            <?php echo $row['country_name'];?>

            <br><br><i class="fa-solid fa-lightbulb fa-sm"></i>
            <h1 class="title is-5" style="display: inline-block; margin-left: 10px;">Experience :</h1>
            <?php echo $_SESSION['experience'];?>    <br><br>

  


        </div>
        <div class="col umn"></div>
        <div class="column"></div>
        <br><br>
    </div>

</body>

</html>
