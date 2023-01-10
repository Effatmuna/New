console.log("hhh");
const dropDownPic=document.querySelector('.dropDownPic');
const dropdown=document.querySelector('.dropdowN');
const menu=document.querySelector('.menuBar');
const ul=document.querySelector('ul');
const register=document.querySelector('.Register');
const modal=document.querySelector('.modal');
const cross=document.querySelector('.cross');
const update = document.querySelector('.update');
const cancel = document.querySelector('.cancel');
  var count=0;


    
    dropDownPic.onclick = ()=>{
        count=count+1;
    dropdown.style.display="block";
    if(count>1){
        dropdown.style.display="none";
        count=0;

    }
    
}

var count2=0;

menu.onclick=()=>{
    count2=count2+1;
    ul.style.display="flex";
    register.style.display="block";

    if(count2>1){
        ul.style.display="none";
    register.style.display="none";
    count2=0;
    }


}
register.onclick=()=>{
    console.log("jjjj");
}

//Update

    window.onload = () =>{
        update.addEventListener("click", function() {
            
           alert("Check your email and confirm your password");
              
        });
        }
        cancel.onclick =()=>{
             document.querySelector("input").innerHTML="";
        }





