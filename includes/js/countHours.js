
$(document).ready(function(){

  $("input[name^='hoursDay']").change(function(){
    sum=0;
    $("input[name^='hoursDay']").each(function(){
      sum+=Number($(this).val());
      console.log($(this).val())
    });
    $("#tallyHours").text(sum);

    $(this).parentsUntil(".grandparent").find(".btn-secondary")
      .css("background-color", "grey")
      .attr("data-selected","false");

  });
});
