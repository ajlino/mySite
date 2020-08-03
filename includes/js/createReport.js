$(document).ready(function(){
  $("#createReport").submit(function(event){
    event.preventDefault(); //prevent default action of going straight to PHP


    var post_url = $(this).attr("action"); //get form action url
  	var request_method = $(this).attr("method"); //get form GET/POST method
  	var form_data = $(this).serialize(); //Encode form elements for submission


    $.ajax({
        url : post_url,
        type: request_method,
        data : form_data
      }).done(function(response){

        var jsonData = JSON.parse(response);
        console.log("hi");
        console.log(jsonData);
      });
  });
});
