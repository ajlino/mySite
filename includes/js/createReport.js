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
        // console.log(jsonData);
        // var html="";
        // for (var x=0; x<jsonData.length; x++){
        //   for(var y=0; y<jsonData[x].length; y++){
        //     $("#debug").append("<span>|"+jsonData[x][y]+"|</span>");
        //   }
        //   $("#debug").append("<br>");
        // }

        //create top row
        $("#table").append("<tr>")
          .append("<th>Last Name</th>");
        for(var x=1; x<32; x++){
          $("#table").append("<th>Day"+x+"</th>");
        }
        $("#table").append("</tr>");

        //create table
        for (var x=0; x<jsonData.length; x++){
          $("#table").append("<tr>");
          for(var y=0; y<jsonData[x].length; y++){
            $("#table").append("<td>"+jsonData[x][y]+"</td");
          }
          $("#table").append("</tr>");
        }



      });
  });
});
