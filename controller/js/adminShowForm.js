$(document).ready(function () {

    $("#admin-show-submit-button").on("click", () => {

        let emptyCheck = false

        if ($("#showName").val() === "") {
            $("#showName-alert").css("display", "block")
            $("#showName-alert").text("*This is a required field")
            emptyCheck = true
        }
        if ($("#showGenre").find(":selected").text() === "") {
            $("#showGenre-alert").css("display", "block")
            $("#showGenre-alert").text("*This is a required field")
            emptyCheck = true
        }
        if ($("#showDate").val() === "") {
            $("#showDate-alert").css("display", "block")
            $("#showDate-alert").text("*This is a required field")
            emptyCheck = true
        }
        if ($("#showUrl").val() === "") {
            $("#showUrl-alert").css("display", "block")
            $("#showUrl-alert").text("*This is a required field")
            emptyCheck = true
        }
        if ($("#showDesc").val() === "") {
            $("#showDesc-alert").css("display", "block")
            $("#showDesc-alert").text("*This is a required field")
            emptyCheck = true
        }
        if ($("#showVenue").find(":selected").text() === "") {
            $("#showVenue-alert").css("display", "block")
            $("#showVenue-alert").text("*This is a required field")
            emptyCheck = true
        }
        if ($("#showVenueDetails").val() === "") {
            $("#showVenueDetails-alert").css("display", "block")
            $("#showVenueDetails-alert").text("*This is a required field")
            emptyCheck = true
        }
        if ($("#showPrice").val() === "") {
            $("#showPrice-alert").css("display", "block")
            $("#showPrice-alert").text("*This is a required field")
            emptyCheck = true
        }
        if ($("#hallName").val() === "") {
            $("#hallName-alert").css("display", "block")
            $("#hallName-alert").text("*This is a required field")
            emptyCheck = true
        }


        if (emptyCheck) {
            $("#text-alert-block").css("display", "block")
            $("#text-alert-block p").text("Please clear the required Fields")
        } else {

            let allAlerts = document.querySelectorAll(".alert-text")
            for (let i = 0; i < allAlerts.length; i++) {
                allAlerts[i].innerHTML = ""
            }

            // AJAX.....
            let objectShow = {
                showName: $("#showName").val(),
                showGenre: $("#showGenre").val(),
                showDateTime: $("#showDate").val(),
                showUrl: $("#showUrl").val(),
                showDescription: $("#showDesc").val(),
                showVenue: $("#showVenue").val(),
                showVenueDetails: $("#showVenueDetails").val(),
                showTicketPrice: $("#showPrice").val(),
                hallName: $("#hallName").val()
            }
            console.log(objectShow)

            // AJAX Work
            $.ajax({
                type: "POST",
                url: "controller/php/adminShowForm.php",
                data: objectShow,
                success: function (dataResult) {
                    let result = JSON.parse(dataResult)
                    console.log(result)
                    $("#text-alert-block").css("display", "block")
                    $("#text-alert-block p").text(result.statusMessage)
                }
            })

            let allInputs = document.querySelectorAll("input")
            for (let i = 0; i < allInputs.length; i++) {
                allInputs[i].value = ""
            }

        }





    })

})