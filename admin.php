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
  <script src="includes\js\newTimesheet.js"></script>
  <script type="text/javascript" src="includes/js/button-toggle.js"></script>
  <script src="includes/js/countHours.js"></script>
  <script src="includes\js\timeSheetSubmitAjax.js"></script>
</head>

<body>
<div class="container">
  <div class="page-header">
      <h1>A.W.E.S.O.M -O 4000</h1>

        <div class="row justify-content-center">
          <div class="col">
          </div>
          <div class="col">
                <p>The Timesheet Robot</p>
                <p class="admin">Administrative</p>
          </div>
          <div class="col">
            <form action="logout.php">
              <button type="submit"  class="btn btn-tsButton logout" id="logout">Logout</button>
            </form>
          </div>
        </div>
      </div>
  </div>


<div class="container">
  <div class="row">
    <div class="col">
      <div class="form-group text-center">
        <form action="createReport.php">
          <button type="submit" class="adminButton">Create Report</button>
        </form>
        <br />
        <form action="timesheet.php">
          <button type="submit" class="adminButton">New Timesheet</button>
        </form>
      </div>

    </div>
  </div>
</div>
