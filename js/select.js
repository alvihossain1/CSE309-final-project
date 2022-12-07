let createSelect = (id, arr) => {
    let selectTag = document.getElementById(id)
    let optionClass = "bg-dark"
    for(let i = 0; i < arr.length; i++){
        let optionTag = document.createElement("option")
        optionTag.classList.add(optionClass)
        optionTag.innerHTML = arr[i]
        optionTag.value = arr[i]
        selectTag.appendChild(optionTag)
    }
}