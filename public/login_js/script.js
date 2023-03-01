//search div js
var search=document.getElementById('search');


  search.addEventListener('focus',(event)=>{

    document.getElementById('search-wrapper').style.border="1px solid #1dbf73";
  
  });


  search.addEventListener('focusout',(event)=>{

document.getElementById('search-wrapper').style.border="1px solid rgba(0, 0, 0, 0.276)";

});




//navbar toggel

$(document).ready(function () {
  // $(".headerHumberger").click(function() {
  //     $(".menu_nav").addClass("humbergerLeft");
  // });


  $(".headerClose").click(function () {
      $(".menu_nav_col ul").toggleClass('active');
  });

});
$(document).ready(function () {
  $('.icon_display').on('click', function (event) {
      $('.menu_nav_col ul').toggleClass('active');
  });
});




//otp input
let digitValidate = function(ele){
  console.log(ele.value);
  ele.value = ele.value.replace(/[^0-9]/g,'');
}

let tabChange = function(val){
    let ele = document.querySelectorAll('input');
    if(ele[val-1].value != ''){
      ele[val].focus()
    }else if(ele[val-1].value == ''){
      ele[val-2].focus()
    }   
 }