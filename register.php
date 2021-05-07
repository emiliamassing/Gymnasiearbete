<?php
    require_once("include/CApp.php");

    if(!empty($_POST))
    {
        $username = $_POST["username"];
        $email = $_POST["email"];
        $password = $_POST["password"];

        $password = password_hash($password, PASSWORD_DEFAULT);

        $query = "INSERT INTO users (`username`, email, password, kind, numComments) 
        VALUES ('$username', '$email', '$password', 2, 0)";
        // die($query);
        $app->db()->query($query);
        die("Du är registrerad");
    }
?>

<?php
    $app->renderHeader("Registrera dig");
    ?>
    <h2>Skapa ett konto</h2>
    <?php

    $form = $app->form(); //referens

    $form->openFormContainer();
    $form->open();
        $form->createText("username", "Användarnamn: ");
        $form->createEmail("email", "E-post: ");
        $form->createPassword("password", "Lösenord: ");

        $form->createSubmit("Registrera dig");
        ?><p>Genom att skapa ett konto får du tillgång till att kunna kommentera blogginlägg.</p><?php
    $form->close();
    $form->closeDiv();
?>

<p>Har du redan ett konto? Logga in <a href="login.php" class="registerLink">här</a></p>


<?php
    $app->renderFooter();
?>