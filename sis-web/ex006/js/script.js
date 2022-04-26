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
function valuet() {
    //entrada
    tema = document.getElementById("tema").value;

    //processamento
    if(tema == "1") {
        titulo = "Super Mario Bros"
        newFundo = "img/mario.jpg"
        newFoto = "img/mario.png"
        cor = "orange"
    } else if(tema == "2") {
        titulo = "Princesinha Sofia"
        newFundo = "img/sofia.jpg"
        newFoto = "img/sofia.png"
        cor = "purple"
    } else if(tema == "3") {
        titulo = "PJ Masks"
        newFundo = "img/pjmasks.jpg"
        newFoto = "img/pjmasks.png"
        cor = "blue"
    } else if(tema == "0"){
        titulo = "Orçamento de Festa"
        newFundo = " "
        newFoto = " "
        cor = "black"
    } else if(tema == "4"){
        titulo = "Mengão Malvadão"
        newFundo = "img/flamengo.jpg"
        newFoto = " "
        cor = "red"
    } 


    //saida
    document.getElementById("titulo").value = titulo;
    document.body.style.backgroundImage = "url(" + newFundo + ")";
    document.getElementById("foto").src = newFoto;
    document.body.style.color = cor;
}