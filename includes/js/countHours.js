
$(document).ready(function(){

  $("input[name^='hoursDay']").change(function(){
    var sumHours=0;
    var sumShifts=0;

    $("input[name^='hoursDay']").each(function(){
      sumHours+=Number($(this).val());
      if ($(this).val()>0){
        sumShifts++;
      }
      console.log($(this).val())
    });
    $("#tallyHours").text(sumHours);
    $("#tallyShifts").text(sumShifts);

    $(this).parentsUntil(".grandparent").find(".btn-secondary")
      .css("background-color", "#51616F")
      .attr("data-selected","false");



  });
});
