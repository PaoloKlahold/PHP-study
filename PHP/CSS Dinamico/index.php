<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.php">
    <title>Document</title>
</head>
<body>
    <form method="post" action="ControllerColor.php">
        <select name="cor" id="cor" reqiored>
            <option value="">Selecione uma cor</option>
            <option value="red">Vermelho</option>
            <option value="blue">Azul</option>
            <option value="green">Verde</option>
        </select>
        <input type="submit" value="trocar a cor">
    </form>
</body>
</html>
