<?php
    include "../adm/conexao.php";

    if(isset($_POST['nome'])){
        //coleta
        $nome = $_POST['nome'];
        $marca = $_POST['marca'];
        $modelo = $_POST['modelo'];
        $defeito = $_POST['defeito'];
        $desc = $_POST['desc'];
        $telefone = $_POST['tel'];


        //comunicação
        $sql = "insert into orcamentos(nomeOrc,marcaOrc,modeloOrc,defeitoOrc,descOrc,contatoOrc) values('$nome','$marca','$modelo','$defeito','$desc','$telefone')";
        $incluir = mysqli_query($conexao, $sql);

        //saida
        if($incluir){
            echo "
                <script>
                    alert('Seu orçamento será enviado via WhatsApp');
                    window.location = '../index.html';
                </script>

            ";
        } else {
            echo "
            <p> Sistema indisponivel</p>
        ";
        }

    } else {
        echo "
            <p> Esta é uma pagina de tratamento de dados</p>
            <p> Clique <a href='formularioUsuario.php'>aqui</a> para incluir um usuario </p>
        ";
    }

?>