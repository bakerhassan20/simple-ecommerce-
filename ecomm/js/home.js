


var z4=document.getElementById('z4');
var count=1;
function click1(){
   "use strict";
   if(count==1){
count=0;
z4.style.left="0px"}
else{
   z4.style.left="-140px";
   count=1;
}

}




$(function() {
   $("#x3").on("change", function() {
     $(".product").hide();
     $(".cat" + $("#x3").val()).show();
     if ($("#x3").val() == "") {
       $(".product").show();
     }
   });
 });
 







var firstname=document.getElementById('firstname');
var lsatname=document.getElementById('lastname');
var email=document.getElementById('email');
var massage=document.getElementById('massage');

function ceack(){
"use strict";

if(firstname.value==""){

firstname.style.border="1px solid red";

}
if(lastname.value==""){

   lastname.style.border="1px solid red";
   
   }
   if(email.value==""){

      email.style.border="1px solid red";
      
      }
      if(massage.value==""){

         massage.style.border="1px solid red";
         
         }
         if(firstname.value!==""&&lastname.value!==""&&email.value!==""&&massage.value!=="")
         { 
             
         return true;   
         }return false;

}

function ceack1(){

"use strict";
firstname.style.border="1px solid cyan";

}

function ceack2(){

   "use strict";
   lastname.style.border="1px solid cyan";
   
   }
   function ceack3(){

      "use strict";
      email.style.border="1px solid cyan";
      
      }
      function ceack4(){

         "use strict";
         massage.style.border="1px solid cyan";
         
         }
                  















var q1=document.getElementById('q1');


window.onscroll=function(){

   if(window.pageYOffset>=400){
   
   
       q1.style.display="block";
   }
   
   else{
  q1.style.display="none";
   
   }
   }


q1.onclick=function(){

   window.scrollTo({top:0,left:0,behavior:"smooth"})
   
   setTimeout(5000)
   }
    











