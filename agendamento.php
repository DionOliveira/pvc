<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Preventive Car</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/style.css">
    <?php include "bd/cod.php" ?>
</head>
<body>
    <div class="wrap">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-md-3 d-flex align-items-center">
                    <a class="navbar-brand" href="index.html">Preventive Car<span>.</span></a>
                </div>
                <div class="col-md-7">
                    <div class="row">
                        <div class="col">
                            <div class="top-wrap d-flex">
                                <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-location-arrow"></span></div>
                                <div class="text"><span>Endereço</span><span>Rua Goitacazes 76 - Centro - BH/MG</span>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="top-wrap d-flex">
                                <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-location-arrow"></span></div>
                                <div class="text"><span>Contato</span><span>(31)999997-7700</span></div>
                            </div>
                        </div>
                        <div class="col-md-3 d-flex justify-content-end align-items-center">
                            <div class="social-media">
                                <p class="mb-0 d-flex">
                                    <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>
                                    <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"><i class="sr-only">Twitter</i></span></a>
                                    <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a>
                                    <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-dribbble"><i class="sr-only">Dribbble</i></span></a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item"><a href="index.html" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="about.html" class="nav-link">Sobre</a></li>
                    <li class="nav-item"><a href="services.html" class="nav-link">Serviços</a></li>
                    <li class="nav-item"><a href="project.html" class="nav-link">Projetos</a></li>
                    <li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li>
                    <li class="nav-item"><a href="contact.html" class="nav-link">Contato</a></li>
                    <li class="nav-item active"><a href="agendamento.php" class="nav-link">Agendamento</a></li>
                    <li class="nav-item"><a href="pesquisaajendamentos.php" class="nav-link">Consutar Agendamento</a>
                    </li>
                    <li class="nav-item"><a href="pesquisarofcinas.php" class="nav-link">Consutar Oficinas</a></li>

                </ul>
            </div>
        </div>
    </nav>
    <!-- END nav -->
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_2.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end">
                <div class="col-md-9 ftco-animate pb-5">
                    <p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.html">Home <i class="fa fa-chevron-right"></i></a></span> <span>agendamento <i class="fa fa-chevron-right"></i></span></p>
                    <h1 class="mb-0 bread">Agendameto</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col">
                    <div class="wrapper">
                        <div class="row no-gutters">
                            <div class="col d-flex">
                                <div class="contact-wrap w-100 p-md-5 p-4">
                                    <section class="ftco-appointment ftco-section ftco-no-pt ftco-no-pb img" style="background-image: url(images/bg_3.jpg);">
                                        <div class="overlay"></div>
                                        <div class="container">
                                            <div class="row d-md-flex justify-content-end">
                                                <div class="col-md-12 col-lg-6 half p-3 py-5 pl-lg-5 ftco-animate heading-section heading-section-white">
                                                    <span class="subheading">>
                                                        <h3>Agendar um um Horário</h3>
                                                    </span>
                                                    <form method="POST">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <input type="=text" class="form-control" placeholder="CPF" name="cpf">
                                                                </div>
                                                            </div>

                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <div class="input-wrap">
                                                                        <input type="text" class="form-control " placeholder="Nome" name="nome">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <input type="text" class="form-control" placeholder="Placa do veiculo" name="placa">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <div class="input-wrap">
                                                                        <div class="icon"><span class="fa fa-clock-o"></span></div>
                                                                            <select class="form-control"  name="horario">
                                                                                <option>07:00</option>
                                                                                <option>08:00</option>
                                                                                <option>09:00</option>
                                                                                <option>10:00</option>
                                                                                <option>11:00</option>
                                                                                <option>12:00</option>
                                                                                <option>13:00</option>
                                                                                <option>14:00</option>
                                                                                <option>15:00</option>
                                                                                <option>16:00</option>
                                                                                <option>17:00</option>
                                                                            </select>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <div class="icon"><span class="fa fa-calendar"></span></div>
                                                                    <input type="text" class="form-control " placeholder="Data" name="data">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="form-group">

                                                                    <input type="text" class="form-control " placeholder="Codigo oficina" name="cod_ofi">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <input type="submit" value="Agendar" class="btn btn-dark py-3 px-4">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <?php
                                    $horarios = array("07:00", "08:00", "09:00", "10:00", "11:00", "12:00", "13:00", "14:00", "15:00", "16:00", "17:00");
                                    $situacao = array("Livre", "Livre", "Livre", "Livre", "Livre", "Livre", "Livre", "Livre", "Livre", "Livre", "Livre");
                                    $nome = filter_input(INPUT_POST, "nome");
                                    $cpf = filter_input(INPUT_POST, "cpf");
                                    $placa = filter_input(INPUT_POST, "placa");
                                    $data = filter_input(INPUT_POST, "data");
                                    $horario = filter_input(INPUT_POST, "horario");
                                    $cod_ofi = filter_input(INPUT_POST, "cod_ofi");
                                    $livre = 1;
                                    $objDadosP = new Agendamento();
                                    $dadosP = $objDadosP->getHorarios($data, $cod_ofi);
                                    if ($horario != 0) {
                                        while ($registro = mysqli_fetch_array($dadosP)) {
                                            $h = $registro['horario'];
                                            for ($i = 0; $i < 11; $i++) {
                                                if ($h == $horario) {
                                                    $livre = 0;
                                                }
                                                if ($h == $horarios[$i]) {
                                                    $situacao[$i] = "Ocupado";
                                                }
                                            }
                                        }
                                        if ($livre == 0) {
                                            echo '<div class="container">';
                                            echo '<div class="row">';
                                            echo '<div class="col">';
                                            echo "<h2>Estes Horario esta ocupado, favor optar por um comfrome tabela abaixo ou outra data ou oficina.</h2><br><br>";
                                            echo '</div>';
                                            echo '</div>';
                                            echo '<div class="row">';
                                            echo '<div class="col-2">';
                                            echo '<ul class="list-group">';
                                            echo '<li class="list-group-item active" aria-current="true""><center>Horario</center></li>';
                                            echo '</ul>';
                                            echo '</div>';
                                            echo '<div class=" col-2">';
                                            echo '<ul class="list-group">';
                                            echo '<li class="list-group-item active" aria-current="true""><center>Situação</center></li>';
                                            echo '</ul>';
                                            echo '</div>';
                                            echo '</div>';
                                            for ($i = 0; $i < 11; $i++) {
                                                echo '<div class=" row">';
                                                echo '<div class="col-2">';
                                                echo '<ul class="list-group">';
                                                echo '<li class="list-group-item "><center>' . $horarios[$i] . '</center></li>';
                                                echo '</ul>';
                                                echo '</div>';
                                                echo '<div class="col-2">';
                                                echo '<ul class="list-group">';
                                                echo '<li class="list-group-item "><center>' . $situacao[$i] . '</center></li>';
                                                echo '</ul>';
                                                echo '</div>';
                                                echo '</div>';
                                            }
                                            echo '</div>';
                                        } else if ($livre == 1) {
                                            $dadosP = $objDadosP->agendar($cpf, $nome, $data, $placa, $horario, $cod_ofi);
                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div id="map" class="map"></div>
        </div>

    </section>

    <footer class="footer ftco-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-6 col-lg">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="logo"><a href="#">Preventive car<span>.</span></a></h2>
                        <p>Valorize o carro que você tem, pois ele é o resultado das suas batalhas para conquista-lo!
                        </p>
                        <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-4">
                            <li class="ftco-animate"><a href="#"><span class="fa fa-twitter"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="fa fa-facebook"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="fa fa-instagram"></span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg">
                    <div class="ftco-footer-widget mb-4 ml-md-5">
                        <h2 class="ftco-heading-2">Serviços</h2>
                        <ul class="list-unstyled">
                            <li><a href="#" class="py-1 d-block"><span class="fa fa-check mr-3"></span>Troca de Oléo</a>
                            </li>
                            <li><a href="#" class="py-1 d-block"><span class="fa fa-check mr-3"></span>Troca de
                                    Bateria</a></li>
                            <li><a href="#" class="py-1 d-block"><span class="fa fa-check mr-3"></span>Troca de
                                    Filtro</a></li>
                            <li><a href="#" class="py-1 d-block"><span class="fa fa-check mr-3"></span>Troca de
                                    Pneus</a></li>
                            <li><a href="#" class="py-1 d-block"><span class="fa fa-check mr-3"></span>Reparo no
                                    Motor</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Contato e informações</h2>
                        <div class="block-23 mb-3">
                            <ul>
                                <li><span class="icon fa fa-map-marker"></span><span class="text">Rua Goitacazes, 76 -
                                        Centro - Belo Horizonte - MG</span></li>
                                <li><a href="#"><span class="icon fa fa-phone"></span><span class="text">(31)
                                            999997-7700 </span></a></li>
                                <li><a href="#"><span class="icon fa fa-paper-plane"></span><span class="text">contato@preventivecar.com.br</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Horário Comercial</h2>
                        <div class="opening-hours">
                            <h4>Dias de funcionamento:</h4>
                            <p class="pl-3">
                                <span>Segunda-feira – Sexta-feira : 9:00 as 18:00</span>
                                <span>Sabado: 9:00 as 14:00</span>
                            </p>
                            <h4>Fechado:</h4>
                            <p class="pl-3">
                                <span>Aos Domingos</span>
                                <span>e feriados Nacionais</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">

                    <p>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;
                        <script>
                            document.write(new Date().getFullYear());
                        </script>Todos os direitos reservados | Este
                        modelo é feito por Preventive Car
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" />
        </svg></div>

    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/jquery.timepicker.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/scrollax.min.js"></script>
    <script src="js/google-map.js"></script>
    <script src="js/main.js"></script>

</body>

</html>