<?php 
    
    include ("traitement.php");
    $planetChoice = $_GET['planet'];
    //echo $planetChoice;

?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="author" content="Marine BOURAS MDT1">
        <meta name="description" content="La liste complète de toutes les planètes de notre système solaire !">
        <title>PlanetsOfSun : LA PLANETE</title>

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
                                <li><a href="detail.php?planet=<?php echo $key; ?>"><?php echo $key?></a></li>
                            <?php } ?>
                    </ul>
                </nav>
            </div>
        </header>
        <section class="details">
            <div id="planets">
                <h2><?php echo $planetChoice; ?></h2>
                <div class="visual">
                    <img src="<?php echo $planets->$planetChoice->image; ?>" alt=""/>
                </div>
                <p><span>Taille :</span> <?php echo $planets->$planetChoice->taille; ?>km de diamètre</p>
                <p><span>Distance au soleil :</span> <?php echo $planets->$planetChoice->distance; ?> UA</p>
                <p><?php echo $planets->$planetChoice->description; ?></p>
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