let pessoas = new Array("José", "Paulo", "Mateus", "Ana Maria", "Manguinha", "Vetor")
        let p = document.getElementById("part")
        let v = document.getElementById("venc")

        p.innerHTML = `Participam do sorteio: ${pessoas.toString()}`
        function sorteia() {
            let min = 0
            let max = pessoas.length
            let num = Math.floor(Math.random() * max + min)

            v.innerHTML = `O sorteado foi ${pessoas[num]}`
        }