<?php
include "conexao.php";

if(isset($_POST['email'])){
    $login = trim($_POST['email']);
    $senha = trim($_POST['senha']);

//escreve a sql

$sql = "select * from usuarios where emailUsu = '$login' and senhaUsu = '$senha'";

//executa a sql

$testelogin = mysqli_query($conexao, $sql);


$existe = mysqli_num_rows($testelogin);

 if($existe){
    //carrega a sql em um vetor (array) 
    $dados = mysqli_fetch_array($testelogin);
    $senha = $dados['senhaUsu'];
    $nome = $dados['nomeUsu'];
    $cpf = $dados['cpfUsu'];
    $telefone = $dados['telefoneUsu'];
    $end = $dados['endeUsu'];

    if(!isset($_SESSION)){
        session_start();
    }
    $_SESSION['emailUsu'] = $email;
    $_SESSION['nomeUsu'] = $nome;
    $_SESSION['cpfUsu'] = $cpf;
    $_SESSION['telefoneUsu'] = $telefone;
    $_SESSION['endeUsu'] = $end;

    header('location: ../perfil.html');
    

}
else{
    echo "Usuario ou senha invalidos.";
}
 
}
?>