



$(document).ready(function(){


	var y;
	var m;

	if (localStorage.getItem("month") != null){
		m=parseInt(localStorage.getItem("month"));
		y=parseInt(localStorage.getItem("year"));
		localStorage.clear();
	} else {
		m=moment().get('month');
		y=moment().get('year');
	}

		$("#tsPayPeriod").text(m+" "+y);
		$("#month").val(m);
		$("#year").val(y);

		// $("#timesheetPeriod").text(moment(new Date(y,m)).format("YYYY MMMM"));

		// var y=$("#yr").val();
		// var m=$("#mth").val();
		var momentOrigin=moment(new Date(y, m-1, 1));
		var lastDay=momentOrigin.clone().endOf("month");
		lastDay=lastDay.get("date");	//convert to an integer
			//calculates the last day of the given month
		console.log(lastDay);
		$("#tsPayPeriod").text(momentOrigin.format("MMMM")+" "+y);

		var momentClone=momentOrigin.clone();

		var monthMiddle;

		if (lastDay==31){
			monthMiddle = 16;
		} else if (lastDay == 29){
			monthMiddle =15;
		} else {
			monthMiddle=(lastDay/2);
		}


	//Math floor rounds down if there is a remainder
  for (var x=1; x<monthMiddle; x++){
		momentClone=momentOrigin.clone().add(x-1, "days");
    var formDate = momentClone.format("dd, MMM DD");
    var html='<div class="input-group"> <div class="input-group-prepend"> <span class="input-group-text">'+formDate+'</span> </div> <div class="btn-group"> <button type="button" class="btn btn-secondary" data-selected="false" value="10">10</button> <button type="button" class="btn btn-secondary" data-selected="false" value="8">8</button> </div> <input type="number" name="hoursDay'+x+'" id="hoursDay'+x+'" class="form-control text-center totHoursBox" min="0" max="99" placeholder="0" value=0 aria-label="Input group example" aria-describedby="btnGroupAddon"></input> </div>'
    $("#middleCol").append(html);


  }
  for (var x=monthMiddle; x<(lastDay); x++){
		momentClone=momentOrigin.clone().add(x, "days");
    var formDate = momentClone.format("dd, MMM DD");
		var html='<div class="input-group"> <div class="input-group-prepend"> <span class="input-group-text">'+formDate+'</span> </div> <div class="btn-group"> <button type="button" class="btn btn-secondary" data-selected="false" value="10">10</button> <button type="button" class="btn btn-secondary" data-selected="false" value="8">8</button> </div> <input type="number" name="hoursDay'+x+'" id="hoursDay'+x+'" class="form-control text-center totHoursBox" min="0" max="99" placeholder="0" value=0 aria-label="Input group example" aria-describedby="btnGroupAddon"></input> </div>'
    $("#rightCol").append(html);

  }

  // $(".btn-secondary").click(function(){
  //   if ($(this).attr("data-selected")=="true"){
  //     $(this).css("background-color", "grey");
  //     $(this).attr("data-selected","false");
  //     $(this).parentsUntil(".grandparent").find(".value")
  //       .css("background-color", "white")
  //       .css("color", "black")
  //       .val(0);
	//
  //   } else{
  //    $(this).css("background-color", "navy");
  //    $(this).siblings()
  //      .attr("data-selected", "false")
  //      .css("background-color", "grey");
  //    $(this).attr("data-selected","true");
  //    $(this).parentsUntil(".grandparent").find(".value")
  //      .css("background-color", "white")
  //      .css("color", "black")
  //      .val($(this).val());
  //   }
  // });

});
