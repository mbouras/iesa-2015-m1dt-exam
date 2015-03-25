<?php
    $json = file_get_contents("planets.json");
    //var_dump(json_decode($json));
    $planets = json_decode($json);


    $NamePlanetsInTable = array();
    foreach ($planets as $key => $value) {
        array_push($NamePlanetsInTable, mb_strtolower($key));
    }
    //var_dump($NamePlanetsInTable);


    if(isset($_POST['planetSearch'])){
        $planetNameSearch = htmlspecialchars($_POST['planetSearch']);
        //echo $planetNameSearch;
        $planetNameSearch = mb_strtolower($planetNameSearch);

        if(in_array($planetNameSearch, $NamePlanetsInTable)){
            $planetNameSearch = ucfirst($planetNameSearch);
            header("location:detail.php?planet=$planetNameSearch");
        }
        else{
            header("location:index.php?error");
        }
    }

?>