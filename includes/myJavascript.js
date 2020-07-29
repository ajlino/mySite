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





  for (var x=0; x<10; x++){
    var html='<div class="btn-toolbar mb-3" role="toolbar" aria-label="Toolbar with button groups"> <div class="input-group-prepend"> <span class="input-group-text" id="basic-addon1">Monday, January 1</span> </div> <div class="btn-group btn-group-sm mr-2" role="group" aria-label="First group"> <button type="button" class="btn btn-secondary" data-selected="false" value="10">10</button> <button type="button" class="btn btn-secondary" data-selected="false" value="8">8</button> <button type="button" class="btn btn-secondary" data-selected="false" value="">Other</button> </div> <div class="input-group w-25"> <input type="text" name="hoursDay'+x+'" class="form-control text-center value" placeholder="Enter Hours" value="0" aria-label="Input group example" aria-describedby="btnGroupAddon"></input> </div></div>'
    $("#leftCol").append(html);
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
