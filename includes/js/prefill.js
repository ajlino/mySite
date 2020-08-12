$(document).ready(function(){

  $("#prefill").click(function(event){
    event.preventDefault(); //prevent default action of going straight to PHP

    var year=$("#year").val();
    var month=$("#month").val();
    var tableName=year+"_"+month; //example: 2020_7 (no leading zero)


    var post_url = "includes/php/prefill.php" //get form action url
  	var request_method = "post"; //get form GET/POST method
  	var form_data = "year="+year+"&month="+month+"&tableName="+tableName; //Encode form elements for submission


    $.ajax({
        url : post_url,
        type: request_method,
        data : form_data
    }).done(function(response){
//         console.log (response);
//     });
//   });
// });


    }).done(function(response){
      if (response == "no match"){
        $("#prefillModal").modal();
        $("#prefillErrorMessage").text("Unable to locate name on schedule.");

      } else if (response == "no table exists"){
        $("#prefillModal").modal();
        $("#prefillErrorMessage").text("Prefill data unavailable.");

      } else{
        var jsonData = JSON.parse(response);
        console.log(jsonData);

        jsonData.forEach(myFunction);

        function myFunction(item,index){
          var dayID="#hoursDay"+(index+1);
          var dayValue=0;

          if (item == "x"){
            dayValue=10;
          }
          $(dayID).val(dayValue);
        }
      }
    });
  });
});
