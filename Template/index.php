<?php  require_once("conecta.php");   ?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Directing Template">
    <meta name="keywords" content="Directing, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FastDictionary</title>


<!-- Script -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- jQuery UI -->
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700;800&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/flaticon.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/barfiller.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-md-3">
                    <div class="header__logo">
                        <a href="./index.html"><img src="img/dic2.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-9 col-md-9">
                    <div class="header__nav">
                        <nav class="header__menu mobile-menu">
                            <ul>
                                <li class="active"><a href="./index.html">Home</a></li>
                                <li><a href="#dicas">Dicas</a></li>
                                <li><a href="#sobre">Sobre</a>
                                    <ul class="dropdown">
                                        <li><a href="./blog-details.html">Detalhes</a></li>
                                        <li><a href="./contact.html">Contato</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                        <div class="header__menu__right">
                            <a href="#" class="primary-btn">Palavra do dia</a>
                        </div>
                    </div>
                </div>
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>
    <!-- Header Section End -->

    <!-- Hero Section Begin -->
    <section class="hero set-bg" data-setbg="img/hero/hero-bg2.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="hero__text">
                        <div class="section-title">
                            <h2>Digite a palavra que deja encontrar</h2>
                            <p>Aumente seu vocabulário Inglês-Português</p>
                        </div>

                    </div>
                </div>

                <div class="col-lg-12 d-flex justify-content-center">
                    <div class="input-group input-group-lg col-8">
                        
                        <input type="text" class="form-control" placeholder=" " aria-label="Recipient's username" aria-describedby="basic-addon2" name="pesquisa">
                           <datalist id="palavras">
                           <?php 
                               $query = "SELECT palavra FROM fastdicionary.dicionario";
                               $cmd = $conecta->prepare($query);
                               $cmd->execute();
                               $result = $cmd->fetchAll(PDO::FETCH_ASSOC);
                               foreach ($result as $row) {
                                 echo '<option value = "'.$row['palavra'].'">';
                               }
                           
                           ?>
                        <div class="input-group-append">
                            <!--<button type="button" class="btn btn-danger"  type="button" onclick="Mudarestado('palavradiv')">Pesquisar</button>-->
                            <a href="#palavradiv" class="btn btn-danger" type="button" onclick="Mudarestado('palavradiv')" name="search">Pesquisar</a>
                        </div>
                        </datalist>
                    </div>
                    </div>

            </div>
        </div>
    </section>
    <!-- Hero Section End -->

<script>
    function Mudarestado(el) {
        var display = document.getElementById(el).style.display;
        if(display == "none")
            document.getElementById(el).style.display = 'block';
        else
            document.getElementById(el).style.display = 'none';
    }
</script>


    <!-- Container da palavra -->
    <section class="categories spad">
        <div class="container" id="palavradiv">
            <div class="row">
                <div class="col-lg-12">
                        <h2 class="text-align:left">Home <p>Substantivo (plural: Homes)</p></h2>  
                        <h4 class="text-primary">Casa, Lar, lugar onde vive ou viveu</h4></br>
                        <h5>Exemplos: "Deliver the package to my home| Entregre o pacote em minha casa"; "He stays home on weekends | Ele fica em casa nos fins de semana"</h5>
                        <br>
                        <h2 class="text-align:left">Home <p>Adjetivo (plural: Homes)</p></h2>  
                        <h4 class="text-primary">Doméstico, Familiar</h4></br>
                        <h5>Exemplos: "My home life is affecting my work | Minha vida doméstica está afetando meu trabalho."; "Children grow up happy in a healthy home environment | As crianças crescem felizes em um ambiente familiar saudável."</h5>

                </div>
            </div>
        </div>
    </section>
    <!-- fim do container da palavra -->


    <!-- dicas inicio sessão -->
    <section class="most-search spad">
        <div class="container" id="dicas">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Confira algumas dicas para melhorar seu inglês</h2>
                        <p>Dicas dividas em categorias de reading, listening, speaking e nivéis básico, intermidiário, avançado </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="most__search__tab">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab">
                                    Reading
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab">
                                    Listening
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-3" role="tab">
                                    Speaking
                                </a>
                            </li>
    
                        </ul>
                    </div>
                    <div class="tab-content">
                        <!--TAB 1 READING INICIO-->
                        <div class="tab-pane active" id="tabs-1" role="tabpanel">
                            <div class="row">
                                <div class="col-lg-4 col-md-6">
                                    <div class="listing__item">
                                            <div class="embed-responsive embed-responsive-4by3">
                                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/VL363_dpaHc"></iframe>
                                            </div>
                                        <div class="listing__item__text">
                                            <div class="listing__item__text__inside">
                                                <h5>Melhore sua pronuncia</h5>
                                                <div class="listing__item__text__rating">
                                                </div>
                                                <ul>
                                                    sons das palavras,consoantes e vogais<br><br><br>
                                                </ul>
                                            </div>
                                            <div class="listing__item__text__info">
                                                <div class="p-3 mb-2 bg-danger text-white font-weight-bold text-center">Básico</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="listing__item">
                                            <div class="embed-responsive embed-responsive-4by3">
                                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/VL363_dpaHc"></iframe>
                                            </div>
                                        <div class="listing__item__text">
                                            <div class="listing__item__text__inside">
                                                <h5>Melhore sua pronuncia</h5>
                                                <div class="listing__item__text__rating">
                                                </div>
                                                <ul>
                                                    sons das palavras,consoantes e vogais<br><br><br>
                                                </ul>
                                            </div>
                                            <div class="listing__item__text__info">
                                                <div class="p-3 mb-2 bg-warning text-white font-weight-bold text-center">Intermediário</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="listing__item">
                                            <div class="embed-responsive embed-responsive-4by3">
                                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/VL363_dpaHc"></iframe>
                                            </div>
                                        <div class="listing__item__text">
                                            <div class="listing__item__text__inside">
                                                <h5>Melhore sua pronuncia</h5>
                                                <div class="listing__item__text__rating">
                                                </div>
                                                <ul>
                                                    sons das palavras,consoantes e vogais<br><br><br>
                                                </ul>
                                            </div>
                                            <div class="listing__item__text__info">
                                                <div class="p-3 mb-2 bg-info text-white font-weight-bold text-center">Avançado</div>
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                            </div>
                        </div>

                        <!--TAB 2 READING INICIO -->
                        <div class="tab-pane" id="tabs-2" role="tabpanel">
                            <div class="row">
                                <div class="col-lg-4 col-md-6">
                                    <div class="listing__item">
                                            <div class="embed-responsive embed-responsive-4by3">
                                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/VL363_dpaHc"></iframe>
                                            </div>
                                        <div class="listing__item__text">
                                            <div class="listing__item__text__inside">
                                                <h5>Melhore sua pronuncia</h5>
                                                <div class="listing__item__text__rating">
                                                </div>
                                                <ul>
                                                    sons das palavras,consoantes e vogais<br><br><br>
                                                </ul>
                                            </div>
                                            <div class="listing__item__text__info">
                                                <div class="p-3 mb-2 bg-info text-white font-weight-bold text-center">Avançado</div>
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                            </div>
                        </div>

                        <!--TAB 3 SPEAKING INICIO-->
                        <div class="tab-pane" id="tabs-3" role="tabpanel">
                            <div class="row">
                                <div class="col-lg-4 col-md-6">
                                    <div class="listing__item">
                                            <div class="embed-responsive embed-responsive-4by3">
                                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/VL363_dpaHc"></iframe>
                                            </div>
                                        <div class="listing__item__text">
                                            <div class="listing__item__text__inside">
                                                <h5>Melhore sua pronuncia</h5>
                                                <div class="listing__item__text__rating">
                                                </div>
                                                <ul>
                                                    sons das palavras,consoantes e vogais<br><br><br>
                                                </ul>
                                            </div>
                                            <div class="listing__item__text__info">
                                                <div class="p-3 mb-2 bg-info text-white font-weight-bold text-center">Avançado</div>
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- Fim dicas sessão -->

<!-- inicio rodapé-->
<footer class="footer">
    <div class="container" id="sobre">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="footer__about">
                    <div class="footer__about__logo">
                        <a href="./index.html"><img src="img/dic2.png" alt=""></a>
                    </div>
                    <p>Simples,Rápido e Prático </p>
                </div>
            </div>
            <div class="col-lg-4 offset-lg-1 col-md-6">
                <div class="footer__address">
                    <ul>
                        <li>
                            <span>Telefone:</span>
                            <p>(12) 8888-0000</p>
                        </li>
                        <li>
                            <span>Email:</span>
                            <p>fastdic@gmail .com</p>
                        </li>
                        <li>
                            <span>Nossas Redes sociais:</span>
                            <div class="footer__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-skype"></i></a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 offset-lg-1 col-md-6">
                <div class="footer__widget">
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Suporte</a></li>
                        <li><a href="#">Como usar</a></li>
                        <li><a href="#">Contato</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Fim rodapés -->



    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.nicescroll.min.js"></script>
    <script src="js/jquery.barfiller.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>



</body>

</html>