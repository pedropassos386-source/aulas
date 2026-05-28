<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <title>Login Facebook</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta name="description" content="login">
    <meta name="keywords" content="login">
    <meta name="author" content="Pedro Passos">
    <link rel="stylesheet" href="css/style4.css">
</head>

<body>
    <header>
        <div class="center">
            <div class="logo">
                <h2>Vought International</h2>
            </div>
            <form method="post" class="form-login">
                <div class="form-element">
                    <input placeholder="E-mail ou Telefone" type="email" />
                </div><!--Form-element-->
                <div class="form-element">
                    <input placeholder="Digite sua Senha" type="Password" id="senha" />
                </div><!--Form-element-->
                <div class="form-element">
                    <input type="submit" name="ação" value="Enviar" />
                </div><!--Form-element-->
            </form><!--Form-Login-->
            <div class="clear"></div>
        </div><!--center-->
    </header>

    <section class="main">
        <div class="center">
            <div class="img-logo">
                <img src="../projeto\assets\VoughtIntl.webp" />
            </div><!--img-logo-->

            <div class="abrir-conta">
                <h2>Abra sua conta</h2>
                <h3>Sejá um membro Vought agorá mesmo!</h3>

                <form class="criar-conta">
                    <div class="w50">
                        <input placeholder="Nome" type="text">
                    </div><!--w50-->

                    <div class="w50">
                        <input placeholder="Sobrenome" type="text">
                    </div><!--w50-->

                    <div class="w100">
                        <input placeholder="E-mail" type="email">
                    </div><!--w100-->

                    <div class="w100">
                        <input placeholder="Senha" type="Password">
                    </div><!--w100-->

                    <div class="w100">
                        <h2>Data de Nascimento:</h2>
                        <select name="nascimento-dia" class="nascimento">
                            <?php
                            for ($i = 1; $i <= 31; $i++) {
                                ?>
                                <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                            <?php } ?>
                        </select>
                        <select name="nascimento-mes" class="nascimento">
                            <option value="0">Janeiro</option>
                            <option value="0">Fevereiro</option>
                            <option value="0">Março</option>
                            <option value="0">Abril</option>
                            <option value="0">Maio</option>
                            <option value="0">Junho</option>
                            <option value="0">Julho</option>
                            <option value="0">Agosto</option>
                            <option value="0">Setembro</option>
                            <option value="0">Outubro</option>
                            <option value="0">Novembro</option>
                            <option value="0">Dezembro</option>
                        </select>
                        <select name="nascimento-ano" class="nascimento">
                            <?php
                            for ($i = 1950; $i <= 2026; $i++) {
                                ?>
                                <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                            <?php } ?>
                        </select>
                        <div class="clear"></div>
                    </div><!--w100-->


                    <div class="w100">
                        <div class="radio">
                            <input type="radio" name="sexo" value="Masculino">
                            <h2>Masculino</h2>
                        </div>

                        <div class="radio">
                            <input type="radio" name="sexo" value="Feminino">
                            <h2>Feminino</h2>
                            
                        </div>
                        <div class="clear"></div>
                    </div><!--w100-->

                    <div class="w100">
                        <input class="botão" type="submit" name="acao" value="Cadastrar!">
                    </div><!--w100-->
                    <div class="clear"></div>
                </form><!--criar-conta-->
            </div><!--abrir-conta-->
            <div class="clear"></div>
        </div><!--center-->
    </section><!--Main-->
   <footer>
    <p>Todos os direitos reservados a Vought Internacional</p>
    <p>Vought Tower 177 6th Ave,New York,10013,USA</p>
    <p>Vought 2026</p>
   </footer>
</body>

</html>