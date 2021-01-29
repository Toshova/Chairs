let modal = document.getElementById("my_modal");
let span = document.getElementsByClassName("close_modal_window")[0];

function myFunc(){
    modal.style.display = "block";
}

span.onclick = function () {
    modal.style.display = "none";
}

window.onclick = function (event) {
    if (event.target === modal) {
        modal.style.display = "none";
    }
}

