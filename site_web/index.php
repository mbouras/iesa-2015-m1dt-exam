<?php 
    include 'traitement.php';
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
                        <?php
                            foreach ($planets as $key => $value) {?>
                                <li><a href="detail.php?planet=<?php echo $key ?>"><?php echo $key?></a></li>
                            <?php } ?>
                    </ul>
                </nav>
            </div>
        </header>
        <section>
            <div id="planets">
                <h2>Les différentes planètes</h2>
                <ul>
                    <?php 
                        foreach ($planets as $key => $value) { ?>
                            <li>
                                <h3><?php echo $key ?></h3>
                                <div class="visual">
                                    <img src="<?php echo $value->image ?>" alt="<?php echo $key ?>"/>
                                </div>
                                <p>Taille : <?php echo $value->taille ?> km de diamètre</p>
                                <p>Distance au soleil : <?php echo $value->distance ?> UA</p>
                                <p><?php echo substr($value->description, 0, 100);?>…</p>
                                <a href="detail.php?planet=<?php echo $key?>">+ d'infos</a>
                            </li>
                        <?php } ?>
                </ul>
            </div>
            <div id="search">
                <h2>Plus d'infos sur une planète ?</h2>
                <p>Saisissez le nom de la planète dans le champ ci-dessous et valider votre recherche en cliquant sur le bouton <span>"Rechercher"</span>.</p>
                <form name="searchForm" method="post" action="traitement.php">
                    <input type="text" name="planetSearch" value="" />
                    <input type="submit" name"search" value="Rechercher" />
                </form>
                <?php
                    if(isset($_GET['error'])){
                        $errorMessage = "Désolé, cette planète n'existe pas. Veuillez essayer une nouvelle recherche.";
                        echo '<p class="error">'.$errorMessage.'</p>';
                    }
                ?>
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