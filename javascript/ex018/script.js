function go() {
    let nome = document.getElementById("name").value
    let sexo = document.getElementById("sex").value
    let idade = Number(document.getElementById("idd").value)
    let r = document.getElementById("res")

    if (sexo == "masc") {
        if (idade >= 18) {
            r.innerHTML = `Olá ${nome}, como você tem ${idade} anos, SEJA BEM-VINDO!!`
    } else {
        r.innerHTML = `Olá ${nome}, como você tem ${idade} anos, infelizmente você é menor de idade`
    }
    } else if (sexo == "fem") {
        if (idade >= 18) {
        r.innerHTML = `Olá ${nome}, como você tem ${idade} anos, SEJA BEM-VINDA!!`
        } else {
            r.innerHTML = `Olá ${nome}, como você tem ${idade} anos, infelizmente você é menor de idade`
        }
    }

    
    return false
}