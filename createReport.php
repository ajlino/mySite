<?php

include_once 'includes\php\timesheetDBH.php';
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

//create array starting with attending name, then all columns name appears in, then break
foreach($uniqueNames as $name){
  ${$name.'_array'} = array();  //name of array will be exp: $Linovitz_array
  array_push(${$name.'_array'}, $name);
  foreach($fieldArray as $field){
    $sql = "SELECT $field FROM $tableName WHERE $field = '$name'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0){
      array_push(${$name.'_array'}, $field);
    }
  }
  // foreach(${'$name'.'array'} as $name_X){
  //   echo $name_X." |";
  // }
  // echo ("<br />");
}

foreach ($Linovitz_array as $data){
  echo $data." |";
}
echo "<br />";

foreach ($Hang_array as $data){
  echo $data." |";
}




mysqli_close($conn);

?>
<!--




<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title></title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <script src="includes/js/myJavascript.js"></script>
  <link rel="stylesheet" type="text/css" href="includes\css\myStyle.css">
  <script src="includes\js\moment.js"></script>
  <script src="includes\js\newTimesheet.js"></script>
  <script type="text/javascript" src="includes/js/button-toggle.js"></script>
  <script src="includes/js/countHours.js"></script>
  <script src="includes\js\timeSheetSubmitAjax.js"></script>
</head>

<body>

<div class="page-header">
    <h1>A.W.E.S.O.M -O 4000</h1>
    <p>The Timesheet Robot</p>
</div>

<div class="container"> -->
