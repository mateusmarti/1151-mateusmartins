let amigos = new Array()
        let lst = document.getElementById("listagem")
        function clicou() {
            let nome
            let resposta
            do {
                nome = prompt("Digite o nome do amigo")
                amigos.push(nome)
                resposta = confirm("Quer cadastrar mais amigos?")
            } while(resposta == true)
            lst.innerHTML = `Seus amigos são ${amigos.toString()}`
        }    
            