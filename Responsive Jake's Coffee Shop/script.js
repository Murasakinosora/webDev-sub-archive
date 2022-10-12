const hamburger = document.querySelector(".hamburger");
const nav1= document.querySelector(".nav1");
const nav= document.querySelector(".navbar");

hamburger.addEventListener("click",()=>{
  hamburger.classList.toggle("active");
  nav1.classList.toggle("active");
  nav.classList.toggle("active");
})

document.querySelectorAll(".navbar").forEach(n=>n.addEventListener("click",()=>{
  hamburger.classList.remove("active");
  nav1.classList.remove("active");
  nav.classList.remove("active");
}))
