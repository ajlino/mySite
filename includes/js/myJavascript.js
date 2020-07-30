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
		$("#mth").val(m);
		$("#yr").val(y);
		$("#year").val(y);
		$("#month").val(m-1);

		// $("#timesheetPeriod").text(moment(new Date(y,m)).format("YYYY MMMM"));

		// var y=$("#yr").val();
		// var m=$("#mth").val();
		var momentOrigin=moment(new Date(y, m-1, 1));
		var lastDay=momentOrigin.clone().endOf("month");	//calculates the last day of the given month
		$("#tsPayPeriod").text(momentOrigin.format("MMMM")+" "+y);

		var momentClone=momentOrigin.clone();

  for (var x=1; x<11; x++){
    var dayOfMonth = momentClone.format("dddd, MMMM Do");
    var html='<div class="btn-toolbar mb-3" role="toolbar" aria-label="Toolbar with button groups"> <div class="input-group-prepend "> <span class="input-group-text" id="dayOfMonth">'+dayOfMonth+'</span> </div> <div class="btn-group btn-group-sm mr-2" role="group" aria-label="First group"> <button type="button" class="btn btn-secondary" data-selected="false" value="10">10</button> <button type="button" class="btn btn-secondary" data-selected="false" value="8">8</button> <button type="button" class="btn btn-secondary" data-selected="false" value="">Other</button> </div> <div class="input-group"> <input type="text" name="hoursDay'+x+'" class="form-control text-center value" placeholder="Enter Hours" value="0" aria-label="Input group example" aria-describedby="btnGroupAddon"></input> </div></div>'
    $("#leftCol").append(html);
    momentClone.add(1, "days");
  }
  for (var x=0; x<10; x++){
    $("#rightCol").append(html);
  }

  $(":button").click(function(){
    if ($(this).attr("data-selected")=="true"){
      $(this).css("background-color", "grey");
      $(this).attr("data-selected","false");
      $(this).parentsUntil(".grandparent").find(".value")
        .css("background-color", "white")
        .css("color", "black")
        .val(0);

    } else{
     $(this).css("background-color", "navy");
     $(this).siblings()
       .attr("data-selected", "false")
       .css("background-color", "grey");
     $(this).attr("data-selected","true");
     $(this).parentsUntil(".grandparent").find(".value")
       .css("background-color", "white")
       .css("color", "black")
       .val($(this).val());
    }
  });

});
