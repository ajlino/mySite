<?php
session_start();
include_once 'timesheetDBH.php';
$tableName="august2020";

$lastName = $_SESSION['lastName'];
$year = $_POST['year'];
$month = $_POST['month'];

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

$match=false;

foreach($uniqueNames as $name){
  if ($name == $lastName){
    $match=true;
    //name of array will be exp: $Smith_array
    ${$name.'_array'} = array();//wrapping in {} allows for dynamic naming of array!!
    foreach($fieldArray as $field){
      $sql = "SELECT $field FROM $tableName WHERE $field = '$name'";
      $result = mysqli_query($conn, $sql);
      if (mysqli_num_rows($result) > 0){
        array_push(${$name.'_array'}, "x");
      } else{
        array_push(${$name.'_array'}, "0");
      }
    }
    echo json_encode(${$name.'_array'});
    mysqli_close($conn);
  }
}

if ($match == false){
  echo "no match";
  mysqli_close($conn);
}






  ?>
