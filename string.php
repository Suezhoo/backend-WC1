<?php
    function splitName($name){
        echo "<h4>Using splitName()</h4>";
        $pos = strpos($name," ");
        if($pos == false) die;
        else{
            echo "<p>Full name: $name</p>";
            $firstname = substr($name, 0, $pos);
            $lastname = substr($name, $pos, strlen($name)-$pos);
            echo "<ul><li>First name: $firstname</li> <li>Last name: $lastname</li></ul>";
        }
    };

    function joinNames($firstname,$lastname){
        echo "<h4>Joining names</h4>";
        $fullname = $firstname . " " . $lastname;
        echo $fullname;
    }
?>