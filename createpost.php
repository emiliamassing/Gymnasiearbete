<?php
    require_once("include/CApp.php");

    $posts = new CPosts($app);
    $posts->validateAndStoreForm();

    $app->renderHeader("Skapa Inlägg");
    
    $form = $app->form();

    echo('<h2>Skapa inlägg</h2>');
    $form->openFormContainer();
    $form->open();
        $form->createText("subject", "Rubrik");
        $form->createText("category", "Kategori");
        $form->createTextArea("text", "Skriv ditt inlägg här: ");
        $form->createSubmit("Posta");
    $form->close();
    $form->closeDiv();


    $app->renderFooter();
?>