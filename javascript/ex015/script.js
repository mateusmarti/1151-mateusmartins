let frase = document.getElementById("res")
function go() {
    let calend = new Date() 
    frase.innerHTML = `Dia: ${calend.getDate()}`
    frase.innerHTML +=`<br> Mês: ${calend.getMonth() +1}`
    frase.innerHTML +=`<br> Ano: ${calend.getFullYear()}`
    frase.innerHTML +=`<br> Dia da semana: ${calend.getDay()}`   
    frase.innerHTML +=`<br> Horas: ${calend.getHours()} `
    frase.innerHTML +=`<br> Minutos: ${calend.getMinutes()}`
    frase.innerHTML +=`<br> Segundos: ${calend.getSeconds()}`
    frase.innerHTML +=`<br> Milésimos: ${calend.getMilliseconds()}`
}