<!-- single dimensional array -->
 <!-- <?php
$array=[1,2,3,4,5];
for($i=0;$i<count($array);$i++)
{
    print_r($array[$i]." ");
}
?> -->

<!-- associative array -->
<!-- <?php
$array=[
    1=>"Sunny",
    2=>"Ramesh",
    3=>"Devanand",
];

print_r($array[2]);
?> -->

<!-- multi-dimensional array is used to store the data in the tabular form-->

<!-- <?php
$array=[
    "firstName" => "Sunny",
    "lastName" => "Wali",
    "course" => "MCA",
    "section" => "B",
    "university" => "Quantum University",
];

print_r($array);
?> -->

 <!-- Single person -->
<?php
$person1 = [
  'first_name' => 'Brad',
  'last_name' => 'Traversy',
  'email' => 'brad@gmail.com',
];

// Array of people
$people = [
  $person1, //   [...$person1]
  [
    'first_name' => 'John',
    'last_name' => 'Doe',
    'email' => 'john@gmail.com',
  ],
  [
    'first_name' => 'Jane',
    'last_name' => 'Doe',
    'email' => 'jane@gmail.com',
  ],
];

var_dump($people);
?>