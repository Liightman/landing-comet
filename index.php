<!DOCTYPE html>
    <html lang="fr">
        <head>
            <meta charset="UTF-8">

            <meta name="description" content="Comet, une solution simple et transparente pour vous faciliter la vie."/>
            <meta name="author" content="Llyam Garcia, Comet Yolo"/>
            <meta name="keywords" content="Comet"/>
            <meta name="viewport" content="width=device-width, initial-scale=1"/>
            <meta name="google-site-verification" content="tyyUOHqUeawLMCeyfRLjWDuO75EMRT_q1PHaeIS2FJY"/>

            <link rel="icon" type="image/x-icon" href="https://s3.eu-west-2.amazonaws.com/comet-assets/CO_yellow.png"
                  sizes="32x32">
            <link rel="shortcut icon" type="image/x-icon" href="https://s3.eu-west-2.amazonaws.com/comet-assets/CO_yellow.png">

            <title>comet</title>
            <!-- meta facebook -->
            <meta property="og:type" content="website"/>
            <meta property="og:title" content="comet - la nouvelle manière de travailler tech/data">
            <meta property="og:description"
                  content="comet connecte les meilleurs freelances tech/data avec les entreprises les plus innovantes."/>
            <meta property="og:image" content="https://s3.eu-west-2.amazonaws.com/comet-assets/facebook_thumbnail.png"/>
            <meta property="og:url" content="https://www.hellocomet.co" />

            <link href="assets/css/comet.min.css" rel="stylesheet" type="text/css"
            <style>
                * { box-sizing: border-box; }
                html { font-family: sans-serif; text-size-adjust: 100%; font-size: 10px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); height: 100%; }
                html, body { height: 100%; overflow: hidden; }
                .alert { padding: 15px; margin-bottom: 20px; border: 1px solid transparent; border-radius: 4px; }
                .alert-dismissable, .alert-dismissible { padding-right: 35px; }
                .alerty { background: black; color: white; font-size: 1.8rem; font-family: NiveauGrotesk; border-radius: 0px !important; }
                button, input, optgroup, select, textarea { margin: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; color: inherit; }
                button { overflow: visible; }
                button, select { text-transform: none; }
                button, html input[type="button"], input[type="reset"], input[type="submit"] { -webkit-appearance: button; cursor: pointer; }
                button, input, select, textarea { font-family: inherit; font-size: inherit; line-height: inherit; }
                .close { float: right; font-size: 21px; font-weight: 700; line-height: 1; color: white; text-shadow: rgb(255, 255, 255) 0px 1px 0px; opacity: 1; }
                button.close { -webkit-appearance: none; padding: 0px; cursor: pointer; background: 0px 0px; border: 0px; }
                .alert-dismissable .close, .alert-dismissible .close { position: relative; top: -2px; right: -21px; color: inherit; }
                .container { padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto; width: 1570px; }
                .col-lg-1, .col-lg-10, .col-lg-11, .col-lg-12, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-md-1, .col-md-10, .col-md-11, .col-md-12, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-sm-1, .col-sm-10, .col-sm-11, .col-sm-12, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-xs-1, .col-xs-10, .col-xs-11, .col-xs-12, .col-xs-2, .col-xs-3, .col-xs-4, .col-xs-5, .col-xs-6, .col-xs-7, .col-xs-8, .col-xs-9 { position: relative; min-height: 1px; padding-right: 15px; padding-left: 15px; }
                .col-xs-1, .col-xs-10, .col-xs-11, .col-xs-12, .col-xs-2, .col-xs-3, .col-xs-4, .col-xs-5, .col-xs-6, .col-xs-7, .col-xs-8, .col-xs-9 { float: left; }
                .col-xs-12 { width: 100%; }
                b, strong { font-weight: 700; }
                .alerty b { font-family: NiveauGroteskBold; letter-spacing: 1px; }
                a { background-color: transparent; color: rgb(51, 122, 183); text-decoration: none; }
                .alerty strong { color: rgb(255, 255, 82); letter-spacing: 1px; padding: 0.4rem 0rem; border-bottom: 2px solid rgb(255, 255, 82); }
                body { margin: 0px; font-family: "Helvetica Neue", Helvetica, Arial, sans-serif; font-size: 14px; line-height: 1.42857; color: rgb(51, 51, 51); background-color: rgb(255, 255, 255); height: 100vh; }
                #background-landing { background-image: url("../../assets/images/svg/satellite.svg"), url("../../assets/images/svg/rocket.svg"), url("../../assets/images/svg/galaxy.svg"), url("../../assets/images/svg/background.svg"), linear-gradient(rgb(88, 150, 236), rgb(88, 150, 236)); background-repeat: no-repeat; background-position: 65% 85%, right 86%, 90% 2%, center bottom, center 100%; background-size: auto, auto, auto, auto, 100% 8%; }
                .clicks1 { position: absolute; right: 10rem; font-family: NiveauGroteskBold, serif; font-size: 1.5rem; font-weight: bold; color: white; }
                .clicks { position: absolute; right: 10rem; font-family: NiveauGroteskBold, serif; font-size: 1.5rem; font-weight: bold; color: rgb(0, 0, 0); }
                img { border: 0px; vertical-align: middle; }
                .col-lg-1, .col-lg-10, .col-lg-11, .col-lg-12, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9 { float: left; }
                .col-lg-6 { width: 50%; }
                .logo { width: 23rem; height: 6rem; object-fit: contain; margin-top: 1rem; }
                .h1, .h2, .h3, .h4, .h5, .h6, h1, h2, h3, h4, h5, h6 { font-family: inherit; font-weight: 500; line-height: 1.1; color: inherit; }
                .h1, .h2, .h3, h1, h2, h3 { margin-top: 20px; margin-bottom: 10px; }
                .h2, h2 { font-size: 30px; }
                .col-lg-8 { width: 66.6667%; }
                #we-are-comet { font-family: NiveauGroteskBold, serif; font-size: 5.5rem; font-weight: bold; line-height: 1.02; text-align: left; color: rgb(0, 0, 0); margin-top: 5rem; margin-left: 1rem; }
                .col-lg-12 { width: 100%; }
                .we-are-comet-separator { width: 2em; height: 0.5rem; object-fit: contain; border: 2px solid rgb(255, 255, 82); }
                .col-sm-1, .col-sm-10, .col-sm-11, .col-sm-12, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9 { float: left; }
                .col-sm-12 { width: 100%; }
                .col-md-1, .col-md-10, .col-md-11, .col-md-12, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9 { float: left; }
                .col-md-8 { width: 66.6667%; }
                #presentation { font-family: NiveauGrotesk, serif; font-size: 1.8rem; font-weight: 300; line-height: 1.33; letter-spacing: 0.7px; text-align: left; color: rgb(0, 0, 0); margin-top: 1rem; margin-left: 1rem; }
                .h3, h3 { font-size: 24px; }
                #callActions { margin-top: 3%; }
                .col-lg-5 { width: 41.6667%; }
                .astronaut { width: 36px; height: 47px; object-fit: contain; }
                .center { display: table; margin: 0px auto; }
                .destination { padding: 1rem 0rem; }
                #freelances-text { height: 43px; font-family: NiveauGroteskBold, serif; font-size: 37px; font-weight: bold; letter-spacing: 0.2px; text-align: center; color: rgb(7, 15, 23); margin: auto; }
                .btn { display: inline-block; padding: 6px 12px; margin-bottom: 0px; font-size: 14px; font-weight: 400; line-height: 1.42857; text-align: center; white-space: nowrap; vertical-align: middle; touch-action: manipulation; cursor: pointer; user-select: none; background-image: none; border: 1px solid transparent; border-radius: 4px; }
                #freelancesActionButton { height: 49.7px; background-color: rgb(255, 255, 82); opacity: 0.8; border-radius: 0px !important; }
                #freelancesActionButton > span { width: 150px; height: 19px; font-family: NiveauGroteskBold, serif; font-size: 16px; letter-spacing: 0.6px; text-align: left; color: rgb(20, 20, 20); text-transform: uppercase; }
                .leftArrow { width: 14px; height: 11px; object-fit: contain; position: absolute; margin-left: 10px; margin-top: 5px; }
                hr { height: 0px; box-sizing: content-box; margin-top: 20px; margin-bottom: 20px; border-width: 1px 0px 0px; border-right-style: initial; border-bottom-style: initial; border-left-style: initial; border-right-color: initial; border-bottom-color: initial; border-left-color: initial; border-image: initial; border-top-style: solid; border-top-color: rgb(238, 238, 238); }
                .col-md-11 { width: 91.6667%; }
                .hidden-lg { display: none !important; }
                .planet { width: 61px; height: 50px; object-fit: contain; }
                #business-text { height: 43px; font-family: NiveauGroteskbold, serif; font-size: 37px; letter-spacing: 0.2px; text-align: center; color: rgb(7, 15, 23); margin: auto; }
                #businessActionButton { height: 49.7px; background-color: rgb(255, 199, 147); margin-top: -0.3rem; z-index: 1; opacity: 0.8; border-radius: 0px !important; }
                #businessActionButton > span { width: 150px; height: 19px; font-family: NiveauGroteskBold, serif; font-size: 16px; font-weight: bold; letter-spacing: 0.6px; text-align: left; color: rgb(20, 20, 20); text-transform: uppercase; }
            </style>
        </head>


        <body id="background-landing">

            <a class="clicks1" target="_blank"
               href="https://s3.eu-west-2.amazonaws.com/comet-assets/Comet_Mentions+L%C3%A9gales.pdf" id="mention"
               style="bottom: 2rem;">MENTIONS LÉGALES</a>
            <a class="clicks" target="_blank" href="https://app.hellocomet.co/connexion_free" style="top: 3rem">
                <img src="assets/images/svg/Fichier1.svg" style="height:30px">
                CONNEXION </a>

            <div>
                <div class="container first-container" style="margin-top: 2rem;">
                    <div class="col-lg-6">
                        <img src="assets/images/svg/logo.svg" alt="Comet" class="logo">
                    </div>
                </div>


                <div class="container" style="padding-bottom: 6rem">
                    <h2 id="we-are-comet" class="col-lg-8">Nous sommes <b><u>comet</u></b>,
                        <br>la nouvelle manière
                        <br>de travailler en tech/data
                    </h2>

                    <div class="col-lg-12">
                        <img src="assets/images/svg/we-are-separator.svg" alt="separator" class="we-are-comet-separator">
                    </div>

                    <div id="presentation" class="col-xs-12 col-sm-12 col-md-8 col-lg-6">
                        <h3>
                            <b><u>comet</u></b> connecte les meilleurs freelances tech/data avec les entreprises les plus
                            innovantes.
                        </h3>
                    </div>

                    <div id="callActions" class="col-lg-8">
                        <div class="col-xs-12 col-sm-12 col-lg-5">
                            <div>
                                <img src="assets/images/svg/astronaut.svg" alt="Freelances" class="astronaut center hidden-xs">
                                <div id="freelances-text" class="center destination col-xs-12 col-sm-12 col-lg-12">Freelances</div>
                            </div>
                            <button id="freelancesActionButton" name="Freelance_Landing_Button"
                                    class="cta-button btn col-xs-12 col-sm-12 col-lg-12 center">
                                    <span class="center">
                                        Rejoindre Comet
                                        <img src="assets/images/left-arrow.png" alt="Rejoindre Comet" class="leftArrow">
                                    </span>
                            </button>
                        </div>
                        <hr class="hidden-lg col-xs-12 col-md-11">
                        <div class="col-xs-12 col-sm-12 col-lg-5">
                            <img src="assets/images/svg/planet.svg" alt="Freelances" class="planet center hidden-xs">
                            <div id="business-text" class="col-xs-12 destination col-sm-12 col-lg-12 center">Entreprises</div>
                            <button id="businessActionButton" name="Entreprise_Landing_Button"
                                    class="cta-button btn col-xs-12 col-sm-12 col-lg-12 center">
                                    <span class="center">
                                        Trouver un freelance
                                        <img src="assets/images/left-arrow.png" alt="Trouver un freelance" class="leftArrow">
                                    </span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div id="toexport" class="hidden">
                <!-- hidden -->
                <div class="alert alerty alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    <div class="container">
                        <div class=col-xs-12>
                            <span id="us" style="padding-left:2rem">skillee</span> décolle et devient <b><u>comet</u></b>. Découvrez
                            pourquoi dans <a target="_blank"
                                             href="https://newsroom.hellocomet.co/from-skillee-to-comet-814ca0b98657"> <strong>cet
                                    article.</strong></a>
                        </div>
                    </div>
                </div>
            </div>

            <script defer
                    src="https://code.jquery.com/jquery-3.2.1.min.js"
                    integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
                    crossorigin="anonymous"></script>
            <script defer src="assets/js/bootstrap.min.js" type="text/javascript"></script>
            <script defer src="assets/js/index.js" type="text/javascript"></script>
        </body>
    </html>