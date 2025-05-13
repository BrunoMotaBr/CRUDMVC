<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de gestão</title>
</head>
<body>
    <h1>Sistema de gestão</h1>
    <hr>
    <form action="../model/inserircliente.php" method="post">
        Nome:<br/>
        <input type="text" name="cxnome" id="cxnome"><br/>
        Email:<br/>
        <input type="email" name="cxemail" id="cxemail"><br/>
        Idade:<br/>
        <input type="text" name="cxidade" id="cxidade"><br/>
        <input type="submit" value="Gravar">
    </form>
</body>
</html>