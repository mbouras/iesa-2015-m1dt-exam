<?php 
    
    include ("traitement.php");
    $planetChoice = $_GET['planet'];
    echo $planetChoice;
    
    // $planetChoiceTable = $planets['Mercure'];
    // var_dump($planetChoiceTable);

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
                                <li><a href="detail.php?planete=<?php echo $key ?>"><?php echo $key?></a></li>
                            <?php } ?>
                    </ul>
                </nav>
            </div>
        </header>
        <section>
            <div id="planets">
                <?php
                    foreach ($planets as $key => $value) {?>
                        <p><?php echo $value->description ?></p>
                    <?php } ?>
                ?>
                <h2>PLANETE</h2>
                <div class="visual">
                    <img src="" alt=""/>
                </div>
                <p>Taille : km de diamètre</p>
                <p>Distance au soleil : UA</p>
                <p>Description</p>
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