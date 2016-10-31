/**
* @Author: ananayarora
* @Date:   2016-08-19T18:34:26+05:30
* @Last modified by:   ananayarora
* @Last modified time: 2016-08-20T01:10:52+05:30
*/



$(document).ready(function(){
  function updateStatus(){
    $.get('http://192.168.43.171/status.php?one=24', function(r) {
      $(".status1").html("<b>"+r+"</b>");
    });
    $.get('http://192.168.43.171/status.php?one=22', function(r) {
      $(".status2").html("<b>"+r+"</b>");
    });
  }
  updateStatus();
  setInterval(function(){
  	updateStatus();
  }, 500);
  $(".on1").click(function(){
      $.get('http://192.168.43.171/on.php?one=18&two=23',function(r){
        console.log(r);
        updateStatus();
      });
  });
  $(".off1").click(function(){
      $.get('http://192.168.43.171/off.php?one=18&two=23',function(r){
        console.log(r);
        updateStatus();
      });
  });
  $(".on2").click(function(){
      $.get('http://192.168.43.171/on.php?one=17&two=27',function(r){
        console.log(r);
        updateStatus();
      });
  });
  $(".off2").click(function(){
      $.get('http://192.168.43.171/off.php?one=17&two=27',function(r){
        console.log(r);
        updateStatus();
      });
  });
});
