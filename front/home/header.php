<body onload="hideTotal()">
    <div id="preloader">
        <div id="status">
            <img src="img/logo.png" alt="" />
        </div>
    </div>

    <!-- MAIN WRAPPER
        ============================================= -->
    <div id="main-wrapper" class="clearfix">

        <!-- HEADER
            ============================================= -->
        <header id="header" class="clearfix">
            <div class="site-header">
                <div class="container">
                    <div class="row">
                        <div class="top-header clearfix">
                            <div class="logo col-md-4">
                                <a href="index.php">
                                    <img src="img/logo.png" alt="" width="210px" />
                                </a>
                            </div>

                            <div class="info col-md-8">
                                <ul>
                                    <li>
                                        <i class="fa fa-clock-o"></i>
                                        <p>
                                            <span class="heading">Les horaires disponsibles</span>
                                            <span>LUN - Sam: 09.00 - 17.00</span>
                                        </p>
                                    </li>
                                    <li>
                                        <i class="fa fa-phone"></i>
                                        <p>
                                            <span class="heading">contactez-nous</span>
                                            <span>(212) 601020300</span>
                                        </p>
                                    </li>
                                    <li class="last">
                                        <i class="fa fa-envelope"></i>
                                        <p>
                                            <span class="heading">Email</span>
                                            <span>DELIVERYLINE@gmail.com</span>
                                        </p>
                                    </li>
                                </ul>
                            </div>

                            <div class="slide-buttons">
                                <button id="slide-buttons" class="slide-button icon icon-navicon"></button>
                            </div>
                        </div>

                        <div class="navigation">
                            <div class="main-menu">
                                <ul class="menu">
                                    <li class="has-sub"><a href="index.php">accueil</a>

                                    </li>
                                    <li><a href="?page=aPropos">A propos</a></li>
                                    <li class="has-sub"><a href="#services">Services</a>

                                    </li>
                                    <li><a href="?page=contact">Contactez-nous</a></li>
                                </ul>

                                <div class="right-section">
                                    <div class="search">
                                        <!-- Button trigger modal -->                                    
                                        <?php
                                        if (verfiSession()) {
                                            require("front/home/connected.php");
                                        } else {
                                            require("front/home/notConnected.php");
                                        }
                                        ?>
                                    </div>
                                    <div class="quote-link">
                                        <a href="#devis">Demandez un devis</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Menu Mobile
                ============================================= -->
            <nav id="c-menu--slide-right" class="c-menu c-menu--slide-right">
                <button class="c-menu__close icon icon-close"></button>

                <div class="search-input">
                    <input type="text" name="s" placeholder="Type some text in here..." class="untouched">
                    <button><i class="fa fa-search"></i></button>
                </div>

                <ul class="slide-menu-items">
                    <li class="has-sub"><a href="index.php">accueil</a>

                    </li>
                    <li><a href="#!">A propos</a></li>
                    <li class="has-sub"><a href="#!">Services</a>

                    </li>
                    <li><a href="#!">Blog</a></li>
                    <li><a href="#!">Contact</a></li>
                </ul>


            </nav>

            <div id="slide-overlay" class="slide-overlay"></div>
            <!-- Menu Mobile End -->
        </header>
        <!-- HEADER END -->







        <!-- Modal -->
        <div class="modal fade" id="basicExampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <!-- Default form login -->
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6 ">
                                    <div class="panel panel-login" style="margin-right: 15px; margin-top: 29px;">
                                        <div class="panel-heading">
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <a href="#" class="active" id="login-form-link">Login</a>
                                                </div>
                                                <div class="col-xs-6">
                                                    <a href="#" id="register-form-link">Register</a>
                                                </div>
                                            </div>
                                            <hr>
                                        </div>
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <form id="login-form" action="index.php" method="post" role="form"
                                                        style="display: block;">
                                                        <div class="form-group">
                                                            <input type="text" name="userNameConnexion" id="username"
                                                                tabindex="1" class="form-control" placeholder="Username"
                                                                value="">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="password" name="passwordConnexion"
                                                                id="password" tabindex="2" class="form-control"
                                                                placeholder="Password">
                                                        </div>

                                                        <div class="form-group">
                                                            <div class="row">
                                                                <div class="col-sm-6 col-sm-offset-3">
                                                                    <button type="submit"
                                                                        id="login-submit" tabindex="4"
                                                                        class="form-control btn btn-login">Log In
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <div class="col-lg-12">
                                                                    <div class="text-center">
                                                                        <a href="https://phpoll.com/recover"
                                                                            tabindex="5" class="forgot-password">Forgot
                                                                            Password?</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <?php
                                                        if (isset($erreurConnexion)) {
                                                            ?>
                                                            <div class="alert alert-danger">
                                                                Erreur de connexion !!!!
                                                            </div>

                                                            <?php
                                                        }
                                                        ?>
                                                    </form>
                                                    <form id="register-form"
                                                        action="#!" method="post"
                                                        role="form" style="display: none;">
                                                        <div class="form-group">
                                                            <input type="text" name="username" id="username"
                                                                tabindex="1" class="form-control" placeholder="Username"
                                                                value="">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="email" name="email" id="email" tabindex="1"
                                                                class="form-control" placeholder="Email Address"
                                                                value="">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="password" name="password" id="password"
                                                                tabindex="2" class="form-control"
                                                                placeholder="Password">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="password" name="confirm-password"
                                                                id="confirm-password" tabindex="2" class="form-control"
                                                                placeholder="Confirm Password">
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <div class="col-sm-6 col-sm-offset-3">
                                                                    <button type="submit" name="register-submit"
                                                                        id="register-submit" tabindex="4"
                                                                        class="form-control btn btn-register"
                                                                        >Register Now
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Default form login -->
                    </div>
                </div>
            </div>
        </div>







        <style>
            .panel-login {
                border-color: #ccc;
                -webkit-box-shadow: 0px 2px 3px 0px rgba(0, 0, 0, 0.2);
                -moz-box-shadow: 0px 2px 3px 0px rgba(0, 0, 0, 0.2);
                box-shadow: 0px 2px 3px 0px rgba(0, 0, 0, 0.2);
            }

            .panel-login>.panel-heading {
                color: #00415d;
                background-color: #fff;
                border-color: #fff;
                text-align: center;
            }

            .panel-login>.panel-heading a {
                text-decoration: none;
                color: #666;
                font-weight: bold;
                font-size: 15px;
                -webkit-transition: all 0.1s linear;
                -moz-transition: all 0.1s linear;
                transition: all 0.1s linear;
            }

            .panel-login>.panel-heading a.active {
                color: #be1622;
                font-size: 18px;
            }

            .panel-login>.panel-heading hr {
                margin-right: 15px;
                margin-top: 10px;
                clear: both;
                border: 0;
                height: 1px;
                background-image: -webkit-linear-gradient(left, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.15), rgba(0, 0, 0, 0));
                background-image: -moz-linear-gradient(left, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.15), rgba(0, 0, 0, 0));
                background-image: -ms-linear-gradient(left, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.15), rgba(0, 0, 0, 0));
                background-image: -o-linear-gradient(left, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.15), rgba(0, 0, 0, 0));
            }

            .panel-login input[type="text"],
            .panel-login input[type="email"],
            .panel-login input[type="password"] {
                height: 45px;
                border: 1px solid #ddd;
                font-size: 16px;
                -webkit-transition: all 0.1s linear;
                -moz-transition: all 0.1s linear;
                transition: all 0.1s linear;
            }

            .panel-login input:hover,
            .panel-login input:focus {
                outline: none;
                -webkit-box-shadow: none;
                -moz-box-shadow: none;
                box-shadow: none;
                border-color: #ccc;
            }

            .btn-login {
                background-color: #59B2E0;
                outline: none;
                color: #fff;
                font-size: 14px;
                height: auto;
                font-weight: normal;
                padding: 14px 0;
                text-transform: uppercase;
                border-color: #59B2E6;
            }

            .btn-login:hover,
            .btn-login:focus {
                color: #fff;
                background-color: #be1622;
                border-color: #be1622;
            }

            .forgot-password {
                text-decoration: underline;
                color: #888;
            }

            .forgot-password:hover,
            .forgot-password:focus {
                text-decoration: underline;
                color: #666;
            }

            .btn-register {
                background-color: #1CB94E;
                outline: none;
                color: #fff;
                font-size: 14px;
                height: auto;
                font-weight: normal;
                padding: 14px 0;
                text-transform: uppercase;
                border-color: #1CB94A;
            }

            .btn-register:hover,
            .btn-register:focus {
                color: #fff;
                background-color: #1CA347;
                border-color: #1CA347;
            }
        </style>