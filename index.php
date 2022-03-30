<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700" rel="stylesheet">
    <link rel="stylesheet" href="content/css/estilo.css">
    <link rel="stylesheet" href="content/css/application.css">
    <link rel="stylesheet" href="content/css/form.css">
    <title>ETIQUETAS</title>
</head>

<body class="application">
    <header class="cabecalho">
        <h1>EMISSOR DE ETIQUETAS</h1>
    </header>
    <main class="principal">
        <div class="conteudo">
            <nav class="modulos">
                <div class="modulo azul">
                    <h3>PRODUCT PRINTER</h3>
                    <ul>
                        <li>
                            <a>
                                <form class="dados" action="etiquetas/print.php" method="post">
                                    <p>CÓDIGO DO PRODUTO: <input id="cod" type="text" name="cod" /></p>
                                    <p>OP: <input id="op" type="text" name="op" /></p>
                                    <p>QUANTIDADE: <input id="qntd" type="float" name="qntd" /></p>
                                    <p>OBSERVAÇÕES: <input id="obs" type="text" name="obs" /></p>
                                    <p>OPERADOR: <input id="operator" type="text" name="operator" /></p>
                                    <p><input type="submit" /></p>
                                </form>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </main>
    <footer class="rodape">
        GHEST CODER © <?= date('D, M, Y'); ?>
    </footer>
</body>
</html>