function fechar() {
    document.getElementById("popup").style.display = "none"
}
function logar() {
    let user = document.form.login.value
    let senha = document.form.senha.value

    if(user == "Mateus" && senha == "0000") {
        fechar();
        } else {
            document.getElementById("msg").style.display = "block"
        }
    }
