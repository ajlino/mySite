<?php

include_once 'timesheetDBH.php';
$tableName="august2020";

//Make an array ($fieldArray) of all of the column(field) names
$sql = "SELECT * FROM $tableName";
$result = mysqli_query($conn, $sql);
$fieldArray = array();
$count = mysqli_num_fields($result);
for ($x=0; $x<$count; $x++){
  $fieldName= (mysqli_fetch_field_direct($result, $x))->name;
  array_push($fieldArray, $fieldName);
}

//Get array of unique names from schedule
$sql = "SELECT * FROM $tableName";
$result = mysqli_query($conn, $sql);
$data = array();
if (mysqli_num_rows($result) > 0) {
 // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    foreach($row as $value){
    array_push($data, $value);
    }
  }
}
//only include unique names in the array; get rid of duplicates
$uniqueNames = array_unique($data);
//sort alphabetically
sort($uniqueNames);
$allArrays = array(); //will be a 2 dimensional array

//create array starting with attending name, then all columns name appears in, then break
foreach($uniqueNames as $name){
  //name of array will be exp: $Linovitz_array
  ${$name.'_array'} = array();  //wrapping in {} allows for dynamic naming of array!!
  array_push(${$name.'_array'}, $name);
  foreach($fieldArray as $field){
    $sql = "SELECT $field FROM $tableName WHERE $field = '$name'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0){
      array_push(${$name.'_array'}, $field);
    }
  }
  array_push($allArrays, ${$name.'_array'});
}
echo json_encode($allArrays);


mysqli_close($conn);

?>
