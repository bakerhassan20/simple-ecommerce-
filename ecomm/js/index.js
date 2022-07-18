
var a3=document.getElementById('a3');
var a4=document.getElementById('a4');
var a5=document.getElementById('a5');

var a6=document.getElementById('a6');
var a7=document.getElementById('a7');
var a8=document.getElementById('a8');

var a9=document.getElementById('a9');
var a10=document.getElementById('a10');
var a11=document.getElementById('a11');

var icon1=document.getElementById('icon1');
var icon2=document.getElementById('icon2');
var icon3=document.getElementById('icon3');



function click1(){

if(a4.value==""&&a5.value!=="")
{
    a4.style.border = '2px solid red';
 
}
if(a5.value==""&&a4.value!=="")
{
    a5.style.border = '2px solid red';
}
if(a4.value==""&&a5.value=="")
{   
    a4.style.border = '2px solid red';
    a5.style.border = '2px solid red';
}

if(a4.value!==""&&a5.value!=="")
{    icon2.style.color="rgb(30, 210, 210)";
    a3.style.display="none"
    a6.style.display="block"
}

}
function click2(){
    a4.style.border = ' unset';

}
function click3(){
    a5.style.border = 'unset';
}

/**************************************************************************** */


function click20(){

    if(a7.value==""&&a8.value!=="")
    {
        a7.style.border = '2px solid red';
    }
    if(a8.value==""&&a7.value!=="")
    {
        a8.style.border = '2px solid red';
    }
    if(a7.value==""&&a8.value=="")
    {   
        a7.style.border = '2px solid red';
        a8.style.border = '2px solid red';
    }
    
    if(a7.value!==""&&a8.value!=="")
    { icon3.style.color="rgb(30, 210, 210)";
        a6.style.display="none";
        a9.style.display="block";
       
    }
    
    }

    function click5(){
        a7.style.border = 'unset';
    }

    function click6(){
        a8.style.border = 'unset';
    }

    
function click7(){

    if(a10.value==""&&a11.value!=="")
    {
        a10.style.border = '2px solid red';
    }
    if(a11.value==""&&a10.value!=="")
    {
        a11.style.border = '2px solid red';
    }
    if(a10.value==""&&a11.value=="")
    {   
        a11.style.border = '2px solid red';
        a10.style.border = '2px solid red';
    }
    
    if(a10.value!==""&&a11.value!=="")
    { 
        
    return true;   
    }return false;
}

    function click8(){
        a10.style.border = 'unset';
    }


    function click9(){
        a11.style.border = 'unset';
    }



    function click10(){
a3.style.display="block";
a6.style.display='none'
icon2.style.color="snow";
    }

    function click11(){
        a6.style.display="block";
        a9.style.display='none'
        icon3.style.color="snow";
            }