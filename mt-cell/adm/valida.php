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
    $email = $dados['email'];
    $senha = $dados['senha'];
    $nome = $dados['nome'];
    $cpf = $dados['cpf'];
    $telefone = $dados['tel'];
    $end = $dados['endereco'];
    $cidade = $dados['cidade'];

    if(!isset($_SESSION)){
        session_start();
    }
    $_SESSION['email'] = $email;
    $_SESSION['senha'] = $senha;
    $_SESSION['nome'] = $nome;
    $_SESSION['cpf'] = $cpf;
    $_SESSION['tel'] = $telefone;
    $_SESSION['endereco'] = $end;
    $_SESSION['cidade'] = $cidade;

    header('location: ../perfil.html');
    
    

}
else{
    echo "Usuario ou senha invalidos.";
}
 
}
?>