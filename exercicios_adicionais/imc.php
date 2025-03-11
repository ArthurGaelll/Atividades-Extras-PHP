<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
    <p>Insira o seu email: <input type="email" name="email" required></p>
    <p>Insira um nome de usuário desejado: <input type="text" name="user" required></p>
    <p>Insira uma senha desejada: <input type="password" name="senha" required></p>
    <p>Você quer calcular o seu IMC? <input type="text" name="option" required></p>
    <p>Vou calcular o seu IMC então:</p>
    <p>Digite o seu peso: <input type="number" name="peso" required></p>
    <P>Digite sua altura: <input type="number" name="altura" step="0.01" required></P>
    <button type="submit">Enviar</button>
    </form>

</body>
</html>