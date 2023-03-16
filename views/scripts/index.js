let cod = ""

function select(new_code) {
    cod = new_code
}

function selectEdit(code) {
    console.log("https://" + window.location.hostname + "/api?user=" + code)
    fetch("/api?user=" + code)
        .then((response) => response.json())
        .then((data) => {
            console.log(data)
            document.querySelector("#editCod").value = data["cod"]
            document.querySelector("#editNom").value = data["nom"]
            document.querySelector("#editTel").value = data["tel"]
            document.querySelector("#editCorreo").value = data["correo"]
        });
}

document.getElementById("edit").onclick = function () {
    document.getElementById("editForm").submit();
}

document.getElementById("delete").onclick = function () {
    window.location.href = "/?delete=" + cod;
}
document.getElementById("add").onclick = function () {
    document.getElementById("newForm").submit();
}