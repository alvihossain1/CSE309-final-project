function ticketConfirm(){
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
        }
    })
    sessionStorage.clear()
}
    