var a10=document.getElementById('a10');
var a11=document.getElementById('a11');

   
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

