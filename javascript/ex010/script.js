let res = document.getElementById("res")

        function gerar() {
            //alert("funcionou")
            let n = Math.floor(Math.random() * 100 + 1)
            res.innerHTML = `Gerei o número ${n}`
        }
    