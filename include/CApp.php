<?php

session_start();

require_once("CDatabase.php");
require_once("CFormCreator.php");
require_once("CPosts.php");
require_once("CUser.php");

function print_r_pre($data)
{
    echo('<pre>');
    print_r($data);
    echo('</pre>');
}

function dd($data)
{
    print_r_pre($data);
    die();
}

function redirect(string $url)
{
    header("location: $url");
    die();
}

class CApp
{
    public function __construct()
    {
        $this->m_db = new CDatabase();
        $this->m_user = new CUser($this);
        $this->m_formCreator = new CFormCreator($this);
        $this->m_posts = new CPosts($this);
    }

    public function renderHeader(string $title)
    {
        for($i = 1; $i <= 2; $i++);
        {
            $lastestPosts=$this->db()->selectLatest("posts","ORDER BY id DESC");
        }
        ?>
        <!DOCTYPE html>
        <html lang="en">
        
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title><?php echo($title); ?></title>
            <link rel="stylesheet" href="style/general.css">
            <link rel="preconnect" href="https://fonts.gstatic.com">
            <link href="https://fonts.googleapis.com/css2?family=Crimson+Text:ital,wght@0,400;0,600;1,400&family=Great+Vibes&display=swap" rel="stylesheet">    
            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css"
            integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
            <link rel="icon" href="img/favicon.ico" alt="favicon"/>
        </head>
        
        <body>
        <header>
            <i id="showMenuIcon" class="fas fa-bars"></i>
        </header>
        <nav> 
            <i id="hideMenuIcon" class="fas fa-times"></i>
            <ul id="menu"> 
                <li><a href="/Projekt_GymnasieArbete/index.php" class="navLink">Start</a></li>
                <div class="dropdown">
                    <li>Senaste Inläggen</li>
                </div>
                <div class="dropdown">
                    <li>Kategorier</li>
                    <div class="dropdownContent">
                        <li><a href="#">Kategorier</a></li>
                    </div>
                </div>
                <div class="dropdown">
                    <li>Arkiv</li>
                    <div class="dropdownContent">
                        <li><a href="#">Arkiv</a></li>
                    </div>
                </div>
                <div class="dropdown">
                    <li>Länkar</li>
                    <div class="dropdownContent">
                        <li><a href="https://www.instagram.com/shiregardensmerlin/">Instagram</a></li>
                        <li><a href="https://www.janolsgarden.se/">Jan-Ols Gården</a></li>
                        <li><a href="http://stalldrangarna.blogspot.com/">Stalldrängarna</a></li>
                        <li><a href="http://www.norahkohle.se/international/">Norah Kohle</a></li>   
                    </div>
                </div>
                <?php
                    if($this->user()->isLoggedIn())
                    {
                        echo('<li><a href="/Projekt_GymnasieArbete/createpost.php" class="navLink">Skapa inlägg</a></li>');
                        echo('<li><a href="/Projekt_GymnasieArbete/logout.php" class="navLink">Logga ut</a></li>');
                    }
                    else
                    {
                        echo('<li><a href="/Projekt_GymnasieArbete/login.php" class="navLink">Logga in</a></li>');
                    }
                ?>
            </ul>
        </nav>
        <section class="container">
            <div class="content">
    <?php
    }

    public function renderSidebar()
    {
        ?>
            <aside>
                <h2>Om oss</h2>
                <div class="card">
                    <img src="/Projekt_GymnasieArbete/img/EmiliaMax650.jpg" alt="Emilia sidebar" class="SBarResponsive">
                    <h3><a href="/Projekt_GymnasieArbete/emilia.php">Emilia Mässing</a></h3>
                </div>
 
                <div class="card">
                    <img src="/Projekt_GymnasieArbete/img/MerlinMax650.jpg" alt="Merlin sidebar" class="SBarResponsive">
                    <h3><a href="/Projekt_GymnasieArbete/merlin.php">Shiregårdens Merlin</a></h3>
                </div>
 
                <div class="card">
                    <img src="/Projekt_GymnasieArbete/img/AramisMax650.jpg" alt="Aramis sidebar" class="SBarResponsive">
                    <h3><a href="/Projekt_GymnasieArbete/aramis.php">Tombo Aramis</a></h3>
                </div>
            </aside>
        <?php
    }

    public function renderFooter()
    {
        ?>
                </div>
                <?php
                $this->renderSidebar();
                ?>
                <footer>
                    <div class="footerLeft">
                        <ul>
                            <li><a href="/Projekt_GymnasieArbete/index.php">Start</a></li>
                            <li><a href="/Projekt_GymnasieArbete/emilia.php">Emilia Mässing</a></li>
                            <li><a href="/Projekt_GymnasieArbete/merlin.php">Shiregårdens Merlin</a></li>
                            <li><a href="/Projekt_GymnasieArbete/aramis.php">Tombo Aramis</a></li>
                            <?php 
                            if($this->user()->isLoggedIn())
                            {
                                echo('<li><a href="/Projekt_GymnasieArbete/createpost.php">Skapa inlägg</a></li>');
                                echo('<li><a href="/Projekt_GymnasieArbete/logout.php">Logga ut</a></li>');
                            }
                            else
                            {
                                echo('<li><a href="/Projekt_GymnasieArbete/login.php">Logga in</a></li>');
                            }
                            ?>
                        </ul>
                    </div>
                    <div class="footerRight">
                        <p>Länkar</p>
                        <div id="footerAds">
                            <div class="ads"><a href="https://www.instagram.com/shiregardensmerlin/"><img src="/Projekt_Gymnasiearbete/img/MerlinLinkImg.jpg" alt="Länk till Instagram"/>Instagram</a></div>
                            <div class="ads"><a href="https://www.janolsgarden.se/"><img src="/Projekt_Gymnasiearbete/img/JanolsLinkImg.jpg" alt="Länk till Jan-Ols Gården"/>Jan-Ols Gården</a></div>
                            <div class="ads"><a href="http://stalldrangarna.blogspot.com/"><img src="/Projekt_Gymnasiearbete/img/StalldrangarnaLinkImg.jpg" alt="Länk till Olivias Blogg"/>Stalldrängarna</a></div>
                        </div>
                    </div>
                </footer>
                
                </section>
                <script src="script/tools.js"></script>
            </body>
     
        </html>
        <?php
    }

    public function loggedInOrAbort()
	{
		if(!$this->user()->isLoggedIn())
		{
			die("Du får inte vara här!");
		}
	}

    public function &db()	{ return $this->m_db; }
    public function &user()	{ return $this->m_user; }
    public function &form() { return $this->m_formCreator; }
    public function &posts() { return $this->m_posts; }


    ///////////////////////////////
    private $m_db = null;
    private $m_user = null;
    private $m_formCreator = null;
    private $m_posts = null;
}



$app = new CApp();

?>