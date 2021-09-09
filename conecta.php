<?php

$servidor = "localhost";
$usuario = "root";
$senha = "";
$database = "busca";

$conexao = mysqli_connect($servidor, $usuario, $senha, $database);
/*
#teste de conexao
if($conexao){
	echo 'Conectado com sucesso!';
}else{
	echo 'Erro ao conectar';
}
*/
#Aqui fiz a criação da tabela e executei a pagina para inserir no banco
//$sql = "CREATE TABLE tenis (id_tenis INT NOT NULL AUTO_INCREMENT PRIMARY KEY, nome_tenis varchar(255) NOT NULL)";
//$executar = mysqli_query($conexao, $sql);

#Aqui fiz a inserção dos tenis na tabela criada acima direto no banco de dados, trocando apenas o nome do tenis e executando um por um.
//$sql = "INSERT INTO tenis (id_tenis, nome_tenis) VALUES (DEFAULT, 'PUMA')";
//$executar = mysqli_query($conexao, $sql);
?>
