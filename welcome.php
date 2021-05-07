 <?php
    require_once("include/CApp.php");

    $app->loggedInOrAbort(); //Denhär ska du ha i gymnasiearbetet för helvete
?>

<?php 
    $app->renderHeader("Välkommen");
?>
    <p>Välkommen som inloggad.</p>

<?php
    $app->renderFooter();
?>