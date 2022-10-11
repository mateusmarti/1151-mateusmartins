<?php
    include "../adm/conexao.php";

    if(isset($_POST['nome'])){
        //coleta
        $senha = $_POST['senha'];
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $cpf = $_POST['cpf'];
        $telefone = $_POST['tel'];
        $end = $_POST['endereco'];
        $cidade = $_POST['cidade'];


        //comunicação
        $sql = "insert into usuarios(emailUsu,senhaUsu,nomeUsu,cpfUsu,telefoneUsu,endeUsu,cidadeUsu,estadoUsu) values('$email','$senha','$nome','$cpf','$telefone','$end','$cidadeUsu','$estadoUsu')";
        $incluir = mysqli_query($conexao, $sql);

        //saida
        if($incluir){
            echo "
                <script>
                    alert('Usuário cadastrado com sucesso');
                    window.location = 'listarUsuarios.php';
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