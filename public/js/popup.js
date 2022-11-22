 document.querySelector("#show").addEventListener("click",function(){
    document.querySelector(".popup").classList.add("active");
 });
 document.querySelector(".popup .btn").addEventListener("click",function(){
    document.querySelector(".popup").classList.remove("active");
 });