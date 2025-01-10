<?php
function swapArray()
{
$array=[
    "apple"=>1,
    "banana"=>2,
    "orange"=>3,
    "papaya"=>4,
    "pineapple"=>5
    ];
    $reversed=[];
    foreach($array as $key=>$value)
    {
        $reversed[$value]=$key;
    }
    return $reversed;
}

echo "The swapped array are: ";
print_r(swapArray());
?>

    
    