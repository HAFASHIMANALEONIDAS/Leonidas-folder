javascript
Copycode
function validateForm() {
    var izina = document.getElementById("izina").value;
    var imyaka = document.getElementById("imyaka").value;
    var email = document.getElementById("email").value;

    if (izina == "" || imyaka == "" || email == "") {
        alert("Nyamuneka zuza imyirondoro yose.");
        return false;
    }
    return true;
}