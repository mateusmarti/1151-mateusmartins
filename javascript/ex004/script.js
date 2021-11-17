function c() {
    let n = Number(prompt("Qual e o preço?"))
    document.writeln(`<h1>O PRODUTO CUSTA ${n} `)
        let cont = 0
        while(cont <= 90){
        document.writeln(`<br> ${n} descontando ${cont}% ficara ${n - cont/100*n}<br>`)
            cont += 10
        }
    }