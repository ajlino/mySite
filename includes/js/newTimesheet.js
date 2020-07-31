$(document).ready(function(){
  $("#createTimesheet").click(function(){

  // Check browser support
  if (typeof(Storage) !== "undefined") {
    localStorage.setItem("month", $("#month").val());
    localStorage.setItem("year", $("#year").val());
    location.reload();
  } else {
    alert("problemo");
    }
  });
});
