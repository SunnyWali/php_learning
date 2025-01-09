<?php
function swapReverse()
{
    $reversed=array();
    $fruits=array(
        "apple"=>1,
        "banana"=>2,
        "orange"=>5,
        "pineapple"=>6
        );
        foreach($fruits as $key=>$value)
        {
            $reversed[$value]=$key;
        }
        print_r($reversed);
}
swapReverse();
?>