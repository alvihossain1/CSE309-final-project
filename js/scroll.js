function changeBgNav(){
    let navbar = document.querySelector(".nav-home")
    var scrollValue = window.scrollY
    if(scrollValue < 300){
        navbar.classList.remove("bgnav-p")
        navbar.classList.add("bg-transparent")
    }
    else{
        navbar.classList.remove("bg-transparent")
        navbar.classList.add("bgnav-p")
    }
}

window.addEventListener("scroll", changeBgNav)