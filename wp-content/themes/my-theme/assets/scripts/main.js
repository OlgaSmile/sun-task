document.addEventListener("DOMContentLoaded",(function(){const e=document.getElementById("js-open-menu"),t=document.getElementById("js-close-menu"),n=document.getElementById("js-mobile-backdrop"),d=document.querySelector(".sub-menu");function s(){n.classList.add("hidden"),t.classList.add("hidden"),e.classList.remove("hidden"),document.body.classList.remove("modal-open"),t.removeEventListener("click",s),n.removeEventListener("click",c),d.style.maxHeight=null}function c(e){e.currentTarget===e.target&&s()}e.addEventListener("click",(function(){n.classList.remove("hidden"),t.classList.remove("hidden"),e.classList.add("hidden"),document.body.classList.add("modal-open"),t.addEventListener("click",s),n.addEventListener("click",c)}));document.querySelector(".menu-item-has-children").addEventListener("click",(function(){const e=this.children[1];e.style.maxHeight?e.style.maxHeight=null:e.style.maxHeight=e.scrollHeight+"px"}))})),console.log("main");