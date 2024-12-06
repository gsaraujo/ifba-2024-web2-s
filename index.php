<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Exemplo de submissão de formulário</title>
    <style>
        form {
            width: 420px;
        }

        div {
            margin-bottom: 20px;
        }

        label {
            display: inline-block;
            width: 240px;
            text-align: right;
            padding-right: 10px;
        }

        button, input {
            float: right;
        }
    </style>
</head>
<body>
<form method="post" action="processar.php">
    <h1>Favor preencher o formulário</h1>
    <fieldset>
        <legend>Título</legend>
        <ul>
            <li>
                <label for="title_1">
                    <input type="radio" id="title_1" name="titulo" value="Sr." />
                    Senhor
                </label>
            </li>
            <li>
                <label for="title_2">
                    <input type="radio" id="title_2" name="titulo" value="Sra." />
                    Senhora
                </label>
            </li>
        </ul>
    </fieldset>
    <p>
        <label for="nome">
            <span>Nome: </span>
            <strong><abbr title="obrigatorio">*</abbr></strong>
        </label>
        <input type="text" id="nome" name="vulgo" />
    </p>
    <div>
        <label for="texto">O que você gostaria de dizer?</label>
        <input name="texto" id="say" value="Olá, mundo">
    </div>
    <div>
        <label for="para">Para quem você gostaria de dizer isso!?</label>
        <input name="para" value="Todos">
    </div>
    <div>
        <button>Enviar minha fala</button>
    </div>
</form>
</body>
</html>