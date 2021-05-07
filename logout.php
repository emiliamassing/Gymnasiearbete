 <?php
    require_once("include/CApp.php");

    $app->user()->logout();
?>

<?php
    $app->renderHeader("Utloggad");
?>

<p>Du är nu utloggad.</p>

<?php
    $app->renderFooter();
?>