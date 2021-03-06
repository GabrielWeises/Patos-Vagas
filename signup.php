<?php
session_start();
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=no">
<title>Patos Vagas - Criar conta</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-slider.min.css">
<link rel="stylesheet" type="text/css" href="css/fontawesome-all.min.css">
<link rel="stylesheet" type="text/css" href="css/slick.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/custom.css">
</head>

<body class="fullpage">
<div id="form-section" class="container-fluid signup">
    <div class="website-logo">
        <a href="index.php">
            <div class="logo" style="width:62px;height:18px"></div>
        </a>
    </div>
    <div class="row">
        <div class="info-slider-holder">
            <div class="info-holder">
                <h6 style="font-weight: lighter !important;">Seu emprego a poucos cliques de você!</h6>
                <div class="bold-title">Veja alguns dos <br>Nossos incríveis <span>Parceiros!</span></div>
                <div class="mini-testimonials-slider">
                    <div>
                        <div class="details-holder">
                            <img class="photo" src="images/iconejob.svg" alt="">
                            <h4>CNI Patos de Minas</h4>
                            <h5>Cursos de Informática e Idiomas.</h5>
                            <p>A CNI está a X anos no mercado local e já proporcionou inumeras oportunidades para seus alunos e comunidade externa!</p>
                        </div>
                    </div>
                    <div>
                        <div class="details-holder">
                            <img class="photo" src="images/iconejob2.svg" alt="">
                            <h4>Olivet</h4>
                            <h5>Educação Profissional</h5>
                            <p>A Escola Olivet está a 30 anos no mercado criando profissionais com excelência, Além de proporcionar grandes oportunidades
                                de trabalho com a Talentos RH!
                            </p>
                        </div>
                    </div>
                    <div>
                        <div class="details-holder">
                            <img class="photo" src="images/iconejob4.svg" alt="">
                            <h4>CDL Patos de Minas</h4>
                            <h5>Vagas de Emprego</h5>
                            <p>A CDL Patos de Minas já atua a mais de 40 anos ajudando população a conquistar o tão sonhado emprego!
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-holder">
            <div class="menu-holder">
                <ul class="main-links">
                    <li><a class="normal-link" href="signin.php">Já tem uma conta?</a></li>
                    <li><a class="sign-button" href="signin.php">Entrar</a></li>
                </ul>
            </div>
            <div class="signin-signup-form">
                <div class="form-items">
                    <div class="form-title">Criar uma nova conta.</div>
                    <form id="signupform" method="POST" action="lib/cadastro.php">
                        <div class="form-text">
                            <input type="text" name="nome" placeholder="Nome de Usuário" required>
                        </div>
                        <div class="form-text">
                            <input type="text" name="telefone" placeholder="Telefone">
                        </div>
                        <div class="form-text">
                            <input type="text" name="usuario" placeholder="E-mail" required>
                        </div>
                        <div class="form-text">
                            <input type="password" name="senha" placeholder="Senha" required>
                        </div>
                        <div class="form-button">
                            <button id="submit" type="submit" class="ybtn ybtn-accent-color">Criar Conta</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap-slider.min.js"></script>
<script src="js/slick.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>
