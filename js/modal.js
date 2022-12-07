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
        modal.querySelector("#m-showDateTime").innerHTML = showbox.querySelector(".h-showDateTime").innerHTML
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

// document.getElementById("goToPaymentBtn").addEventListener("click", () => {
//     let showName = document.querySelector(".modal-show-heading").innerHTML
//     location.href = `ticket.html?name=${showName}`
// })


document.addEventListener("click", (e) => {
    console.log(e.target.classList)
    e.target.classList.forEach(element => {
        if(element === "modal"){
            document.querySelector(".modal").style.display = "none"
        }
    })
})