function ticketConfirm() {
    showObject = JSON.parse(sessionStorage.getItem("showObject"))
    showSelection = JSON.parse(sessionStorage.getItem("showSelection"))
    data = Object.assign(showObject, showSelection)
    console.log(data)
    $.ajax({
        type: "POST",
        url: "controller/php/insertUserShow.php",
        data: data,
        success: function (dataResult) {
            let result = JSON.parse(dataResult)
            console.log(dataResult)
            $("#text-message").text(result.statusMessage)
            document.querySelector("#confirm-tickets").disabled = true;
            sessionStorage.clear()

            // COUNTS INTERVAL
            let count = 5
            let interval = setInterval(() => {
                $("#text-message").text(`${result.statusMessage}\nRedirecting to Hompage in ${count}s`)
                console.log(count--)
                if (count === -1) {
                    clearInterval(interval)
                    document.querySelector("#confirm-tickets").disabled = false;
                    location.href = "./index.php"
                }
            }, 1000)


        }
    })



}
