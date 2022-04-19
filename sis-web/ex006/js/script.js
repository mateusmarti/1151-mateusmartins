function valueh() {
    //entrada
    let hor = document.form.horario.value

    //processamento
    if(hor == "manha") {
        valor = 1500;
    } else if (hor == "tarde"){
        valor = 1800;
    } else if (hor == "noite"){
        valor = 2300;
    }

    //saida
    document.getElementById("res").value = valor
}
