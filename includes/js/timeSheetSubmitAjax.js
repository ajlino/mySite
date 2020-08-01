$(document).ready(function(){
  $("#submitTimesheet").submit(function(event){
    event.preventDefault(); //prevent default action of going straight to PHP

    var post_url = $(this).attr("action"); //get form action url
  	var request_method = $(this).attr("method"); //get form GET/POST method
  	var form_data = $(this).serialize(); //Encode form elements for submission
    console.log(form_data);

    $.ajax({
        url : post_url,
        type: request_method,
        data : form_data
      }).done(function(response){
        alert(response);
        // $("#server-results").html(response);  //innerHTML for div id server-results
        // var jsonData = JSON.parse(response);
        // console.log(jsonData);
      });
  });
});
