$(document).ready(function(){
  $(".btn-secondary").click(function(){
    if ($(this).attr("data-selected")=="true"){
      $(this).css("background-color", "grey");
      $(this).attr("data-selected","false");
      $(this).parentsUntil(".grandparent").find(".totHoursBox")
        .css("background-color", "white")
        .css("color", "black")
        .val(0);

    } else{
     $(this).css("background-color", "navy");
     $(this).siblings()
       .attr("data-selected", "false")
       .css("background-color", "grey");
     $(this).attr("data-selected","true");
     $(this).parentsUntil(".grandparent").find(".totHoursBox")
       .css("background-color", "white")
       .css("color", "black")
       .val($(this).val());
    };

    updateTotHours();

    function updateTotHours(){
      sum=0;
      $("input[name^='hoursDay']").each(function(){
        sum+=Number($(this).val());
        console.log($(this).val())
      });
      $("#tallyHours").text(sum);
    }


  });
});
