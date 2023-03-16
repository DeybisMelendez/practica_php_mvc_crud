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
            document.querySelector("#editcod").value = data["cod"]
            document.querySelector("#editnom").value = data["nom"]
            document.querySelector("#edittel").value = data["tel"]
            document.querySelector("#editcorreo").value = data["correo"]
        })
}

document.querySelector("#edit").onclick = function () {
    document.querySelector("#editForm").submit();
}

document.querySelector("#delete").onclick = function () {
    window.location.href = "/?delete=" + cod;
}
document.querySelector("#new").onclick = function () {
    document.querySelector("#newForm").submit();
}