<?php

$con = mysqli_connect("localhost", "root", "");
		
mysqli_select_db( $con, "simples_behavior_sensing") or 
	die(    
		"Erro na conexão do banco de dados:<br>" . 
			mysqli_error($con)
	);

$email = $_POST["email"];
$senha = $_POST["senha"];

if($email == null or $senha == null){
	die ("Senha ou Email em branco, tente novamente.");
}

$conn = "SELECT id FROM login WHERE email = '$email' AND senha = '$senha';";
$result = $con->query($conn);

//print_r($result);

if($result->num_rows < 1)
{
	echo "Credenciais incorretas, tente novamente!";
}
else{
	header('Location: https://sensing.beeid.com.br/sensing/application/dashboards.html');
}
?>
