function contar() {
    let inicio = Number(prompt("numero inicial"))
    let fim = Number(prompt("numero final"))
    let n
    if (inicio < fim) {
        document.writeln(`<h1>CONTAGEM CRESCENTE DE ${inicio} a ${fim}</h1>`)
        n = inicio  
        while (n <= fim) {
            document.writeln(`looping ${n} <br>`)
            n++
        }
    } else {
        document.writeln(`<h1>CONTAGEM DECRESCENTE DE ${fim} a ${inicio}</h1>`)
        n = inicio 
        while (n >= fim) {
            document.writeln(`looping ${n} <br>`)
            n--
        }
    }
    document.writeln("ACABOU")
}




