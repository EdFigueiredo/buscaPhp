<?php 
include_once 'conecta.php';

$busca = $_POST['palavra'];

$busca = "SELECT * FROM tenis WHERE nome_tenis LIKE '%$busca%'";
$query = mysqli_query($conexao, $busca);

if(mysqli_num_rows($query) <=0){
	echo "Nada encontrado";
}
else{
	while($rows = mysqli_fetch_assoc($query)){
		echo "<li>".$rows['nome_tenis']."</li>";
	}
}
?>