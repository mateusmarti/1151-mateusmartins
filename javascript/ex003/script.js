function contar() {
    let n1 = Number(prompt("TABUADA DE QUAL NUMERO?"))
    document.writeln(`<h1>Tabuada de ${n1}</h1>`)

    let cont = 1 
    while (cont <= 50) {
        document.writeln(`${n1} x ${cont} = ${n1 * cont}<br>`)
            cont++
    }
    }