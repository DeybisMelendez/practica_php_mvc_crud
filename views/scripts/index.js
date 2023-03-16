let cod = ""

function select(new_code) {
    cod = new_code

}

document.getElementById("delete").onclick = function () {
    window.location.href = "/?delete=" + cod;
}