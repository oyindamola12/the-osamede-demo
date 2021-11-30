 const hamburger = document.querySelector('.hamburger');
 const navLinks = document.querySelector('.nav-links');
 const links = document.querySelectorAll('.nav-links li'); 





 hamburger.addEventListener("click", ()=> { 
     navLinks.classList.toggle("open");
 });



 const activePage = window.location.pathname;
 const producerLink = document.querySelectorAll('.cast').
 forEach(link =>{
     if(link.href.includes(`${activePage}`)){
         link.classList.add('active');
     }
 });


 const activePages = window.location.pathname;
 const producerLinks = document.querySelectorAll('.cool-link').
 forEach(link =>{
     if(link.href.includes(`${activePages}`)){
         link.classList.add('actived');
     }
 });

 
 function togglePopup(){
     document.getElementById("popup-1").
     classList.toggle("activing");
 }
 function togglePopup2(){
    document.getElementById("popup-2").
    classList.toggle("activing");
}
function togglePopup3(){
    document.getElementById("popup-3").
    classList.toggle("activing");
}
function togglePopup4(){
    document.getElementById("popup-4").
    classList.toggle("activing");
}
function togglePopup5(){
    document.getElementById("popup-5").
    classList.toggle("activing");
}
function togglePopup6(){
    document.getElementById("popup-6").
    classList.toggle("activing");
}
function togglePopup7(){
    document.getElementById("popup-7").
    classList.toggle("activing");
}
function togglePopup8(){
    document.getElementById("popup-8").
    classList.toggle("activing");
}