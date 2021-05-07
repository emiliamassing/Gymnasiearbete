<?php
    require_once("include/CApp.php");

    $app->renderHeader("Skapa Inlägg");
    
    $form = $app->form();

    $form->openFormContainer();
    $form->open();
        $form->createText("subject", "Rubrik");
        $form->createSubmit("Posta");
    $form->close();
    $form->closeDiv();
?>

                    <p>Här skapas inläggen</p>

                    <div class="formContainer">
                        <form class="posting-form">
                            <div class="form-group">
                                <label for="time">Ange tid:</label>
                                <input type="datetime-local" id="time" name="time" class="form-control">
                            </div>
                            
                            <div class="form-group">
                                <label for="heading">Rubrik: </label>
                                <input type="text" id="heading" name="heading" placeholder="Rubrik.." class="form-control">                              
                            </div>

                            <div class="form-group">
                                <label for="category">Kategori: </label>
                                    <select id="category" name="category" class="form-control">
                                        <option value="merlin">Merlin</option>
                                        <option value="aramis">Aramis</option>
                                        <option value="hacking">Uteritter</option>
                                        <option value="liberty">Frihetsdressyr</option>
                                        <option value="driving">Körning</option>
                                        <option value="walks">Promenader</option>
                                        <option value="dressage">Dressyr</option>
                                    </select>
                                    
                            </div>
                            
                            <div class="form-group">
                                <label for="post">Skriv ditt inlägg: </label>
                                <textarea id="post" name="post" rows="4" cols="50" placeholder="Skriv något.." class="form-control"></textarea>
                            </div>

                            <div class="form-group">   
                                <label for="pictures">Välj en fil: </label>
                                <input type="file" id="pictures" name="pictures" class="form-control">
                            </div>

                            <div class="form-group">
                                <button type="reset" class="form-control">Återställ</button>
                            </div>
    
                            <div class="form-group">
                                <button type="submit" value="posta" class="form-control">Posta</button>
                            </div>
                        </form>
                    </div>
<?php
    $app->renderFooter();
?>