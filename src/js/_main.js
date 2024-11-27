"use strict" 

const body = document.querySelector("body");
const burger = document.querySelector("#burger");
const menuHidden = document.querySelector("#menu-hidden");

burger.addEventListener("click", () => {

    menuHidden.classList.toggle("active");
    burger.classList.toggle("active");

    if(body.style.overflow != "hidden") {
        body.style.overflow = "hidden";
    } else {
        body.style.overflow = "visible";
    }
    

});