<?php 

// dizer qual o host da minha conexao
$host = 'localhost';
// dizer qual usuário que vai acessar o bd
$user = 'root';
// a senha deste banco de dados
$senha = '';
// o nome dd banco de dados
$bd = 'sistema';

$conexao = new mysqli($host, $user, $senha, $bd);

// verificação da conexao 

if($conexao -> connect_error){
    echo "deu ruim";
}else{
    echo "deu bom";        
}

?>