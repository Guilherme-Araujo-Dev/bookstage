

<!DOCTYPE html>
<html>

<head>
    <title>Bookstage</title>
    <link rel="stylesheet" href="../CSS/1.css">
    <link rel="icon" href="../IMG/imag/logo.jpg">
    <link rel="stylesheet" href="../CSS/style-formulario.css">
    <title>Formulario</title>
</head>

<body>
    <div class="formulario">
        <form method="POST"><br>
            <fieldset>
                <legend>
                    <h1 class="logo"></h1>
                </legend>
                <br>
                <div class="input">
                    <input type="text" name="nome" id="nome" class="inputuser" required="required" minlength="3" maxlength="100"  />
                    <label for="nome" class="label"> Nome Completo</label><br>
                </div>
                <br>
                <br>
                <label for="data_nascimento"> Data de nascimento</label>
                <input type="date" name="data_nascimento" id="data_nascimento" required="required" />
                <br>
                <br>
                <div class="input">
                    <input type="tel" name="telefone" id="nome" class="inputuser" required="required" maxlength="11" />
                    <label for="telefone" class="label"> Telefone</label><br>
                </div>
                <br>
                <br>
                <div class="input">
                    <input type="text" name="email" id="email" class="inputuser" required="required" maxlength="30" />
                    <label for="email" class="label"> Email</label>
                </div>
                <br>
                <p>Sexo:</p>
                <input type="radio" id="feminino" name="genero" value="F" required>
                <label for="feminino">Feminino</label>
                <br>
                <input type="radio" id="masculino" name="genero" value="M" required>
                <label for="masculino">Masculino</label>
                <br>
                <input type="radio" id="outro" name="genero" value="O" required>
                <label for="outro">Outro</label>
                <br>
                <br>
                <div class="input">
                    <input type="password" name="senha" id="senha" class="inputuser" minlength="8" maxlength="20" required="required" /><br>
                    <label for="senha" class="label">Digite a senha</label><br>
                </div>
                <br>
                <br>
                <div class="input">
                    <input type="text" name="nomeusu" id="nomeusu" class="inputuser" required="required" minlength="3" maxlength="50"  />
                    <label for="nomeusu" class="label"> Nome de Usuario</label><br>
                </div>
                <br>
                <br>
                <input type="submit" name="btnSalvar" id="submit">
            </fieldset>
        </form>
        </body>

</html>

<?php
include("Class/leitores.php");
?>