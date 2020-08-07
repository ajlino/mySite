$(document).ready(function(){
  $("#csvButton").click(function(){
    var csv=localStorage.getItem("csvReport");
    console.log(csv);
    var hiddenElement = document.createElement('a');
    hiddenElement.href = 'data:text/csv;charset=utf-8,' + encodeURI(csv);
    hiddenElement.target = '_blank';
    hiddenElement.download = 'report.csv';
    hiddenElement.click();
  });


});
