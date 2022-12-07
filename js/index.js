let sidebarWidth = "23rem"
window.addEventListener("resize", () => {
    if(screen.width < 650){
        sidebarWidth = "17rem"
    }
    else{
        sidebarWidth = "23rem"
    }
})

let detailsBtns = $(".detailsBtn")
for (let i = 0; i < detailsBtns.length; i++) {
    detailsBtns[i].addEventListener('click', (e) => {
        let element = detailsBtns[i]
        let showbox = element.parentElement.parentElement

        let showImageLink = showbox.querySelector(".image").src
        let showName = showbox.querySelector("p").innerHTML
        console.log(showName)
        console.log(showImageLink)

        let sidebar = document.querySelector(".sidebar")
        
        if (sidebar.style.width === sidebarWidth) {
            sidebar.style.width = "0rem"
        }
        else{
            sidebar.querySelector(".side-image").src = showImageLink
            sidebar.querySelector(".showName").innerHTML = showName
            sidebar.style.width = sidebarWidth
        }
    })
}


document.querySelector('.sidebar-close').addEventListener("click", () => {
    let sidebar = document.querySelector(".sidebar")
    sidebar.style.width = "0rem"
})



