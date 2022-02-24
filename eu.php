<?php

    function euStates(){

        $eu_states = array("Belgium",
        "Germany",
        "France",
        "Italy",
        "Luxembourg",
        "The Netherlands",
        "Denmark",
        "Ireland",
        "Greece",
        "Portugal",
        "Spain",
        "Finland",
        "Austria",
        "Sweden",
        "Cyprus",
        "Estonia",
        "Hungary",
        "Latvia",
        "Lithuania",
        "Malta",
        "Poland",
        "Slovenia",
        "Slovakia",
        "Czech Republic",
        "Bulgary",
        "Romania",
        "Croatia");
        
        $totalStates = sizeof($eu_states);
        sort($eu_states);

        echo "<p>The European Union counts $totalStates member states since 2007.</p>";
        echo "<h5>The entire list of member states, arranged alphabetically</h5>";
        echo "<ol>";
        foreach($eu_states as $value){
            echo "<li>$value</li>";
        };
        echo "</ol>";
    };

?>