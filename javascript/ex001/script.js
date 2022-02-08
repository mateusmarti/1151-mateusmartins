let res = document.getElementById("res")
function veja() {
    let nome = document.getElementById("name").value
    let ano = Number(document.getElementById("idd").value)
    let idade = 2022 - ano
    
    if (idade <16) {
        res.innerHTML = `Atenção ${nome}, como você tem ${idade} anos de idade, <strong>VOCÊ NÃO PODE VOTAR!</strong>`
    } else if (idade <18) {
        res.innerHTML = `Atenção ${nome}, como você tem ${idade} anos de idade, <strong>VOCÊ PODE VOTAR, MAS NÃO TEM OBRIGAÇÃO!</strong>`
    } else {
        res.innerHTML = `Atenção ${nome}, como você tem ${idade} anos de idade, <strong>VOCÊ TEM A OBRIGAÇÃO DE VOTAR!</strong>`
    }
    return false
}