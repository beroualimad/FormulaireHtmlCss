$(document).ready(function(){
$(".mini_div1").animate({marginTop:"4px"},1000,function(){$(".slide-controls").animate({marginLeft:"0px"},function(){$("h2").animate({marginLeft:"5px"})})});
//$(".slide-controls").animate({marginLeft:"0px"},3000);
//$(".mini_div1").fadeIn(10000);
$(".signup").click(function(){
   $(".mini_div1").animate({marginLeft:"-382px"});
   $(".super_div").css("height","400px");
   $(".mini_div2").animate({marginLeft:"13px"});
   
});
$(".login").click(function(){
 // $(".mini_div2").hide("fast",function(){$(".mini_div1").css("marginLeft","0px")});
 // $(".mini_div1").show("fast",functio);
 $(".mini_div2").animate({marginLeft:"407px"});
 $(".super_div").css("height","354px");
 $(".mini_div1").animate({marginLeft:"0px"});
});
/*$(".signup").click(function(){
  $(".mini_div1").hide("fast",function(){$(".mini_div2").css("marginLeft","0px")});
  });*/


});