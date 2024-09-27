<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <title>Portfólio Profissional</title>    
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">    

        <!---->

        <link rel="icon" href="portfolio.ico" type="image/x-icon">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <link rel="stylesheet" href="css/style.css">    
    </head>

    <body>

        <nav>
            <div class="logo">
                <img src="images/logo.png">            
                <a href="https://tinyurl.com/matheus-curriculo-pessoal/" target="_blank">Meu Currículo</a>
            </div>
            <ul>
                <li><a href="#main">Home</a></li>
                <li><a href="#skills">Habilidades</a></li>
                <li><a href="#about">Sobre Mim</a></li>
                <li><a href="#portfolio">Portfólio</a></li>
                <li><a href="#feedback">Feedback</a></li>
            </ul>

            <button class="btn-whatsapp" onclick="mensagem('https://wa.me/5598991968439')">
                <i class='bx bxl-whatsapp tag-i'></i> WhatsApp
            </button>

            <button id="menuButton" onclick="openMenu()">
                <i class='bx bx-menu'></i>
            </button>
        </nav>

        <div class="main" id="main">
            <div class="left">
                <h5>Olá, Eu sou Matheus</h5>
                <h3>Eu Crio <span>sistemas para internet</span> focados na experiência do usuário</h3>
                <p>
                    Vamos conversar sobre suas necessidades e ideias! Juntos, podemos criar soluções sob medida e de alta qualidade para o seu negócio. Entre em contato e descubra como posso ajudar a transformar sua visão em realidade.
                </p>

                <button class="btn-whatsapp" onclick="mensagem('https://wa.me/5598991968439')">
                    <i class='bx bxl-whatsapp tag-i'></i> Fale Comigo
                </button>

            </div>
            <div class="right">
                <img src="images/header-img.png">
            </div>
        </div>

        <div class="skills" id="skills">
            <h5>Minhas Habilidades</h5>
            <h3>Minha Experiência</h3>
            <div class="skill-items">
                <div class="item">
                    <div class="icon">
                        <i class='bx bx-code-curly'></i>
                    </div>
                    <h4>Desenvolvimento de Sistemas</h4>
                    <p>
                        Utilizando as mais recentes tecnologias do mercado, desenvolvemos sistemas totalmente personalizados, criados para atender às necessidades específicas do seu negócio. Você define as funcionalidades e nós transformamos suas demandas em soluções eficientes e de alta qualidade.
                    </p>
                </div>            
                <div class="item">
                    <div class="icon"><i class='bx bxs-data'></i></div>
                    <h4>Modelagem de Banco de Dados</h4>
                    <p>
                        Garanta a organização e eficiência dos seus dados! Com uma modelagem de banco de dados bem estruturada, ofereçemos soluções que facilitam o acesso, a segurança e o desempenho da sua informação.
                    </p>
                </div>            
                <div class="item">
                    <div class="icon">   
                        <i class='bx bx-code-alt'></i>                    
                    </div>
                    <h4>Desenvolvimento de Websites</h4>
                    <p>
                        Amplie sua presença online e alcance um público ainda maior. Utilizando as mais recentes tecnologias do mercado, transformamos suas ideias em sites claros, intuitivos e otimizados para busca, permitindo que você conquiste mais clientes.
                    </p>
                </div>
                <div class="item">
                    <div class="icon"><i class='bx bxl-figma'></i></div>
                    <h4>UI & UX Experiência do Usuário</h4>
                    <p>
                        Nosso Design de UI & UX entende as necessidades dos clientes. Por isso, nossas interfaces são intuitivas e esteticamente agradáveis, facilitando a navegação e aumentando a taxa de conversão do seu negócio.
                    </p>
                </div>            
            </div>
        </div>

        <div class="about" id="about">
            <div class="left">
                <img src="images/about-img.png">
            </div>
            <div class="right">
                <h5>Sobre</h5>
                <h3>Sobre Mim</h3>                                     
                <p>
                    Comecei minha jornada como desenvolvedor de software há 4 anos, apaixonado por construir soluções inovadoras para problemas complexos. 
                </p>
                <p>
                    Desde então, tive a oportunidade de trabalhar em diversos projetos desafiadores, desde a criação de modulos de sistemas ERP até a otimização de sistemas legados.                
                </p>
                <p>
                    Hoje, sou um especialista em PHP, Laravel e outras tecnologias de ponta, sempre buscando aprimorar minhas habilidades e entregar projetos de alta qualidade.
                </p>
            </div>
        </div>

        <div class="portfolio" id="portfolio">
            <div class="header">
                <div class="info">
                    <h5>Projetos Recentes</h5>
                    <h3>Meu Portfólio</h3>
                </div>
                <button onclick="mensagem('https://www.youtube.com/@AsmrProg')"><i class='bx bxl-youtube'></i> Onde Eu Estudo</button>
            </div>

            <div class="portfo-items">
                <div class="item">
                    <img src="images/portfolio/sc-1.jpg">
                    <div class="info">
                        <h4>Restaurante Virtual</h4>
                        <p><b>Cardápio & Cia</b></p>

                        <p>Aplicação web projetada para facilitar o sistema de delivery.</p>
                        <p>No Cardápio & Cia os clientes podem checar o cardápio online, escolher o produto, adicionar ao carrinho e enviar os pedidos pelo whatsapp, simplificando a vida do cliente e do fornecedor.</p>
                        <a href="https://github.com/am-matheusoliveira/sites-para-negocios/tree/main/cardapio-e-cia" target="_blank">Veja no GitHub <i class='bx bx-link-external'></i></a>
                    </div>
                </div>
                <div class="item">
                    <img src="images/portfolio/sc-2.jpg">
                    <div class="info">
                        <h4>Sistema de Gestão de Filmes</h4>
                        <p><b>Geste Movie</b></p>

                        <p>Este projeto é um sistema de gestão de filmes com catálogo de filmes, onde você pode cadastrar e visualizar os filmes, gêneros, atores e os diretores.</p>
                        <p>Este projeto foi desenvolvido com PHP, Laravel e MySQL.</p></p>
                        <a href="https://github.com/am-matheusoliveira/geste-movie" target="_blank">Veja no GitHub <i class='bx bx-link-external'></i></a>
                    </div>
                </div>
                <div class="item">
                    <img src="images/portfolio/sc-3.jpg">
                    <div class="info">
                        <h4>Consulta Previsão do Tempo</h4>
                        <p><b>Open Weather Map</b></p>

                        <p>Este projeto realiza o consumo de uma API Pública do OpenWeatherMap que retorna dados meteorológicos.</p>
                        <p>Com ele, o usuário pode realizar consultas de previsão do tempo com base em uma cidade, ele foi desenvolvido com PHP, Laravel e MySQL.</p>
                        <a href="https://github.com/am-matheusoliveira/openweather-app" target="_blank">Veja no GitHub <i class='bx bx-link-external'></i></a>
                    </div>
                </div>
            </div>

        </div>

        <div class="feedback" id="feedback">
            <h5>Avaliações de Clientes</h5>
            <h3>Feedback de Clientes</h3>
            <div class="customers">
                <div class="item">
                    <div class="rating">
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                    </div>
                    <p>
                        "Matheus é um colaborador valioso que contribuiu significativamente para o sucesso de nossa equipe. Sua dedicação e proatividade foram fundamentais para superarmos diversos desafios e alcançarmos nossos objetivos.
                    </p>
                    <div class="user">
                        <img src="images/feedback/us-1.jpg">
                        <div class="info">
                            <h5>Tiago Normando</h5>
                            <p>Zoe Tecnologia</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="rating">
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                    </div>
                    <p>                        
                        "Profissional altamente competente e atualizado com as últimas tendências do mercado de tecnologia. Seus trabalhos demonstram excelência e qualidade, sendo um grande acréscimo para qualquer equipe.
                    </p>
                    <div class="user">
                        <img src="images/feedback/us-2.jpg">
                        <div class="info">
                            <h5>Nilson Pires</h5>
                            <p>Cantanhede Participações</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="rating">
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                    </div>
                    <p>
                        "Meu colega de faculdade é um profissional em constante desenvolvimento, sempre atualizado com as últimas tendências do mercado de programação. Trabalhamos juntos em um projeto de sistema de pedidos web, onde sua expertise foi fundamental para entregarmos um produto de alta qualidade.
                    </p>
                    <div class="user">
                        <img src="images/feedback/us-3.jpg">
                        <div class="info">
                            <h5>Luiz Henrique</h5>
                            <p>Logus Tecnologia</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <footer>
            <div class="top">
                <div class="logo">
                    <img src="images/logo.png">
                    <a href="https://tinyurl.com/matheus-curriculo-pessoal/" target="_blank">Meu Currículo</a>
                </div>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="https://wa.me/5598991968439" target="_blank">Contato</a></li>
                    <li><a href="https://youtube.com/@AsmrProg" target="_blank">Onde Eu Estudo</a></li>
                    <li><a href="https://github.com/am-matheusoliveira" target="_blank">Projetos</a></li>
                </ul>
                <div class="social-links">
                    <a href="https://www.linkedin.com/in/am-matheusoliveira/" target="_blank"><i class='bx bxl-linkedin-square'></i></a>
                    <a href="https://www.instagram.com/am.matheusoliveira/" target="_blank"><i class='bx bxl-instagram'></i></a>
                    <a href="https://github.com/am-matheusoliveira" target="_blank"><i class='bx bxl-github'></i></a>
                </div>
            </div>
            <div class="separator"></div>
            <div class="bottom">
                <!--
                <p>
                    Feito com ❤️ Por WebDev - Matheus
                </p>

                <div class="links">
                    <a href="#">Privacy Policy</a>
                    <a href="#">Terms of Service</a>
                    <a href="#">Cookies Setting</a>
                </div>
                -->
            </div>
        </footer>

        <script src="js/script.js"></script>
    </body>
</html>