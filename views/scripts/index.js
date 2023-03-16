let cod = ""

function selectDelete(new_code) {
    cod = new_code
    fetch("/api?user=" + cod)
        .then((response) => response.json())
        .then((data) => {
            document.querySelector("#delcod").value = data["cod"]
            document.querySelector("#delnom").value = data["nom"]
            document.querySelector("#deltel").value = data["tel"]
            document.querySelector("#delcorreo").value = data["correo"]
        })
}

function selectEdit(code) {
    fetch("/api?user=" + code)
        .then((response) => response.json())
        .then((data) => {
            document.querySelector("#editCod").value = data["cod"]
            document.querySelector("#editNom").value = data["nom"]
            document.querySelector("#editTel").value = data["tel"]
            document.querySelector("#editCorreo").value = data["correo"]
        })
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