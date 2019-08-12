<?php
    require_once("model/person-query.php");

    $person = new person_model();
    $person_matrix = $person->get_people();

    require_once("view/person-view.php");




?>