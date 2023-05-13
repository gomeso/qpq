<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title></title>
</head>
    <body>
        <header>
            <nav>
                <a class="logo" href="inter.php">G7 SUPLEMENTS</a>
                <div class="menu">
                <ul class="nav-lista">
                    <li onclick="openModal()" class="btn">Sobre</li>
                    <li><a href="">Novidades</a></li>
                    <li><a href="contato.php">Contato</a></li>
                </ul>

    <div id="modal-container" class="modal-container">
        <div class="modal">
            <button class="fechar" id="fechar">X</button>
            <h1 class="we">Olá, pessoal</h1>
            <p class="we">A G7 Suplements é uma empresa líder no mercado de suplementos alimentares, 
                fundada por Charles Gomes, um cara apaixonado por vida saudável e fitness. 
                Ele começou a empresa em sua garagem, desenvolvendo fórmulas de suplementos e 
                testando-as em si mesmo e em amigos. Com o tempo, a qualidade de seus produtos se espalhou, 
                e a G7 Suplements se tornou uma marca reconhecida em todo o país.A empresa se concentra em 
                fornecer suplementos alimentares de alta qualidade para atletas e entusiastas do fitness, 
                com uma equipe de cientistas e nutricionistas dedicados a desenvolver novas fórmulas. 
                A G7 Suplements também mantém seus produtos acessíveis para todos, não apenas para atletas de elite. 
                A empresa possui lojas físicas em várias cidades e vende seus produtos online, com um site fácil de usar 
                e parcerias com influenciadores de fitness e nutricionistas. Charles está comprometido em fornecer 
                aos seus clientes os melhores suplementos alimentares disponíveis e continua a expandir seus negócios para outros países. 
                A história da G7 Suplements é uma prova de que com determinação e espírito empreendedor, é possível criar uma empresa 
                de sucesso que beneficie a vida de muitas pessoas.</p>
        </div>
    </div>
            </nav>
        </header>

        <div class="container">

            <div class="cartao">
                <img src="img/po.png" class="cartao-img" alt="">
                <div class="cartao-data">
                    <h1 class="cartao-title">Creatina</h1>
                    <span class="cartao-preci">R$199</span>
                    <p class="cartao-description">A creatina serve como fonte de produção de energia para as células musculares, de modo que melhora a força e o tônus muscular.</p>
                    <a href="#" class="cartao-button"> COMPRAR</a>
                </div>
            </div>

            <div class="cartao">
                <img src="img/pré.png" class="cartao-img" alt="">
                <div class="cartao-data">
                    <h1 class="cartao-title">Pré-Treino</h1>
                    <span class="cartao-preci">R$199</span>
                    <p class="cartao-description">O Pré Treino serve como uma fonte de combustível para que seu corpo tenha energia para realizar uma série de exercícios intensos.</p>
                    <a href="#" class="cartao-button"> COMPRAR</a>
                </div>
            </div>

            <div class="cartao">
                <img src="img/whey.png" class="cartao-img" alt="">
                <div class="cartao-data">
                    <h1 class="cartao-title">Whey Protein</h1>
                    <span class="cartao-preci">R$199</span>
                    <p class="cartao-description">Além das proteínas e dos aminoácidos, o whey protein tem alta concentração de cálcio, trazendo benefícios para a saúde óssea do corpo. O consumo do suplemento pode ajudar no aumento da força e da massa muscular após a prática de atividades intensas.</p>
                    <a href="#" class="cartao-button"> COMPRAR</a>
                </div>
            </div>

        </div>
        <script src="script.js"></script>
    </body>
</html>