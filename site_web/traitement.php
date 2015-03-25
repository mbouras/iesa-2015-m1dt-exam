<?php
    $json = file_get_contents("planets.json");

    var_dump(json_decode($json));

?>