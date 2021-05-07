<?php

require_once("include/CApp.php");

$app->user()->handleLoginAttempt();


//print_r_pre($_SESSION);

$app->renderHeader("Inloggning");


//print_r_pre($_POST);
?>

<h2>Logga in</h2>

<?php

$form = $app->form();
$form->openFormContainer();
$form->open();
    $form->createText("username", "Ange användarnamn: ");
    $form->createPassword("password", "Ange lösenord: ");

    $form->createSubmit("Logga in");
$form->close();
$form->closeDiv();
//$app->user()->renderLoginForm();
?>

<p>Har du inget konto? Registrera dig <a href="register.php" class="registerLink">här</a></p>

<?php
$app->renderFooter();
?>