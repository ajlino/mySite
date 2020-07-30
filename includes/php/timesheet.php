<?php

session_start();

$tableName="timesheet3";

include_once 'timesheetDBH.php';

$id = $_SESSION['id'];
$year = $_POST['yr'];
$month = $_POST['mth'];
$firstName = $_SESSION['firstName'];
$lastName = $_SESSION['lastName'];

$_SESSION['year'] = $year;
$_SESSION['month'] = $month;

$sql="SELECT * FROM $tableName WHERE id='$id' AND yr='$year' AND mth='$month'";
$result=mysqli_query($conn, $sql);

if (mysqli_num_rows($result)>0){
    $x=0;
}
else{
    $sql = "INSERT INTO $tableName (id, firstName, lastName, yr, mth) VALUES ('$id', '$firstName', '$lastName', '$year', '$month')";
        if (mysqli_query($conn, $sql)) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }

}




for ($i=1; $i<32; $i++){
    $day='day'.$i;
    $rb="radioButton_Day".$i;
    $memo="memoDay".$i;
    if (isset($_POST[$rb])){
      $rbValue=$_POST[$rb];
      $memoValue=$_POST[$memo];
    } else {
      $rbValue=null;
      $memoValue=null;
    }

    $sql = "UPDATE $tableName SET $day='$rbValue', $memo='$memoValue' WHERE id='$id' AND yr='$year' AND mth='$month'";
    mysqli_query($conn,$sql);
}



//foreach ($_POST as $rbValue){
//    //Here we create a SQL statement that insert data into our database
//    $rbValue=(int)$rbValue; //Convert string to integer value
//    $day='day'.$x;
//	$sql = "UPDATE timesheet2 SET $day=$rbValue WHERE name='$name' AND yr='$year' AND mth='$month'";
//    $x++;
//
//    //Here we "query" the data in the database
//	mysqli_query($conn, $sql);
//}
//
//
//
//
if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();

?>
