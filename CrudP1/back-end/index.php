<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Cadastro</title>
</head>
<body>

    <div class="container">
        <h2>Cadastrar aluno </h2>
        <form>
            <label for="nome">Nome Completo:</label>
            <input type="text" id="nome" name="nome" required>

            <label for="data_nascimento">Data de Nascimento:</label>
            <input type="date" id="data_nascimento" name="data_nascimento" required>

            <label for="email">E-mail:</label>
            <input type="email" id="email" name="email" required>
           
            <label for="text">Curso:</label>
            <select name="curso" id="curso" onchange="alterar()" class="campo campo-medio">
                        <option value="none">selecione</option>
                        <option value="Analise e desenvolvimento de sistema">Analise e desenvolvimento de sistema</option>
                        <option value="ciências da computação">ciências da computação</option>
                        <option value="medicina">medicina</option>
                        <option value="direito">direito</option>
                        <option value="arquitetura e urbanismo">arquitetura e urbanismo</option>
                    </select>

            <label class="checkbox-label" for="itermos"><input class="checkbox" type="checkbox" name="termos" id="itermos" required>Aceito os termos</label> <br>
          

            <label class="checkbox-label" for="inovidades"><input type="checkbox" name="novidades" id="inovidades" class="checkbox">Deseja receber e-mail de promoções</label><br>

            <div class="buttons">
                <button type="submit">Enviar</button>
                <button type="reset">Resetar</button>
            </div>
        </form>
        <?php
        
        
        
        ?> 
    </div>
</body>
</html>
<!--estilos abaixo-->
<style>

* {
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
    background-color: #eef;
    margin: 0;
    padding: 0;
}


header {
    background-color: #007bff;
    padding: 10px 0;
    color: white;
}
nav ul {
    list-style: none;
    display: flex;
    justify-content: center;
    gap: 20px;
    padding: 0;
    margin: 0;
}

nav ul li a {
    text-decoration: none;
    color: white;
    font-weight: bold;
    padding: 8px 16px;
    border-radius: 5px;
    transition: background 0.3s;
}
nav ul li a:hover {
    background-color: #0056b3;
}


main {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    height: calc(100vh - 60px); 
    padding: 20px;
}


form {
    background: white;
    padding: 30px;
    border-radius: 8px;
    box-shadow: 0 0 10px #aaa;
}

h2 {
    text-align: center;
}

label {
    display: block;
    margin-top: 15px;
}

input[type="text"],
input[type="email"],
select {
    width: 100%;
    padding: 8px;
    margin-top: 5px;
    border-radius: 4px;
    border: 1px solid #ccc;
}

input[type="submit"] {
    margin-top: 20px;
    width: 100%;
    padding: 10px;
    background-color: #007bff;
    color: white;
    border: none;
    border-radius: 6px;
    cursor: pointer;
}

input[type="submit"]:hover {
    background-color: #0056b3;
}

.mensagem {
    margin-top: 15px;
    padding: 10px;
    border-radius: 6px;
    text-align: center;
    font-weight: bold;
}

.sucesso {
    background-color: #d4edda;
    color: #155724;
}

.erro {
    background-color: #f8d7da;
    color: #721c24;
}


</style>