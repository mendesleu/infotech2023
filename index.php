<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>InfoTech Informática</title>

    <link rel="stylesheet" href="./assets/css/style.css" media="all">
    <link rel="stylesheet" href="./assets/css/slide.css" media="all">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

    <link rel="shortcut icon" href="assets/img/favicon.png" />

    <script src="./assets/js/menu.js"></script>

</head>

<body>

    <?php include_once "modal.php"; ?>

    <header>
        <div class="logo">
            <img src="assets/img/logo.png" alt="logo" width="100%">
        </div>

        <nav>

            <button class="botao-menu" id="botaoMenuAbrir" onclick="menuBotao()">
                <i class="fa fa-bars"></i>
            </button>
            <button class="botao-menu fechar" id="botaoMenuFechar" onclick="closeMenu()">
                <i class="fa fa-times"></i>
            </button>

            <ul id="menuUl">
                <li><a href="#inicio">Inicio</a></li>
                <li><a href="#servico">Serviços</a></li>
                <li><a href="#sobre">Sobre</a></li>
                <li><a href="#clientes">Clientes</a></li>
                <li><a href="#contato">Contato</a></li>
            </ul>
        </nav>
    </header>

    <section id="inicio">

        <div style="width: 100%;">
            <div class="chamada">
                <div style="font-size: 30px; font-weight: 500;">
                    <label>Focamos em oferecer</label><br>
                    <label>competência e profissionalismo</label>
                </div>
                <p style="font-size: 13px; margin-bottom: 20px;">
                    Nós da InfoTech Informática, levamos a sério, o compromisso com você cliente, nós tentamos ao máximo
                    levar o melhor serviço e atendimento afim de garantir satisfação total.
                </p>
                <a href="https://wa.me/5544988228073" class="faleComAGente" target="_blank">Fale Com a Gente</a>
            </div>
        </div>

    </section>

    <section id="servico">

        <!-- PC -->
        <article class="card">
            <div class="imgCard">
                <i class="fa-solid fa-desktop"></i>
            </div>
            <div class="descricaoCard">
                <label>Manutenção de Computadores e Notebooks</label>
            </div>
            <button class="saibaMais" onclick="document.getElementById('manutencao').style.display='block'">Saiba Mais</button>
        </article>
        <!-- PC -->

        <!-- Web -->
        <article class="card">
            <div class="imgCard">
                <i class="fa-solid fa-file-code"></i>
            </div>
            <div class="descricaoCard">
                <label>Desenvolvimento de Websites e Webapps</label>
            </div>
            <button class="saibaMais" onclick="document.getElementById('desenvolvimento').style.display='block'">Saiba Mais</button>
        </article>
        <!-- Web -->

        <!-- Sistema -->
        <article class="card">
            <div class="imgCard">
                <i class="fa-solid fa-gear"></i>
            </div>
            <div class="descricaoCard">
                <label>Implementação de Sistema ERP</label>
            </div>
            <button class="saibaMais" onclick="document.getElementById('sistema').style.display='block'">Saiba Mais</button>
        </article>
        <!-- Sistema -->

        <!-- Rede -->
        <article class="card">
            <div class="imgCard">
                <i class="fa-solid fa-network-wired"></i>
            </div>
            <div class="descricaoCard">
                <label>Instalação e Configuração de Redes</label>
            </div>
            <button class="saibaMais" onclick="document.getElementById('redes').style.display='block'">Saiba Mais</button>
        </article>
        <!-- Rede -->

    </section>

    <section id="sobre">

        <div class="descricaoSobre">
            <p>
                A InfoTech e uma empresa especializada em manutenção de computadores, notebooks, desenvolvimento de aplicações Web
                e venda de sistemas, fundada em junho de 2020 e com sede em Araruna no interior do Paraná, a empresa veio para
                fornecer um serviço de qualidade com um valor justo a nossos clientes.
            </p>
            <br><br>
            <p>
                No ano de 2021 a empresa implementou em seu casting de serviços o desenvolvimento de websites, onde adquiriu vários
                clientes, já em 2022 começamos a produção do nosso próprio sistema ERP de gestão empresarial, que tem início de
                venda prevista para o segundo semestre de 2023.
            </p>
        </div>
        
        <div class="boxImgSobre">
            <div class="imgSobre">
                <img src="./assets/img/sobre.png" alt="" width="100%">
            </div>
        </div>

    </section>

    <section id="clientes">
        <label>Nossos Clientes</label>
        <div class="imgClientesContainer">

            <div class="cardImgCliente">
                <div class="imgClientes">
                    <a href="https://www.instagram.com/olliagencia/">
                        <img src="./assets/img/clientes/olli.png" alt="" width="100%">
                    </a>
                </div>
            </div>

            <div class="cardImgCliente">
                <div class="imgClientes">
                    <a href="https://pcdoctorti.com.br/">
                        <img src="./assets/img/clientes/PC Doctor Logo.png" alt="" width="100%">
                    </a>
                </div>
            </div>

        </div>
    </section>

    <section id="contato">

        <div style="width: 300px;">
            <img src="./assets/img/logopreto.png" alt="logo" width="100%">
        </div>

        <div style="display: flex; flex-direction: column; font-weight: 500;">
            <a href="mailto:iticontato@hotmail.com">iticontato@hotmail.com</a>
            <a href="https://wa.me/5544988228073">(44) 9.8822-8073</a>
            <a href="https://g.page/infotechararuna?share">Rua Vital Brasil, 780 - Araruna/PR</a>

            <div class="social">

                <div class="bolaSocial">
                    <a href="https://facebook.com/infotechararuna" target="__blank">
                        <i class="fa-brands fa-facebook-f"></i>
                    </a>
                </div>

                <div class="bolaSocial">
                    <a href="https://www.linkedin.com/company/infotech-inform%C3%A1tica" target="__blank">
                        <i class="fa-brands fa-linkedin-in"></i>
                    </a>
                </div>

                <div class="bolaSocial">
                    <a href="https://instagram.com/infotechararuna" target="__blank">
                        <i class="fa-brands fa-instagram"></i>
                    </a>
                </div>

            </div>

        </div>

    </section>

    <footer>
        <label>2020-<?= date('Y') ?> - InfoTech Informática - 34.676.582/0001-42</label>
    </footer>

    <!-- Whatsapp -->
    <a class="whatsapp" href='https://wa.me/5544988228073' target="__blank">
        Solicitar Orçamento
        <i class="fa-brands fa-whatsapp"></i>
    </a>
    <!-- Whatsapp -->

</body>

</html>