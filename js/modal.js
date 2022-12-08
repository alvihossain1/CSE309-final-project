let ticketBtns = document.querySelectorAll('.ticketsBtn')
ticketBtns.forEach(each => {
    each.addEventListener("click", () => {
        let element = each
        let showbox = element.parentElement.parentElement

        
        let modal = document.querySelector(".modal")
        modal.style.display = "flex"


        modal.querySelector(".modal-image").src = showbox.querySelector(".h-showUrl").innerHTML
        modal.querySelector("#m-showName").innerHTML = showbox.querySelector(".h-showName").innerHTML
        modal.querySelector("#m-showGenre").innerHTML = showbox.querySelector(".h-showGenre").innerHTML
        modal.querySelector("#m-showTicketPrice").innerHTML = showbox.querySelector(".h-showTicketPrice").innerHTML
        modal.querySelector("#m-showDate").innerHTML = showbox.querySelector(".h-showDate").innerHTML
        modal.querySelector("#m-showTime").innerHTML = showbox.querySelector(".h-showTime").innerHTML
        modal.querySelector("#m-hallName").innerHTML = showbox.querySelector(".h-hallName").innerHTML
        modal.querySelector("#m-showVenue").innerHTML = showbox.querySelector(".h-showVenue").innerHTML
        modal.querySelector("#m-showVenueDetails").innerHTML = showbox.querySelector(".h-showVenueDetails").innerHTML
        modal.querySelector("#m-showUrl").innerHTML = showbox.querySelector(".h-showUrl").innerHTML
        modal.querySelector("#m-showID").innerHTML = showbox.querySelector(".h-showID").innerHTML
        modal.querySelector("#m-showDescription").innerHTML = showbox.querySelector(".h-showDescription").innerHTML

        let sidebar = document.querySelector(".sidebar")
        if(sidebar.style.width !== 0){
            sidebar.style.width = 0
        }

    })
})

document.getElementById("modalClosebtn").addEventListener("click", () => {
    document.querySelector(".modal").style.display = "none"
})

document.getElementById("goToPaymentBtn").addEventListener("click", () => {

    let modal = document.querySelector(".modal")
    let showID = modal.querySelector("#m-showID").innerHTML
    let userEmail = modal.querySelector("#m-userEmail").innerHTML
    let showName = modal.querySelector("#m-showName").innerHTML
    let showTicketPrice = modal.querySelector("#m-showTicketPrice").innerHTML
    let showDate = modal.querySelector("#m-showDate").innerHTML
    let showTime = modal.querySelector("#m-showTime").innerHTML
    let showUrl = modal.querySelector("#m-showUrl").innerHTML
    let data = {showID, userEmail, showName, showTicketPrice, showDate, showTime, showUrl}
    console.log(data)
    sessionStorage.clear()
    sessionStorage.setItem("showObject", JSON.stringify(data))
    location.href = `ticket.php`
})


document.addEventListener("click", (e) => {
    console.log(e.target.classList)
    e.target.classList.forEach(element => {
        if(element === "modal"){
            document.querySelector(".modal").style.display = "none"
        }
    })
})