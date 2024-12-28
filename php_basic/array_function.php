
<!-- count the array length -->
<!-- <?php
$a=[1,2,3,4,5];
$b=count($a);
print_r($b);
?> -->

<!-- search the array -->
 <!-- <?php
 $fruits=["banana","Apples","Pineapple"];
 echo in_array("Apples",$fruits);
 ?> -->

 <!-- push,pop,shift and unshift -->
  <!-- <?php
  $array=[1,2,3,4,5];
  array_push($array,6);
  print_r($array);
  ?> -->

<!-- <?php
  $array=[1,2,3,4,5];
  array_pop($array);
  print_r($array);
  ?> -->

  <!-- <?php
  $array=[1,2,3,4,5];
  array_unshift($array,0);
  print_r($array);
  ?> -->

 <!-- <?php
  $array=[1,2,3,4,5];
  array_shift($array);
  print_r($array);
  ?> -->


<!-- remove specific element -->
 <!-- <?php
 $arr=[1,2,3,4,5];
 unset($arr[2]);
 print_r($arr);
 ?> -->

 <!-- splits into chunks of 2 -->
  <!-- <?php
  $arr=[1,2,3,4,5];
  $chunked_array=array_chunk($arr,5);
  print_r($chunked_array);
  ?> -->

  <!-- concatenate two arrays -->
     <!-- <?php
   $a=[1,2,3,4,5];
   $b=[6,7,8,9,10];
   $c=array_merge($a,$b);
   print_r($c);
   ?> -->

   <!-- combine key and values -->
    <!-- <?php
    $a=[1,2,3];
    $b=["ramesh","sunny","devanand"];
    $c=array_combine($a,$b);
    $flipped=array_flip($c);
    print_r($flipped);
    ?> -->

    <!-- create an array of range from 1 to 20 -->
<?php
$num=range(1,20);
print_r($num);
?>
 