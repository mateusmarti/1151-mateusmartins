let amigos = new Array()
let idades = new Array()

let lst = document.getElementById("listagem")
        function clicou() {
            let nome
            let idade
            let resposta
            do {
                nome = prompt("Digite o nome do amigo")
                idade = Number(prompt(`Qual é a idade de ${nome}?`))

                amigos.push(nome)
                idades.push(idade)
                resposta = confirm("Quer cadastrar mais amigos?")
            } while(resposta == true)

            lst.innerHTML = ""
            let pos = 0
            while (pos < amigos.length) {
                lst.innerHTML += `${amigos[pos]} tem ${idades[pos]} anos de idade. <br>`
                pos ++
            }
}
            
            