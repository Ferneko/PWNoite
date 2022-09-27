<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Programação Web</title>
    <style>
        body, li {
            margin: 0;
            padding: 0;
            list-style: none;
            font-family: Arial;
        }
        a{
            text-decoration: none;
        }
        #container {
            display: grid;
            grid-template-rows: 100px auto ;
            grid-template-areas:
                'cabecalho'
                'conteudo'
        }
        #cabecalho{
            grid-area: cabecalho;
            background: #1d1e20;
            color:white;
            display: flex;
            flex-wrap: wrap; 
            justify-content: space-between;
            align-items: center;
            padding: 20px ;
        }
        #conteudo {
            grid-area: conteudo;
            background-color: #fff;
        }
        .menu{
            display: flex;
        }
        .menu li{
            margin-left: 10px;
        }
        .menu li a{
            display: block;
            padding: 10px;
            
            cursor: pointer;
        }
    </style>
</head>

<body>
    <div id="container">
        <header id="cabecalho">
            <div class="logo">
                <a href="./index.php">
                    <img src="./img/logo.png" width="50" height="50">
                </a>
            </div>
            <nav>
                <ul class="menu">
                    <li>
                        <a href="./array.php">
                            Home
                        </a>
                    </li>
                    <li>  <a href="./funcao1.php">Contato</a></li>
                    <li>  <a href="./funcao.php">Funções</a></li>
                    <li>  <a href="./sintaxe.php">Usuários</a></li>
                </ul>
            </nav>
            
        </header>
      
        <main id="conteudo">
           
           <h1>Página Inicial do meu site</h1>

        </main>
      
    </div>
</body>

</html>