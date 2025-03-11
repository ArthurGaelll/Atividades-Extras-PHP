<?php
$email = $_POST["email"];
$user = $_POST["user"];
$senha = $_POST["senha"];
$peso = $_POST["peso"];
$altura = $_POST["altura"];
$opcao = $_POST["option"];
while ($opcao == "SIM"){
    if($email == "gaelpinho@gmail.com" and $user == "gaelP" and $senha == 1234){
        echo "Logado com sucesso!!";
        echo "Agora com base em seu peso e sua altura irei calcular o seu IMC:";
        $imc = $peso / ($altura**2);
        echo $imc;
        break;
    } else{
        echo "Email, usuario ou senha incorretos";
        break;
    }
}
    
?>