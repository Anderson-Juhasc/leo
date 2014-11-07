 <?php
     $PAGE = basename($_SERVER['PHP_SELF']);
 ?>
<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="assets/css/main.css" type="text/css" />
</head>
<body>
    <!-- .head -->
    <?php if ($PAGE == 'index.php') : ?>
    <header class="head">
    <?php else : ?>
    <header class="head head--inner">
    <?php endIf; ?>
        <!-- .head-top -->
        <div class="head-top">
            <!-- .wrapper -->
            <div class="wrapper">
                <!-- .head-top-nav -->
                <ul class="head-top-nav">
                    <li>
                        Fone: (11) 5501 - 8300
                    </li>
                    <li>
                        <a href="" title="Spanish">
                            <img src="assets/img/spanish.png" alt="" />
                        </a>
                    </li>
                    <li>
                        <a href="" title="English">
                            <img src="assets/img/english.png" alt="" />
                        </a>
                    </li>
                    <li>
                        <a href="" title="Portuguese">
                            <img src="assets/img/portuguese.png" alt="" />
                        </a>
                    </li>
                </ul>
                <!-- /.head-top-nav -->
            </div>
            <!-- /.wrapper -->
        </div>
        <!-- /.head-top -->

        <!-- .head-mid -->
        <div class="head-mid">
            <!-- .wrapper -->
            <div class="wrapper">
                <!-- .logo -->
                <a href="" class="logo">
                    <img src="assets/img/config.png" alt="Config Soluções Tecnológicas" />
                </a>
                <!-- /.logo -->

                <!-- .head-btn -->
                <a href="" class="head-btn js--head-btn">
                    <img src="assets/img/head-btn.png" />
                </a>
                <!-- /.head-btn -->

                <!-- .head-mid-search -->
                <div class="head-mid-search">
                    <!-- .head-mid-search__label -->
                    <label for="" class="head-mid-search__label">Buscar no site:</label>
                    <!-- /.head-mid-search__label -->

                    <!-- .head-mid-search__input -->
                    <div class="head-mid-search__input">
                        <input id="" name="" type="text" class="input" placeholder="Buscar no site" />
                        <button class="btn">Search</button>
                    </div>
                    <!-- /.head-mid-search__input -->
                </div>
                <!-- /.head-mid-search -->

                <!-- .head-mid-nav -->
                <ul class="head-mid-nav">
                    <li>
                        <a href="">Atendimento online</a>
                    </li>
                    <li>
                        <a href="">Central de Relacionamento</a>
                    </li>
                </ul>
                <!-- /.head-mid-nav -->

                <!-- .cf -->
                <div class="cf">
                    <!-- .head-mid-nav-alt -->
                    <ul class="head-mid-nav-alt">
                        <li>
                            Acesso ao cliente
                        </li>
                        <li>
                            <a href="" class="btn btn--white js--btn-support">
                                <div class="btn__icon">
                                    <img src="assets/img/icon-support.png" alt="Suporte" />
                                </div>
                                <div class="btn__text">
                                    Suporte
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="" class="btn btn--white">
                                <div class="btn__icon">
                                    <img src="assets/img/icon-projects.png" alt="Suporte" />
                                </div>
                                <div class="btn__text">
                                    Projetos
                                </div>
                            </a>
                        </li>
                    </ul>
                    <!-- /.head-mid-nav-alt -->

                    <!-- .head-mid-login -->
                    <div class="head-mid-login js--head-mid-login">
                        <!-- .head-mid-login__head -->
                        <div class="head-mid-login__head">
                            <h6 class="head-mid-login__title">Suporte ao cliente</h6>
                        </div>
                        <!-- /.head-mid-login__head -->

                        <!-- .head-mid-login__body -->
                        <div class="head-mid-login__body">
                            <!-- .head-mid-login__form -->
                            <div class="head-mid-login__form">
                                <!-- .head-mid-login__cell -->
                                <div class="head-mid-login__cell head-mid-login__cell--user">
                                    <input id="" name="" type="text" class="head-mid-login__user input" placeholder="Login" />
                                </div>
                                <!-- /.head-mid-login__cell -->

                                <!-- .head-mid-login__cell -->
                                <div class="head-mid-login__cell head-mid-login__cell--password">
                                    <input id="" name="" type="password" class="head-mid-login__password input" placeholder="Senha" />
                                    <a href="" class="head-mid-login__remember">Esqueci a senha</a>
                                </div>
                                <!-- /.head-mid-login__cell -->

                                <!-- .head-mid-login__cell -->
                                <div class="head-mid-login__cell head-mid-login__cell--btn">
                                    <button class="head-mid-login__btn btn btn--red">OK</button>
                                </div>
                                <!-- /.head-mid-login__cell -->
                            </div>
                            <!-- /.head-mid-login__form -->
                        </div>
                        <!-- /.head-mid-login__body -->

                        <!-- .head-mid-login__foot -->
                        <div class="head-mid-login__foot">
                            <a href="" class="head-mid-login__signup">Não tenho login e senha! Solicitar acesso</a>
                        </div>
                        <!-- /.head-mid-login__foot -->
                    </div>
                    <!-- /.head-mid-login -->
                </div>
                <!-- /.cf -->
            </div>
            <!-- /.wrapper -->
        </div>
        <!-- /.head-mid -->

        <!-- .head-bot -->
        <div class="head-bot js--head-bot">
            <!-- .wrapper -->
            <div class="wrapper">
                <!-- .head-bot-nav -->
                <ul class="head-bot-nav">
                    <li>
                        <a href="">
                            <img src="assets/img/home-head.png" alt="" />
                        </a>
                    </li>
                    <li>
                        <a href="">Home</a>
                    </li>
                    <li>
                        <a href="">Empresa</a>
                    </li>
                    <li class="js--dropdown">
                        <a href="">Produtos &#x25BE;</a>

                        <!-- .head-bot-dropdown -->
                        <ul class="head-bot-dropdown js--head-bot-dropdown">
                            <li>
                                <a href="">Link Page</a>
                            </li>
                            <li>
                                <a href="">Link Page</a>
                            </li>
                            <li>
                                <a href="">Link Page</a>
                            </li>
                        </ul>
                        <!-- /.head-bot-dropdown -->
                    </li>
                    <li class="js--dropdown">
                        <a href="">Serviços &#x25BE;</a>

                        <!-- .head-bot-dropdown -->
                        <ul class="head-bot-dropdown js--head-bot-dropdown">
                            <li>
                                <a href="">Link Page</a>
                            </li>
                            <li>
                                <a href="">Link Page</a>
                            </li>
                            <li>
                                <a href="">Link Page</a>
                            </li>
                        </ul>
                        <!-- /.head-bot-dropdown -->
                    </li>
                    <li>
                        <a href="">Notícias</a>
                    </li>
                    <li>
                        <a href="">Decretos</a>
                    </li>
                    <li>
                        <a href="">Clientes</a>
                    </li>
                    <li>
                        <a href="">Imprensa</a>
                    </li>
                    <li>
                        <a href="">Contato</a>
                    </li>
                    <li>
                        <a href="">Atendimento Online</a>
                    </li>
                    <li>
                        <a href="">Central de Relacionamento</a>
                    </li>
                </ul>
                <!-- /.head-bot-nav -->
            </div>
            <!-- /.wrapper -->
        </div>
        <!-- /.head-bot -->
    </header>
    <!-- /.head -->
