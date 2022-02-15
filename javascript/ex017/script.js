let res = document.getElementById("res")
function veja() {
    let nome = document.getElementById("name").value
    let idade = Number(document.getElementById("idd").value)
    
    if (idade <18) {
        res.innerHTML = `Atenção ${nome}, como você tem ${idade} anos de idade, <strong>ACESSO NEGADO!!</strong>`
    } else {
        res.innerHTML = `Atenção ${nome}, como você tem ${idade} anos de idade, <strong>ACESSO LIBERADO!!</strong>`
    }
    return false
    
}