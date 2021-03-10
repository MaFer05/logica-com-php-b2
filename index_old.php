<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Exemplo</title>
    </head>
    <body>
       <form action="resultado.php" method="post">
            <label for="msg">Mensagem:</label>
            <select name="msg">
                <option value="Bom Dia">Bom Dia</option>
                <option value="Boa Tarde">Boa Tarde</option>
                <option value="Boa Noite">Boa Noite</option>
            </select>
            <label for="nome">Digite seu nome:</label>
            <input type="text" name="nome" />
            <input type="submit" />
       </form>
    </body>
</html>