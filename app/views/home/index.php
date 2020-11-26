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
                    My name is Marcelo Vasconcelos Santiago.<br><br>
                    Four words to describe me are Enthusiastic, Dynamic, Organized and Strategic.<br><br>
                    Some of my favorite sports and games are Racing, Programming and Puzzle.<br><br>
                    Three things that make me happy are: Solve problems, Create solutions and Improve things.<br><br>
                    My favorite subjects are Programming, Robotics, Physics and Mathematics.<br><br>
                </p>
            </div>
            <div class="col-lg-6 ml-auto">
                <p class="lead">
                    Student and self-taught with experience in Windows (7/8/8.1/10), Linux
                    (slackware/ubuntu/kali/lite/slax/etc) and BSD (OpenBSD/FreeBSD) environments.<br><br>
                    Computer Maintenance (Computer Assembly/Disassembly/Formatting, Resolution Software and Hardware
                    Problems).<br><br>
                    Network Installation and Maintenance (Installation and Configuration of Wifi/Radio/Cabeda
                    Networks).<br><br>
                    DESKTOP/WEB PROGRAMMER in WINDOWS and LINUX environments with experience in PASCAL/DELPHI/OBJECT
                    PASCAL, ASSEMBLY/C/C++/LUA/GTK, SQL/SQLITE, HTML/CSS/JAVASCRIPT and PHP.<br><br>
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
                    You can see my repositories in
                    <a href="https://github.com/marcelosantiagok" target="_blank">Git Hub</a>
                    <br>
                    <br>
                    You can add me at
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