<?php include 'template/components/header.php' ?>
<link rel="stylesheet" href="../template/styles/login_signup.css">

<div class="login_signup_supercontainer">


    <div class="login_signup_container">
        <h1>
        <?php
            if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
                echo "Inscription";
            } else {
                header('Location:' . 'http://' . $host . '/home');
                exit();
            }
            ?>
        </h1>

        <form class="login_signup" action=<?= "http://" . $host . "/functions/signUp" ?> method="POST">
            <div class="radiobox">
                <label class="role"><input name="role" type="radio" value="madame" checked>Madame</label>
                <label class="role"><input name="role" type="radio" value="monsieur">Monsieur</label>
                <label class="role"><input name="role" type="radio" value="autres">Autre(s)</label>
            </div>
            <div class="row">
                <input name="first_name" type="text" class="inputText" placeholder="Prénom" required>
            </div>
            <div class="row">
                <input name="last_name" type="text" class="inputText" placeholder="Nom de famille" required>
            </div>
            <div class="row">
                <input name="username" type="text" class="inputText" placeholder="Pseudo" required>
            </div>
            <div class="row">
                <input name="birthdate" type="date" class="inputText" placeholder="Date de naissance" required>
            </div>
            <div class="row">
                <input name="phone" type="tel" class="inputText" placeholder="Téléphone" minlength="10" maxlength="14" required>
            </div>
            <div class="row">
                <input name="email" type="mail" class="inputText" placeholder="Adresse e-mail" required>
            </div>
            <div class="row">
                <input name="password" type="password" class="inputText" placeholder="Mot de passe" required>
            </div>
            <div class="row">
                <input name="confirmedPassword" type="password" class="inputText" placeholder="Confirmation du mot de passe" required>
            </div>

            <input type="submit" class="Submitbutton" value="S'inscrire">

        </form>
    </div>

</div>
<?php include 'template/components/footer.php' ?>