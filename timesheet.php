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

</head>

<body>

<div class="jumbotron">
    <h1>A.W.E.S.O.M -O 4000</h1>
    <p>The Website Robot</p>
</div>

<div class="container">

  <div class="row">
    <div class="col-12 topCol">
      <div class="name">
        <h3 class="result"><?php echo $_SESSION["firstName"]." ".$_SESSION["lastName"]; ?></h3>
      </div>
      <div class="date">
        <h3 id="tsPayPeriod"></h3>
      </div>
    </div>
  </div>

  <!-- <form class="form" action="php\includes\php\sendData.php" method="post" id="submitTimesheet"> -->
    <div class="row justify-content-center ">
      <div class="col-4  grandparent leftCol" id="leftCol">
      </div>

      <div class="col-4 grandparent" id="rightCol">
      </div>

      <div class="col-4 farRightCol" id="farRightCol">
        <p>Hello</p>
      </div>
    </div>

</div>

</body>








</body>
</html>
