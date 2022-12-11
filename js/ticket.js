let maxNoTicket = 6
let number
let totalAmount



// ######
const urlParams = new URLSearchParams(location.search);
for (const [key, value] of urlParams) {
    console.log(`${key}:${value}`);
    document.getElementById("ticketShowname").innerHTML = value
}


document.getElementById("minus-button").addEventListener("click", () => {
    let midText = document.getElementById("mid-value")
    console.log(midText)
    let strVal = midText.innerHTML
    
    let intVal = parseInt(strVal)
    console.log(intVal)

    if(intVal <= 1){
        document.getElementById("minus-button").disabled = true
    }
    else{
        document.getElementById("minus-button").disabled = false
        intVal--
        midText.innerHTML = intVal.toString()        
        document.getElementById("plus-button").disabled = false 
        $("#ticket-totalAmount").text(parseInt(intVal)*parseInt($("#ticket-showTicketPrice").text()))       
    }
})

document.getElementById("plus-button").addEventListener("click", () => {
    let midText = document.getElementById("mid-value")
    let strVal = midText.innerHTML
    let intVal = parseInt(strVal)

    if(intVal >= maxNoTicket){
        document.getElementById("plus-button").disabled = true        
    }
    else{
        document.getElementById("plus-button").disabled = false
        intVal++
        midText.innerHTML = intVal.toString()
        document.getElementById("minus-button").disabled = false
        $("#ticket-totalAmount").text(parseInt(intVal)*parseInt($("#ticket-showTicketPrice").text()))        
    }
})

$( document ).ready(function() {
    console.log( sessionStorage.getItem("showObject") )
    data = JSON.parse(sessionStorage.getItem("showObject"))
    
    $("#ticket-showName").text(data.showName)
    $("#ticket-showDate").text(data.showDate)
    $("#ticket-showTime").text(data.showTime)
    $("#ticket-showTicketPrice").text(data.showTicketPrice)
    $("#ticket-totalAmount").text($("#ticket-showTicketPrice").text()) 

});


document.getElementById("confirm-tickets").addEventListener("click", () => {
    let totalAmount = parseInt($("#ticket-totalAmount").text())
    let venueSelection = $("#ticket-venueSelection").val()
    let paymentMethod = $("#ticket-paymentMethod").val()

    let data2 = {totalAmount, venueSelection, paymentMethod}


    sessionStorage.setItem("showSelection", JSON.stringify(data2))
    ticketConfirm()
})