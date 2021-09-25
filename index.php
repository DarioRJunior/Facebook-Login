<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Réplica do login do facebook">
    <meta name="keywords" content="facebook, réplica facebook, login, dario.code, Dario.Code">
    <meta name="author" content="Dario.Code">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="img/Facebook.ico" type="image/x-icon">
    <title>Facebook login</title>
</head>

<body>

    <header>
        <div class="center">
            <div class="logo">
                <h2>facebook</h2>
            </div>
            <!-- logo -->
            <form method="POST" class="form-login">
                <div class="form-element">
                    <p>E-mail ou telefone:</p>
                    <input type="email" name="" id="">
                </div>
                <!-- form-element -->
                <div class="form-element">
                    <p>Senha:</p>
                    <input type="password" name="" id="">
                </div>
                <!-- form-element -->
                <div class="form-element">
                    <input type="submit" name="Acao" value="Entrar">
                </div>
                <!-- form-element -->
            </form>
            <!-- form-login -->
            <div class="clear"></div>
        </div>
        <!-- Center -->
    </header>
    <!-- Header -->


    <section class="main">
        <div class="center">
            <div class="img-pessoas">
                <h3>O Facebook ajuda você a se conectar e compartilhar com as pessoas que fazem parte da sua vida.</h3>
                <img src="img/img1.png" alt="">
            </div>
            <!-- img-pessoas -->
            <div class="abrir-conta">
                <h2>Abra uma conta</h2>
                <h3>É gratuito e sempre será.</h3>

                <form class="criar-conta">
                    <div class="w50">
                        <input placeholder="Nome" type="text" name="" id="">
                    </div>
                    <!-- w50 -->

                    <div class="w50">
                        <input placeholder="Sobrenome" type="text" name="" id="">
                    </div>
                    <!-- w50 -->

                    <div class="w100">
                        <input placeholder="E-mail" type="email" name="" id="">
                    </div>
                    <!-- w100 -->

                    <div class="w100">
                        <input placeholder="Senha" type="password" name="" id="">
                    </div>
                    <!-- w100 -->

                    <div class="w100">
                        <h2>Data de Nascimento:</h2>
                        <select name="nascimento-dia" class="nascimento">
                            <?php
                            for ($i = 1; $i <= 31; $i++) {
                            ?>
                                <option value="<?php echo $i ?>"><?php echo $i ?></option>
                            <?php  } ?>
                        </select>
                        <select name="nascimento-mes" class="nascimento">
                            <option value="1">Janeiro</option>
                            <option value="2">Fevereiro</option>
                            <option value="3">Março</option>
                            <option value="4">Abril</option>
                            <option value="5">Maio</option>
                            <option value="6">Junho</option>
                            <option value="7">Julho</option>
                            <option value="8">Agosto</option>
                            <option value="9">Setembro</option>
                            <option value="10">Outubro</option>
                            <option value="11">Novembro</option>
                            <option value="12">Dezembro</option>
                        </select>
                        <select name="nascimento-ano" class="nascimento">
                            <?php
                            for ($i = 1960; $i <= 2021; $i++) {
                            ?>
                                <option value="<?php echo $i ?>"><?php echo $i ?></option>
                            <?php  } ?>
                        </select>
                        <div class="clear"></div>
                    </div>
                    <!-- w100 -->

                    <div class="w100">
                        <h3>Gênero</h3>
                        <div class="input-radio">
                            <input type="radio" value="masculino" name="sexo" id="">
                            <label for="">Masculino</label>
                        </div>
                        <div class="input-radio">
                            <input type="radio" value="feminino" name="sexo" id="">
                            <label for="">Feminino</label>
                        </div>
                        <div class="input-radio">
                            <input type="radio" value="personalizado" name="sexo" id="">
                            <label for="">Personalizado</label>
                        </div>
                        <!-- input-radio -->
                        <div class="clear"></div>
                    </div>
                    <!-- w100 -->

                    <div class="w100">
                        <input type="submit" name="acao" value="Cadastre-se">
                    </div>
                    <!-- w100 -->

                    <div class="clear"></div>
                </form>
                <!-- criar-conta -->
            </div>
            <!-- abrir-conta -->
            <div class="clear"></div>
        </div>
    </section>
    <!-- main -->

    <section class="linguas">
        <div class="center">
            <a class="selected-lingua" href="#">Português (Brasil)</a>
            <a href="#">English (US)</a>
            <a href="#">Espãnol</a>
            <a href="#">Fránçais (France)</a>
            <a href="#">Italiano</a>
            <a href="#">Deutsch</a>
        </div>
        <!-- center -->

        <div style="border:0;padding-top:10px;" class="center">
            <a href="#">Cadastre-se</a>
            <a href="#">Entrar</a>
            <a href="#">Messenger</a>
            <a href="#">Facebook Lite</a>
            <a href="#">Celular</a>
            <a href="#">Encontrar amigos</a>
            <a href="#">Pessoas</a>
            <a href="#">Páginas</a>
            <a href="#">Locais</a>
            <a href="#">Jogos</a>
            <a href="#">Marketplace</a>
            <a href="#">Vídeos</a>
            <a href="#">Grupos</a>
            <a href="#">Receitas</a>
            <a href="#">Esportes</a>
            <a href="#">Look</a>
            <a href="#">Moments</a>
            <a href="#">Instagram</a>
            <a href="#">Local</a>
            <a href="#">Sobre</a>
            <a href="#">Criar anúncio</a>
            <a href="#">Criar Página</a>
            <a href="#">Desenvolvedores</a>
            <a href="#">Carreiras</a>
            <a href="#">Privacidade</a>
            <a href="#">Cookies</a>
            <a href="#">Opções de anúncio</a>
            <a href="#">Termos</a>
            <a href="#">Ajuda</a>
        </div>
        <!-- center -->
    </section>
    <!-- linguas -->
</body>

</html>