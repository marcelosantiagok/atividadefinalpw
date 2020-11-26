<?php
$this->view('home/cabecario');
?>

<!-- Navigation-->
<?php
$this->view('home/menu');
?>

<!-- Masthead-->
<header class="masthead bg-primary text-white text-center">
    <div class="container d-flex align-items-center flex-column">
        <!-- Masthead Avatar Image-->
        <img class="masthead-avatar mb-5" src="assets/img/avatar.jpg" alt="" />
        <!-- Masthead Heading-->
        <h1 class="masthead-heading text-uppercase mb-0">Marcelo Vasconcelos Santiago</h1>
        <!-- Icon Divider-->
        <div class="divider-custom divider-light">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        <!-- Masthead Subheading-->
        <p class="masthead-subheading font-weight-light mb-0">Programador Web - Desenvolvedor Mobile
        </p>
    </div>
</header>

<!-- Portfolio Section-->
<section class="page-section portfolio" id="portfolio">
    <div class="container">
        <!-- Portfolio Section Heading-->
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Portfólio</h2>
        <!-- Icon Divider-->
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        <!-- Portfolio Grid Items-->
        <div class="row justify-content-center">
            <?php
            $this->view('home/items');
            ?>
        </div>
    </div>
</section>

<!-- About Section-->
<section class="page-section bg-primary text-white mb-0" id="about">
    <div class="container">
        <!-- About Section Heading-->
        <h2 class="page-section-heading text-center text-uppercase text-white">Sobre</h2>
        <!-- Icon Divider-->
        <div class="divider-custom divider-light">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        <!-- About Section Content-->
        <div class="row">
            <div class="col-lg-4 mr-auto">
                <p class="lead">
                    Meu nome é Marcelo Vasconcelos Santiago.<br><br>
                    Olá atualmente trabalho como Agente de Portaria(Porteiro) de um prédio residencial, e hoje tenho o
                    propósito de ingressar num quadro de equipe de desenvolvimento, sou um estudante da área de TI
                    ultimamente focado em programação, procurando aprender começei cerca de 2 anos atrás em 2018 quando
                    iniciei minha faculdade na uniplan-DF no curso de Análise e Desenvolvimento de Sistemas. Já tinha
                    interesse na área mas, como na época não tinha conhecimentos de bolsas que poderiam ajudar a
                    financiar a minha graduação, visto que na época se custava bem caro o curso aqui na minha região,
                    então isto foi possível ao conseguir uma bolsa de 50% que me ajudou muito para que pudesse pagar
                    minha faculdade e assim dar início a área de TI, hoje como o mercado de trabalho está exigindo
                    bastante experiência na área de TI, resolvi me especializar em Engenharia de Software -
                    Pós-Graduação pela Estácio concluindo no ano de 2021, desde então venho aprendendo durante estes
                    anos cursos em diversas plataformas, como Udemy, Youtube, programas como Novos
                    Caminhos(Desenvolvimento Mobile, Programador Web), Senac - Administrador de Banco de Dados, os ramos
                    da TI que mais me adaptei foram nestes três seguimentos, Desenvolvimento Mobile, Web e Banco de
                    Dados. Começei também o aperfeiçoamento do inglês, algo que é fundamental nesta área, com o objetivo
                    de se tornar fluente em inglês. Decidi após a conclusão destes entregar minha proposta ao mercado de
                    trabalho com a intenção de integrar numa equipe de desenvolvimento. <br><br>
                </p>
            </div>
            <div class="col-lg-6 ml-auto">
                <p class="lead">
                    Pós Graduação - Engenharia de Software, Universidade Estácio(2020-2021)<br><br>
                    Análise e Desenvolvimento de Sistemas - Uniplan DF (2018-2019)<br><br>
                    Principais tecnologias que venho utilizando: Java - C# - SQL(MySql) - React-Native - PHP - HTML -
                    CSS - Docker - Javascript <br><br>
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section-->
<section class="page-section" id="contact">
    <div class="container">
        <!-- Contact Section Heading-->
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Entre em contato comigo</h2>
        <!-- Icon Divider-->
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        <!-- Contact Section Form-->
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <?php
                $this->view('home/form');
                ?>
            </div>
        </div>
    </div>
</section>

<!-- Footer-->
<footer class="footer text-center">
    <div class="container">
        <div class="row">
            <!-- Footer Location-->
            <div class="col-lg-4 mb-5 mb-lg-0">
                <h4 class="text-uppercase mb-4">Localização</h4>
                <p class="lead mb-0">
                    Brasília - DF
                </p>
            </div>
            <!-- Footer Social Icons-->
            <div class="col-lg-4 mb-5 mb-lg-0">
                <h4 class="text-uppercase mb-4">Na web</h4>
                <a class="btn btn-outline-light btn-social mx-1" href="https://github.com/marcelosantiagok"
                    target="_blank"><i class="fab fa-fw fa-github"></i></a>
                <a class="btn btn-outline-light btn-social mx-1"
                    href="https://www.linkedin.com/in/marcelo-santiago-b94491160/" target="_blank"><i
                        class="fab fa-fw fa-linkedin-in"></i></a>
            </div>
            <!-- Footer About Text-->
            <div class="col-lg-4">
                <h4 class="text-uppercase mb-4">Mais Sobre mim</h4>
                <p class="lead mb-0">
                    Você pode ver meus respositórios em:
                    <a href="https://github.com/marcelosantiagok" target="_blank">Git Hub</a>
                    <br>
                    <br>
                    Você pode ver minha rede oficial no linkedin e entrar em contato comigo.
                    <a href="https://www.linkedin.com/in/marcelo-santiago-b94491160/" target="_blank">Linkedin</a>
                </p>
            </div>
        </div>
    </div>
</footer>

<!-- Copyright Section-->
<div class="copyright py-4 text-center text-white">
    <div class="container"><small>Copyright © Marcelo Vasconcelos Santiago</small></div>
</div>

<!-- Scroll to Top Button (Only visible on small and extra-small screen sizes)-->
<div class="scroll-to-top d-lg-none position-fixed">
    <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top"><i
            class="fa fa-chevron-up"></i></a>
</div>

<!-- Portfolio Modals-->
<?php
$this->view('home/modals');
?>

<?php
$this->view('home/rodape');
?>