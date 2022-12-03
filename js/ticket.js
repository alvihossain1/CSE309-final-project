let maxNoTicket = 6

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
    }
})

document.getElementById("confirm-tickets").addEventListener("click", () => {
    location.href = "index.html"
})