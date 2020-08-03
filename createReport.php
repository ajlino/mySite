?<?php

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
   <script src="includes\js\createReport.js"></script>
 </head>

 <body>

 <div class="page-header">
     <h1>A.W.E.S.O.M -O 4000</h1>
     <p>The Timesheet Robot</p>
 </div>

<div class="container-fluid">
  <form class="form" action="includes\php\createReportDataHandler.php" id="createReport" method="post" >
    <div class="row">
      <div class="col">
        <div class="form-group text-center">
          <button type="submit" class="adminButton">Current Month</button>
          <br />
        </div>
      </div>
    </div>
  </form>

  <div class="debug" id="debug">
  </div>

  <div class="report">
    <table id="table">
    </table>
  </div>
</div>

</body>
