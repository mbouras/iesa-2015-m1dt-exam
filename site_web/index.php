<?php 
    //include 'traitement.php';
$json = file_get_contents("planets.json");

var_dump(json_decode($json));

?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="author" content="Marine BOURAS MDT1">
        <meta name="description" content="La liste complète de toutes les planètes de notre système solaire !">
        <title>PlanetsOfSun : Les planètes du système solaire !</title>

        <link rel="stylesheet" media="screen" href="css/desktop.css" />
        <link rel="stylesheet" media="screen and (max-width: 640px)" href="css/mobile.css" />
        
        <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=set_to_true_or_false"></script>
        <script type="text/javascript" src="js/maps.js"></script>
    </head>
    <body>
        <header>
            <div id="head">
                <div id="logo" class="inline-block">
                    <h1><a href="index.php">Planets Of Sun</a></h1>
                </div>
                <nav class="inline-block">
                    <ul>
                        <li><a href="index.html">Accueil</a></li>
                        <li><a href="detail.html">Détail</a></li>
                    </ul>
                </nav>
            </div>
        </header>
        <section>
            <div id="planets">
                <h2>Les différentes planètes</h2>
                <ul>
                    <li>
                        <h3><?php //$planetName = $planets->{'Mercure'};?></h3>
                        <p>Taille : km de diamètre</p>
                        <p>Distance au soleil : UA</p>
                        <p>Description (100 1er caract.)</p>
                        <a href="detail.html">+ d'infos</a>
                    </li>
                    <li>
                        <h3>Planète 1</h3>
                        <p>Taille</p>
                        <p>Distance au soleil</p>
                        <p>Description (100 1er caract.)</p>
                        <a href="detail.html">+ d'infos</a>
                    </li>
                    <li>
                        <h3>Planète 1</h3>
                        <p>Taille</p>
                        <p>Distance au soleil</p>
                        <p>Description (100 1er caract.)</p>
                        <a href="detail.html">+ d'infos</a>
                    </li>
                    <li>
                        <h3>Planète 1</h3>
                        <p>Taille</p>
                        <p>Distance au soleil</p>
                        <p>Description (100 1er caract.)</p>
                        <a href="detail.html">+ d'infos</a>
                    </li>
                    <li>
                        <h3>Planète 1</h3>
                        <p>Taille</p>
                        <p>Distance au soleil</p>
                        <p>Description (100 1er caract.)</p>
                        <a href="detail.html">+ d'infos</a>
                    </li>
                    <li>
                        <h3>Planète 1</h3>
                        <p>Taille</p>
                        <p>Distance au soleil</p>
                        <p>Description (100 1er caract.)</p>
                        <a href="detail.html">+ d'infos</a>
                    </li>
                    <li>
                        <h3>Planète 1</h3>
                        <p>Taille</p>
                        <p>Distance au soleil</p>
                        <p>Description (100 1er caract.)</p>
                        <a href="detail.html">+ d'infos</a>
                    </li>
                    <li>
                        <h3>Planète 1</h3>
                        <p>Taille</p>
                        <p>Distance au soleil</p>
                        <p>Description (100 1er caract.)</p>
                        <a href="detail.html">+ d'infos</a>
                    </li>
                </ul>
            </div>
            <div id="search">
                <h2>Plus d'infos sur une planète ?</h2>
                <p>Saisissez le nom de la planète dans le champ ci-dessous et valider votre recherche en cliquant sur le bouton <span>"Rechercher"</span>.</p>
                <form name="searchForm" method="post" action="traitement.php">
                    <input type="text" name="search" value="" />
                    <input type="submit" name"searchButton" value="Rechercher" />
                </form>
            </div>
            <h2>Maps</h2>
            <div id="maps">
                
            </div>
        </section>
        <footer>
            <small>&copy;2015 PlanetsOfSun - Tous droits réservés</small>
        </footer>
    </body>
</html>