let resp = document.getElementById("res")

        function mudanum() { 
            let btn = document.getElementById("btnfat")
            let num = Number(document.getElementById("num").value)
            btn.value = `Calcular ${num}`
    }
        function fatorial() {
            let num = Number(document.getElementById("num").value)
            if (num == 0 || num == 1) {
                resp.innerText = `${num}! = 1`
            } else {
                let cont = num
                let fat = 1 
                resp.innerText = `${num}! = `
                while (cont >= 1) {
                    fat *= cont
                    resp.innerText += `${cont}`
                    if (cont == 1) {
                        resp.innerText += " = "
                    } else {
                        resp.innerText += " x "
                    }
                    cont --  
                }
                resp.innerText += `${fat}`
            }

            return false
        }
    