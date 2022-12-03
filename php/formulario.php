

<!DOCTYPE html>
<html>

<head>
    <title>Bookstage</title>
    <link rel="stylesheet" href="../css/1.css">
    <link rel="icon" href="../imag/logo.jpg">
    <title>Formulario</title>
</head>

<body>
    <style>
        body {
            font-family: arial;
            background-image: url(../imag/fundo.jpg);
        }

        .formulario {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgba(0, 0, 0, 0.8);
            padding: 15px;
            border-radius: 15px;
            width: 35%;
            color: white;
        }

        fieldset {
            border: 3px solid#5b4b41;
        }

        legend {
            border: 1px #5b4b41;
            padding: 10px;
            text-align: center;
            background-color: #5b4b41;
            border-radius: 8px;
        }

        .input {
            position: relative;
        }

        .inputuser {
            background: none;
            border: none;
            border-bottom: 1px solid white;
            outline: none;
            color: white;
            font-size: 15px;
            width: 100%;
            letter-spacing: 2px;
        }

        .label {
            position: absolute;
            top: 0px;
            left: 0px;
            pointer-events: none;
            transition: .5s;
        }

        .inputuser:focus~.label,
        .inputuser:valid~.label {
            top: -20px;
            font-size: 12px;
        }

        #data_nascimento {
            border: none;
            padding: 8px;
            border-radius: 10px;
            outline: none;
            font-size: 15px;
        }

        #submit {
            background-color: #5b4b41;
            width: 100%;
            border: none;
            padding: 15px;
            color: white;
            font-size: 15px;
            cursor: pointer;
            border-radius: 25px;
        }
    </style>
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
include("../leitores.php");
?>