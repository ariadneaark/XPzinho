<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Cadastre-se</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="assets/images/icon/favicon.ico">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/metisMenu.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.min.css">
    <!-- amchart css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <!-- others css -->
    <link rel="stylesheet" href="assets/css/typography.css">
    <link rel="stylesheet" href="assets/css/default-css.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <!-- modernizr css -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    <?php
        $menu = "home";
        include("caminho/menu.php");
    ?>
    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->
    <!-- login area start -->
    <div class="login-area login-bg" style="margin-top: -13px;">
        <div class="container-fluid p-0">
            <div class="row no-gutters">
                <div class="col-xl-4 offset-xl-8 col-lg-6 offset-lg-6" style="margin-left: 0px;">
                    <div class="login-box-s2 ptb">
                        <form>
                            <div class="login-form-head">
                                <img src="assets/images/negocio/xp-investimentos-logo.png" alt="XP Investimentos" width="250">
                                <br><br><br>
                                <h4>INSCREVER-SE</h4>
                                <p>Olá, Inscreva-se e junte-se a nós</p>
                            </div>
                            <div class="login-form-body">
                                <div class="form-gp">
                                    <label for="exampleInputName1">Nome Completo</label>
                                    <input type="text" id="exampleInputName1" style="background: transparent !important;">
                                </div>
                                <div class="form-gp">
                                    <label for="exampleInputSearch1">CPF</label>
                                    <input type="cpf" id="exampleInputCPF" style="background: transparent !important;">
                                </div>
                                <div class="form-gp">
                                    <label for="exampleInputPassword1">Senha</label>
                                    <input type="password" id="exampleInputPassword1" style="background: transparent !important;">
                                </div>
                                <div class="form-gp">
                                    <label for="exampleInputPassword2">Confirme sua senha</label>
                                    <input type="password" id="exampleInputPassword2" style="background: transparent !important;">
                                </div>
                                <div class="submit-btn-area">
                                    <a id="form_submit" class="btn" style="background:#ffc709; color:#fff; width:300px;" type="submit" href="processo1.php">Entrar <i class="ti-arrow-right"></i></a>
                                    <br><br>
                                    <p style="color: #fff">OU</p>
                                    <br>
                                    <div class="login-other">
                                        <div class="col-12">
                                            <a type="submit" href="processo1.php" style="background-color: #fff; background: #0073b5; color: #fff; margin-left:20px;">Entrar<i class="fa fa-linkedin"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-footer text-center mt-5">
                                    <p class="text-muted">Já tem conta? <a href="processo1.php">Logar</a></p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- login area end -->

    <!-- jquery latest version -->
    <script src="assets/js/vendor/jquery-2.2.4.min.js"></script>
    <!-- bootstrap 4 js -->
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/metisMenu.min.js"></script>
    <script src="assets/js/jquery.slimscroll.min.js"></script>
    <script src="assets/js/jquery.slicknav.min.js"></script>
    
    <!-- others plugins -->
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/scripts.js"></script>
</body>

</html>