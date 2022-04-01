<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cadastro de professores para Vacinação</title>
    </head>
    <body>
        <h2>Cadastro de professores para Vacinação</h2>
        <form action="cadastro-prof.php" method="post">
            <label>Nome</label>
            <input type="text" name="txtNome" id="txtNome">
            <br>
            <label>CPF</label>
            <input type="text" name="txtCPF" id="txtCPF">
            <br>
            <label> Data de Nascimento</label>
            <input type="date" name="data" id="data">
            <br>
            <label>Selecione a escola sede: </label>
            <select name="slEscola" id="slEscola">
                <option value="1">E.E Ernestina Del Buono Trama</option>
                <option value="2">E.E João de Castro Filho</option>
                <option value="3">E.E Chico Duarte</option>
                <option value="4">E.E Felicio Sompae</option>
            </select>
            <br>
            <input type="submit" value="Cadastrar">
        </form>
    </body>
</html>
