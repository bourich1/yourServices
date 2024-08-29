// nav bar 
const navbar_icon = document.querySelector(".navbar_icon");
const navbar = document.querySelector(".navbar");
const close_navbar = document.querySelector(".close_navbar_icon");

navbar_icon.addEventListener("click" , ()=>{
    navbar.style.right="0";
    
});
close_navbar.addEventListener("click" , ()=>{
    navbar.style.right="-100%";
    
});

// add active to links 
const links = document.querySelectorAll(".link");

links.forEach(link =>{

    link.addEventListener("click" , ()=>{
        if(document.querySelector(".active_link")){
            document.querySelector(".active_link").classList.remove("active_link")
        }
        link.classList.add("active_link");
        
    })
});
// remove navbar if click on link
links.forEach(link =>{
    link.addEventListener("click" , ()=>{
        navbar.style.right="-100%"; 
    })
});









