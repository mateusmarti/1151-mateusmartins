            let pir = document.getElementById("pir")

            function piramide() {
            let total = Number(document.getElementById("andares").value)
            pir.innerHTML = ""
            // Contador de andares da pirâmide
            let andar = 1
            let simbolos = 1
            let cont = 1
            while (andar <= total) {
                while (cont <= simbolos) {
                    pir.innerHTML += `#`
                    cont ++   
                }
                pir.innerHTML += "<br>"
                simbolos += 2
                cont = 1 
                andar ++
            } 
            return false
        }