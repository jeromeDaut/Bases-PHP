let button = document.querySelector(".button"); 
let green =document.querySelector(".bgGreen");

button.addEventListener("click",function(){
    green.classList.toggle("bgYellow");
    
})