<!DOCTYPE html>
<html lang="Br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Criando menu com submenu responsivo</title>
        <link href="./css/style2.css" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link
            href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
            rel="stylesheet">
        <link
            href="./font/font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.min.css"
            rel="stylesheet" />
            <style>
                html,body{
                height: 100%;
            }

            .side-menu{
                width: 200px;
                height: 100%;
                background-color: rgb(107, 83, 129);
                display: none;
            }

            .menu-item{
                position: relative;
            }

            .menu-item a{
                display: block;
                border-bottom: 1px solid black;
                color: white;
                text-decoration: none;
                padding: 10px 15px;
            }
            </style>

        <body>

            <header>

                <div class="container">
                    <nav class="navbar">
                       
                        <h2>AGGA</h2>

                        
                        <ul class="menu">

                            <li>
                                <a href="#" class="abrir-menu">Home</a>
                            <ul class="sub-menu">
                                    <li><a href="#">Pagina Principal</a></li>
                                    <li><a href="#">Pagina de Login</a></li>
                                    <li><a href="#">Desconectar</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#" class="abrir-menu">Sobre</a>
                                <ul class="sub-menu">
                                    <li><a href="#">Criação</a></li>
                                    <li><a href="#">Sedes</a></li>
                                    <li><a href="#">Lideres</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#" class="abrir-menu">Contato</a>
                                <ul class="sub-menu">
                                    <li><a href="#">Redes Sociais</a></li>
                                    <li><a href="#">E-Mail</a></li>
                                    <li><a href="#">Telefones</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                    



                    <nav class=" menu-mobile">
                        <i class="fa fa-bars"></i>
                        <ul>
                            <li>
                                <a href="#">Home</a>
                                <ul class="submenu-mobile">
                                    <li><i class="fa fa-angle-double-right"
                                            aria-hidden="true"></i> <a
                                            href="#">Pagina Principal</a></li>
                                    <li><i class="fa fa-angle-double-right"
                                            aria-hidden="true"></i> <a
                                            href="#">Pagina de Login</a></li>
                                    <li><i class="fa fa-angle-double-right"
                                            aria-hidden="true"></i> <a
                                            href="#">Desconectar</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Sobre</a>
                                <ul class="submenu-mobile">
                                    <li><i class="fa fa-angle-double-right"
                                            aria-hidden="true"></i> <a
                                            href="#">Criação</a></li>
                                    <li><i class="fa fa-angle-double-right"
                                            aria-hidden="true"></i> <a
                                            href="#">Sedes</a></li>
                                    <li><i class="fa fa-angle-double-right"
                                            aria-hidden="true"></i> <a
                                            href="#">Lideres</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Contato</a>
                                <ul class="submenu-mobile">
                                    <li><i class="fa fa-angle-double-right"
                                            aria-hidden="true"></i> <a
                                            href="#">Redes Sociais</a></li>
                                    <li><i class="fa fa-angle-double-right"
                                            aria-hidden="true"></i> <a
                                            href="#">E-Mail</a></li>
                                    <li><i class="fa fa-angle-double-right"
                                            aria-hidden="true"></i> <a
                                            href="#">Telefones</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div><!--container-->

            </header>
            <script
                src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
            <script type="text/javascript">
                    $('nav.menu-mobile > i').click(function(){
                        $(this).parent().find('ul:not(.submenu-mobile)').slideToggle();
                    });
                    $(".abrir-menu").click(function(){
                        
                        $(this).next(".sub-menu").slideToggle();
                    });

                    
                    
                </script>
        </body>
