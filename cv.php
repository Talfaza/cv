<?php session_start();?>

<?php 



function gender(){
      if ($_SESSION['gender'] == 1) {
            return "Male";
      } else {
            return "Female";
      }

}

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

            <br><br><br><i class="fa-solid fa-user fa-sm"></i>
            <h1 class="title is-5" style="display: inline-block; margin-left: 10px;">First name :</h1>
            <?php echo $_SESSION['firstname'];?>

            <br><br><i class="fa-solid fa-user fa-sm"></i>
            <h1 class="title is-5" style="display: inline-block; margin-left: 10px;">Last name :</h1>
            <?php echo $_SESSION['lastname'];?>

            <br><br><i class="fa-solid fa-phone fa-sm"></i>
            <h1 class="title is-5" style="display: inline-block; margin-left: 10px;">Phone :</h1>
            <?php echo $_SESSION['phone'];?>

            <br><br><i class="fa-solid fa-envelope fa-sm"></i>
            <h1 class="title is-5" style="display: inline-block; margin-left: 10px;">Email :</h1>
            <?php echo $_SESSION['email'];?>

            <br><br><i class="fa-solid fa-book fa-sm"></i>
            <h1 class="title is-5" style="display: inline-block; margin-left: 10px;">Education :</h1>
            <?php echo $_SESSION['education'];?>

            <br><br><i class="fa-solid fa-gear fa-sm"></i>
            <h1 class="title is-5" style="display: inline-block; margin-left: 10px;">Skill 1 :</h1>
            <?php echo $_SESSION['skill_1'];?>
            <br><br><i class="fa-solid fa-gear fa-sm"></i>
            <h1 class="title is-5" style="display: inline-block; margin-left: 10px;">Skill 2 :</h1>
            <?php echo $_SESSION['skill_2'];?>
            <br><br><i class="fa-solid fa-gear fa-sm"></i>
            <h1 class="title is-5" style="display: inline-block; margin-left: 10px;">Skill 3 :</h1>
            <?php echo $_SESSION['skill_3'];?>
            
            <br><br><i class="fa-solid fa-venus-mars fa-sm"></i>
            <h1 class="title is-5" style="display: inline-block; margin-left: 10px;">Gender :</h1>
            <?php echo gender();?>
            


            <br><br><i class="fa-solid fa-globe fa-sm"></i>
            <h1 class="title is-5" style="display: inline-block; margin-left: 10px;">Country :</h1>
            <?php echo $_SESSION['country'];?>

            <br><br><i class="fa-solid fa-lightbulb fa-sm"></i>
            <h1 class="title is-5" style="display: inline-block; margin-left: 10px;">Experience :</h1>
            <?php echo $_SESSION['experience'];?>    <br><br>

  


        </div>
        <div class="column"></div>
        <div class="column"></div>
        <br><br>
    </div>

</body>

</html>
