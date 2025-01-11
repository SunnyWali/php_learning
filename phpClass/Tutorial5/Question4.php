<?php
$array1=array(
    array(1,2,3),
    array(4,5,6),
    array(7,8,9)
    );
    
    $array2=array(
        array(7,8,9),
        array(6,5,4),
        array(3,2,1)
        );
        
        $result=[];
        for($i=0;$i<3;$i++)
        {
            for($j=0;$j<3;$j++)
            {
                $result[$i][$j]=$array1[$i][$j]+$array2[$i][$j];
            }
        }
        
        echo"<h2>The result is </h2>";
        echo "<table border='1'>";
        for($i=0;$i<3;$i++)
        {
            echo "<tr>";
            for($j=0;$j<3;$j++)
            {
                echo "<td>".$result[$i][$j]."</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
        ?>