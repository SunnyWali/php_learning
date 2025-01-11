<?php
$students=[
    "Mahima"=>"A",
    "Ramesh"=>"B",
    "Chanchal"=>"B",
    "Satyam"=>"C",
    "Krishna"=>"D"
    ];
    
    $grouped=[];
    foreach($students as $name=>$grade)
    {
        $grouped[$grade][]=$name;
    }
    
    foreach($grouped as $grade=>$name)
    {
        echo "Grade: ".$grade." "."Name: ".implode(",",$name)."\n";
    }
    ?>