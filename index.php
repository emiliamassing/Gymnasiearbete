 <?php
    require_once("include/CApp.php");

    $app->renderHeader("Startsida");

    $posts = new CPosts($app);
    $posts->selectAndRenderAllNewsItems();
?>


                <h3>Ett ridpass i solen</h3>
                <img src="/Projekt_GymnasieArbete/img/Inlagg1.jpg" alt="Första inläggsbilden">
                <p>
                    Till min lycka sken solen när jag vaknade upp. Under den senaste perioden har snön vräkt ner, vilket jag inte har något emot men det underlättar alltid att vara i stallet under uppehållen. 
                    Det blir inte lika blött och det är helt enkelt behagligare att göra alla sysslor utan att allt hinner täckas av tjocka lager snö.
                </p>

                <p>
                    Jag beslutade mig för att åka till stallet under förmiddagen, klockan 11.00 för att vara mer specifik. 
                    Just för att både jag och hästarna skulle ha god tid på oss att vara i solen utan att behöva oroa oss för att mörkret skulle hinna komma.
                </p>

                <p>
                    Jag började med att ta in Merlin och insåg att ännu ett av hans täcken blivit genomblöta eftersom han står på lösdrift och därmed befinner sig ute hela tiden bortsett från när han är i hästarnas ligghall där de har ett bra skydd mot vinden. 
                    I vanlig ordning tog jag av honom hans täcke och hängde det på tork i sadelkammaren. Därefter började jag borsta honom och insåg att det verkligen var tur att jag åkt dit tidigt. Förutom svansen som var full i spån bestod hans hovskägg i vanlig ordning mer av is än päls. 
                    Efter kanske 20 minuters borstande var iallafall hans hovskägg i ett okej skick. Jag beslutade mig sedan för att vi skulle hitta på något i paddocken, troligen både uppsuttet och från marken.
                </p>

                <p>
                    Sagt och gjort så gick vi lite senare ut i paddocken och jag hoppade upp. I början var Merlin lite ofokuserad men efter en kort stund gick det mycket bättre. Vi fortsatte träna med fokus på att rida på volten i alla gångarter samt i mindre och större volter. 
                    Jag kan väl inte säga annat än att han gjorde ett riktigt bra jobb ifrån sig. Det är verkligen kul att se hur fort han kan utvecklas. Han sänker numera huvudet själv både i skritt och trav och det märks tydligt att han alltid gör sitt bästa ifrån sig och vill lyckas med vad jag ber honom om. 

                </p>

                <img src="/Projekt_GymnasieArbete/img/Inlagg2.jpg" alt="Andra inläggsbilden">
                <p>En bild från dagens träning i paddocken.</p>

                <p>
                    Jag valde lite senare att hoppa av och ta av honom tränset och så arbetade vi även lite från marken. Även det gick väldigt bra trots att det var ett tag sen vi arbetade tillsammans från marken. 
                    Vi tränade på lite allt möjligt, främst repetition. Övningarna blev ganska simpla, vi gjorde saker som parkering, flytta bogen, inkallningar mm. Efter det stod vi bara kvar i paddocken och han fick lite morot och massor av mys vilket blev uppskattat. 
                    Därefter fick han på sig ett torrt täcke och släpptes ut i hagen, jag plockade ihop alla saker och begav mig sedan hemåt, glad över det lyckade passet. 

                </p>
                <img src="/Projekt_GymnasieArbete/img/Inlagg3.jpg" alt="Tredje inläggsbilden">              
    <?php
        $app->renderFooter();
    ?>