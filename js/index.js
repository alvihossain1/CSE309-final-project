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

       

        let sidebar = document.querySelector(".sidebar")
        
        if (sidebar.style.width === sidebarWidth) {
            sidebar.style.width = "0rem"
        }
        else{
            sidebar.querySelector("#s-showUrl").src = showbox.querySelector(".h-showUrl").innerHTML
            sidebar.querySelector("#s-showName").innerHTML = showbox.querySelector(".h-showName").innerHTML
            sidebar.querySelector("#s-showGenre").innerHTML = showbox.querySelector(".h-showGenre").innerHTML
            sidebar.querySelector("#s-showDate").innerHTML = showbox.querySelector(".h-showDate").innerHTML
            sidebar.querySelector("#s-showTime").innerHTML = showbox.querySelector(".h-showTime").innerHTML
            sidebar.querySelector("#s-showTicketPrice").innerHTML = showbox.querySelector(".h-showTicketPrice").innerHTML
            sidebar.querySelector("#s-showDescription").innerHTML = showbox.querySelector(".h-showDescription").innerHTML
            sidebar.style.width = sidebarWidth
        }
    })
}


document.querySelector('.sidebar-close').addEventListener("click", () => {
    let sidebar = document.querySelector(".sidebar")
    sidebar.style.width = "0rem"
})






