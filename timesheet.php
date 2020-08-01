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

<div class="page-header">
    <h1>A.W.E.S.O.M -O 4000</h1>
    <p>The Timesheet Robot</p>
</div>

<div class="container">



  <!-- <form class="form" action="php\includes\php\sendData.php" method="post" id="submitTimesheet"> -->
  <form class="form" action="includes\php\sendData.php" method="post" id="submitTimesheet">

    <div class="row wrapper mt-3">

      <div class="col-lg-4 col-md-2 affix col-lg-2 text-center leftCol" id="leftCol">
        <!-- <h3>Change Pay Period</h3> -->
        <button type="button" class="btn btn-tsButton w-100 mt-0" data-toggle="modal" data-target="#myModal" id="payPeriodSelector">Change Pay Period</button>

        <!-- modal  -->
        <div class="modal" id="myModal">
          <div class="modal-dialog">
            <div class="modal-content">

              <!-- Modal Header -->
              <div class="modal-header">
                <h4 class="col modal-title text-center">Choose Year and Month</h4>
              </div>

              <!-- Modal body -->
              <div class="modal-body">
                <select class="form-control" name="year" id="year">
                  <option value="2020">2020</option>
                  <option value="2021">2021</option>
                  <option value="2022">2022</option>
                  <option value="2023">2023</option>
                  <option value="2024">2024</option>
                  <option value="2025">2025</option>
                </select>
                <select class="form-control" name="month" id="month">
                  <option value="1">January</option>
                  <option value="2">February</option>
                  <option value="3">March</option>
                  <option value="4">April</option>
                  <option value="5">May</option>
                  <option value="6">June</option>
                  <option value="7">July</option>
                  <option value="8">August</option>
                  <option value="9">September</option>
                  <option value="10">October</option>
                  <option value="11">November</option>
                  <option value="12">December</option>
                </select>

              </div>

              <!-- Modal footer -->
              <div class="modal-footer">
                <!-- <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button> -->
                <button type="button" class="btn btn-tsButton" id="createTimesheet" data-dismiss="modal">Create</button>
              </div>
            </div>
          </div>
        </div>




        <!-- <div class="form-group choosePayPeriod">
          <select class="form-control" name="year" id="year">
            <option value="2020">2020</option>
            <option value="2021">2021</option>
            <option value="2022">2022</option>
            <option value="2023">2023</option>
            <option value="2024">2024</option>
            <option value="2025">2025</option>
          </select>
          <select class="form-control" name="month" id="month">
            <option value="1">January</option>
            <option value="2">February</option>
            <option value="3">March</option>
            <option value="4">April</option>
            <option value="5">May</option>
            <option value="6">June</option>
            <option value="7">July</option>
            <option value="8">August</option>
            <option value="9">September</option>
            <option value="10">October</option>
            <option value="11">November</option>
            <option value="12">December</option>
          </select>
          <button type="button" class="btn btn-primary" id="createTimesheet">Create</button>
        </div> -->
        <div class="name">
          <h3 class="result"><?php echo $_SESSION["firstName"]." ".$_SESSION["lastName"]; ?></h3>
        </div>
        <div class="date">
          <h3 id="tsPayPeriod"></h3>
        </div>
        <div class="tallyHours">
          <br />
          <h3>Total Hours</h3>
          <h1 id="tallyHours">0</h1>
        </div>
        <div class="tallyShifts">
          <br />
          <h3>Total Shifts</h3>
          <h1 id="tallyShifts">0</h1>
        </div>
      </div>

      <div class="col-lg-4 grandparent middleCol" id="middleCol">
      </div>

      <div class="col-lg-4  grandparent rightCol" id="rightCol">
      </div>

    </form>
  </div>
  <div class="row">
    <div class="col-12 mx-auto">
      <button type="submit" class="btn btn-tsButton w-100 " form="submitTimesheet">Submit</button>
    </div>
  </div>
</div>

<!--Form Submit Success Modal -->
<div class="modal fade" id="submitSuccessModal" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">SUCCESS</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <p>Timesheet has been submitted</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

</body>








</body>
</html>
