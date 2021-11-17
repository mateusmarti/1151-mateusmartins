function somar() {
    let resp = document.getElementById("res")
    resp.innerHTML = "" // Para limpar a resposta
    let num = 0
    let c = 1
    let soma = 0
    while (c <= 5) {
        num = Number(prompt(`Digite o valor ${c}`))
        resp.innerHTML += ` ${num} `
        if (c < 5) {
            resp.innerHTML += " + " 
        }
        else {
            resp.innerHTML += " = "
        }
        soma = soma + num // soma += num
        c++
    }
    resp.innerHTML += `${soma}`
}        
