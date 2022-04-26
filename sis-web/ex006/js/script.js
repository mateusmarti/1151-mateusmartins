function valueh() {
    //entrada
    let hor = document.form.horario.value;
    

    //processamento
    if(hor == "manha") {
        valor = 1500;
    } else if (hor == "tarde"){
        valor = 1800;
    } else if (hor == "noite"){
        valor = 2300;
    }

    //saida
    document.getElementById("res").value = valor;

    document.getElementById("guloseimas").checked = false;
    document.getElementById("personagens").checked = false;
    document.getElementById("atracoes").checked = false;
    document.getElementById("maquiagem").checked = false;
    document.getElementById("brindes").checked = false;
}

function valuea(valor, marcado){
    //entrada
    total = document.getElementById("res").value;

    //processamento
    if(marcado){
        total = Number(total) + Number(valor);
    } else{
        total = Number(total) - Number(valor);
    }

    //saida
    document.getElementById("res").value = total;
}