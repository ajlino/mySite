<?php
  session_start();
?>

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
  <script src="js/getDateforNewSheet.js"></script>
  <script src="js/timeSheetSubmitAjax.js"></script>
  <script src="includes\js\newTimesheet.js"></script>

</head>

<body>

<div class="jumbotron">
    <h1>A.W.E.S.O.M -O 4000</h1>
    <p>The Website Robot</p>
</div>

<div class="container">



  <!-- <form class="form" action="php\includes\php\sendData.php" method="post" id="submitTimesheet"> -->
    <div class="row wrapper mt-3 ">

      <div class=" col-lg text-center leftCol" id="leftCol">
        <h3>Pay Period</h3>
        <div class="form-group choosePayPeriod">
          <select class="form-control" id="year">
            <option value="2020">2020</option>
            <option value="2021">2021</option>
            <option value="2022">2022</option>
            <option value="2023">2023</option>
            <option value="2023">2023</option>
            <option value="2023">2023</option>
          </select>
          <select class="form-control" id="month">
            <option value="0">January</option>
            <option value="1">February</option>
            <option value="2">March</option>
            <option value="3">April</option>
            <option value="4">May</option>
            <option value="5">June</option>
            <option value="6">July</option>
            <option value="7">August</option>
            <option value="8">September</option>
            <option value="10">November</option>
            <option value="11">December</option>
          </select>
          <button type="button" class="btn btn-primary" id="createTimesheet">Create</button>
        </div>
        <div class="name">
          <h3 class="result"><?php echo $_SESSION["firstName"]." ".$_SESSION["lastName"]; ?></h3>
        </div>
        <div class="date">
          <h3 id="tsPayPeriod"></h3>
        </div>
      </div>


      <div class=" col-lg  grandparent middleCol" id="middleCol">
      </div>

      <div class=" col-lg grandparent rightCol" id="rightCol">

      </div>


    </div>
</div>

</body>








</body>
</html>
