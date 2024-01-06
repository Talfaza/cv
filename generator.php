

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>CV generator</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.9.4/css/bulma.min.css"
        integrity="sha512-HqxHUkJM0SYcbvxUw5P60SzdOTy/QVwA1JJrvaXJv4q7lmbDZCmZaqz01UPOaQveoxfYRv1tHozWGPMcuTBuvQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <form action="script.php" method="post">

        <section class="hero is-medium is-light">
            <div class="hero-body">
                <div class="column is-quarter is-centered">
                    <h1 class="title has-text-centered">CV GENERATOR</h1>
                    <label for="">First Name :</label>
                    <input name="firstname" class="input is-info" type="text" placeholder="Info input">

                    <br><br><label for="">Last Name :</label>
                    <input name="lastname" class="input is-info" type="text" placeholder="Info input">

                    <br><br><label for="">Phone :</label>
                    <input name="phone" class="input is-info" type="text" placeholder="Info input">

                    <br><br><label for="">Email :</label>
                    <input name="email" class="input is-info" type="email" placeholder="Info input">

                    <br><br><label for="">Education :</label>
                    <input name="education" class="input is-info" placeholder="Link textarea">

                    <br><br><label for="">Skills :</label><br><br>
                    <label for="">Skill 1 :</label>
                    <input name="skill_1" class="input is-info" placeholder="">
                    <label for="">Skill 2 :</label>
                    <input name="skill_2" class="input is-info" placeholder="">
                    <label for="">Skill 3 :</label>
                    <input name="skill_3" class="input is-info" placeholder="">

                    <br><br><label for="">Gender :</label><br>
                    <div class="control">
                        <label class="radio">
                            <input type="radio" name="gender" value="1">
                            Male
                        </label><br>
                        <label class="radio">
                            <input type="radio" name="gender" value="0">
                            Female
                        </label><br>

                        <br><br><label for="">Adresse :</label>
                        <input name="adresse" class="input is-info" placeholder="Link textarea">

                        <br><br><label for="">Country :</label>
                        <input name="country" class="input is-info" placeholder="Link textarea">

                        <br><br><label for="">Experience :</label>
                        <textarea name="experience" class="textarea is-info " placeholder="Link textarea"></textarea><br>
                        <input class="button is-info is-centered" name="submit" type="submit" value="Generate">
                    </div>

                </div>
            </div>
        </section>

    </form>

</body>

</html>
